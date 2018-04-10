<?php
namespace App\Http\Controllers;

use App\Http\Libraries\Utilities;
use App\Models\Commitment;
use App\Models\GetHelp;
use App\Models\ProvideHelp;
use App\Models\Tickets;
use App\Models\TransactionDetails;
use App\Models\UserMessages;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    //sign up function which is dealing to register
    public function provideUserHelp()
    {
        $request = Input::all();
        $data['user_id'] = Auth::id();
        $data['amount'] = $request['amount-input'];
        $data['phone_number'] = $request->phone_number;
        $data['currency'] = $request->currency;
        $data['tigo_cash'] = $request->tigo_cash;
        $data['mobile_money_name'] = $request->mobile_money_name;
        $data['mobile_money_number'] = $request->mobile_money_number;
        $data['bitcoin_address'] = $request->bitcoin_address;
        $data['referrer_email'] = $request->referrer_email;
        $data['manager_email'] = $request->manager_email;
        $data['password'] = bcrypt($data['password']);
        $data['role_id'] = 3;
        $data['status'] = 0;

        $phelp = new ProvideHelp($data);
        $phelp->save();

        return redirect("/user-dashboard");
    }

    public function commitmentsPool() {
        $request = Input::all();
        $data['user_id'] = Auth::id();
        $data['amount'] = $request['amount-input'];
        $current_time = Carbon::now()->toDateTimeString();
        $data['finish_time'] = date('Y-m-d H:i:s', strtotime($current_time.' + 24 hours'));

        $commitment = new Commitment($data);
        $commitment->save();

        return redirect("/user-dashboard");
    }

    public function testCommand() {
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

    public function uploadPaymentProof() {
        $data = Input::all();
        return redirect("/user-dashboard");
//        if ($data->hasFile('choosefile')) {
//            dd('here');
//            $data['picture'] = Utilities::uploadPaymentOfProof($data);
//        }
    }

    public function userDashboard() {
        $users = User::pluck('user_name', 'user_id');
        $commitments = Commitment::where('user_id',Auth::id())->get();
        $phHelps = ProvideHelp::where('user_id',Auth::id())->get();
        $messages = UserMessages::get();
        $transactionDetails = TransactionDetails::get();
        return view('userdashboard')->with('commitments', $commitments)->with('phHelps',$phHelps)->with('users',$users)->with('messages',$messages)->with('transactionDetails',$transactionDetails);
    }

    public function getPhHistory() {
        $users = User::pluck('user_name', 'user_id');
        $phHelps = ProvideHelp::where('user_id',Auth::id())->get();
        return view('provide_help_history')->with('phHelps',$phHelps)->with('users',$users);
    }

    public function getCommitments() {
        $users = User::pluck('user_name', 'user_id');
        $commitments = Commitment::where('user_id',Auth::id())->get();
        return view('commitment')->with('commitments', $commitments)->with('users',$users);
    }

    public function profileSettings(){
        $userData = User::where('user_id',Auth::id())->get();
        return view('profile_settings')->with('userData',$userData);
    }

    public function supportDonation() {
        $ticketData = Tickets::where('user_id',Auth::id())->get();
        return view('support_donation')->with('ticketData',$ticketData);
    }
}
