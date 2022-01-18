@extends('layouts.app')

@section('content')
            <div>
                <div class="title">{{ __('로그인') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="subTitle">
                            <label for="email">{{ __('이메일') }}</label>

                            <div >
                                <input name="email" id="email" type="email" class="inputStyle @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password">{{ __('비밀번호') }}</label>

                            <div class="subTitle">
                                <input name="password" id="password" type="password" class="inputStyle @error('password') is-invalid @enderror" required autocomplete="current-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="help">
                                    @if (Route::has('register'))
                                        <div>
                                            <a class="register" href="{{ route('register') }}">{{ __('회원가입') }}</a>
                                        </div>
                                    @endif
                                </div>
                                <button class="btnStyle" type="submit">
                                    {{ __('로그인') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
