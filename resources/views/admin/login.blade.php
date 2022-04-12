<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>GOLJO管理ページ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <!-- <link rel="icon" type="image/png" href="https://mall.cpon.co.jp/favicon.png"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
        <link href="{{ asset('css/app_admin.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar">
                <a class="navbar-brand" href="">
                    <img src="{{ asset('img/logo.png') }}" class="admin_logo" alt="">
                </a>
            </nav>
        </header>

        <div class="login_div">
            {{-- エラーメッセージ --}}
            @if (isset($login_error))
                <div id="error_explanation" class="text-danger">
                メールアドレスまたはパスワードが一致しません。
                </div>
            @endif
            
            {{-- フォーム --}}
            <form action="{{ url('admin_login') }}" method="post">
                @csrf  
                <div class="form-group">
                <div class="login_form_name">ログインID</div>
                <input type="text" class="form-control" id="user_email" name="login_id">
                </div>     
                <div class="form-group">
                <div class="login_form_name">パスワード</div>
                <input type="password" class="form-control" id="user_password" name="password">
                </div>     
                <input type="submit" value="ログイン" class="btn login_button">  
            </form>

        </div>

    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>