<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;

class ClassroomController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function editClassroom(Request $request)
    {
        $response = parent::post('editClassrooms', ['form_params' => 
            [
                "teacherId" => $request->session()->get('teacherId'), // TODO: add teacherId into session
                "classroomId" => $request->input("classroomId"), // TODO: front-end input classroom id from a form
                "name" => $request->input("name"), // TODO: front-end input classroom name from a form
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);

        return view('/classroom');
    }

    public function deleteClassroom(Request $request)
    {
        $response = parent::post('deleteClassrooms', ['form_params' => 
            [
                "teacherId" => $request->session()->get('teacherId'), // TODO: add teacherId into session
                "classroomId" => $request->input("classroomId"), // TODO: front-end input classroom id from a form
                "sessionToken" => $request->session()->get('sessionToken')
            ]
        ]);
        return view('/classroom');
    }
}