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
                <a href="{{ url('/changePassword') }}" class="suibscription_iptv" style="margin-right:10px">Change Password</a>
                @else
                    <a href="{{ route('login') }}" class="suibscription_iptv">&nbsp;Sign in&nbsp;</a>
                @endauth
            @endif
        </nav>
    </div>
</header>

<main id="main">
    <section id="pricing-plans">
        <div class="container">
            <div class="container2">
                <div class="section-header">
                    <h2>SELECT SUBSCRIPTION</h2>
                </div>
                <div class="row">
                    @foreach ($priceList as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInLeft" style="visibility: visible;">
                                <div class="bg-cls-div">
                                    <h3 class="h3_without-bg">{{ $item->title }}</h3>
                                    <p>{{ $item->price }}&dollar;</p>
                                    <h4>{{ $item->description }}</h4>
                                </div>
                                <a href="{{url('paypal/ec-checkout?mode=recurring&plan_id=')}}{{ $item->uid}}" class="download_mobile_btn">PAYPAL</a>
                                <form action="/subscribe_process" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="plan_id" value="{{ $item->uid }}"/>
                                    <input type="hidden" name="stripe_plan_id" value="{{ $item->stripe_plan_id }}"/>
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="{{ env('STRIPE_PUB_KEY') }}"
                                        data-amount="{{ $item->price * 100 }}"
                                        data-name="{{ $item->title }}"
                                        data-description="{{ $item->description }}"
                                        data-image="{{ asset('images/favicon.png') }}"
                                        data-label="credit card"
                                        data-locale="auto"
                                        data-currency="usd">
                                    </script>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
