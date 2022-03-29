@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_text">
        <span class="title_black">New</span><span class="title_pink">s</span>
        <div class="title_ja">－　ゴル嬢ニュース　－</div>
        <div class="title_text2">GOLJOからのキャバ嬢・ゴルフ等の関連ニュースやファッションリリース情報をお知らせ！</div>
    </div>
    <div class="news_list">
        @foreach ($news_list as $news)
        <a href="{{ route('news.show', ['id' => $news->id]) }}" class="news_a">
            <div class="news_list_box">
                <img src="{{ asset('img/news_img.png') }}" class="top_news_img" alt="">
                <div class="news_box_content">
                    @if($news->genre == 1)
                    <div class="info_mark">INFO</div>
                    @elseif($news->genre == 2)
                    <div class="golf_mark">GOLF</div>
                    @elseif($news->genre == 3)
                    <div class="lady_mark">LADY</div>
                    @endif
                    <div class="top_news_date">{{ $news->notice_date }}</div>
                    <div class="top_news_title">{{ $news->title }}</div>
                    <div class="top_news_text">
                    {!! nl2br(e($news->content)) !!}
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="page_div_news">
        <div class="search_counter">
            ニュース検索結果：全 <span class="search_count">{{ $news_list->total() }}</span>
            件中{{ ($news_list->currentPage() -1) * $news_list->perPage() + 1}}～{{ (($news_list->currentPage() -1) * $news_list->perPage() + 1) + (count($news_list) -1) }}件を表示中
        </div>
        {{ $news_list->links('pagination::default') }}
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
    @foreach ($news_list as $news)
        <a href="{{ route('news.show', ['id' => $news->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/news_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    @if($news->genre == 1)
                    <div class="info_mark_sp">INFO</div>
                    @elseif($news->genre == 2)
                    <div class="golf_mark_sp">GOLF</div>
                    @elseif($news->genre == 3)
                    <div class="lady_mark_sp">LADY</div>
                    @endif
                    <div class="box_date_sp">{{ $news->notice_date }}</div>
                    <div class="box_title_sp">{{ $news->title }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($news->content)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <div class="search_counter_sp">
        ニュース検索結果：全 <span class="search_count_sp">{{ $news_list->total() }}</span>
        件中{{ ($news_list->currentPage() -1) * $news_list->perPage() + 1}}～{{ (($news_list->currentPage() -1) * $news_list->perPage() + 1) + (count($news_list) -1) }}件を表示中
    </div>
    {{ $news_list->links('pagination::default_sp') }}
</div>


@endsection