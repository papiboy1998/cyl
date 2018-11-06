@extends('layouts.login_top')
 
@section('content')

<div class="login-box" style="margin-top:100px">
    <div class="login-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo2.png') }}"></a>
    </div>
    <div class="login-box-body">

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
            
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <input id="current-password" type="password" class="form-control login-forminput-model" name="current-password" placeholder="Current Password" required>
                @if ($errors->has('current-password'))
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('current-password') }}</strong></span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                <input id="new-password" type="password" class="form-control login-forminput-model" name="new-password" placeholder="New Password" required>
                @if ($errors->has('new-password'))
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 0px;"><strong>{{ $errors->first('new-password') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <input id="new-password-confirm" type="password" class="form-control login-forminput-model" name="new-password_confirmation" placeholder="Confirm New Password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Change Password</button>
            </div>

        </form>
    </div>

</div>

@endsection