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

        <title>{{ page_title($title ?? '') }}</title>
    </head>
    <body>
        @if(session()->has('notification.message'))
        <div class="dev-pop alert-{{ session('notification.type') }}" id="pop">
            <span class="blocked align-right" id="fp">
                <i class="fa fa-close dot-close cur-to-point" id="js-dot-close"></i>
            </span>
            <p class="blocked dev-padding-zx">
                {{ session('notification.message') }}
            </p>
        </div>
        @endif
        
        @include('layouts.partials._nav')

    	<div class="container clearfix">
        	@yield('content')
    	</div>

        @include('layouts.partials._footer')
        
        <script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/Elastic/jquery.elastic.source.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
