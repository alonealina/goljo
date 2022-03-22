@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="girl_img_div">
        <img src="{{ asset('img/girl_img1.png') }}" id="main1" class="girl_detail_img" alt="">
        <img src="{{ asset('img/dummy.png') }}"     id="main2" class="girl_detail_img" alt="" hidden>
        <img src="{{ asset('img/dummy.png') }}"     id="main3" class="girl_detail_img" alt="" hidden>
        <div class="girl_tmb_list"> 
            <img src="{{ asset('img/girl_img1.png') }}" class="girl_tmb tmb1" alt="">
            <img src="{{ asset('img/dummy.png') }}"     class="girl_tmb tmb2" alt="">
            <img src="{{ asset('img/dummy.png') }}"     class="girl_tmb tmb3" alt="">
        </div>
    </div>
    <div class="girl_name">{{ $girl->name }}</div>
    <div class="girl_name_r">－　{{ $girl->name_r }}　－</div>
    <div class="girl_profile_div">
        <div class="girl_profile_box">
            <div class="girl_profile_q">身長</div>
            <div class="girl_profile_a">{{ $girl->height }} cm</div>
        </div>
        <div class="girl_profile_box">
            <div class="girl_profile_q">足のサイズ</div>
            <div class="girl_profile_a">{{ $girl->foot_size }} cm</div>
        </div>
        <div class="girl_profile_box">
            <div class="girl_profile_q">よく行くゴルフエリア</div>
            <div class="girl_profile_a">{{ $girl->area }}</div>
        </div>
        <div class="girl_profile_box">
            <div class="girl_profile_q">得意なクラブ</div>
            <div class="girl_profile_a">{{ $girl->club }}</div>
        </div>
        <div class="girl_profile_box">
            <div class="girl_profile_q">ドライバーの飛距離</div>
            <div class="girl_profile_a">{{ $girl->flying_yard }} Y</div>
        </div>
        <div class="girl_profile_box">
            <div class="girl_profile_q">ベストスコア</div>
            <div class="girl_profile_a">{{ $girl->best_score }}</div>
        </div>
    </div>

    <div class="girl_profile_black">
        <div class="girl_fav_title">使用クラブメーカー</div>
        <div class="girl_fav_title">好きなウェアブランド</div>
        <div class="girl_fav_title">好きなシューズメーカー</div>
        <div class="girl_fav_content">Dr：{{ $girl->dr }}</div>
        <div class="girl_fav_content">1. {{ $girl->brand1 }}</div>
        <div class="girl_fav_content">1. {{ $girl->shoes1 }}</div>
        <div class="girl_fav_content">Ir：{{ $girl->ir }}</div>
        <div class="girl_fav_content">2. {{ $girl->brand2 }}</div>
        <div class="girl_fav_content">2. {{ $girl->shoes2 }}</div>
        <div class="girl_fav_content">Pt：{{ $girl->pt }}</div>
        <div class="girl_fav_content">3. {{ $girl->brand3 }}</div>
        <div class="girl_fav_content">3. {{ $girl->shoes3 }}</div>
    </div>

    <div class="girl_sns">
        <a href="https://twitter.com/{{ $girl->twitter }}"><img src="{{ asset('img/twitter.png') }}" class="" alt=""></a>
        <a href="https://www.instagram.com/{{ $girl->insta }}"><img src="{{ asset('img/insta.png') }}" class="" alt=""></a>
        <a href=""><img src="{{ asset('img/match.png') }}" class="" alt=""></a>
    </div>

    <div class="girl_title">
        <span class="serif_pink">同じエリア</span><span class="serif_black">の女の子</span>
    </div>
    <div class="girl_list">
        <div class="girl_content">
            <img src="{{ asset('img/girl1.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl2.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl3.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl4.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
    </div>

    <div class="girl_title">
        <span class="serif_pink">今注目</span><span class="serif_black">の女の子</span>
    </div>
    <div class="girl_list">
        <div class="girl_content">
            <img src="{{ asset('img/girl1.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl2.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl3.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_content">
            <img src="{{ asset('img/girl4.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name">丸々 まる子</div>
            <div class="girl_list_area">キャバクラ 〇〇店</div>
        </div>
    </div>
</div>

@endsection


@section('content_sp')
<div class="content_div_bg_sp header_margin_sp">
    <!-- <ul class="slider_sp">
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl_img1.png') }}" alt=""></li>
    </ul> -->
    <div class="girl_name_sp">{{ $girl->name }}</div>
    <div class="girl_name_r_sp">－　{{ $girl->name_r }}　－</div>
    <div class="girl_profile_div_sp">
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">身長</div>
            <div class="girl_profile_a">{{ $girl->height }} cm</div>
        </div>
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">足のサイズ</div>
            <div class="girl_profile_a">{{ $girl->foot_size }} cm</div>
        </div>
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">よく行くゴルフエリア</div>
            <div class="girl_profile_a">{{ $girl->area }}</div>
        </div>
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">得意なクラブ</div>
            <div class="girl_profile_a">{{ $girl->club }}</div>
        </div>
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">ドライバーの飛距離</div>
            <div class="girl_profile_a">{{ $girl->flying_yard }} Y</div>
        </div>
        <div class="girl_profile_box_sp">
            <div class="girl_profile_q">ベストスコア</div>
            <div class="girl_profile_a">{{ $girl->best_score }}</div>
        </div>
    </div>

    <div class="girl_profile_black_sp">
        使用クラブメーカー<br>
        Dr：{{ $girl->dr }}<br>
        Ir：{{ $girl->ir }}<br>
        Pt：{{ $girl->pt }}<br><br>
        好きなウェアブランド<br>
        1. {{ $girl->brand1 }}<br>
        2. {{ $girl->brand2 }}<br>
        3. {{ $girl->brand3 }}<br><br>
        好きなシューズメーカー<br>
        1. {{ $girl->shoes1 }}<br>
        2. {{ $girl->shoes2 }}<br>
        3. {{ $girl->shoes3 }}
    </div>

    <div class="girl_sns_sp">
        <a href="https://twitter.com/{{ $girl->twitter }}"><img src="{{ asset('img/twitter.png') }}" class="" alt=""></a>
        <a href="https://www.instagram.com/{{ $girl->insta }}"><img src="{{ asset('img/insta.png') }}" class="" alt=""></a>
        <a href=""><img src="{{ asset('img/match.png') }}" class="" alt=""></a>
    </div>

    <div class="girl_title_sp">
        <span class="serif_pink_sp">同じエリア</span><span class="serif_black_sp">の女の子</span>
    </div>
    <div class="girl_list_sp">
        <div class="girl_profile_item_sp">
            <img src="{{ asset('img/search1.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name_sp">丸々 まる子</div>
            <div class="girl_list_area_sp">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_profile_item_sp">
            <img src="{{ asset('img/search2.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name_sp">丸々 まる子</div>
            <div class="girl_list_area_sp">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_profile_item_sp">
            <img src="{{ asset('img/search3.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name_sp">丸々 まる子</div>
            <div class="girl_list_area_sp">キャバクラ 〇〇店</div>
        </div>
        <div class="girl_profile_item_sp">
            <img src="{{ asset('img/search4.png') }}" class="girl_list_img" alt="">
            <div class="girl_list_name_sp">丸々 まる子</div>
            <div class="girl_list_area_sp">キャバクラ 〇〇店</div>
        </div>
    </div>


</div>


@endsection