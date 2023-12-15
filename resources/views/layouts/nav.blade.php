<header class="header">
    <div class="container-fluid">
        <div class="row hidden-xs">
            <div class="col-sm-6">
                <div class="logo-container">
                    <a href="{{url('/')}}"><img src="{{url('/img/four-green-fields-farm-logo.svg')}}" alt="Four Gren Fields Farm" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-sm-6 text-right header-slogan">
                <p>From Ireland to America, We Work the Land</p>
                <p>O Eirinn go Mericea, Oibrimid ar an Talamh</p>
                <p>Rodney, MI 49342</p>
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
                <a class="navbar-brand visible-xs-block" href="{{url('/')}}"><img class="img-responsive" src="{{url('/img/four-green-fields-farm-logo.svg')}}" alt="Four Gren Fields Farm"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul id="menu-menu" class="nav navbar-nav">
                    <!--<li class="{{(isset($active_page)) && $active_page=='home'?'active':''}}"><a href="{{url('/')}}">Home</a></li>-->
                    <li class="{{(isset($active_page)) && $active_page =='farm-history'?'active':''}}"><a href="{{url('/farm-history')}}">Our History</a></li>
                    <li class="{{(isset($active_page)) && ($active_page == 'maple-syrup')?'active':''}}"><a href="{{url('/')}}/maple-syrup">Syrup</a></li>
                    <!-- <li class="{{(isset($active_page)) && ($active_page == 'honey')?'active':''}}"><a href="{{url('/')}}/honey">Honey</a></li> -->
                    
                    <li class="dropdown {{(isset($active_page)) && ($active_page == 'maze')?'active':''}}"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Corn Maze <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{url('/')}}/maze">How to Play</a></li>
                      <li><a href="{{url('/')}}/building-the-maze">Building the Maze</a></li>
                      <li><a href="{{url('/')}}/haunted-maze">Haunted Maze</a></li>
                      <li><a href="{{url('/')}}/pumpkin-patch">Pumpkin Patch</a></li>
                    </ul>
                    </li>
                    <li class="{{(isset($active_page)) && ($active_page == 'rides')?'active':''}}"><a href="{{url('/')}}/rides">Hay &amp; Sleigh Rides</a></li>
                    <li class="{{(isset($active_page)) && ($active_page == 'event-barn')?'active':''}}"><a href="{{url('/')}}/event-barn">Wedding/Event Barn</a></li>
                    <li class="{{(isset($active_page)) && ($active_page == 'events')?'active':''}}"><a href="{{url('/')}}/events">Reservations &amp; Events</a></li>
                </ul>        
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="corner-art top-left"></div>
    <div class="corner-art top-right"></div>
    <div class="corner-art bottom-left"></div>
    <div class="corner-art bottom-right"></div>
</header>