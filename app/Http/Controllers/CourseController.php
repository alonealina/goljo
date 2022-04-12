<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\CourseCategory;
use DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $categories = CourseCategory::orderBy('id', 'asc')->get();
        $filter_array = $request->all();
        $pref = null;
        $category = null;

        if (isset($filter_array['pref'])) {
            $pref = $filter_array['pref'];
        }
        if (isset($filter_array['category'])) {
            $category = $filter_array['category'];
        }

        $query = Course::where('release_flg', 1);

        if (isset($pref)) {
            $query->where('pref', $pref);
        }

        if (isset($category)) {
            $query->where('category_id', $category);
        }

        $course_list = $query->paginate(5);

        return view('course/index', [
            'course_list' => $course_list,
            'categories' => $categories,
            'filter_pref' => $pref,
            'filter_category' => $category,
        ]);
    }

    public function show($id)
    {
        $course = Course::find($id);
        $pref = $course->pref;

        $course_list = Course::where('pref', $pref)->where('id', '<>', $id)->where('release_flg', 1)->orderBy('name', 'asc')->take(4)->get();
        return view('course/show', [
            'course' => $course,
            'course_list' => $course_list,
        ]);
    }

    public function course_list()
    {
        $courses = Course::paginate(10);

        return view('admin/course_list', [
            'courses' => $courses ]);
    }

}
