<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', '') }}</title>

    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/favicon.png') }}" rel="apple-touch-icon">

    <!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    

    <link rel="stylesheet" href="{{ asset('frameworks/adminlte/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frameworks/adminlte/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frameworks/adminlte/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frameworks/adminlte/css/skins/skin-green.min.css') }}">
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body id="body" style="overflow-y: hidden; overflow-x: hidden">
@yield('content')    
</body>

</html>
