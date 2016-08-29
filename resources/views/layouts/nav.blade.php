<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo-container">
                    <a href="{{url('/')}}"><img src="{{url('/img/four-green-fields-farm-logo.svg')}}" alt="Four Gren Fields Farm" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs-block" href="{{url('/')}}"><img src="{{url('/img/four-green-fields-farm-logo.svg')}}" alt="Four Gren Fields Farm"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul id="menu-menu" class="nav navbar-nav">
                    <!--<li class="{{(isset($active_page)) && $active_page=='home'?'active':''}}"><a href="{{url('/')}}">Home</a></li>-->
                    <li class="{{(isset($active_page)) && $active_page=='our-history'?'active':''}}"><a href="{{url('/our-history')}}">Our History</a></li>
                </ul>        
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="corner-art top-left"></div>
    <div class="corner-art top-right"></div>
    <div class="corner-art bottom-left"></div>
    <div class="corner-art bottom-right"></div>
</header>