@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.practice_regist') }}">練習場登録</a>
</div>
<div class="admin_current_menu">
    <a href="{{ route('admin.practice_list') }}">練習場管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">練習場管理</div>
    <div class="course_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="course_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="course_list_name">
                <div class="admin_item_name">練習場名</div>
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
            @foreach($practices as $practice)
            {{ Form::hidden('course_id[]', $practice->id) }}
            <div class="admin_list_column">
                <div class="course_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $practice->id }}">
                </div>
                <div class="course_list_name">
                    <div class="admin_item_name">{{ $practice->name }}</div>
                </div>
                <div class="course_list_pref">
                    <div class="admin_item_name">{{ $practice->pref }}</div>
                </div>
                <div class="course_list_address">
                    <div class="admin_item_name">{{ $practice->address }}</div>
                </div>
                <div class="course_list_content1">
                    <div class="admin_item_name">{{ $practice->content1 }}</div>
                </div>
                <div class="course_list_content2">
                    <div class="admin_item_name">{{ $practice->content2 }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="practice_edit/{{ $practice->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="practice_delete/{{ $practice->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $practices->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


