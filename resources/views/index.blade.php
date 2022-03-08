@extends('layouts.app')

@section('content')
<div class="top_content">
    <img src="{{ asset('img/top1.png') }}" class="top_img1" alt="">
    <img src="{{ asset('img/top2.png') }}" class="top_img2" alt="">
    <a href=""><img src="{{ asset('img/search_btn.png') }}" class="search_btn" alt=""></a>
    <img src="{{ asset('img/top3.png') }}" class="top_img3" alt="">
    <a href=""><img src="{{ asset('img/event_btn.png') }}" class="event_btn" alt=""></a>
</div>

<div class="top_content">
    <div class="pickup_text">Pickup GOLJO</div>
</div>

@endsection