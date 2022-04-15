@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.course_regist') }}">ゴルフ場登録</a>
</div>
<div class="admin_current_menu">
    <a href="{{ route('admin.course_list') }}">ゴルフ場管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">ゴルフ場管理</div>
    <div class="course_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="course_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="course_list_name">
                <div class="admin_item_name">ゴルフ場名</div>
            </div>
            <div class="course_list_pref">
                <div class="admin_item_name">都道府県</div>
            </div>
            <div class="course_list_address">
                <div class="admin_item_name">住所</div>
            </div>
            <div class="course_list_content1">
                <div class="admin_item_name">内容1</div>
            </div>
            <div class="course_list_content2">
                <div class="admin_item_name">内容2</div>
            </div>
        </div>
        <form id="boxes" name="course_list_form" action="" method="get">
            @foreach($courses as $course)
            {{ Form::hidden('course_id[]', $course->id) }}
            <div class="admin_list_column">
                <div class="course_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $course->id }}">
                </div>
                <div class="course_list_name">
                    <div class="admin_item_name">{{ $course->name }}</div>
                </div>
                <div class="course_list_pref">
                    <div class="admin_item_name">{{ $course->pref }}</div>
                </div>
                <div class="course_list_address">
                    <div class="admin_item_name">{{ $course->address }}</div>
                </div>
                <div class="course_list_content1">
                    <div class="admin_item_name">{{ $course->content1 }}</div>
                </div>
                <div class="course_list_content2">
                    <div class="admin_item_name">{{ $course->content2 }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="course_edit/{{ $course->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="course_delete/{{ $course->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $courses->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


