@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>
            <div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    현재상태: {{ __('로그인') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
