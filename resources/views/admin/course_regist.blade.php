@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.course_regist') }}">ゴルフ場登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.course_list') }}">ゴルフ場管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">ゴルフ場登録</div>
    <form id="form" name="regist_form" action="{{ route('admin.course_store') }}" method="post" enctype="multipart/form-data">
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item">
            <div class="flex_form_title">ゴルフ場名</div>
            <div class="flex_form_content">
                {{ Form::text('name', old('name'), ['class' => '', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">都道府県</div>
            <div class="flex_form_content">
                <select name="pref">
                @foreach (config('const.Prefs') as $name)
                <option value="{{ $name }}"
                    @if(old('pref') == $name) selected @endif >{{ $name }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">住所</div>
            <div class="flex_form_content">
                {{ Form::text('address', old('address'), ['class' => 'form_address', 'maxlength' => 50]) }}
            </div>
        </div>


        <div class="flex_form_item">
            <div class="flex_form_title">カテゴリ</div>
            <div class="flex_form_content">
                <select name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @if(old('category_id') == $category->id) selected @endif >{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">内容1</div>
            <div class="flex_form_content">
                {{ Form::textarea('content1', old('content1'), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">内容2</div>
            <div class="flex_form_content">
                {{ Form::textarea('content2', old('content2'), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
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


