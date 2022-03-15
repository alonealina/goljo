<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use DB;

class CourseController extends Controller
{
    public function index()
    {
        $course_list = Course::where('release_flg', 1)->paginate(5);
        return view('course/index', [
            'course_list' => $course_list,
        ]);
    }

    public function show($id)
    {
        $course = Course::find($id);


        $course_list = Course::where('release_flg', 1)->orderBy('name', 'asc')->take(4)->get();


        return view('course/show', [
            'course' => $course,
            'course_list' => $course_list,
        ]);
    }


}
