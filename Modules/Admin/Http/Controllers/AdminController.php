<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Home\Entities\Category;
use Modules\Home\Entities\Course;
use Modules\Home\Entities\SubCourse;
use Modules\Home\Entities\User;
use Validator;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        // dd($request->all());

        if (Session::has('admin') || $request->session()->has('admin')) {
            return redirect('/admin/dashboard');
        }
        if ($request->isMethod('post')) {
            $email = $request->input('email');
            $password = $request->input('password');

            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ], ['email.required' => 'Please enter email-id',
                    'password.required' => 'Please enter a password']
            );
            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                $objModelUsers = User::getInstance();
                $adminDetails = $objModelUsers->getUserById(Auth::id()); //THIS IS TO GET THE MODEL OBJECT

                if ($adminDetails->role == 1) {

                    Session::put('admin', $adminDetails->toArray());
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/admin')->withErrors([
                        'errMsg' => 'Invalid credentials.',
                    ]);
                }

            } else {
                return redirect('/admin')->withErrors([
                    'errMsg' => 'Invalid credentials.',
                ]);
            }
        }
        return view('admin::home.login');
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('admin');
        return redirect('/admin');
    }

    public function dashboard(Request $request)
    {
        return view('admin::admin.dashboard');
    }

    public function manageCourse(Request $request)
    {
        $categoryDetails = Category::getInstance()->getRecordsWhere()->all();
        $categoryDetails = array_combine(array_column($categoryDetails, 'id'), $categoryDetails);
        return view('admin::course.index', ['categories' => $categoryDetails]);
    }

    public function manageCategory(Request $request)
    {
        return view('admin::category.index');
    }

    public function createCourse(Request $request)
    {
        return view('admin::course.create');
    }

    public function ajaxHandler(Request $request)
    {
        $response = ['status' => 'error', 'msg' => 'Something went wrong...', 'data' => null];
        $method = $request['method'];
        switch ($method) {

            case 'createCategory':

                $categoryDetails = Category::create([
                    'category' => $request['category'],
                ]);
                $categoryDetails = Category::getInstance()->getByID($categoryDetails['id']);

                $response = ['status' => 'success', 'msg' => 'Category has been created.', 'data' => $categoryDetails];

                break;
            case 'getAllActiveCategory':

                $categoryDetails = Category::getInstance()->getRecordsWhere(['status' => 'A'])->all();

                $response = ['status' => 'success', 'msg' => 'Category list.', 'data' => $categoryDetails];

                break;

            case 'getAllCategory':

                $data = $request;

                $category = isset($data['category']) ? $data['category'] : '';
                $status = isset($data['status']) ? $data['status'] : '';

                $allRecord = $filteredRecord = Category::getInstance()->getRecordsWhere()->all();

                $where = [];
                if ($category || $status) {
                    $where['category'] = $category;
                    $where['status'] = $status;
                    $filteredRecord = Category::getInstance()->getRecordsWhere($where)->all();
                }

                $options['limit'] = $data['length'];
                $options['page'] = ($data['start'] ? ($data['start'] / $data['length']) + 1 : 1);

                $records = Category::getInstance()->getRecordsWhere($where, $options)->all();

                $dataForTable = [];
                if (!empty($records)) {
                    foreach ($records as $category => $record) {
                        $dataForTable[] = [
                            'id' => $record->id,
                            'category' => $record->category,
                            'status' => $record->status == 'A' ?
                                '<span class="btn btn-xs btn-success change-status" data-id="' . $record->id . '" data-status="' . $record->status . '">Active</span>' :
                                '<span class="btn btn-xs btn-danger change-status" data-id="' . $record->id . '" data-status="' . $record->status . '">In-Active</span>',
                            'createdAt' => $record->created_at,
                            'action' => '<a href="javascript:;" class="edit-category" data-id="' . $record->id . '"><span class="btn btn-xs btn-default"><i class="fa fa-edit"></i></span></a>',
                        ];
                    }
                }

                $response = ['recordsTotal' => count($allRecord), 'recordsFiltered' => count($filteredRecord), 'data' => $dataForTable, 'draw' => (int)$data['draw']];

                break;


            case 'getAllCourse':

                $data = $request;
                $categoryDetails = Category::getInstance()->getRecordsWhere()->all();
                $categoryDetails = array_combine(array_column($categoryDetails, 'id'), $categoryDetails);

                $_id = isset($data['_id']) ? $data['_id'] : '';
                $category = isset($data['category']) ? $data['category'] : '';
                $name = isset($data['name']) ? $data['name'] : '';
                $status = isset($data['status']) ? $data['status'] : '';

                $allRecord = $filteredRecord = Course::getInstance()->getRecordsWhere()->all();

                $where = [];
                if ($category || $name || $status) {
                    $where['category'] = $category;
                    $where['courseName'] = $name;
                    $where['status'] = $status;
                    $filteredRecord = Course::getInstance()->getRecordsWhere($where)->all();
                }

                $options['limit'] = $data['length'];
                $options['page'] = ($data['start'] ? ($data['start'] / $data['length']) + 1 : 1);

                $records = Course::getInstance()->getRecordsWhere($where, $options)->all();

                $dataForTable = [];
                if (!empty($records)) {
                    foreach ($records as $category => $record) {
                        $dataForTable[] = [
                            'id' => $record->id,
                            'courseName' => $record->courseName,
                            'category' => $categoryDetails[$record->category]->category,
                            'status' => $record->status == 'A' ?
                                '<span class="btn btn-xs btn-success change-status" data-id="' . $record->id . '" data-status="' . $record->status . '">Active</span>' :
                                '<span class="btn btn-xs btn-danger change-status" data-id="' . $record->id . '" data-status="' . $record->status . '">In-Active</span>',
                            'createdAt' => $record->created_at,
                            'action' => '<a href="javascript:;" class="edit-course" data-id="' . $record->id . '"><span class="btn btn-xs btn-default"><i class="fa fa-edit"></i></span></a>',
                        ];
                    }
                }

                $response = ['recordsTotal' => count($allRecord), 'recordsFiltered' => count($filteredRecord), 'data' => $dataForTable, 'draw' => (int)$data['draw']];

                break;


            case 'getAllSubCourse':

                $categoryDetails = SubCourse::getInstance()->getRecordsWhere(['status' => 'A'])->all();

                $response = ['status' => 'success', 'msg' => 'Category list.', 'data' => $categoryDetails];

                break;


            case 'createCourse':

                $courseData = $request['root'];
                $courseData['otherDescription'] = json_encode($courseData['otherDescription']);


                $rules = array(
                    'courseName' => 'required|max:255|unique:courses,courseName'
                );

                $validator = Validator::make($courseData, $rules);

                if ($validator->fails()) {
                    $response['data'] = $validator->messages();
                    $response['msg'] = 'Validation error';
                } else {
                    try {
                        $courseDetails = Course::create($courseData);
                        $courseDetails = Course::getInstance()->getByID($courseDetails['id']);
                        $response = ['status' => 'success', 'msg' => 'Course has been created.', 'data' => $courseDetails];
                    } catch (\Exception $ex) {

                    }
                }

                break;

            default:
                break;
        }
        header('Content-Type: application/json');
        if (isset($response['status']) && $response['status'] === 'error') {
            header('HTTP/1.1 500 Internal Server error');
        }

        echo json_encode($response);
    }

    public function schemaHandler(Request $request)
    {
        $schemaPath = public_path() . '/schema/';

        $schema = $request['schema'];

        switch ($schema) {
            case 'selectCategory':


                $list = Category::getInstance()->getRecordsWhere(['status' => 'A'])->all();

                $response = [
                    'title' => 'Category',
                    'type' => 'string',
                    'enum' => array_merge([''], array_unique(array_column($list, 'id'))),
                    'options' => ['enum_titles' => array_merge(['Select category...'], array_unique(array_column($list, 'category')))],
                ];

                $response = json_encode($response);

                break;
            default:
                $response = file_get_contents($schemaPath . $schema . '.json');
                break;
        }
        header('Content-Type: application/json');

        echo $response;
    }

}
