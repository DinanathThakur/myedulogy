<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Home\Entities\Course;
use Modules\Home\Entities\Classes;

class CourseController extends Controller
{

    private $courses = [
        1 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 1599.000],
        2 => ['category' => 'classroom', 'currency' => 'USD', 'price' => 12999.000],
    ];

    public function index($courseID)
    {
        $returnData = [];
        if ($courseID) {
            $returnData['courseDetails'] = $courseDetails = Course::getInstance()->getRecordWhere(['id' => $courseID, 'status' => 'A']);
            $otherDescription = $returnData['courseDetails']->otherDescription ? json_decode($returnData['courseDetails']->otherDescription, true) : [];
            $otherDescription = !is_array($otherDescription) ? json_decode($otherDescription, true) : $otherDescription;
            if (!empty($courseDetails)) {
                $courses = Classes::getInstance()->getAllClasses(['classes.courseID' => $courseID, 'classes.status' => 'A'])->all();
                $courseTypeWise = [];
                array_walk($courses, function ($course) use (&$courseTypeWise) {
                    $courseTypeWise[$course->type][] = $course;
                });
                $returnData['courses'] = $courseTypeWise;
                $returnData['otherDescription'] = $otherDescription;
            }
        }
        return view('home::course.index', $returnData);
    }

}
