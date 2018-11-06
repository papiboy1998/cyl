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

        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control login-forminput-model" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                @if ($errors->has('name'))
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control login-forminput-model" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                @if ($errors->has('name'))
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
                <input id="password-confirm" type="password" class="form-control login-forminput-model" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Register</button>
            </div>

            <div class="form-group">
                Already have an account?<a href="{{ route('login') }}">&nbsp;&nbsp;Sign In</a>
            </div>

        </form>
    </div>

</div>

@endsection
