@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div>
                <div class="title">{{ __('회원가입') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="subTitle">
                            <label for="name">{{ __('이름') }}</label>

                            <div>
                                <input id="name" name="name" type="text" class="inputStyle @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="subTitle">
                            <label for="email">{{ __('이메일주소') }}</label>

                            <div>
                                <input id="email" name="email" type="email" class="inputStyle @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="subTitle">
                            <label for="password">{{ __('비밀번호') }}</label>

                            <div>
                                <input name="password" type="password" class="inputStyle @error('password') is-invalid @enderror" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="subTitle">
                            <label for="password-confirm">{{ __('비밀번호 확인') }}</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation" class="inputStyle" required autocomplete="new-password">
                            </div>
                        </div>

                        <div >
                            <div>
                                <div>
                                    @if (Route::has('login'))
                                        <div>
                                            <a class="login" href="{{ route('login') }}">{{ __('로그인') }}</a>
                                        </div>
                                    @endif
                                </div>
                                <button class="btnStyle" type="submit">
                                    {{ __('회원가입') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
