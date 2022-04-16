@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_current_menu">
    <a href="{{ route('admin.event_regist') }}">イベント登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.event_list') }}">イベント管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">イベント編集</div>
    <form id="form" name="regist_form" action="{{ route('admin.event_update') }}" method="post" enctype="multipart/form-data">
        {{ Form::hidden('id', $event->id) }}
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">タイトル</div>
            <div class="flex_form_content">
                {{ Form::text('title', old('title', $event->title), ['class' => '', 'maxlength' => 20]) }}
            </div>
        </div>


        <div class="flex_form_item">
            <div class="flex_form_title">内容1</div>
            <div class="flex_form_content">
                {{ Form::textarea('content1', old('content1', $event->content1), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">内容2</div>
            <div class="flex_form_content">
                {{ Form::textarea('content2', old('content2', $event->content2), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="regist_button">
            <a href="#" onclick="clickRegistButton()">
                <img src="{{ asset('img/regist_btn.png') }}" class="regist_btn" alt="">
            </a>
        </div>
    </form>


</div>



@endsection


