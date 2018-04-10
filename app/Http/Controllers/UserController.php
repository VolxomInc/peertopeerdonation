<?php
namespace App\Http\Controllers;

use App\Http\Libraries\Utilities;
use App\Models\UserVerificationCode;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Auth;
use Cookie;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    //sign up function which is dealing to register
    public function storeUser(SignUpRequest $request)
    {
        $referred_by = Cookie::get('referral');
        $data = $request->all();
        $data['user_name'] = $request->user_name;
        $data['email'] = $request->email;
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
        $data['affiliate_id'] = str_random(10);
        $data['referred_by'] = $referred_by;

        $user = new User($data);
        $user->save();
        $credentials = array(
            'email' => $data['email'],
            'password' => $request->password
        );

        $code = rand(1000,9999);
        $user_code = array(
            "code" => $code,
            "attempts" => 0,
            "user_id" => $user->user_id
        );

        $verification_code = new UserVerificationCode($user_code);
        $verification_code->save();

        if (\Auth::attempt($credentials)) {
            Utilities::sendEmail('EmailFormats.WelcomeEmail',['user' => 'Peer to Peer Donation', 'display_name' => Auth::User()->user_name,'verification_code'=>$code], Auth::user()->email, 'Dear ' . Auth::User()->user_name,'Your New Peer to Peer Donation Account');
            return redirect("/verification_code");
        } else {
            redirect()->back()->with('message', 'Please try again');
        }
    }
}
