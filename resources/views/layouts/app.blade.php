<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Covid-19 EMS Tracker</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header id="header">
    <div class="logo"><a href="/">EMSTracker</a></div>
    <div class="inner">
        <nav id="nav">
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endguest
        </nav>
        <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
</header>

<!-- Banner -->
<div id="banner">
    <h1>Covid-19 coronavirus EMS Tracker</h1>
</div>

<section id="one">
    @yield('content')
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="flex">
            <div class="copyright">
                &copy; 2020 <a href="https://www.phpexperts.pro/" target="_blank">Theodore R. Smith</a>. Design: <a href="https://templated.co">TEMPLATED</a>.
            </div>
            <ul class="icons">
                <li><a href="https://www.twitter.com/hopeseekr" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
                <!--<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>-->
                <!--<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>-->
                <!--<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>-->
                <!--<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>-->
            </ul>
        </div>
    </div>
</footer>

    <!-- Include the JS files here for maximum page performance. -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
