<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;
use DB;

class EventController extends Controller
{
    public function index()
    {
        $event_list = Event::where('release_flg', 1)->paginate(5);
        return view('event/index', [
            'event_list' => $event_list,
        ]);
    }

    public function show($id)
    {
        $event = Event::find($id);


        $event_list = Event::where('release_flg', 1)->orderBy('notice_date', 'desc')->orderBy('title', 'asc')->take(4)->get();


        return view('event/show', [
            'event' => $event,
            'event_list' => $event_list,
        ]);
    }


}
