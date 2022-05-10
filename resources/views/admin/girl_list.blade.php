@extends('layouts.app_admin')

@section('side_menu')

<div class="admin_side_menu">
    <a href="{{ route('admin.girl_regist') }}">女の子登録</a>
</div>
<div class="admin_current_menu">
    <a href="{{ route('admin.girl_list') }}">女の子管理</a>
</div>

@endsection

@section('content')

<div class="content_div">
    <div class="content_title">女の子管理</div>
    <div class="girl_list">
        <div class="girl_list_column" style="font-weight: bold;">
            <div class="girl_list_checkbox">
                <input type="checkbox" id="all">
            </div>
            <div class="girl_list_name">
                <div class="girl_item_name">名前</div>
            </div>
            <div class="girl_list_name_r">
                <div class="girl_item_name">名前（ローマ字）</div>
            </div>
            <div class="girl_list_height">
                <div class="girl_item_name">身長</div>
            </div>
            <div class="girl_list_score">
                <div class="girl_item_name">ベストスコア</div>
            </div>
            <div class="girl_list_area">
                <div class="girl_item_name">よく行くエリア</div>
            </div>
            <div class="girl_list_kyaba">
                <div class="girl_item_name">所属キャバクラの名前</div>
            </div>
            <div class="girl_list_url">
                <div class="girl_item_name">所属キャバクラのURL</div>
            </div>
            <div class="girl_list_pref">
                <div class="girl_item_name">都道府県</div>
            </div>
        </div>
        <form id="boxes" name="girl_list_form" action="" method="get">
            @foreach($girls as $girl)
            {{ Form::hidden('girl_id[]', $girl->id) }}
            <div class="girl_list_column">
                <div class="girl_list_checkbox">
                    <input type="checkbox" name="chk[]" value="{{ $girl->id }}">
                </div>
                <div class="girl_list_name">
                    <div class="girl_item_name">{{ $girl->name }}</div>
                </div>
                <div class="girl_list_name_r">
                    <div class="girl_item_name">{{ $girl->name_r }}</div>
                </div>
                <div class="girl_list_height">
                    <div class="girl_item_name">{{ $girl->height }}</div>
                </div>
                <div class="girl_list_score">
                    <div class="girl_item_name">{{ $girl->best_score }}</div>
                </div>
                <div class="girl_list_area">
                    <div class="girl_item_name">{{ $girl->area }}</div>
                </div>
                <div class="girl_list_kyaba">
                    <div class="girl_item_name">{{ $girl->kyaba_name }}</div>
                </div>
                <div class="girl_list_url">
                    <div class="girl_item_name">{{ $girl->kyaba_url }}</div>
                </div>
                <div class="girl_list_pref">
                    <div class="girl_item_name">{{ $girl->pref }}</div>
                </div>
                <div class="list_button_blue">
                    <a href="girl_edit/{{ $girl->id }}">編集</a>
                </div>
                <div class="list_button_red">
                    <a href="girl_delete/{{ $girl->id }}" onclick="return confirm('本当に削除しますか？')">削除</a>
                </div>
            </div>
            @endforeach
        </form>
        <div class="d-flex justify-content-center" style="margin-top:30px;">
        {{ $girls->appends(request()->query())->links('pagination::default') }}
        </div>
    </div>

</div>



@endsection


