@extends('layouts.top')

@section('content')

<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" style="cursor:hand"/></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu"></ul>
            @if (Route::has('login'))
                @auth
                <a href="{{ route('logout') }}" class="suibscription_iptv" 
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">&nbsp;Sign out&nbsp;</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @if(Auth::user()->payment_type =='2')   
                <a href="{{ url('/cancel_subscribe') }}" class="suibscription_iptv" style="margin-right:10px">Cancel Subscription</a>
                @endif

                <a href="{{ url('/changePassword') }}" class="suibscription_iptv" style="margin-right:10px">Change Password</a>
                @else
                    <a href="{{ route('login') }}" class="suibscription_iptv">&nbsp;Sign in&nbsp;</a>
                @endauth
            @endif
        </nav>
    </div>
</header>

<main id="main">

    <section class="section-header" style="margin-top:80px">
        <div class="container">
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Name:</b> {{ Auth::user()->name }}</h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Email:</b> {{ Auth::user()->email }}</h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Status:</b> {{ Auth::user()->status }}</h5></div>
            </div>

            @if(Auth::user()->payment_type =='2')   

            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Card Type:</b>  {{ Auth::user()->card_brand }}</h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Card Last 4 Number:</b>  {{ Auth::user()->card_last_four }}</h5></div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="row">
                <div class="form-group submit_btn col-md-6">
                    <form action="/subscribe_card_update" method="POST">
                        {{ csrf_field() }}
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_PUB_KEY') }}"
                            data-image="{{ asset('images/Service.png') }}"
                            data-name="{{ config('app.name', '') }}"
                            data-panel-label="Update Card Details"
                            data-label="Update Card Details"
                            data-allow-remember-me=false
                            data-locale="auto">
                        </script>
                    </form>
                </div>
            </div>

            @endif


        </div>
        
    </section>
</main>

@endsection
