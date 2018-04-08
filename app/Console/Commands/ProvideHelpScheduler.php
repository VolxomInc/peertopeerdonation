<?php

namespace App\Console\Commands;

use App\Http\Libraries\Utilities;
use App\Models\Commitment;
use App\Models\GetHelp;
use App\Models\ProvideHelp;
use App\Models\TransactionDetails;
use App\Models\UserMessages;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Laravel\Socialite\One\User;

class ProvideHelpScheduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'provide-help-scheduler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scheduling provide help.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $commitments = Commitment::get();
        foreach($commitments as $commitment){
            $difference = time() - strtotime($commitment->created_at);
            if($difference >= 86400)
            {
                $thirtyPercent = $commitment->amount * 30/100;
                $getHelp = GetHelp::get();
                foreach($getHelp as $findUser){
                    if($thirtyPercent == $findUser->amount_needed && $findUser->identifier == 1) {
                        $leftAmount = $commitment->amount - $thirtyPercent;
                        $data['user_id'] = $commitment->user_id;
                        $data['amount'] = $findUser->amount_needed;
                        $data['amount_left'] = $leftAmount;
                        $data['status'] = 0;
                        $data['assigned_member_id'] = $findUser->user_id;
                        $data['wait_provide'] = 24;
                        $current_time = Carbon::now()->toDateTimeString();
                        $data['finish_time'] = date('Y-m-d H:i:s', strtotime($current_time.' + 24 hours'));
                        $provideHelp = new ProvideHelp($data);
                        $provideHelp->save();

                        ProvideHelp::where('provider_id', $provideHelp->provider_id)->update( array('provider_new_id'=> 'PH00'.$provideHelp->provider_id));
                        Commitment::where('commitment_id', $commitment->commitment_id)->update( array('amount'=> $leftAmount, 'finish_time' => date('Y-m-d H:i:s', strtotime($commitment->finish_time.' + 24 hours'))));

                        $accountDetails = TransactionDetails::whereUserId($findUser->user_id)->get()->toArray();
                        $userGetHelp = User::whereUserId($findUser->user_id)->get()->toArray();
                        $userProvideHelp = User::whereUserId($commitment->user_id)->get()->toArray();
                        Utilities::sendEmail('EmailFormats.GetHelpEmail',['user' => 'Peer to Peer Donation', 'display_name' => $userGetHelp[0]['user_name'],'message_show' => 'You hare connected with '.$userProvideHelp[0]['user_name'].'. He\'ll help you within next 24 hours'], $userGetHelp[0]['email'], 'Dear ' . $userGetHelp[0]['user_name'],'Get Help!');
                        Utilities::sendEmail('EmailFormats.ProvideHelpEmail',['user' => 'Peer to Peer Donation', 'display_name' => $userProvideHelp[0]['user_name'],'bank_name' => $accountDetails[0]['bank_name'],'account_name' => $accountDetails[0]['account_name'],'account_number' => $accountDetails[0]['account_number'],'message_show' => "You have 24 hours to help ".$userGetHelp[0]['user_name'].". Kindly do it as soon as possible."], $userProvideHelp[0]['email'], 'Dear ' . $userProvideHelp[0]['user_name'],'Provide Help!');

                        $phData['message'] = "You have 24 hours to help ".$userGetHelp[0]['user_name'].". Kindly do it as soon as possible.";
                        $phData['provider_get_help_id'] = $provideHelp->provider_new_id;
                        $phData['user_id'] = $commitment->user_id;
                        $phMessage = new UserMessages($phData);
                        $phMessage->save();

                        $ghData['message'] = 'You hare connected with '.$userProvideHelp[0]['user_name'].'. He\'ll help you within next 24 hours';
                        $ghData['provider_get_help_id'] = $findUser->receiver_new_id;
                        $ghData['user_id'] = $findUser->user_id;
                        $ghMessage = new UserMessages($ghData);
                        $ghMessage->save();
                    }
                }
            }
        }
    }
}
