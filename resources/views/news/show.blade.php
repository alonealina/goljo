@extends('layouts.app')

@section('content')

<div class="notice_background">
    <div class="notice_name_title">
    Cポンお店ナビからのお知らせ
    </div>
    <div class="category_img">
    <img src="{{ asset('img/osirase.png') }}" alt="">
    </div>
</div>

<div class="notice_show">
    <br>
    <div class="notice_button_index">
        <a href="{{ route('notice.index') }}">お知らせ一覧ページへ</a>
    </div>
    <br>
    <div class="notice_content_date">{{ $notice->notice_date }}</div>
    <div class="notice_title_big">{{ $notice->title }}</div>
    <br>
    <div class="notice_content">{!! nl2br(e($notice->content)) !!}</div>
</div>

<div class="notice_buttons">
    @if(!$max_flg)
    <div class="notice_button_back">
        <a href="{{ route('notice.show', ['id' => $back_id]) }}"><img src="{{ asset('img/yazi4.png') }}" alt="" style="width:5%;margin-top:-3px;">　前のお知らせ　</a>
    </div>
    @endif
    @if(!$min_flg)
    <div class="notice_button_next">
        <a href="{{ route('notice.show', ['id' => $next_id]) }}">　次のお知らせ　<img src="{{ asset('img/yazi5.png') }}" alt="" style="width:5%;margin-top:-3px;"></a>
    </div>
    @endif
</div>
@endsection


