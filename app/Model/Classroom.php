<?php

namespace App\Model;

class Classroom extends Model {

	public static function getClassroom($teacherId) {
		$response = parent::post('getClassrooms', ['form_params' => 
            [
                "teacherId" => "teacher", //$request->session()->get('teacherId'), // TODO: add teacherId into session
                "sessionToken" => session('sessionToken')
            ]
        ]);

        return json_decode($response);
	}

	public static function createClassroom($teacherId, $name) {
		$response = parent::post('createClassrooms', ['form_params' => [
			"teacherId" => $teacherId,
			"sessionToken" => session('sessionToken'),
			"name" => $name]]);
		return $response;
	}

	public static function editClassroom($teacherId, $classroomId, $name) {
		$response = parent::post('editClassrooms', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "classroomId" => $classroomId,
                "name" => $name,
                "sessionToken" => session('sessionToken')
            ]
        ]);
        return $response;
	}

	public static function deleteClassroom($teacherId, $classroomId) {
		$response = parent::post('deleteClassrooms', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "classroomId" => $classroomId,
                "sessionToken" => session('sessionToken')
            ]
        ]);
        return $response;
	}
}