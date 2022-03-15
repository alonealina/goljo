@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_pink">GOLJO </span><span class="title_black">Event</span>
        <div class="title_ja">－　イベント情報　－</div>
        <div class="title_text2">GOLJOから各イベント情報のお知らせ</div>
    </div>
</div>
<img src="{{ asset('img/event1.png') }}" class="main_img" alt="">

<div class="content_div_bg">
    <div class="detail_div">
        <img src="{{ asset('img/event_detail1.png') }}" class="detail_img" alt="">
        <div class="detail_date">{{ $event->notice_date }}</div>
        <div class="detail_title">{{ $event->title }}</div>
        <div class="detail_content">{!! nl2br(e($event->content1)) !!}</div>
        <img src="{{ asset('img/event_detail2.png') }}" class="detail_img" alt="">
        <div class="detail_content">{!! nl2br(e($event->content2)) !!}</div>
        <img src="{{ asset('img/event_detail3.png') }}" class="detail_img" alt="">
    </div>

    <div class="recent_div">
        <span class="catalog_black">最近の</span><span class="catalog_pink">イベント</span><span class="catalog_black">情報はこちら</span>
        <div class="recent_list">
            @foreach ($event_list as $event)
            <a href="{{ route('event.show', ['id' => $event->id]) }}" class="recent_a">
                <div class="recent_list_box">
                    <img src="{{ asset('img/news_img.png') }}" class="recent_list_img" alt="">
                    <div class="recent_box_content">
                        <div class="recent_date">{{ $event->notice_date }}</div>
                        <div class="recent_title">{{ $event->title }}</div>
                        <div class="recent_text">
                        {!! nl2br(e($event->content1)) !!}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection


