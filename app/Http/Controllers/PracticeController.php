<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Practice;
use App\Models\PracticeCategory;
use DB;

class PracticeController extends Controller
{
    public function index(Request $request)
    {
        $categories = PracticeCategory::orderBy('id', 'asc')->get();
        $filter_array = $request->all();
        $pref = null;
        $category = null;

        if (isset($filter_array['pref'])) {
            $pref = $filter_array['pref'];
        }
        if (isset($filter_array['category'])) {
            $category = $filter_array['category'];
        }

        $query = Practice::where('release_flg', 1);

        if (isset($pref)) {
            $query->where('pref', $pref);
        }

        if (isset($category)) {
            $query->where('category_id', $category);
        }

        $practice_list = $query->paginate(5);

        return view('practice/index', [
            'practice_list' => $practice_list,
            'categories' => $categories,
            'filter_pref' => $pref,
            'filter_category' => $category,
        ]);
    }

    public function show($id)
    {
        $practice = Practice::find($id);
        $pref = $practice->pref;

        $practice_list = Practice::where('pref', $pref)->where('id', '<>', $id)->where('release_flg', 1)->orderBy('name', 'asc')->take(4)->get();

        return view('practice/show', [
            'practice' => $practice,
            'practice_list' => $practice_list,
        ]);
    }

    public function practice_list()
    {
        $practices = Practice::paginate(10);

        return view('admin/practice_list', [
            'practices' => $practices ]);
    }

    public function practice_regist()
    {
        $categories = PracticeCategory::orderBy('id', 'asc')->get();
        return view('admin/practice_regist', [
            'categories' => $categories,
        ]);
    }

    public function practice_store(Request $request)
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

        $practice = new Practice;

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
            $practice->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/practice_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function practice_edit($id)
    {
        $practice = Practice::find($id);
        $categories = PracticeCategory::orderBy('id', 'asc')->get();

        return view('admin/practice_edit', [
            'categories' => $categories,
            'practice' => $practice,
        ]);
    }

    public function practice_update(Request $request)
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
        $practice = Practice::find($request['id']);

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
            $practice->update($fill_data);
            DB::commit();
            return redirect()->to('admin/practice_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function practice_delete($id)
    {
        DB::beginTransaction();
        try {
            Practice::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.practice_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

}
