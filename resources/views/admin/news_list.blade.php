@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.news_regist') }}">ニュース登録</a>
</div>
<div class="admin_side_menu admin_current_menu">
    <a href="{{ route('admin.news_list') }}">ニュース管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">ニュース管理</div>
    <div class="news_list">
        <div class="admin_list_column" style="font-weight: bold;">
            <div class="news_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="news_list_title">
                <div class="admin_item_name">タイトル</div>
            </div>
            <div class="news_list_genre">
                <div class="admin_item_name">ジャンル</div>
            </div>
            <div class="news_list_content">
                <div class="admin_item_name">内容</div>
            </div>
            <div class="news_list_date">
                <div class="admin_item_name">公開日時</div>
            </div>
        </div>
        <form id="boxes" name="news_list_form" action="" method="get">
            @foreach($news_list as $news)
            {{ Form::hidden('news_id[]', $news->id) }}
            <div class="admin_list_column">
                <div class="news_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $news->id }}">
                </div>
                <div class="news_list_title">
                    <div class="admin_item_name">{{ $news->title }}</div>
                </div>
                <div class="news_list_genre">
                    <div class="admin_item_name">
                    @if($news->genre == 1)
                    INFO
                    @elseif($news->genre == 2)
                    GOLF
                    @elseif($news->genre == 3)
                    LADY
                    @endif
                    </div>
                </div>
                <div class="news_list_content">
                    <div class="admin_item_name">{{ $news->content }}</div>
                </div>
                <div class="news_list_date">
                    <div class="admin_item_name">{{ $news->notice_date }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="news_edit/{{ $news->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="news_delete/{{ $news->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $news_list->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


