@extends('layouts.login_top')

@section('content')

<div class="login-box" style="margin-top:100px">
    <div class="login-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo2.png') }}"></a>
    </div>
    <div class="login-box-body">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control login-forminput-model" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>
                @if ($errors->has('email'))
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Send Password Reset Link</button>
            </div>
            
        </form>
    </div>
</div>

@endsection
