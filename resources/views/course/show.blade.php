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
    <div class="detail_div">
        <img src="{{ asset('img/course_detail1.png') }}" class="detail_img" alt="">
        <div class="area_mark">{{ $course->pref }}</div>
        <div class="detail_title">{{ $course->name }}</div>
        <div class="detail_content">{!! nl2br(e($course->content1)) !!}</div>
        <img src="{{ asset('img/course_detail2.png') }}" class="detail_img" alt="">
        <div class="detail_content">{!! nl2br(e($course->content2)) !!}</div>
        <img src="{{ asset('img/course_detail3.png') }}" class="detail_img" alt="">
    </div>

    <div class="recent_div">
        <span class="serif_black">近くの</span><span class="serif_pink">ゴルフ場</span><span class="serif_black">情報はこちら</span>
        <div class="recent_list">
            @if(count($course_list) == 0)
            ありません
            @else
            @foreach ($course_list as $course)
            <a href="{{ route('course.show', ['id' => $course->id]) }}" class="recent_a">
                <div class="recent_list_box">
                    <img src="{{ asset('img/course_img.png') }}" class="recent_list_img" alt="">
                    <div class="recent_box_content">
                        <div class="area_mark">{{ $course->pref }}</div>
                        <div class="recent_title">{{ $course->name }}</div>
                        <div class="recent_text">
                        {!! nl2br(e($course->content1)) !!}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        </div>
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
    <div class="detail_div_sp">
        <img src="{{ asset('img/course_detail1_sp.png') }}" class="detail_img_sp" alt="">
        <div class="area_mark_sp" style="margin-top:30px;">{{ $course->pref }}</div>
        <div class="detail_title_sp">{{ $course->name }}</div>
        <div class="detail_content_sp">{!! nl2br(e($course->content1)) !!}</div>
        <img src="{{ asset('img/course_detail2_sp.png') }}" class="detail_img_sp" alt="">
        <div class="detail_content_sp">{!! nl2br(e($course->content2)) !!}</div>
        <img src="{{ asset('img/course_detail3_sp.png') }}" class="detail_img_sp" alt="">
    </div>
    <div class="serif_title_sp">
        <span class="serif_black_sp">近くの</span><span class="serif_pink_sp">ゴルフ場</span><span class="serif_black_sp">の情報はこちら</span>
    </div>
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

</div>


@endsection