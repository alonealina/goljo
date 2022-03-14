<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\News;
use DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('release_flg', 1)->paginate(2);
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


}
