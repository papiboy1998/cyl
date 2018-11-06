@extends('layouts.login_top')

@section('content')

<div class="login-box" style="margin-top:100px">
    <div class="login-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo2.png') }}"></a>
    </div>
    <div class="login-box-body">

        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
            
            {{ csrf_field() }}
            
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control login-forminput-model" name="email" value="{{ $email or old('email') }}" placeholder="E-Mail Address"  required autofocus>
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

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="form-control login-forminput-model" name="password_confirmation" placeholder="Confirm Password" required>
                @if ($errors->has('password_confirmation'))
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Reset Password</button>
            </div>

        </form>
    </div>

</div>

@endsection
