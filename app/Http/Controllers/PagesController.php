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
		return view('login');
	}

	public function getDashboard (){	
		return view('dashboard');
	}

}
