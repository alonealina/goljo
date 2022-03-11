@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_pink">GOLJO </span><span class="title_black">Ranking</span>
        <div class="title_ja">－　ゴル嬢ランキング　－</div>
        <div class="title_text2">
            GOLJOに所属しているキャバ嬢達の総ページアクセスランキング上位10名を表示しています。
        </div>
    </div>
</div>
<img src="{{ asset('img/ranking1.png') }}" class="main_img" alt="">

<div class="content_div_bg">
    <div class="ranking_list">
        <div class="ranking_list_item">
            <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank1.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank2.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank3.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank4.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank5.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank6.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank7.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank8.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank9.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="ranking_list_item">
            <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
            <img src="{{ asset('img/rank10.png') }}" class="rank_mark" alt="">
            <div class="ranking_list_name">丸々 まる子</div>
            <div class="ranking_list_area">キャバクラ 〇〇店</div>
        </div>
    </div>

</div>


@endsection