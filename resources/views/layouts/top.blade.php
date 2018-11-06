<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', '') }}</title>

    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/favicon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />

    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/ionicons/css/ionicons.min.css') }}">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body id="body">
@yield('content')    
</body>

</html>

<!-- JavaScript Libraries -->

<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
<script src="{{ asset('lib/sticky/sticky.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
