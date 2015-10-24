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
use App\User;
use App\Models\City;

Route::get('/', function () {
    return view('layout');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/learnerSignup', function () {

	$cities = City::all();

	return view('learnerSignup', [
		'cities' => $cities
	]);
});

Route::post('/learnerSignup', function(){

	$validation = User::validate(Request::all());

	if($validation->passes()){

		$user = new User();

		$user->username = Request::input('username');
		$user->email = Request::input('email');
		$user->password = Hash::make(Request::input('password'));
		// $user->city_id = Request::input('city_id');
		$user->amount = 100;

		$user->save();


		Auth::loginUsingId($user->id);
		return redirect('/');
	}

	return redirect('learnerSignup')
		->withInput()
		->withErrors($validation->errors());

});


Route::get('login', function(){
	return view('login');
});

Route::post('login', function(){

	$credentials = [
		'username' => Request::input('username'), 
		'password' => Request::input('password')
	];

	$remember_me = Request::input('remember_me') == 'on' ? true : false;

	if(Auth::attempt($credentials, $remember_me)){
		return redirect('/');
	}

	return redirect('login');
});


Route::get('logout', function(){

	Auth::logout();

	return redirect('/');
});