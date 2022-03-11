@extends('layouts.app')

@section('content')
<div class="content_div_black header_margin">
    <div class="title_text">
        <span class="title_white">Fashion </span><span class="title_pink">Catalog</span>
        <div class="title_ja">－　ファッションカタログ　－</div>
        <div class="title_text_white">GOLJOが自信を持ってオススメする全国の美人キャバ嬢達のファッションフォトコンテンツ！！</div>
    </div>
</div>

<!-- スライドショー -->
<div class="catalog_title">
    <span class="catalog_pink">COORDINATE</span><span class="catalog_black">一覧</span>
</div>

<div class="catalog_list">
    <div class="catalog_list_box">
        <img src="{{ asset('img/catalog1.png') }}" class="catalog_box_img" alt="">
        <div class="catalog_box_text">水玉 × ホワイト</div>
    </div>
    <div class="catalog_list_box">
        <img src="{{ asset('img/catalog2.png') }}" class="catalog_box_img" alt="">
        <div class="catalog_box_text">ブルー × ホワイト</div>
    </div>
    <div class="catalog_list_box">
        <img src="{{ asset('img/catalog3.png') }}" class="catalog_box_img" alt="">
        <div class="catalog_box_text">レッド × ホワイト</div>
    </div>
    <div class="catalog_list_box">
        <img src="{{ asset('img/catalog4.png') }}" class="catalog_box_img" alt="">
        <div class="catalog_box_text">アイボリー × ホワイト</div>
    </div>
</div>

<div class="catalog_title">
    <span class="catalog_pink">ベスト</span><span class="catalog_black">アイテム</span>
</div>

<div class="best_item">
    <img src="{{ asset('img/preview1.png') }}" class="preview_main_img" alt="">
    <div class="preview_list">
        <div class="preview_list_box1">
            <img src="{{ asset('img/preview1.png') }}" class="catalog_box_img" alt="">
            <div class="preview_box_text">ホワイトパンツ</div>
        </div>
        <div class="preview_list_box2">
            <img src="{{ asset('img/preview2.png') }}" class="catalog_box_img" alt="">
            <div class="preview_box_text">ホワイトスカート</div>
        </div>
        <div class="preview_list_box3">
            <img src="{{ asset('img/preview3.png') }}" class="catalog_box_img" alt="">
            <div class="preview_box_text">ブルーシャツ</div>
        </div>
        <div class="preview_list_box4">
            <img src="{{ asset('img/preview4.png') }}" class="catalog_box_img" alt="">
            <div class="preview_box_text">チェックチャツ</div>
        </div>
    </div>
</div>


@endsection