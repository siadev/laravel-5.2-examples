@extends('layouts.app', [
                'page_title'  => "Home Page",
                'page_header' => "Welcome to newsite !"
                ])


@section('home-page')
    @include('pages.home-carousel')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="animated fadeInLeftBig">
        <h2 class="centered-text">
            <p>Lots of useful examples and tutorials for Laravel,</p>
            <p>PHP classes and interfaces,</p>
            <p>command line instructions and</p>
            <p>client side animations and tools including AJAX.</p>
        </h2>
    <div class="centered-image">
        <img src="/img/manifesto.png"
             alt="Our professional software craftsmanship" title="Our professional software craftsmanship">
    </div>

    </div>

<div class="docs-test">
    Informational text
    <pre rel="PHP">
<code>
    &lt;?php
    function() {

    }
    ?>
</code>
        </pre> {{-- PHP Scripting--}}

        Informational text
        <pre rel="Command Line">
    <code>php artisan route:list</code>
        </pre> {{-- Commaind Line --}}


    Informational text
        <pre rel="HTML">
<code>
    &lt;h1 class="three four"&gt;Double Class&lt;/h1&gt;
</code>
        </pre>
    text

</div>
@stop

@section('scripts')
    <script type="text/javascript" src="{{ elixir('js/effects.min.js') }}"></script>
@stop

