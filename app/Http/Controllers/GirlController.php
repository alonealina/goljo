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

        // $event_list = Girl::where('release_flg', 1)->orderBy('notice_date', 'desc')->orderBy('title', 'asc')->take(4)->get();

        return view('girl/show', [
            'girl' => $girl,
        ]);
    }


}
