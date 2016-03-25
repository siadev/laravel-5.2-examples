<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5.2 Examples | {{ $page_title }}</title>

    <link rel="stylesheet" href="{{ elixir('css/effects.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    @yield('html_header')

</head>
<body>
    @include('partials.flash')

    <SECTION id="top-of-page" class="navbar-fixed-top">
        @include('partials.nav')
        <HEADER>
            {{ $page_header }}
        </HEADER>
    </SECTION>

    <SECTION id="unique-content">
        <ARTICLE>
            @yield('home-page')
        </ARTICLE>
    </SECTION>

    <SECTION id="main-content">
        @yield('top-content')
        @yield('content')
    </SECTION>

<div class="footer-nav navbar-inverse">

    <div class="row">
        <div class="col-md-1">About</div>
        <div class="col-md-1">Terms</div>
        <div class="col-md-1">Privacy</div>
        <div class="col-md-2">Home</div>
        <div class="col-md-7">
            <p>There are several tests and more will be added as time goes by for this intranet website.</p>
            <p>These tests, addons, custom routines will be documented on this website in the documentation section.</p>
            <p>If you don't see it that's because I haven't created it yet, but I do intend to :)</p>
            <p>I will also create a forum as part of my training routine as well as a useful debate area
               for beta testers.</p>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ elixir('js/dependencies.min.js') }}"></script>
@yield('scripts')
</body>
</html>