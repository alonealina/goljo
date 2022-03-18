@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_black">Pickup </span><span class="title_pink">Golf Practice</span>
        <div class="title_ja">－　オススメ 練習場　－</div>
        <div class="title_text2">GOLJOからオススメゴルフ練習場を紹介！</div>
    </div>
</div>
<img src="{{ asset('img/course1.png') }}" class="main_img" alt="">

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
            ゴルフ場検索結果：全 <span class="search_count">{{ $practice_list->total() }}</span>
            件中{{ ($practice_list->currentPage() -1) * $practice_list->perPage() + 1}}～{{ (($practice_list->currentPage() -1) * $practice_list->perPage() + 1) + (count($practice_list) -1) }}件を表示中
        </div>
        {{ $practice_list->links('pagination::default') }}
    </div>
    <div class="search_list2">
        @foreach ($practice_list as $practice)
        <a href="{{ route('practice.show', ['id' => $practice->id]) }}">
            <div class="search_list_box">
                <img src="{{ asset('img/course_img.png') }}" class="search_box_img" alt="">
                <div class="search_box_content">
                    <div class="area_mark">{{ $practice->pref }}</div>
                    <div class="search_box_title">{{ $practice->name }}</div>
                    <div class="search_box_text">
                        {!! nl2br(e($practice->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
        @endforeach 
    </div>
    <div class="page_div">
        <div class="search_counter">
            ゴルフ場検索結果：全 <span class="search_count">{{ $practice_list->total() }}</span>
            件中{{ ($practice_list->currentPage() -1) * $practice_list->perPage() + 1}}～{{ (($practice_list->currentPage() -1) * $practice_list->perPage() + 1) + (count($practice_list) -1) }}件を表示中
        </div>
        {{ $practice_list->links('pagination::default') }}
    </div>
</div>

@endsection


@section('content_sp')
<div class="content_div_sp header_margin_sp">
    <div class="title_text">
        <span class="title_black_sp">Pickup </span><span class="title_pink_sp">Golf Practice</span>
        <div class="title_ja_sp">－　オススメ 練習場　－</div>
        <div class="title_text2_sp">
            GOLJOからオススメゴルフ練習場を紹介！
        </div>
    </div>
</div>
<img src="{{ asset('img/course1_sp.png') }}" class="main_img_sp" alt="">

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
        練習場検索結果：全 <span class="search_count_sp">{{ $practice_list->total() }}</span>
        件中{{ ($practice_list->currentPage() -1) * $practice_list->perPage() + 1}}～{{ (($practice_list->currentPage() -1) * $practice_list->perPage() + 1) + (count($practice_list) -1) }}件を表示中
    </div>
    {{ $practice_list->links('pagination::default_sp') }}
    @foreach ($practice_list as $practice)
        <a href="{{ route('practice.show', ['id' => $practice->id]) }}" class="box_a_sp">
            <div class="list_box_sp">
                <img src="{{ asset('img/course_img.png') }}" class="box_img_sp" alt="">
                <div class="news_box_content">
                    <div class="area_mark_sp">{{ $practice->pref }}</div>
                    <div class="box_title_sp">{{ $practice->name }}</div>
                    <div class="box_text_sp">
                    {!! nl2br(e($practice->content1)) !!}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <div class="search_counter_sp">
        練習場検索結果：全 <span class="search_count_sp">{{ $practice_list->total() }}</span>
        件中{{ ($practice_list->currentPage() -1) * $practice_list->perPage() + 1}}～{{ (($practice_list->currentPage() -1) * $practice_list->perPage() + 1) + (count($practice_list) -1) }}件を表示中
    </div>
    {{ $practice_list->links('pagination::default_sp') }}
</div>


@endsection