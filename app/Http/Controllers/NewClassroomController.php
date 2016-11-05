<?php

	namespace App\Http\Controllers;

	class NewClassroomController extends Controller{		
		
		public function postNewClassroom(){
			$name = $_POST['classroomName'];
			$response = parent::post('login', ['form_params' => [
			"teacherId" => $request->input("username"),
			"sessionToken" => "123",
			"name" => $name]]);
			return view('dashboard');
		}
	
	}

?>
