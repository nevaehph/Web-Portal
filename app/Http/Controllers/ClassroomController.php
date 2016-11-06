<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

class ClassroomController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function getClassroom(Request $request)
    {
        $response = parent::post('getClassrooms', ['form_params' => 
            [
                "teacherId" => "teacher", //$request->session()->get('teacherId'), // TODO: add teacherId into session
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);
        $res = json_decode($response); 
        $classroomInfo = array();
        $i = 0;
        //print_r($res);die;
        foreach ($res as $re => $value) {
            $classroomInfo[$i]["classroomId"] = $value->classroomId;
            $classroomInfo[$i]["name"] = $value->name;
            $i++;
        }
        return view('classroomManager',["classroomInfo" => $classroomInfo]);
    }
    
    public function postNewClassroom(Request $request){
		$name = $_POST['classroomName'];
		$sessionToken = $_POST['sessionToken'];
		
		$response = parent::post('createClassrooms', ['form_params' => [
		"teacherId" => "teacher",
		"sessionToken" => $request->session()->get('sessionToken'),
		"name" => $name]]);
		
		return Redirect::action('PagesController@getDashboard');
	}

    public function editClassroom(Request $request)
    {
        $response = parent::post('editClassrooms', ['form_params' => 
            [
                "teacherId" => "teacher", //$request->session()->get('teacherId'), // TODO: add teacherId into session
                "classroomId" => $request->input("classroomId"), // TODO: front-end input classroom id from a form
                "name" => $request->input("name"), // TODO: front-end input classroom name from a form
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);

        return Redirect::action('ClassroomController@getClassroom');
    }

    public function deleteClassroom(Request $request)
    {
        $response = parent::post('deleteClassrooms', ['form_params' => 
            [
                "teacherId" => "teacher",//$request->session()->get('teacherId'), // TODO: add teacherId into session
                "classroomId" => $request->input("classroomId"), // TODO: front-end input classroom id from a form
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);
        return Redirect::action('ClassroomController@getClassroom');
    }
}
