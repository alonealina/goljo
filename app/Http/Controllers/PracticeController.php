<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Practice;
use DB;

class PracticeController extends Controller
{
    public function index()
    {
        $practice_list = Practice::where('release_flg', 1)->paginate(5);
        return view('practice/index', [
            'practice_list' => $practice_list,
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


}
