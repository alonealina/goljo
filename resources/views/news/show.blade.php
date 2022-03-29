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


@section('content_sp')
<div class="content_div_bg_sp header_margin_sp">
    <div class="title_text">
        <span class="title_black_sp">New</span><span class="title_pink_sp">s</span>
        <div class="title_ja_sp">－　ゴル嬢ニュース　－</div>
        <div class="title_text2_sp">
            GOLJOからのキャバ嬢・ゴルフ等の関連ニュースや<br>
            ファッションリリース情報をお知らせ！
        </div>
    </div>
    <div class="detail_div_sp">
        <img src="{{ asset('img/news_detail1_sp.png') }}" class="detail_img_sp" alt="">
        @if($news->genre == 1)
        <div class="info_mark_sp" style="margin-top:30px;">INFO</div>
        @elseif($news->genre == 2)
        <div class="golf_mark_sp" style="margin-top:30px;">GOLF</div>
        @elseif($news->genre == 3)
        <div class="lady_mark_sp" style="margin-top:30px;">LADY</div>
        @endif
        <div class="detail_date_sp">{{ $news->notice_date }}</div>
        <div class="detail_title_sp">{{ $news->title }}</div>
        <div class="detail_content_sp">{!! nl2br(e($news->content)) !!}</div>
        <div class="news_btn_list_sp">
            @if(!$max_flg)
            <a href="{{ route('news.show', ['id' => $back_id]) }}" class="news_prev_btn">
                <img src="{{ asset('img/news_prev.png') }}" class="news_btn_sp" alt="">
            </a>
            @endif
            @if(!$min_flg)
            <a href="{{ route('news.show', ['id' => $next_id]) }}" class="news_next_btn">
                <img src="{{ asset('img/news_next.png') }}" class="news_btn_sp" alt="">
            </a>
            @endif
        </div>
    </div>
</div>


@endsection