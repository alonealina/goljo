<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Notice;
use App\Models\Restaurant;
use App\Models\Comment;
use App\Models\Banner;
use App\Models\Scene;
use App\Models\Commitment;
use App\Models\RestaurantScene;
use App\Models\RestaurantCommitment;

class GoljoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


}
