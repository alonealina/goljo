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
            イベント検索結果：全 <span class="search_count">{{ $event_list->total() }}</span>
            件中{{ ($event_list->currentPage() -1) * $event_list->perPage() + 1}}～{{ (($event_list->currentPage() -1) * $event_list->perPage() + 1) + (count($event_list) -1) }}件を表示中
        </div>
        {{ $event_list->links('pagination::default') }}
    </div>
    <div class="search_list2">
        @foreach ($event_list as $event)
        <a href="{{ route('event.show', ['id' => $event->id]) }}">
            <div class="search_list_box">
                <img src="{{ asset('img/event_img.png') }}" class="search_box_img" alt="">
                <div class="search_box_content">
                    <div class="search_box_date">{{ $event->notice_date }}</div>
                    <div class="search_box_title">{{ $event->title }}</div>
                    <div class="search_box_text">
                        {!! nl2br(e($event->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="page_div">
        <div class="search_counter">
            イベント検索結果：全 <span class="search_count">{{ $event_list->total() }}</span>
            件中{{ ($event_list->currentPage() -1) * $event_list->perPage() + 1}}～{{ (($event_list->currentPage() -1) * $event_list->perPage() + 1) + (count($event_list) -1) }}件を表示中
        </div>
        {{ $event_list->links('pagination::default') }}
    </div>
</div>
@endsection


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_pink_sp">GOLJO </span><span class="title_black_sp">Event</span>
        <div class="title_ja_sp">－　イベント情報　－</div>
        <div class="title_text2_sp">
            GOLJOから各イベント情報のお知らせ
        </div>
    </div>
</div>
<img src="{{ asset('img/event1_sp.png') }}" class="main_img_sp" alt="">

<div class="content_div_bg_sp">
    <div class="search_form_sp">
        <select name="name" class="select_sp">
            <option value="">ハッシュタグで検索</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
        </select>
    </div>
    <div class="search_counter_sp">
        イベント検索結果：全 <span class="search_count_sp">{{ $event_list->total() }}</span>
        件中{{ ($event_list->currentPage() -1) * $event_list->perPage() + 1}}～{{ (($event_list->currentPage() -1) * $event_list->perPage() + 1) + (count($event_list) -1) }}件を表示中
    </div>
    {{ $event_list->links('pagination::default_sp') }}
    @foreach ($event_list as $event)
        <a href="{{ route('event.show', ['id' => $event->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/news_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    <div class="box_date_sp">{{ $event->notice_date }}</div>
                    <div class="box_title_sp">{{ $event->title }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($event->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <div class="search_counter_sp">
        イベント検索結果：全 <span class="search_count_sp">{{ $event_list->total() }}</span>
        件中{{ ($event_list->currentPage() -1) * $event_list->perPage() + 1}}～{{ (($event_list->currentPage() -1) * $event_list->perPage() + 1) + (count($event_list) -1) }}件を表示中
    </div>
    {{ $event_list->links('pagination::default_sp') }}
</div>


@endsection