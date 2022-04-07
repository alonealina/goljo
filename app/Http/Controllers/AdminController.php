<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function search(Request $request)
    {
        $filter_array = $request->all();
        $pref = null;

        if (isset($filter_array['pref'])) {
            $pref = $filter_array['pref'];
        }

        $query = Girl::select('*');

        if (isset($pref)) {
            $query->where('pref', $pref);
        }

        $girl_list = $query->paginate(10);

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
