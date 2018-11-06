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
        @if (session('warning'))
            <div class="alert alert-warning">{{ session('warning') }}</div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="text" class="form-control login-forminput-model" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>
                @if ($errors->has('email'))
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control login-forminput-model" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Sign In</button>
            </div>

            <div class="form-group">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>

            <div class="form-group">
                Create account<a href="{{ route('register') }}">&nbsp;&nbsp;Sign Up</a>
            </div>

        </form>
    </div>
</div>

@endsection
