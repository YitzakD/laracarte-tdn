<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/_init.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('/css/dafstyle.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('/css/css/font-awesome.min.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('/css/adn.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <title>Laracarte</title>
    </head>
    <body>
    	@include('layouts.partials._nav')

    	<div class="container">
        	@yield('content')
    	</div>

    	@include('layouts.partials._footer')
        
        <script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/Elastic/jquery.elastic.source.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
