<?php

namespace Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Modules\Home\Entities\Course;
use Modules\Home\Entities\User;
use Validator;

class CourseController extends Controller
{


    public function index()
    {
        return view('admin::course.index');
    }

    public function editCourse($courseID)
    {
        $returnData = [];
        if ($courseID) {
            $courseDetails = Course::getInstance()->getRecordWhere(['id' => $courseID, 'status' => 'A']);
            $otherDescriptions = $courseDetails->otherDescription;
            unset($courseDetails->otherDescription);
            $returnData['courseDetails'] = json_encode($courseDetails);
            $otherDescription = $otherDescriptions ? json_decode($otherDescriptions, true) : [];
            $returnData['otherDescriptions'] = $otherDescription = !is_array($otherDescription) ? json_decode($otherDescription, true) : $otherDescription;;
        }
//        dd($returnData['otherDescriptions']);
        return view('admin::course.edit', $returnData);
    }

}
