<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('master.templates.header')
        <link href="{{url('/')}}/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        @include('admin.templates.nav')
        @yield('body')
        @include('master.templates.footer')

        <script src="{{url('/')}}/js/jquery-1.11.1.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/can.custom.js"></script>
        <script src="{{url('/')}}/js/moment.js"></script>
        <script src="{{url('/')}}/js/featherlight.js"></script>
        <script src="{{url('/')}}/js/featherlight.gallery.js"></script>
        <script src="{{url('/')}}/js/bootstrap-datetimepicker.min.js"></script>
        <script>
            var baseURL = "{{url('/')}}";
        </script>

        @yield('footercode')

        @section('code')
            {{isset($code) ? $code : ''}}
        @show
    </body>
    
</html>