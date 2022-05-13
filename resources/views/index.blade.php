@extends('layouts.app')

@section('content')
<div class="top_content header_margin">
    <img src="{{ asset('img/top1.png') }}" class="top_img1" alt="">
    <img src="{{ asset('img/top2.png') }}" class="top_img2" alt="">
    <a href="{{ route('search') }}"><img src="{{ asset('img/search_btn.png') }}" class="search_btn" alt=""></a>
    <img src="{{ asset('img/top3.png') }}" class="top_img3" alt="">
    <a href="{{ route('event') }}" id="pickup"><img src="{{ asset('img/event_btn.png') }}" class="event_btn" alt=""></a>
</div>

<div class="content_div">
    <div class="title_text">
        <span class="title_black">Pickup </span><span class="title_pink">GOLJO</span>
        <div class="title_ja">－　ピップアップゴル嬢　－</div>
        <div class="title_text2">
            GOLJOが自信を持ってオススメする全国の美人キャバ嬢達のフォトグラビアコンテンツ！！<br>
            キャバ嬢グラビアをピックアップして表示しています。
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
            <a href="{{ route('girl.show', ['id' => $girl_rank[0]->id ]) }}">
                <img src="{{ asset('img/girl1.png') }}" class="top_ranking_img" alt="">
                <img src="{{ asset('img/rank1.png') }}" class="top_rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[0]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[0]->kyaba_name }}</div>
            </a>
        </div>
        <div class="top_ranking_content">
            <a href="{{ route('girl.show', ['id' => $girl_rank[1]->id ]) }}">
                <img src="{{ asset('img/girl2.png') }}" class="top_ranking_img" alt="">
                <img src="{{ asset('img/rank2.png') }}" class="top_rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[1]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[1]->kyaba_name }}</div>
            </a>
        </div>
        <div class="top_ranking_content">
            <a href="{{ route('girl.show', ['id' => $girl_rank[2]->id ]) }}">
                <img src="{{ asset('img/girl3.png') }}" class="top_ranking_img" alt="">
                <img src="{{ asset('img/rank3.png') }}" class="top_rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[2]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[2]->kyaba_name }}</div>
            </a>
        </div>
        <div class="top_ranking_content">
            <a href="{{ route('girl.show', ['id' => $girl_rank[3]->id ]) }}">
                <img src="{{ asset('img/girl4.png') }}" class="top_ranking_img" alt="">
                <img src="{{ asset('img/rank4.png') }}" class="top_rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[3]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[3]->kyaba_name }}</div>
            </a>
        </div>
        <div class="top_ranking_content">
            <a href="{{ route('girl.show', ['id' => $girl_rank[4]->id ]) }}">
                <img src="{{ asset('img/girl1.png') }}" class="top_ranking_img" alt="">
                <img src="{{ asset('img/rank5.png') }}" class="top_rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[4]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[4]->kyaba_name }}</div>
            </a>
        </div>
    </div>
    <a href="{{ route('ranking') }}"><img src="{{ asset('img/more_btn.png') }}" class="more_btn" alt=""></a>

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
    <a href="{{ route('catalog') }}"><img src="{{ asset('img/more_btn.png') }}" class="more_btn" alt=""></a>

</div>

@endsection


@section('content_sp')

<div class="top_content header_padding_sp">
    <img src="{{ asset('img/top1_sp.png') }}" class="top_img1" alt="">
    <img src="{{ asset('img/top2_sp.png') }}" class="top_img2" alt="">
    <a href="{{ route('search') }}"><img src="{{ asset('img/search_btn_sp.png') }}" class="search_btn_sp" alt=""></a>
    <img src="{{ asset('img/top3_sp.png') }}" class="top_img3_sp" id="pickup" alt="">
    <a href="{{ route('event') }}"><img src="{{ asset('img/event_btn_sp.png') }}" class="event_btn_sp" alt=""></a>
</div>

<div class="content_div_sp margin_sp1">
    <div class="title_text">
        <span class="title_black_sp">Pickup </span><span class="title_pink_sp">GOLJO</span>
        <div class="title_ja_sp">－　ピップアップゴル嬢　－</div>
        <div class="title_text2_sp">
            GOLJOが自信を持ってオススメする<br>
            全国の美人キャバ嬢達のフォトグラビアコンテンツ！！<br><br>
            キャバ嬢グラビアをピックアップして<br>
            表示しています。
        </div>
    </div>
    <!-- <ul class="slider">
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl3.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl4.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
    </ul> -->
</div>

<div class="content_div_bg_sp">
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
    <a href="{{ route('news') }}"><img src="{{ asset('img/more_btn_sp.png') }}" class="more_btn_sp" alt=""></a>
</div>

<div class="content_div_sp">
    <div class="title_text">
        <span class="title_pink_sp">GOLJO </span><span class="title_black_sp">Ranking</span>
        <div class="title_ja_sp">－　ゴル嬢ランキング　－</div>
        <div class="title_text2_sp">
            GOLJOに所属しているキャバ嬢達の総ページアクセス<br>
            ランキング上位4名を表示しています。
        </div>
    </div>
    <div class="top_ranking_list_sp">
        <div class="top_ranking_content_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[0]->id ]) }}">
                <img src="{{ asset('img/girl1.png') }}" class="top_ranking_img" alt="">
                <div class="top_ranking_name_sp">{{ $girl_rank[0]->name }}</div>
                <div class="top_ranking_area_sp">{{ $girl_rank[0]->kyaba_name }}</div>
            </a>    
        </div>
        <div class="top_ranking_content_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[1]->id ]) }}">
                <img src="{{ asset('img/girl2.png') }}" class="top_ranking_img" alt="">
                <div class="top_ranking_name_sp">{{ $girl_rank[1]->name }}</div>
                <div class="top_ranking_area_sp">{{ $girl_rank[1]->kyaba_name }}</div>
            </a>    
        </div>
        <div class="top_ranking_content_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[2]->id ]) }}">
                <img src="{{ asset('img/girl3.png') }}" class="top_ranking_img" alt="">
                <div class="top_ranking_name_sp">{{ $girl_rank[2]->name }}</div>
                <div class="top_ranking_area_sp">{{ $girl_rank[2]->kyaba_name }}</div>
            </a>    
        </div>
        <div class="top_ranking_content_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[3]->id ]) }}">
                <img src="{{ asset('img/girl4.png') }}" class="top_ranking_img" alt="">
                <div class="top_ranking_name_sp">{{ $girl_rank[3]->name }}</div>
                <div class="top_ranking_area_sp">{{ $girl_rank[3]->kyaba_name }}</div>
            </a>    
        </div>
    </div>
    <a href="{{ route('ranking') }}"><img src="{{ asset('img/more_btn_sp.png') }}" class="more_btn_sp" alt=""></a>
</div>

<div class="content_div_bg_sp">
    <div class="title_text">
        <span class="title_black_sp">Fashion </span><span class="title_pink_sp">Catalog</span>
        <div class="title_ja_sp">－　ファッションカタログ　－</div>
        <div class="title_text2_sp">
        GOLJOが自信を持ってオススメする全国の美人キャバ嬢達の<br>
        ファッションフォトコンテンツ！！
        </div>
    </div>
    <a href="{{ route('catalog') }}"><img src="{{ asset('img/more_btn_sp.png') }}" class="more_btn_sp" alt=""></a>
</div>


@endsection