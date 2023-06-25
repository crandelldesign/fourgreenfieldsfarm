<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LCD647NGYQ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LCD647NGYQ');
        </script>
        <meta charset="utf-8">
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.nav')
        <div class="container-fluid page">
            <div class="content">
                @yield('content')
            </div>
        </div>

        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @include('layouts.footer')
        @yield('scripts')
    </body>
    
</html>