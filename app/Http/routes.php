<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web','checkReferral']], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/signup', function () {
        return view('signup');
    });

    Route::get('/about_us', function () {
        return view('about_us');
    });

    Route::get('/how_it_work', function () {
        return view('how_it_work');
    });

    Route::get('/legality', function () {
        return view('legality');
    });

    Route::get('/news_detail', function () {
        return view('news_detail');
    });

    Route::get('/news', function () {
        return view('news');
    });

    Route::get('/forget_password', function () {
        return view('forget_password');
    });

    Route::get('/sign-in', function () {
        return view('signin');
    })->name('sign-in');

    Route::post('storeUser', 'UserController@storeUser')->name('signup-user');
});

Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {

    /**
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => ['web','auth','checkReferral']], function () {
        Route::get('logout', 'LoginController@logoutAs')->name('logout');
        Route::post('verifyCode', 'LoginController@verifyCode')->name('verify-user');
        Route::get('/user-dashboard', 'LoginController@openLoginDashboard');

        Route::get('/verification_code', function () {
            return view('verification_code');
        });
        Route::post('provideHelp', 'LoginController@verifyCode')->name('provide.help');
    });

    Route::group(['middleware' => ['web','guest']], function () {
        // Authentication Routes
        Route::post('login', 'LoginController@login')->name('login');

        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
    });

    Route::group(['middleware' => 'web'], function () {
        Route::post('reset-password', 'ResetPasswordController@reset')->name('password.reset');
    });

    Route::group(['middleware' => ['web','auth','verifiedUser']], function () {
        Route::get('/userdashboard', 'LoginController@openDashboard')->name('userdashboard');
    });
});

Route::group(['middleware' => ['web','auth','checkReferral']], function () {
    Route::post('provideHelp', 'DashboardController@provideUserHelp')->name('provide.help');
    Route::post('commitmentPool', 'DashboardController@commitmentsPool')->name('commitment.pool');
    Route::get('provide_help_history', 'DashboardController@getPhHistory');
    Route::get('commitments', 'DashboardController@getCommitments');
    Route::get('profile_settings', 'DashboardController@profileSettings');
    Route::get('support_donation', 'DashboardController@supportDonation');
    Route::get('/forget_password', function () {
        return view('forget_password');
    });
    Route::get('/dashboard_news', function () {
        return view('dashboard_new');
    });
    Route::get('/get_help_history', function () {
        return view('get_help_history');
    });
    Route::get('/my_team', function () {
        return view('my_team');
    });
    Route::get('/rewards', function () {
        return view('rewards');
    });
    Route::get('/super_admin_dashboard', function () {
        return view('super_admin_dashboard');
    });

    Route::get('/test-command', 'DashboardController@testCommand')->name('test.command');
    Route::post('paymentOfProof', 'DashboardController@uploadPaymentProof')->name('payment.proof');
});
