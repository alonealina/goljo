<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Girl;
use DB;

class GirlController extends Controller
{
    public function show($id)
    {
        $girl = Girl::find($id);
        $pref = $girl->pref;
        $nearby_girls = Girl::where('pref', $pref)->where('id', '<>', $id)->orderBy('fav_count', 'desc')->take(4)->get();
        $pickup_girls = Girl::where('pickup_flg', 1)->orderBy('fav_count', 'desc')->take(4)->get();

        return view('girl/show', [
            'girl' => $girl,
            'nearby_girls' => $nearby_girls,
            'pickup_girls' => $pickup_girls,
        ]);
    }

    public function girl_list()
    {
        $girls = Girl::paginate(10);

        return view('admin/girl_list', [
            'girls' => $girls ]);
    }


}
