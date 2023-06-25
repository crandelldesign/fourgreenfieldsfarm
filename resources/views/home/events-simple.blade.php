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
        <h1>Calendar</h1>

        @include('layouts.event-month')

    </body>
    
</html>
