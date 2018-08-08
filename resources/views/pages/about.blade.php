@extends('layouts.default', ['title' => 'About'])

@section('content')

    <div class="blocked no-margin font-open-sans">
    	
    	<h1 class="laracarteh1">What's is Laracarte?</h1>
    	<p>Laracarte is a clone app of <a href="" class="btn-link" target="_blank">Laramap.com.</a></p>
    	<div class="dev-row">
    		<div class="dev-col-6x">
    			<p class="alert alert-info text-size-zx">
    				<strong><i class="fa fa-warning"></i>&nbsp;This site has been built by <a href="https://twitter.com/Kaztiyho" class="btn-link">@Kaztiyho</a> for learning purposes.</strong>
    			</p>
    		</div>
    	</div>
    	<p>Feel free to help to improve the <a href="https://github.com/YitzakD/laracarte-tdn" class="btn-link" target="_blank">source code</a>.</p>

    	<hr class="hrstyle margin-top-1x margin-bottoms-1x">

		<h1 class="laracarteh1">What's is Laramap?</h1>
    	<p>Laramap is the website by which Laracarte was inspired :).</p>
    	<p>More info <a href="#" class="btn-link">here</a>.</p>

    	<hr class="hrstyle margin-top-1x margin-bottoms-1x">

    	<h1 class="laracarteh1">Which tools and services are used in Laracarte?</h1>
    	<p>Basicly it's built on Laravel &amp; DAF-Style. But there's a bunch of services used form email and other sections.</p>
    	<ul class="laracarte-ul text-size-zx">
    		<li>Laravel</li>
    		<li>DAF-Style</li>
    		<li>Amazone S3</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Antony Martin's Geolocalisation Package</li>
    		<li>Michel fortin's Markdown Parser Package</li>
    		<li>Heroku</li>
    	</ul>


    </div>

@stop