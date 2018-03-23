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

Route::group(['middleware' => ['web']], function () {
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

    Route::get('/login', function () {
        return view('signin');
    });

    Route::post('storeUser', 'UserController@storeUser')->name('signup-user');
});
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

Route::group(['middleware' => ['web']], function () {
    //
});
