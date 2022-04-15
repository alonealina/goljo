@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_current_menu">
    <a href="{{ route('admin.news_regist') }}">ニュース登録</a>
</div>
<div class="admin_side_menu">
    <a href="{{ route('admin.news_list') }}">ニュース管理</a>
</div>

@endsection

@section('content')

<div class="content_div regist_div">
    <div class="content_title">ニュース登録</div>
    <form id="form" name="regist_form" action="{{ route('admin.news_store') }}" method="post" enctype="multipart/form-data">
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
                {{ Form::text('title', old('title'), ['class' => '', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item flex_notice_title">
            <div class="flex_form_title">ジャンル</div>
            <div class="flex_form_content">
                <select name="genre">
                <option value="1" @if(old('genre') == "1") selected @endif >INFO</option>
                <option value="2" @if(old('genre') == "2") selected @endif >GOLF</option>
                <option value="3" @if(old('genre') == "3") selected @endif >LADY</option>
                </select>
            </div>
        </div>

        <div class="flex_form_item flex_notice_title">
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
            <div class="flex_form_title">内容</div>
            <div class="flex_form_content">
                {{ Form::textarea('content', old('content'), ['class' => 'form-control notice_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
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


