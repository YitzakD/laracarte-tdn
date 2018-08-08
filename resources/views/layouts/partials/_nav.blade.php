<div class="header-conteneur inverse bottom-shadow-1xx">

    <div class="in-header" id="myHeader">

        <a href="{{ route('home') }}" class="logo">Laracarte</a>
        <a href="{{ route('home') }}" class="liens{{ set_active_route('home') }}">Home</a>
        <a href="{{ route('about') }}" class="liens{{ set_active_route('about') }}">About</a>
        <a href="#" class="liens">Artisans</a>
        <div class="dropdown">
            <button href="#" class="dropbtn">Planet
                <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://laravel.com">Laravel.com</a>
                <a href="https://laravel.io">Laravel.io</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://larajobs.com">Larajobs</a>
                <a href="https://laravel-news.com">Laravel News</a>
                <a href="https://larachat.com">Larachat</a>
            </div>
        </div>
        <a href="{{-- route('contact') --}}" class="liens">Contact</a>
        <div class="liens-right">
            <a href="#" class="liens">Login</a>
            <a href="#" class="liens">Register</a>  
        </div>
        <a href="javascript:void(0);" class="icon" onclick="menuResponsive()">
            <i class="fa fa-bars"></i>
        </a>

    </div>

</div>