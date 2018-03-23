<?php
namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    //sign up function which is dealing to register
    public function storeUser(SignUpRequest $request)
    {
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

        $user = new User($data);
        $user->save();
        $credentials = array(
            'email' => $data['email'],
            'password' => $request->password
        );

        if (\Auth::attempt($credentials)) {
            return redirect("/");
        } else {
            redirect()->back()->with('message', 'Please try again');
        }
    }

    public function loginUser()
    {
        $credentials = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if (\Auth::attempt($credentials)) {
            return redirect("/");
        } else {
            redirect()->back()->with('message', 'Please try again');
        }
    }
}
