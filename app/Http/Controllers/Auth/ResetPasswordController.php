<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Repositories\Access\User\UserRepository;
use App\User;
use Illuminate\Support\Facades\Password;
use Mockery\Exception;

/**
 * Class ResetPasswordController
 * @package App\Http\Controllers\Frontend\Auth
 */
class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * ChangePasswordController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Where to redirect users after resetting password
     *
     * @return string
     */
    public function redirectPath() {
        return route('sign-in');
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  string|null  $token
     * @return \Illuminate\Http\Response
     */
    public function showResetForm($token = null)
    {
        $email = $this->user->getEmailForPasswordToken($token);
        $user = User::whereEmail($email)->whereStatus(1)->first();
        if(!empty($user))
            return view('reset_confirm_password')->withToken($token)->withEmail($email);
        else
            return view('reset_confirm_password')->withToken($token)->withEmail($email)->with("statusError","Inactive Account. Please Contact Us at info@volxom.pk to reactivate your account.");

    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reset(Request $request)
    {
        $user = User::whereEmail($request->email)->whereStatus(1)->first();
        if (empty($request)) {
            return redirect()->back()->withErrors([
                'error' => 'Your account is expired please contact us at info@volxom.pk.',
            ]);
        }
        if (\Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors([
                'error' => 'This is your previous password. Please try new one.',
            ]);
        }

        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        try {
            $user->forceFill([
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ])->save();

            $this->guard()->login($user);

            $response = "passwords.reset";
        } catch (Exception $e) {
            $response = "Some error occurred while updating password. Please try again later.";
        }

        $this->guard()->login($user);

        // OLD Implementation

        /*$response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );*/

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [];
    }

    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => bcrypt($password),
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }

    /**
     * Get the response for a successful password reset.
     *
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetResponse($response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset.
     *
     * @param  \Illuminate\Http\Request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
