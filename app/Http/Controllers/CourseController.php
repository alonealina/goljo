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

    public function course_regist()
    {
        $categories = CourseCategory::orderBy('id', 'asc')->get();
        return view('admin/course_regist', [
            'categories' => $categories,
        ]);
    }

    public function course_store(Request $request)
    {
        $rules = [
            'name' => ['max:20', 'required'],
            'address' => ['max:100', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'name.max' => 'ゴルフ場名は20文字以下でお願いします',
            'name.required' => 'ゴルフ場名を入力してください',
            'address.max' => '住所は100文字以下でお願いします',
            'address.required' => '住所を入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $course = new Course;

        $request = $request->all();
        $fill_data = [
            'name' => $request['name'],
            'pref' => $request['pref'],
            'address' => $request['address'],
            'category_id' => $request['category_id'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $course->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/course_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function course_edit($id)
    {
        $course = Course::find($id);
        $categories = CourseCategory::orderBy('id', 'asc')->get();

        return view('admin/course_edit', [
            'categories' => $categories,
            'course' => $course,
        ]);
    }

    public function course_update(Request $request)
    {
        $rules = [
            'name' => ['max:20', 'required'],
            'address' => ['max:100', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'name.max' => 'ゴルフ場名は20文字以下でお願いします',
            'name.required' => 'ゴルフ場名を入力してください',
            'address.max' => '住所は100文字以下でお願いします',
            'address.required' => '住所を入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $course = Course::find($request['id']);

        $fill_data = [
            'name' => $request['name'],
            'pref' => $request['pref'],
            'address' => $request['address'],
            'category_id' => $request['category_id'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $course->update($fill_data);
            DB::commit();
            return redirect()->to('admin/course_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function course_delete($id)
    {
        DB::beginTransaction();
        try {
            Course::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.course_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }


}
