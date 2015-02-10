<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('master.templates.header')
    </head>
    <body>
        @include('master.templates.nav')
        @yield('body')
        @include('master.templates.footer')

        <script src="{{url('/')}}/js/jquery-1.11.1.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/can.custom.js"></script>
        <script src="{{url('/')}}/js/moment.js"></script>
        <script src="{{url('/')}}/js/featherlight.js"></script>
        <script src="{{url('/')}}/js/featherlight.gallery.js"></script>
        <script src="{{url('/')}}/js/modernizr.custom.65417.js"></script>
        <script>
            var baseURL = "{{url('/')}}";

            MasterControl = can.Control(
            {
                init: function()
                {
                    //
                },
                //Events
                'a[data-featherlight="image"] click': function(element, event)
                {
                    $('body').addClass('modal-open');
                },
                'div.featherlight click': function(element, event)
                {
                    $('body').removeClass('modal-open');
                },
                //Methods
            });

            master_control = new MasterControl($('body'));
        </script>

        @yield('footercode')

        @section('code')
            {{isset($code) ? $code : ''}}
        @show
    </body>
    
</html>