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
        <span class="catalog_black">近くの</span><span class="catalog_pink">ゴルフ練習場</span><span class="catalog_black">情報はこちら</span>
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


