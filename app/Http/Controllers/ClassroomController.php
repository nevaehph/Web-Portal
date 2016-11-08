<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

use App\Model\Classroom;

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
        $res = Classroom::getClassroom('teacher');
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
		
		$response = Classroom::createClassroom('teacher', $name);
		
		return Redirect::action('PagesController@getDashboard');
	}

    public function editClassroom(Request $request)
    {   
        $response = Classroom::editClassroom('teacher', $request->input("classroomId"), $request->input("name"));

        return Redirect::action('ClassroomController@getClassroom');
    }

    public function deleteClassroom(Request $request)
    {
        $response = Classroom::deleteClassroom('teacher', $request->input("classroomId"));
        return Redirect::action('ClassroomController@getClassroom');
    }
}
