<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

use App\Model\Topic;

class TopicController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function getTopic(Request $request, $topicId) {
        $res = Topic::getQuestionsWithStats('teacher', $topicId);
        $topicQuestions = array();
        $i = 0;
        foreach ($res->questionStats as $re => $value) {
            $topicQuestions[$i]["questionId"] = $value->questionId;
            $topicQuestions[$i]["questionText"] = $value->questionText;
            $topicQuestions[$i]["noStudentsAttempted"] = $value->noStudentsAttempted;
            $topicQuestions[$i]["noOfCorrect"] = $value->noOfCorrect;
            $topicQuestions[$i]["percentageCorrect"] = $value->percentageCorrect;
            $i++;
        }
        return view('performanceReport',["topicQuestions" => $topicQuestions, "topicName" => $res->topicName]);
    }

    public function getQuestion(Request $request, $questionId) {
        $res = Topic::getQuestionOptions('teacher', $questionId);
        return view('performanceReportDetail',["questionDetails" => $res]);
    }
}