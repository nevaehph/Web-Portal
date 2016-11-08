<?php

namespace App\Model;

class Topic extends Model {

	public static function getTopic($teacherId) {
        $response = parent::post('getTopics', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "sessionToken" => session('sessionToken')
            ]
        ]);
        return json_decode($response);
	}

    public static function getStudentScore($teacherId, $topicId, $classroomId) {
        $response = parent::post('getStudentsScoreByTopic', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "sessionToken" => session('sessionToken'),
                "topicId" => $topicId,
                "classroomCode" => $classroomId
            ]
        ]);
        return json_decode($response);
    }

    public static function getStudentAttempt($teacherId, $topicId, $facebookId) {
        $response = parent::post('getStudentAttemptByTopic', ['form_params' => 
            [
                "teacherId" =>'teacher',
                "sessionToken" => session('sessionToken'), 
                "topicId" => $topicId, 
                "facebookId" => $facebookId
            ]
        ]);
        return json_decode($response);
    }

    public static function getQuestionsWithStats($teacherId, $topicId) {
        $response = parent::post('getTopicQuestionsWithStats', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "sessionToken" => session('sessionToken'),
                "topicId" => $topicId
            ]
        ]);
        return json_decode($response);
    }

    public static function getQuestionOptions($teacherId, $questionId) {
        $response = parent::post('getQuestionOptionsStats', ['form_params' => 
            [
                "teacherId" => $teacherId,
                "sessionToken" => session('sessionToken'),
                "questionId" => $questionId
            ]
        ]);
        return json_decode($response);
    }
}