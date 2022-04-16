@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.event_regist') }}">イベント登録</a>
</div>
<div class="admin_current_menu">
    <a href="{{ route('admin.event_list') }}">イベント管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">イベント管理</div>
    <div class="event_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="event_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="event_list_title">
                <div class="admin_item_name">タイトル</div>
            </div>
            <div class="event_list_content1">
                <div class="admin_item_name">内容1</div>
            </div>
            <div class="event_list_content2">
                <div class="admin_item_name">内容2</div>
            </div>
            <div class="event_list_date">
                <div class="admin_item_name">公開日時</div>
            </div>
        </div>
        <form id="boxes" name="event_list_form" action="" method="get">
            @foreach($events as $event)
            {{ Form::hidden('event_id[]', $event->id) }}
            <div class="admin_list_column">
                <div class="event_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $event->id }}">
                </div>
                <div class="event_list_title">
                    <div class="admin_item_name">{{ $event->title }}</div>
                </div>
                <div class="event_list_content1">
                    <div class="admin_item_name">{{ $event->content1 }}</div>
                </div>
                <div class="event_list_content2">
                    <div class="admin_item_name">{{ $event->content2 }}</div>
                </div>
                <div class="event_list_date">
                    <div class="admin_item_name">{{ $event->notice_date }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="event_edit/{{ $event->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="event_delete/{{ $event->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $events->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


