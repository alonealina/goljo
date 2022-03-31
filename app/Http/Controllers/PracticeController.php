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


}
