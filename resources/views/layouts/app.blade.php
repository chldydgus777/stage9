<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>STAGE9</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #eee;
            }
            .logo {
                margin-top: 15px;
                color: #FD5601;
                font-size: 3rem;
                font-weight: bold;
                text-decoration: none;
            }
            .box {
                width: 300px;
                padding: 10px;
                justify-content: space-between;
                margin: 1rem;
                background-color: white;
                margin: 30px auto;
            }
            .start {
                font-size: 1rem;
                font-weight: bold;
                margin-top: 30px;
            }
            .login {
                margin-right: 1rem;
                text-decoration: none;
            }
            .logout {
                text-decoration: none;
            }
            .login:link {
                color: #aaa;
            }
            .register:link {
                color: #aaa;
            }
            .logout:visited {
                color: #aaa
            }
            .logout:hover {
                color: #FD5601;
            }
            .register {
                text-decoration: none;
            }
            .login:visited {
                color: #aaa
            }
            .login:hover {
                color: #FD5601;
            }
            .register:visited {
                color: #aaa;
            }
            .register:hover {
                color: #FD5601;
            }
            .title {
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            .subTitle {
                margin-bottom: .5rem;
            }
            .inputStyle {
                margin-top: .1rem;
                padding: .3rem;
                width: 10.5rem;
                border-radius: .2rem;
                border: 1px solid #bbb;
            }
            .btnStyle {
                margin-top: .5rem;
                width: calc(100% - 8rem);
                color: white;
                border-radius: .3rem;
                font-size: 15px;
                border: 1px solid #0000FF;
                background-color: #0000FF;
            }
            .help {
                display: flex;
            }
    </style>
<body>
    <div class="box">
            <div>
                <a class="logo" href="{{ url('/') }}">
                    {{ config('STAGE9', 'STAGE9') }}
                </a>

                <div>
                    <div class="start">
                        <!-- Authentication Links -->
                        @guest
                        <div>
                        </div>
                        @else
                                <a role="button" v-pre>
                                    {{ Auth::user()->name }}
                                </a> 님 안녕하세요

                                <div>
                                    <a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('로그아웃') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </div>
                </div>
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
