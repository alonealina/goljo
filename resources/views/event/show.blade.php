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
        <span class="serif_black">最近の</span><span class="serif_pink">イベント</span><span class="serif_black">情報はこちら</span>
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


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_pink_sp">GOLJO </span><span class="title_black_sp">Event</span>
        <div class="title_ja_sp">－　イベント情報　－</div>
        <div class="title_text2_sp">
            GOLJOから各イベント情報のお知らせ
        </div>
    </div>
</div>
<img src="{{ asset('img/event1_sp.png') }}" class="main_img_sp" alt="">

<div class="content_div_bg_sp">
    <div class="detail_div_sp">
        <img src="{{ asset('img/event_detail1_sp.png') }}" class="detail_img_sp" alt="">
        <div class="detail_date_sp">{{ $event->notice_date }}</div>
        <div class="detail_title_sp">{{ $event->title }}</div>
        <div class="detail_content_sp">{!! nl2br(e($event->content1)) !!}</div>
        <img src="{{ asset('img/event_detail2_sp.png') }}" class="detail_img_sp" alt="">
        <div class="detail_content_sp">{!! nl2br(e($event->content2)) !!}</div>
        <img src="{{ asset('img/event_detail3_sp.png') }}" class="detail_img_sp" alt="">
    </div>
    <div class="serif_title_sp">
        <span class="serif_black_sp">最近の</span><span class="serif_pink_sp">イベント</span><span class="serif_black_sp">情報はこちら</span>
    </div>
    @foreach ($event_list as $event)
        <a href="{{ route('event.show', ['id' => $event->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/news_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    <div class="box_date_sp">{{ $event->notice_date }}</div>
                    <div class="box_title_sp">{{ $event->title }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($event->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach

</div>


@endsection