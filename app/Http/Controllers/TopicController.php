<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

class TopicController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function getTopic(Request $request, $topicId) {
        $response = parent::post('getTopicQuestionsWithStats', ['form_params' => 
            [
                "teacherId" => "teacher",
                "sessionToken" => $request->session()->get('sessionToken'),
                "topicId" => $topicId
            ]
        ]);
        $res = json_decode($response); 
        $topicQuestions = array();
        $i = 0;
        foreach ($res as $re => $value) {
            $topicQuestions[$i]["questionId"] = $value->questionId;
            $topicQuestions[$i]["questionText"] = $value->questionText;
            $topicQuestions[$i]["noStudentsAttempted"] = $value->noStudentsAttempted;
            $topicQuestions[$i]["noOfCorrect"] = $value->noOfCorrect;
            $topicQuestions[$i]["percentageCorrect"] = $value->percentageCorrect;
            $i++;
        }
        return view('performanceReport',["topicQuestions" => $topicQuestions]);
    }

    public function getQuestion(Request $request, $questionId) {
        $response = parent::post('getQuestionOptionsStats', ['form_params' => 
            [
                "teacherId" => "teacher",
                "sessionToken" => $request->session()->get('sessionToken'),
                "questionId" => $questionId
            ]
        ]);
        $res = json_decode($response); 
        return view('performanceReportDetail',["questionDetails" => $res]);
    }
}