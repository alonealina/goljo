@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_pink">GOLJO </span><span class="title_black">Event</span>
        <div class="title_ja">－　イベント情報　－</div>
        <div class="title_text2">GOLJOから各イベント情報のお知らせ</div>
    </div>
</div>
<img src="{{ asset('img/event1.png') }}" class="main_img" alt="">

<div class="content_div_bg">
    <div class="search_form2">
        <select name="name" class="select_name2">
            <option value="">名前や詳細条件で検索</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
        </select>
    </div>
    <div class="page_div">
        <div class="search_counter">
            イベント検索結果：全 <span class="search_count">53</span> 件中1～5件を表示中
        </div>
    </div>
    <div class="search_list2">
        <div class="search_list_box">
            <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
            <div class="search_box_content">
                <div class="search_box_date">2022-03-03</div>
                <div class="search_box_title">イベントのお知らせ</div>
                <div class="search_box_text">
                    このたび、弊社ホームページを公開させていただきました。<br><br>
                    お客様におかれましては、より使いやすく、わかりやすいものとなるよう、作成いたしました。<br>
                    文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト
                </div>
            </div>
        </div>
        <div class="search_list_box">
            <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
            <div class="search_box_content">
                <div class="search_box_date">2022-03-03</div>
                <div class="search_box_title">イベントのお知らせ</div>
                <div class="search_box_text">
                    このたび、弊社ホームページを公開させていただきました。<br><br>
                    お客様におかれましては、より使いやすく、わかりやすいものとなるよう、作成いたしました。<br>
                    文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト
                </div>
            </div>
        </div>
        <div class="search_list_box">
            <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
            <div class="search_box_content">
                <div class="search_box_date">2022-03-03</div>
                <div class="search_box_title">イベントのお知らせ</div>
                <div class="search_box_text">
                    このたび、弊社ホームページを公開させていただきました。<br><br>
                    お客様におかれましては、より使いやすく、わかりやすいものとなるよう、作成いたしました。<br>
                    文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト
                </div>
            </div>
        </div>
        <div class="search_list_box">
            <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
            <div class="search_box_content">
                <div class="search_box_date">2022-03-03</div>
                <div class="search_box_title">イベントのお知らせ</div>
                <div class="search_box_text">
                    このたび、弊社ホームページを公開させていただきました。<br><br>
                    お客様におかれましては、より使いやすく、わかりやすいものとなるよう、作成いたしました。<br>
                    文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト
                </div>
            </div>
        </div>
        <div class="search_list_box">
            <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
            <div class="search_box_content">
                <div class="search_box_date">2022-03-03</div>
                <div class="search_box_title">イベントのお知らせ</div>
                <div class="search_box_text">
                    このたび、弊社ホームページを公開させていただきました。<br><br>
                    お客様におかれましては、より使いやすく、わかりやすいものとなるよう、作成いたしました。<br>
                    文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト文字数制限テスト
                </div>
            </div>
        </div>
    </div>
    <div class="page_div">
        <div class="search_counter">
            イベント検索結果：全 <span class="search_count">53</span> 件中1～5件を表示中
        </div>
    </div>
</div>


@endsection