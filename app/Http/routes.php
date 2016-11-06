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


Route::get('/', 'PagesController@getlogin');

Route::get('/dashboard', 'PagesController@getDashboard');

Route::get('/classroomManager', 'ClassroomController@getClassroom');

Route::post('/deleteClassroom', 'ClassroomController@deleteClassroom');

Route::post('/editClassroom', 'ClassroomController@editClassroom');

Route::post('/classroomController', 'ClassroomController@postNewClassroom');

Route::get('/topic/{topicId}', 'TopicController@getTopic');
Route::get('/question/{questionId}', 'TopicController@getQuestion');

Route::post('/doLogin', 'LoginController@login');
