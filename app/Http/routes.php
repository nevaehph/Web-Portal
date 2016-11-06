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

Route::get('/classroomManager', 'ClassroomController@getClassroom');

Route::post('/deleteClassroom', 'ClassroomController@deleteClassroom');

Route::post('/editClassroom', 'ClassroomController@editClassroom');

Route::get('/chapter', function(){
	return view('chapter');
});

Route::post('classroomController', 'NewClassroomController@postNewClassroom');


Route::post('/doLogin', 'LoginController@login');

Route::get('/performanceReport', function(){
	return view('performanceReport');
});

Route::get('/performanceReportDetail', function(){
	return view('performanceReportDetail');
});
