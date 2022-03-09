@extends('layouts.app')

@section('content')
<div class="top_content">
    <img src="{{ asset('img/top1.png') }}" class="top_img1" alt="">
    <img src="{{ asset('img/top2.png') }}" class="top_img2" alt="">
    <a href=""><img src="{{ asset('img/search_btn.png') }}" class="search_btn" alt=""></a>
    <img src="{{ asset('img/top3.png') }}" class="top_img3" alt="">
    <a href=""><img src="{{ asset('img/event_btn.png') }}" class="event_btn" alt=""></a>
</div>

<div class="top_pickup">
    <div class="pickup_text">
        <span class="pickup_black">Pickup </span><span class="pickup_pink">GOLJO</span>
        <div class="pickup_ja">－　ピップアップゴル嬢　－</div>
        <div class="pickup_text2">GOLJOが自信を持ってオススメする全国の美人キャバ嬢達のフォトグラビアコンテンツ！！<br>
        キャバ嬢グラビアを12件ピックアップして表示しています。</div>
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

@endsection