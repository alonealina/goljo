<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class GoljoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search()
    {
        return view('search');
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


}
