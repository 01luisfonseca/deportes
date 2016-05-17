<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('auth/login');
});

Route::group(['namespace'=>'Auth'],function(){
	Route::group(['prefix'=>'auth'],function(){
		// Authentication routes...
		Route::get('/login', 'AuthController@getLogin');
		Route::post('/login', 'AuthController@postLogin');
		Route::get('/logout', 'AuthController@getLogout');
		// Registration routes...
		Route::get('/register', 'AuthController@getRegister');
		Route::post('/register', 'AuthController@postRegister');
	});
	Route::group(['prefix'=>'password'],function(){
		// Password reset link request routes...
		Route::get('/email', 'PasswordController@getEmail');
		Route::post('/email', 'PasswordController@postEmail');
		// Password reset routes...
		Route::get('/reset/{token}', 'PasswordController@getReset');
		Route::post('/reset', 'PasswordController@postReset');
	});
});

Route::group(['middleware'=>'auth'], function(){
	Route::group(['prefix'=>'int'],function(){
		Route::get('/',function(){
			return view('welcome');
		});
	});
	Route::group(['namespace'=>'usuario'],function(){
		Route::group(['prefix'=>'usuario'],function(){
			Route::get('/enlaces','EnlacesCtrl@index');
			Route::get('/esadmin','InfoCtrl@esAdmin');
		});
	});
});