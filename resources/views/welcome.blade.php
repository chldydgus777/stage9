<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>STAGE9</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #eee;
            }
            .box {
                width: 300px;
                min-height: 300px;
                padding: 10px;
                justify-content: space-between;
                margin: 1rem;
                background-color: white;
                margin: 30px auto;
            }
            .logo {
                margin-top: 15px;
                color: #FD5601;
                font-size: 3rem;
                font-weight: bold;
            }
            .start {
                font-size: 1.5rem;
                font-weight: bold;
                margin-top: 30px;
            }
            .wrap {
                display:flex;
                flex-direction: column;
                align-items: center
            }
            .login {
                margin-right: 1rem;
                text-decoration: none;
            }
            .register {
                text-decoration: none;
            }
             .login:link {
                color: #aaa;
            }
            .register:link {
                color: #aaa;
            }
             .login:visited {
                color: #aaa
            }
            .register:visited {
                color: #aaa;
            }
             .login:hover {
                color: #FD5601;
            }
            .register:hover {
                color: #FD5601;
            }
        </style>
    </head>
    <body>
        <header class="box">
        <div class="wrap">
            <a style="text-decoration: none" href="{{  url("https://roasted-sweatpants-71f.notion.site/204c08b79fb14706bc2b4fbf93f6bfe4") }}" target='_blank' class="logo">
                STAGE9
            </a>
            <div class="start">
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a class="login" href="{{ url('/home') }}">홈으로 이동</a>
                        @else
                            <a href="{{ route('login') }}" class="login">로그인</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="register">회원가입</a>
                            @endif
                        @endauth
                    </div>
                @endif

                </div>
            </div>
        </div>
        </header>
    </body>
</html>
