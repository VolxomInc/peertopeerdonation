<?php

namespace App\Http\Controllers\Auth;

use App\Models\Commitment;
use App\Models\ProvideHelp;
use App\Models\TransactionDetails;
use App\Models\UserMessages;
use App\Models\UserVerificationCode;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\Exceptions;
use App\Helpers\Frontend\Auth\Socialite;
use App\Events\Auth\UserLoggedIn;
use App\Events\Auth\UserLoggedOut;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Input;

/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login
     * @return string
     */

    public function redirectPath()
    {
        return route('auth.userdashboard');
    }

    public function openDashboard() {
        return redirect("/user-dashboard");
    }

    public function openLoginDashboard() {
        $users = User::pluck('user_name', 'user_id');
        $commitments = Commitment::where('user_id',Auth::id())->get();
        $phHelps = ProvideHelp::where('user_id',Auth::id())->get();
        $messages = UserMessages::get();
        $transactionDetails = TransactionDetails::get();
        return view('userdashboard')->with('commitments', $commitments)->with('phHelps',$phHelps)->with('users',$users)->with('messages',$messages)->with('transactionDetails',$transactionDetails);
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('frontend.auth.login')
            ->withSocialiteLinks((new Socialite)->getSocialLinks());
    }

    /**
     * @param Request $request
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws GeneralException
     */

    protected function authenticated(Request $request, $user)
    {
        /**
         * Check to see if the users account is confirmed and active
         */
        event(new UserLoggedIn($user));
        return redirect()->intended($this->redirectPath());
    }

    /**
     * Log the user out of the application.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        /**
         * Boilerplate needed logic
         */

        /**
         * Remove the socialite session variable if exists
         */
        if (app('session')->has(config('access.socialite_session_name'))) {
            app('session')->forget(config('access.socialite_session_name'));
        }

        /**
         * Remove any session data from backend
         */
        app()->make(Auth::class)->flushTempSession();

        /**
         * Fire event, Log out user, Redirect
         */
        event(new UserLoggedOut($this->guard()->user()));

        /**
         * Laravel specific logic
         */
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    public function logoutAs() {
        //If for some reason route is getting hit without someone already logged in
        if (!\Auth::user()) {
            return redirect()->route("sign-in");
        }

        //If admin id is set, relogin
        if (session()->has("admin_user_id") && session()->has("temp_user_id")) {
            //Save admin id
            $admin_id = session()->get("admin_user_id");

            app()->make(\Auth::class)->flushTempSession();

            //Re-login admin
            access()->loginUsingId((int)$admin_id);

            //Redirect to backend user page
            return redirect()->route("admin.access.user.index");
        } else {

            \Auth::logout();

            //Otherwise logout and redirect to login
            return redirect()->route("sign-in");
        }
    }

    public function redirectToProvider()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = \Socialite::driver('facebook')->user();
        }catch(\Exception $e) {
            return redirect('/')->with('message', "Something went wrong, please try again later...");
        }

        $authUser = $this->findOrCreateUser($user);
        \Auth::Login($authUser, true);

        if(count($authUser->roles) == 0){
            $category = '';
        } else {
            $category = $authUser->roles[0]->name;
        }

        if ($category === "Real Estate or Business" && $authUser->status === 1) {
            return redirect('/agent/home')->with('message', 'Login successful with Facebook');
        } elseif ($category === "Individual" && $authUser->status === 1) {
            return redirect('/individual/home')->with('message', 'Login successful with Facebook');
        } else {
            return redirect('fbcategory');
        }
    }

    private function findOrCreateUser($FBUser)
    {
        if ($authUser = User::with('roles')->where('facebook_id', $FBUser->id)->where('status','1')->orderBy('created_at', 'desc')->first()) {
            return $authUser;
        } else if ($authUser = User::with('roles')->where('email', $FBUser->email)->where('status','1')->orderBy('created_at', 'desc')->first()) {
            return $authUser;
        } else {
            $name = array(explode(" ", $FBUser->name));
            $arraylength = sizeof($name[0]);
            $first_name="";
            $last_name="";
            if($arraylength==1){
                $first_name = $name[0][$arraylength - 1];
                $last_name="";
            }else{
                $last_name = $name[0][$arraylength - 1];
                $first_name = "";

                for ($i = 0; $i < $arraylength - 1; $i++) {

                    $first_name = $first_name . ' ' . $name[0][$i];
                }
            }
            $email = isset($FBUser->email) ? $FBUser->email: $FBUser->id.'@facebook.com';
            $display_name = isset($FBUser->name) ? $FBUser->name: "";

            $facebook_id =isset($FBUser->id) ? $FBUser->id: "";

            $avatar = isset($FBUser->avatar) ? $FBUser->avatar: "";

            $current = \Carbon\Carbon::now();
            $data = array(
                'display_name' => $display_name,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'facebook_id' => $facebook_id,
                'package_id' => 1,
                'status' => 1,
                'avatar' => $avatar,
                'created_at' => $current->toDateTimeString(),
                'updated_at' => $current->toDateTimeString(),
            );

            $fbUser = DB::table('users')->insert($data);

            $authUser = User::with('roles')->where('facebook_id', $FBUser->id)->where('status','1')->first();
            $roleData = array('user_id' => $authUser->user_id, 'role_id', 9);
            $role = DB::table('assigned_roles')->insert(
                ['user_id' => $authUser->user_id, 'role_id' => 9]
            );
            return $authUser;
        }
    }

    public function userVerification(){
        return view('frontend.user.userVerification');
    }

    public function verifyCode(){
        $input = Input::all();
        $verificationCode = UserVerificationCode::whereUserId(\Auth::id())->whereCode($input['code'])->first();
        if(!empty($verificationCode)) {
            User::whereUserId(\Auth::user()->user_id)->update(array("status"=>1));
            $verificationCode->delete();
            return redirect('/user-dashboard');
        }
        return array("success" => false, "message" => "Verification UnSuccessful. Your Given code is either incorrect or expired. Please try again.");
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['status' => '1']);
    }
}