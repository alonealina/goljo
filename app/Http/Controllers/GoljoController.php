<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;

class GoljoController extends Controller
{
    public function index()
    {
        $news_list = News::where('release_flg', 1)->orderBy('notice_date', 'desc')->take(4)->get();
        $pickup = Girl::where('pickup_flg', 1)->take(12)->get();
        $girl_rank = Girl::orderBy('fav_count', 'desc')->take(5)->get();
        return view('index', [
            'news_list' => $news_list,
            'pickup' => $pickup,
            'girl_rank' => $girl_rank,
        ]);
    }

    public function search()
    {
        $girl_list = Girl::paginate(10);

        return view('search', [
            'girl_list' => $girl_list,
        ]);
    }

    public function event()
    {
        return view('event');
    }

    public function course()
    {
        return view('course');
    }

    public function practice()
    {
        return view('practice');
    }

    public function ranking()
    {
        $girl_rank = Girl::orderBy('fav_count', 'desc')->take(10)->get();

        return view('ranking', [
            'girl_rank' => $girl_rank,
        ]);
    }

    public function catalog()
    {
        return view('catalog');
    }


}
