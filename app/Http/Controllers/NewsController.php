<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\News;
use App\Models\NewsCategory;
use DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->paginate(10);
        return view('news/index', [
            'news_list' => $news,
        ]);
    }

    public function show($id)
    {
        $news = News::find($id);
        $max_flg = false;
        $min_flg = false;
        $max_news = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->orderBy('title', 'asc')->first();
        $min_news = News::where('release_flg', 1)->orderBy('notice_date', 'asc')->orderBy('title', 'desc')->first();
        if ($id == $max_news->id) {
            $max_flg = true;
        }
        if ($id == $min_news->id) {
            $min_flg = true;
        }

        $news_list = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->orderBy('title', 'asc')->get();
        $news_key = $news_list->where('id', $id)->keys()->first();
        $back_id = null;
        $next_id = null;

        if (!$max_flg) {
            $back_id = $news_list[$news_key-1]->id;
        }
        if (!$min_flg) {
            $next_id = $news_list[$news_key+1]->id;
        }

        return view('news/show', [
            'news' => $news,
            'max_flg' => $max_flg,
            'min_flg' => $min_flg,
            'back_id' => $back_id,
            'next_id' => $next_id,
        ]);
    }

    public function news_list()
    {
        $news_list = News::paginate(10);

        return view('admin/news_list', [
            'news_list' => $news_list ]);
    }

    public function news_regist()
    {
        $categories = NewsCategory::orderBy('id', 'asc')->get();
        return view('admin/news_regist', [
            'categories' => $categories,
        ]);
    }

    public function news_store(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $news = new News;

        $request = $request->all();
        $fill_data = [
            'title' => $request['title'],
            'genre' => $request['genre'],
            'category_id' => $request['category_id'],
            'content' => $request['content'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $news->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_edit($id)
    {
        $news = News::find($id);
        $categories = NewsCategory::orderBy('id', 'asc')->get();

        return view('admin/news_edit', [
            'categories' => $categories,
            'news' => $news,
        ]);
    }

    public function news_update(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $news = News::find($request['id']);

        $fill_data = [
            'title' => $request['title'],
            'genre' => $request['genre'],
            'category_id' => $request['category_id'],
            'content' => $request['content'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $news->update($fill_data);
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_delete($id)
    {
        DB::beginTransaction();
        try {
            News::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.news_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

}
