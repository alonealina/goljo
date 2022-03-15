@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="detail_div">
        <img src="{{ asset('img/news_detail1.png') }}" class="detail_img" alt="">
        <div class="detail_date">{{ $news->notice_date }}</div>
        @if($news->genre == 1)
        <div class="info_mark">INFO</div>
        @elseif($news->genre == 2)
        <div class="golf_mark">GOLF</div>
        @elseif($news->genre == 3)
        <div class="lady_mark">LADY</div>
        @endif
        <div class="detail_title">{{ $news->title }}</div>
        <div class="detail_content">{!! nl2br(e($news->content)) !!}</div>
        <div class="news_btn_list">
            @if(!$max_flg)
            <a href="{{ route('news.show', ['id' => $back_id]) }}" class="news_prev_btn">
                <img src="{{ asset('img/news_prev.png') }}" class="" alt="">
            </a>
            @endif
            @if(!$min_flg)
            <a href="{{ route('news.show', ['id' => $next_id]) }}" class="news_next_btn">
                <img src="{{ asset('img/news_next.png') }}" class="" alt="">
            </a>
            @endif
        </div>
    </div>
</div>

@endsection


