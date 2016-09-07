<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
        {!! Analytics::render() !!}
    </head>
    <body>
        <h1>Calendar</h1>

        @include('layouts.event-month')

    </body>
    
</html>
