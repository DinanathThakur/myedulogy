<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\Course;
use Modules\Home\Entities\SubCourse;
use Modules\Home\Entities\User;
use Validator;

class CourseController extends Controller
{

    private $courses = [
        1 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 1599.000],
        2 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 12999.000],
    ];

    public function index($courseID)
    {
        $courseDetails = [];
        $returnData = [];
        if ($courseID) {
            $returnData['courseDetails'] = Course::getInstance()->getRecordWhere(['id' => $courseID, 'status' => 'A']);
            $courses = SubCourse::getInstance()->getRecordsWhere(['courseID' => $courseID, 'status' => 'A'])->all();
            $courseTypeWise = [];
            array_walk($courses, function ($course) use (&$courseTypeWise) {
                $courseTypeWise[$course->type][] = $course;
            });
            $returnData['courses'] = $courseTypeWise;
            $returnData['otherDescription'] = $returnData['courseDetails']->otherDescription ? json_decode($returnData['courseDetails']->otherDescription, true) : [];
        }
//        dd($returnData);
        return view('home::course.index', $returnData);
    }


}
