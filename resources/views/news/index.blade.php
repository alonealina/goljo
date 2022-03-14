@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_text">
        <span class="title_black">New</span><span class="title_pink">s</span>
        <div class="title_ja">－　ゴル嬢ニュース　－</div>
        <div class="title_text2">GOLJOからのキャバ嬢・ゴルフ等の関連ニュースやファッションリリース情報をお知らせ！</div>
    </div>
    <div class="top_news_list">
        @foreach ($news_list as $news)
        <a href="{{ route('news.show', ['id' => $news->id]) }}" class="news_a">
            <div class="top_news_box">
                <img src="{{ asset('img/news_img.png') }}" class="top_news_img" alt="">
                <div class="top_news_content">
                    <div class="info_mark">INFO</div>
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
        {{ $news_list->links() }}
    </div>
</div>


@endsection