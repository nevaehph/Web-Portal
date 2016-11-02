<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;

class LoginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login(Request $request)
    {
    	//Do Login Here
    	$response = parent::post('login', ['form_params' => 
            [
                "teacherId" => $request->input("username"), 
                "password" => $request->input("password")
            ]
        ]);
        $request->session()->put('sessionToken', trim($response, "\""));
        return view('/dashboard');
    }
}