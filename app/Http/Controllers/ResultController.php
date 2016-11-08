<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use Illuminate\Support\Facades\Redirect;

use App\Model\Topic;

class ResultController extends Controller
{
    
    public function displayClassroom(Request $request, $classroomId) {
        $topics = Topic::getTopic('teacher');
        $topicInfo = array();
        $i = 0;
        foreach ($topics as $topic => $value) {
            $topicInfo[$i]["topicId"] = $value->topicId;
            $topicInfo[$i]["name"] = $value->name;

            $scores = Topic::getStudentScore('teacher', $value->topicId, $classroomId);
            $scoreInfo = array();
            $j = 0;
            if(is_array($scores)) {
                foreach($scores as $score) {
                    $scoreInfo[$j]["facebookId"] = $score->facebookId;
                    $scoreInfo[$j]["studentName"] = $score->studentName;
                    $scoreInfo[$j]["score"] = $score->score;
                    $j++;
                }
                $topicInfo[$i]["scoreList"] = $scoreInfo;
            }
            $i++;
        }
        return view('classroom', ["topicInfo" => $topicInfo, "scoreInfo" => $scoreInfo]);
    }

	public function getTopics(Request $request)
    {
		$res = Topic::getTopic('teacher');
		$topicInfo = array();
        $i = 0;
        //print_r($res);die;
        foreach ($res as $re => $value) {
            $topicInfo[$i]["topicId"] = $value->topicId;
            $topicInfo[$i]["name"] = $value->name;
            $i++;
        }
        return view('classroom',["topicInfo" => $topicInfo]);
    }

	public function getStudentAttemptByTopic(Request $request)
    {
		$studentName =  $request->route('studentName');
		
		$res = Topic::getStudentAttempt('teacher', $request->route('topicId'), $request->route('facebookId'));
		
		$studentInfo = array();
        $i = 0;
        foreach ($res as $re => $value) {
            $studentInfo[$i]["attemptId"] = $value->attemptId;
            $studentInfo[$i]["score"] = $value->score;
			$studentInfo[$i]["dateTime"] = $value->dateTime;
            $i++;
        }
	return view('studentScore', ["studentInfo" => $studentInfo, "studentName"=>$studentName ]); //, "studentInfo"=>$studentInfo
    }

	
}


