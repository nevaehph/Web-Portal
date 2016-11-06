<?php

	namespace App\Http\Controllers;
	use App\User;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class NewClassroomController extends Controller{		
		
		public function postNewClassroom(){
			$name = $_POST['classroomName'];
			$sessionToken = $_POST['sessionToken'];
			$response = parent::post('getClassrooms', ['form_params' => [
			"teacherId" => "teacher",
			"sessionToken" => $sessionToken,
			"name" => $name]]);
			return view('dashboard');
		}
	
	}

?>
