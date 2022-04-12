<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Girl;
use App\Models\AdminUser;

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

    public function login(Request $request)
    {
        $admin_user = AdminUser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('admin/girl_list'); 
            }
        }

        return view('admin/login', ['login_error' => '1']);
    }
    
    public function logout(Request $request)
    {
        session()->forget('login_id');
        return redirect('admin/login');
    }
}
