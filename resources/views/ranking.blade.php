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
            <a href="{{ route('girl.show', ['id' => $girl_rank[0]->id ]) }}">
                <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank1.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[0]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[0]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[1]->id ]) }}">
                <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank2.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[1]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[1]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[2]->id ]) }}">
                <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank3.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[2]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[2]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[3]->id ]) }}">
                <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank4.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[3]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[3]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[4]->id ]) }}">
                <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank5.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[4]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[4]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[5]->id ]) }}">
                <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank6.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[5]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[5]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[6]->id ]) }}">
                <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank7.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[6]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[6]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[7]->id ]) }}">
                <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank8.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[7]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[7]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[8]->id ]) }}">
                <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank9.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[8]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[8]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item">
            <a href="{{ route('girl.show', ['id' => $girl_rank[9]->id ]) }}">
                <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank10.png') }}" class="rank_mark" alt="">
                <div class="ranking_list_name">{{ $girl_rank[9]->name }}</div>
                <div class="ranking_list_area">{{ $girl_rank[9]->kyaba_name }}</div>
            </a>
        </div>
    </div>
</div>

@endsection


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_pink_sp">GOLJO </span><span class="title_black_sp">Ranking</span>
        <div class="title_ja_sp">－　ゴル嬢ランキング　－</div>
        <div class="title_text2_sp">
            GOLJOに所属しているキャバ嬢達の総ページアクセス<br>
            ランキング上位10名を表示しています。
        </div>
    </div>
</div>
<img src="{{ asset('img/ranking1_sp.png') }}" class="main_img_sp" alt="">

<div class="content_div_bg_sp">
    <div class="ranking_list_sp">
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[0]->id ]) }}">
                <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank1.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[0]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[0]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[1]->id ]) }}">
                <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank2.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[1]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[1]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[2]->id ]) }}">
                <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank3.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[2]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[2]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[3]->id ]) }}">
                <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank4.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[3]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[3]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[4]->id ]) }}">
                <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank5.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[4]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[4]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[5]->id ]) }}">
                <img src="{{ asset('img/search1.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank6.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[5]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[5]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[6]->id ]) }}">
                <img src="{{ asset('img/search2.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank7.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[6]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[6]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[7]->id ]) }}">
                <img src="{{ asset('img/search3.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank8.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[7]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[7]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[8]->id ]) }}">
                <img src="{{ asset('img/search4.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank9.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[8]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[8]->kyaba_name }}</div>
            </a>
        </div>
        <div class="ranking_list_item_sp">
            <a href="{{ route('girl.show', ['id' => $girl_rank[9]->id ]) }}">
                <img src="{{ asset('img/search5.png') }}" class="ranking_list_img" alt="">
                <img src="{{ asset('img/rank10.png') }}" class="rank_mark_sp" alt="">
                <div class="ranking_list_name_sp">{{ $girl_rank[9]->name }}</div>
                <div class="ranking_list_area_sp">{{ $girl_rank[9]->kyaba_name }}</div>
            </a>
        </div>
    </div>

</div>


@endsection