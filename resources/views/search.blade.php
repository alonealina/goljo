@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_text">
        <span class="title_pink">GOLJO </span><span class="title_black">Search</span>
        <div class="title_ja">－　ゴル嬢サーチ　－</div>
        <div class="title_text2">
            全国のGOLJOの中から好みのキャバ嬢を検索<br>
            あなたの好みにピッタリのキャバ嬢を今すぐ探し出そう！
        </div>
    </div>
    <!-- <ul class="slider">
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl3.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl4.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl1.png') }}" alt=""></li>
        <li><img src="{{ asset('img/girl2.png') }}" alt=""></li>
    </ul> -->
</div>

<div class="content_div_bg">
    <div class="search_form">
        <div class="search_radio_list">
            <input id="area_1" class="search_radio" type="radio" name="area" value="all" checked="checked"/>
            <label class="label" for="area_1">全国</label>
            <input id="area_2" class="search_radio" type="radio" name="area" value="osaka"/>
            <label class="label" for="area_2">大阪</label>
            <input id="area_3" class="search_radio" type="radio" name="area" value="hyogo"/>
            <label class="label" for="area_3">兵庫</label>
            <input id="area_4" class="search_radio" type="radio" name="area" value="nara"/>
            <label class="label" for="area_4">奈良</label>
            <input id="area_5" class="search_radio" type="radio" name="area" value="kyoto"/>
            <label class="label" for="area_5">京都</label>
            <input id="area_6" class="search_radio" type="radio" name="area" value="wakayama"/>
            <label class="label" for="area_6">和歌山</label>
        </div>
        <div class="search_text">詳細条件を設定しキャバ嬢を検索する場合は、下記をご利用ください。</div>
        <select name="tag" class="select_tag">
            <option value="">ハッシュタグで検索</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
        </select>
        <select name="name" class="select_name">
            <option value="">名前や詳細条件で検索</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
        </select>
    </div>
    <div class="search_page_before">
        <div class="search_counter">
            女の子検索結果：全 <span class="search_count">303</span> 件中1～25名を表示中
        </div>
    </div>
    <div class="search_list">
        <div class="search_list_item">
            <img src="{{ asset('img/search1.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search2.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search3.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search4.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search5.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search1.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search2.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search3.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search4.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
        <div class="search_list_item">
            <img src="{{ asset('img/search5.png') }}" class="search_list_img" alt="">
            <div class="search_list_name">丸々 まる子</div>
            <div class="search_list_area">キャバクラ 〇〇店</div>
        </div>
    </div>
    <div class="search_page_after">
        <div class="search_counter">
            女の子検索結果：全 <span class="search_count">303</span> 件中1～25名を表示中
        </div>
    </div>

</div>


@endsection