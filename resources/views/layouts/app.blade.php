<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>GOLJO</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <!-- <link rel="icon" type="image/png" href="{{ asset('img/omisenavi_favicon.png') }}"> -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!-- <link rel="icon" type="image/png" href="https://mall.cpon.co.jp/favicon.png"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>

    <!-- <div id="registration_pc">
        <body>
            <header>
                <a class="logo_a" href="/">
                    <img src="{{ asset('img/logo.png') }}" class="header_logo" alt="">
                </a>
                <div class="header_menu">
                    <a href="{{ route('search') }}" class="header_a">GOLJOサーチ</a>
                    <a href="" class="header_a">Pickup GOLJO</a>
                    <a href="{{ route('event') }}" class="header_a">イベント</a>
                    <a href="{{ route('course') }}" class="header_a">オススメGOLF場</a>
                    <a href="{{ route('practice') }}" class="header_a">練習場</a>
                    <a href="{{ route('news') }}" class="header_a">ニュース</a>
                    <a href="{{ route('ranking') }}" class="header_a">GOLJO 人気ランキング</a>
                    <a href="{{ route('catalog') }}" class="header_a">Fashionカタログ</a>
                </div>
            </header>
            <div class="insta_column">
                <p class="insta_scroll">
                    インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　
                    インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　
                    インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　
                </p>
            </div>
            @yield('content')

            <footer>
                <a href="/"><img src="{{ asset('img/logo2.png') }}" class="footer_logo" alt=""></a>
                <div class="footer_menu">
                    <a href="{{ route('search') }}" class="footer_a">GOLJOサーチ</a> 　｜　
                    <a href="" class="footer_a">Pickup GOLJO</a> 　｜　
                    <a href="{{ route('event') }}" class="footer_a">イベント</a> 　｜　
                    <a href="{{ route('course') }}" class="footer_a">オススメGOLF場</a> 　｜　
                    <a href="{{ route('practice') }}" class="footer_a">練習場</a> 　｜　
                    <a href="{{ route('news') }}" class="footer_a">ニュース</a> 　｜　
                    <a href="{{ route('ranking') }}" class="footer_a">GOLJO 人気ランキング</a> 　｜　
                    <a href="{{ route('catalog') }}" class="footer_a">Fashionカタログ</a>
                </div>
                <div class="footer_menu_n">
                    <a href="{{ route('search') }}" class="footer_a">GOLJOサーチ</a> 　｜　
                    <a href="" class="footer_a">Pickup GOLJO</a> 　｜　
                    <a href="{{ route('event') }}" class="footer_a">イベント</a> 　｜　
                    <a href="{{ route('course') }}" class="footer_a">オススメGOLF場</a>
                    <a href="{{ route('practice') }}" class="footer_a">練習場</a> 　｜　
                    <a href="{{ route('news') }}" class="footer_a">ニュース</a> 　｜　
                    <a href="{{ route('ranking') }}" class="footer_a">GOLJO 人気ランキング</a> 　｜　
                    <a href="{{ route('catalog') }}" class="footer_a">Fashionカタログ</a>
                </div>
                <div class="copyright">2022 ©︎ GOLJO All right.</div>
            </footer>
        </body>
    </div> -->

    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header>
                <a class="logo_a_sp" href="/">
                    <img src="{{ asset('img/logo.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="{{ route('search') }}" class="menu_head_sp @if ($now_route == 'search') current @endif">GOLJOサーチ</a>
                            </li>
                            <li>
                                <a href ="" class="menu_content_sp @if ($now_route == 'pickup') current @endif">Pickup GOLJO</a>
                            </li>
                            <li>
                                <a href ="{{ route('event') }}" class="menu_content_sp @if ($now_route == 'event') current @endif">イベント</a>
                            </li>
                            <li>
                                <a href ="{{ route('course') }}" class="menu_content_sp @if ($now_route == 'course') current @endif">オススメGOLF場</a>
                            </li>
                            <li>
                                <a href ="{{ route('practice') }}" class="menu_content_sp @if ($now_route == 'practice') current @endif">練習場</a>
                            </li>
                            <li>
                                <a href ="{{ route('news') }}" class="menu_content_sp @if ($now_route == 'news') current @endif">ニュース</a>
                            </li>
                            <li>
                                <a href ="{{ route('ranking') }}" class="menu_content_sp @if ($now_route == 'ranking') current @endif">GOLJO 人気ランキング</a>
                            </li>
                            <li>
                                <a href ="{{ route('catalog') }}" class="menu_content_sp @if ($now_route == 'catalog') current @endif">Fashionカタログ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="insta_column_sp">
                <p class="insta_scroll">
                    インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　インスタグラム随時更新中！アクセスはこちらから！　
                </p>
            </div>
            @yield('content_sp')

            <footer class="footer_sp">
                <a href="/"><img src="{{ asset('img/logo2.png') }}" class="footer_logo" alt=""></a>
                <div class="footer_content_sp">
                    <a href="{{ route('search') }}" class="footer_a_sp">GOLJOサーチ</a>
                    <a href="" class="footer_a_sp">Pickup GOLJO</a>
                    <a href="{{ route('event') }}" class="footer_a_sp">イベント</a>
                    <a href="{{ route('course') }}" class="footer_a_sp">オススメGOLF場</a>
                    <a href="{{ route('practice') }}" class="footer_a_sp">練習場</a>
                    <a href="{{ route('news') }}" class="footer_a_sp">ニュース</a>
                    <a href="{{ route('ranking') }}" class="footer_a_sp">GOLJO 人気ランキング</a>
                    <a href="{{ route('catalog') }}" class="footer_a_sp">Fashionカタログ</a>

                </div>
                <div class="copyright">2022 ©︎ GOLJO All right.</div>
            </footer>
        </body>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>