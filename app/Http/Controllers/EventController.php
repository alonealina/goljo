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

    public function event_list()
    {
        $events = Event::paginate(10);

        return view('admin/event_list', [
            'events' => $events ]);
    }

    public function event_regist()
    {
        return view('admin/event_regist');
    }

    public function event_store(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $event = new Event;

        $request = $request->all();
        $fill_data = [
            'title' => $request['title'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $event->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/event_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function event_edit($id)
    {
        $event = Event::find($id);

        return view('admin/event_edit', [
            'event' => $event,
        ]);
    }

    public function event_update(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content1' => 'required',
            'content2' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content1.required' => '内容1を入力してください',
            'content2.required' => '内容2を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $event = Event::find($request['id']);

        $fill_data = [
            'title' => $request['title'],
            'content1' => $request['content1'],
            'content2' => $request['content2'],
            'notice_date' => date('Y/m/d'),
            'release_flg' => 1,
        ];

        DB::beginTransaction();
        try {
            $event->update($fill_data);
            DB::commit();
            return redirect()->to('admin/event_list')->with('message', '更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function event_delete($id)
    {
        DB::beginTransaction();
        try {
            Event::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.event_list')->with('message', 'ニュースを削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }


}
