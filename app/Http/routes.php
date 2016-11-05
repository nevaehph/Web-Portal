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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/classroom', function(){
	return view('classroom');
});

Route::get('/chapter', function(){
	return view('chapter');
});

Route::post('/classroomController', function (){
	echo $_POST['classroomName'];
	return view('blue');
	});
	
	
Route::get('/classroomController', function() {
	echo "Steven Spielberg, your running out of time";
	return view('blue');
	
});


Route::post('/doLogin', 'LoginController@login');


