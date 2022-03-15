@extends('layouts.app')

@section('content')
<div class="top_content header_margin">
    <img src="{{ asset('img/top1.png') }}" class="top_img1" alt="">
    <img src="{{ asset('img/top2.png') }}" class="top_img2" alt="">
    <a href="{{ route('search') }}"><img src="{{ asset('img/search_btn.png') }}" class="search_btn" alt=""></a>
    <img src="{{ asset('img/top3.png') }}" class="top_img3" alt="">
    <a href=""><img src="{{ asset('img/event_btn.png') }}" class="event_btn" alt=""></a>
</div>

<div class="content_div">
    <div class="title_text">
        <span class="title_black">Pickup </span><span class="title_pink">GOLJO</span>
        <div class="title_ja">－　ピップアップゴル嬢　－</div>
        <div class="title_text2">
            GOLJOが自信を持ってオススメする全国の美人キャバ嬢達のフォトグラビアコンテンツ！！<br>
            キャバ嬢グラビアを12件ピックアップして表示しています。
        </div>
    </div>
    <ul class="slider">
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl3.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl4.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
    </ul>
</div>

<div class="content_div_bg">
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
                    <div class="top_news_title">{{ $news->title }}</div>
                    <div class="top_news_text">
                    {!! nl2br(e($news->content)) !!}
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <a href="{{ route('news') }}"><img src="{{ asset('img/more_btn.png') }}" class="more_btn" alt=""></a>
</div>




<div class="content_div">
    <div class="title_text">
        <span class="title_pink">GOLJO </span><span class="title_black">Ranking</span>
        <div class="title_ja">－　ゴル嬢ランキング　－</div>
        <div class="title_text2">GOLJOに所属しているキャバ嬢達の総ページアクセスランキング上位5名を表示しています。</div>
    </div>
    <div class="top_ranking_list">
        <div class="top_ranking_content">
            <img src="{{ asset('img/girl1.png') }}" class="top_ranking_img" alt="">
            <img src="{{ asset('img/rank1.png') }}" class="top_rank_mark" alt="">
            <div class="top_ranking_text"><span class="rank_up_color">↑</span>前回2位</div>
            <div class="top_ranking_name">丸々 まる子</div>
        </div>
        <div class="top_ranking_content">
            <img src="{{ asset('img/girl2.png') }}" class="top_ranking_img" alt="">
            <img src="{{ asset('img/rank2.png') }}" class="top_rank_mark" alt="">
            <div class="top_ranking_text"><span class="rank_up_color">↑</span>前回56位</div>
            <div class="top_ranking_name">丸々 まる子</div>
        </div>
        <div class="top_ranking_content">
            <img src="{{ asset('img/girl3.png') }}" class="top_ranking_img" alt="">
            <img src="{{ asset('img/rank3.png') }}" class="top_rank_mark" alt="">
            <div class="top_ranking_text"><span class="rank_down_color">↓</span>前回1位</div>
            <div class="top_ranking_name">丸々 まる子</div>
        </div>
        <div class="top_ranking_content">
            <img src="{{ asset('img/girl4.png') }}" class="top_ranking_img" alt="">
            <img src="{{ asset('img/rank4.png') }}" class="top_rank_mark" alt="">
            <div class="top_ranking_text"><span class="rank_down_color">↓</span>前回2位</div>
            <div class="top_ranking_name">丸々 まる子</div>
        </div>
        <div class="top_ranking_content">
            <img src="{{ asset('img/girl1.png') }}" class="top_ranking_img" alt="">
            <img src="{{ asset('img/rank5.png') }}" class="top_rank_mark" alt="">
            <div class="top_ranking_text"><span class="rank_down_color">↓</span>前回3位</div>
            <div class="top_ranking_name">丸々 まる子</div>
        </div>
    </div>
    <a href=""><img src="{{ asset('img/more_btn.png') }}" class="more_btn" alt=""></a>

</div>

<div class="content_div_bg">
    <div class="title_text">
        <span class="title_black">Fashion </span><span class="title_pink">Catalog</span>
        <div class="title_ja">－　ファッションカタログ　－</div>
        <div class="title_text2">GOLJOが自信を持ってオススメする全国の美人キャバ嬢達のファッションフォトコンテンツ！！</div>
    </div>
    <ul class="slider slider_catalog">
        <li><img src="{{ asset('img/catalog1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/catalog2.png') }}" alt=""></li>
        <li><img src="{{ asset('img/catalog3.png') }}" alt=""></li>
        <li><img src="{{ asset('img/catalog4.png') }}" alt=""></li>
        <li><img src="{{ asset('img/catalog1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/catalog2.png') }}" alt=""></li>
    </ul>
    <a href=""><img src="{{ asset('img/more_btn.png') }}" class="more_btn" alt=""></a>

</div>

@endsection