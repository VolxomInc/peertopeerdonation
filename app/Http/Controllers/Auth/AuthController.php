<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //sign up function which is dealing to register
    public function storeUser(SignUpRequest $request)
    {
        $data = $request->all();
        $data['user_name'] = $request->user_name;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        $data['country'] = $request->country;
        $data['tigo_cash'] = $request->user_name;
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
            'password' => $request->password,
            'status' => '1'
        );
        if (\Auth::attempt($credentials)) {
            return redirect("/index");
        } else {
            redirect()->back()->with('message', 'Please try again');
        }
    }
}
