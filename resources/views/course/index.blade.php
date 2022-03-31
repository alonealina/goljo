@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_black">Pickup </span><span class="title_pink">Golf Course</span>
        <div class="title_ja">－　オススメ ゴルフ場　－</div>
        <div class="title_text2">GOLJOからオススメゴルフ場を紹介！</div>
    </div>
</div>
<img src="{{ asset('img/course1.png') }}" class="main_img" alt="">

<div class="content_div_bg">
    <div class="search_form2">
        <form id="form" name="course_form" action="{{ route('course') }}" method="get">
            <select name="pref" class="select_pref">
                <option value="">都道府県</option>
                @foreach (config('const.Prefs') as $name)
                <option value="{{ $name }}" @if(isset($filter_pref) && $filter_pref == $name) selected @endif >{{ $name }}</option>
                @endforeach
            </select>
            <select name="category" class="select_category">
                <option value="">カテゴリー</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(isset($filter_category) && $filter_category == $category->id) selected @endif >{{ $category->name }}</option>
                @endforeach
            </select>
        </form>
        <div class="search_button">
        <a href="#" onclick="clickCourseButton()">検索する</a>
        </div>
    </div>
    <div class="page_div">
        <div class="search_counter">
            ゴルフ場検索結果：全 <span class="search_count">{{ $course_list->total() }}</span>
            件中{{ ($course_list->currentPage() -1) * $course_list->perPage() + 1}}～{{ (($course_list->currentPage() -1) * $course_list->perPage() + 1) + (count($course_list) -1) }}件を表示中
        </div>
        {{ $course_list->links('pagination::default') }}
    </div>
    <div class="search_list2">
        @foreach ($course_list as $course)
        <a href="{{ route('course.show', ['id' => $course->id]) }}">
            <div class="search_list_box">
                <img src="{{ asset('img/course_img.png') }}" class="search_box_img" alt="">
                <div class="search_box_content">
                    <div class="area_mark">{{ $course->pref }}</div>
                    <div class="search_box_title">{{ $course->name }}</div>
                    <div class="search_box_text">
                        {!! nl2br(e($course->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
        @endforeach 
    </div>
    <div class="page_div">
        <div class="search_counter">
            ゴルフ場検索結果：全 <span class="search_count">{{ $course_list->total() }}</span>
            件中{{ ($course_list->currentPage() -1) * $course_list->perPage() + 1}}～{{ (($course_list->currentPage() -1) * $course_list->perPage() + 1) + (count($course_list) -1) }}件を表示中
        </div>
        {{ $course_list->links('pagination::default') }}
    </div>
</div>

@endsection


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_black_sp">Pickup </span><span class="title_pink_sp">Golf Course</span>
        <div class="title_ja_sp">－　オススメ ゴルフ場　－</div>
        <div class="title_text2_sp">
            GOLJOからオススメゴルフ場を紹介！
        </div>
    </div>
</div>
<img src="{{ asset('img/course1_sp.png') }}" class="main_img_sp" alt="">

<div class="content_div_bg_sp">
    <div class="search_form_sp">
        <form id="form" name="course_form_sp" action="{{ route('course') }}" method="get">
            <select name="pref" class="select_pref_sp">
                <option value="">都道府県</option>
                @foreach (config('const.Prefs') as $name)
                <option value="{{ $name }}" @if(isset($filter_pref) && $filter_pref == $name) selected @endif >{{ $name }}</option>
                @endforeach
            </select>
            <select name="category" class="select_category_sp">
                <option value="">カテゴリー</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(isset($filter_category) && $filter_category == $category->id) selected @endif >{{ $category->name }}</option>
                @endforeach
            </select>
        </form>
        <div class="search_button_sp">
        <a href="#" onclick="clickCourseButtonSp()">検索する</a>
        </div>
    </div>
    <div class="search_counter_sp">
        ゴルフ場検索結果：全 <span class="search_count_sp">{{ $course_list->total() }}</span>
        件中{{ ($course_list->currentPage() -1) * $course_list->perPage() + 1}}～{{ (($course_list->currentPage() -1) * $course_list->perPage() + 1) + (count($course_list) -1) }}件を表示中
    </div>
    {{ $course_list->links('pagination::default_sp') }}
    @foreach ($course_list as $course)
        <a href="{{ route('course.show', ['id' => $course->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/course_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    <div class="area_mark_sp">{{ $course->pref }}</div>
                    <div class="box_title_sp">{{ $course->name }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($course->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    @if($course_list->total() > 0)
    <div class="search_counter_sp">
        ゴルフ場検索結果：全 <span class="search_count_sp">{{ $course_list->total() }}</span>
        件中{{ ($course_list->currentPage() -1) * $course_list->perPage() + 1}}～{{ (($course_list->currentPage() -1) * $course_list->perPage() + 1) + (count($course_list) -1) }}件を表示中
    </div>
    {{ $course_list->links('pagination::default_sp') }}
    @endif
</div>


@endsection