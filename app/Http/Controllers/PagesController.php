<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    
	
	public function getlogin (){
		$classroomInfo = null;
		return view('login', ["classroomInfo" => $classroomInfo]);
	}

	public function getDashboard (Request $request){
		$response = parent::post('getClassrooms', ['form_params' => 
            [
                "teacherId" => "teacher", //$request->session()->get('teacherId'), // TODO: add teacherId into session
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);
        $res = json_decode($response); 
        $classroomInfo = array();
        $i = 0;
        foreach ($res as $re => $value) {
            $classroomInfo[$i]["name"] = $value->name;
            $i++;
        }		
		return view('dashboard', ["classroomInfo" => $classroomInfo]);
	}

}
