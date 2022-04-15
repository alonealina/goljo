@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.practice_regist') }}">練習場登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.practice_list') }}">練習場管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">練習場編集</div>
    <form id="form" name="regist_form" action="{{ route('admin.practice_update') }}" method="post" enctype="multipart/form-data">
        {{ Form::hidden('id', $practice->id) }}
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">練習場名</div>
            <div class="flex_form_content">
                {{ Form::text('name', old('name', $practice->name), ['class' => '', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">都道府県</div>
            <div class="flex_form_content">
                <select name="pref">
                @foreach (config('const.Prefs') as $name)
                <option value="{{ $name }}"
                    @if(old('pref') == $name) selected 
                    @elseif(empty(old('pref')) && $practice->pref == $name) selected @endif >{{ $name }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">住所</div>
            <div class="flex_form_content">
                {{ Form::text('address', old('address', $practice->address), ['class' => 'form_address', 'maxlength' => 50]) }}
            </div>
        </div>


        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">カテゴリ</div>
            <div class="flex_form_content">
                <select name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @if(old('category_id') == $category->id) selected 
                    @elseif(empty(old('category_id')) && $practice->category_id == $category->id) selected @endif >{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">内容1</div>
            <div class="flex_form_content">
                {{ Form::textarea('content1', old('content1', $practice->content1), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="flex_form_item">
            <div class="flex_form_title">内容2</div>
            <div class="flex_form_content">
                {{ Form::textarea('content2', old('content2', $practice->content2), ['class' => 'form-control notice_content_input', 'rows' => 5, 'maxlength' => 3000]) }}
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


