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
        <select name="name" class="select_name2">
            <option value="">名前や詳細条件で検索</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
        </select>
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