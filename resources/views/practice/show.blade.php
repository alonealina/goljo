@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_black">Pickup </span><span class="title_pink">Golf Practice</span>
        <div class="title_ja">－　オススメ 練習場　－</div>
        <div class="title_text2">GOLJOからオススメゴルフ練習場を紹介！</div>
    </div>
</div>
<img src="{{ asset('img/course1.png') }}" class="main_img" alt="">

<div class="content_div_bg">
    <div class="detail_div">
        <img src="{{ asset('img/course_detail1.png') }}" class="detail_img" alt="">
        <div class="area_mark">{{ $practice->pref }}</div>
        <div class="detail_title">{{ $practice->name }}</div>
        <div class="detail_content">{!! nl2br(e($practice->content1)) !!}</div>
        <img src="{{ asset('img/course_detail2.png') }}" class="detail_img" alt="">
        <div class="detail_content">{!! nl2br(e($practice->content2)) !!}</div>
        <img src="{{ asset('img/course_detail3.png') }}" class="detail_img" alt="">
    </div>

    <div class="recent_div">
        <span class="serif_black">近くの</span><span class="serif_pink">ゴルフ練習場</span><span class="serif_black">情報はこちら</span>
        <div class="recent_list">
            @foreach ($practice_list as $practice)
            <a href="{{ route('event.show', ['id' => $practice->id]) }}" class="recent_a">
                <div class="recent_list_box">
                    <img src="{{ asset('img/course_img.png') }}" class="recent_list_img" alt="">
                    <div class="recent_box_content">
                        <div class="area_mark">{{ $practice->pref }}</div>
                        <div class="recent_title">{{ $practice->name }}</div>
                        <div class="recent_text">
                        {!! nl2br(e($practice->content1)) !!}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_black_sp">Pickup </span><span class="title_pink_sp">Golf Practice</span>
        <div class="title_ja_sp">－　オススメ 練習場　－</div>
        <div class="title_text2_sp">
            GOLJOからオススメゴルフ練習場を紹介！
        </div>
    </div>
</div>
<img src="{{ asset('img/course1_sp.png') }}" class="main_img_sp" alt="">

<div class="content_div_bg_sp">
    <div class="detail_div_sp">
        <img src="{{ asset('img/course_detail1_sp.png') }}" class="detail_img_sp" alt="">
        <div class="area_mark_sp" style="margin-top:30px;">{{ $practice->pref }}</div>
        <div class="detail_title_sp">{{ $practice->name }}</div>
        <div class="detail_content_sp">{!! nl2br(e($practice->content1)) !!}</div>
        <img src="{{ asset('img/course_detail2_sp.png') }}" class="detail_img_sp" alt="">
        <div class="detail_content_sp">{!! nl2br(e($practice->content2)) !!}</div>
        <img src="{{ asset('img/course_detail3_sp.png') }}" class="detail_img_sp" alt="">
    </div>
    <div class="serif_title_sp">
        <span class="serif_black_sp">近くの</span><span class="serif_pink_sp">ゴルフ練習場</span><span class="serif_black_sp">の情報はこちら</span>
    </div>
    @foreach ($practice_list as $practice)
        <a href="{{ route('course.show', ['id' => $practice->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/course_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    <div class="area_mark_sp">{{ $practice->pref }}</div>
                    <div class="box_title_sp">{{ $practice->name }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($practice->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach

</div>


@endsection