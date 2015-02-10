<div class="page">

<header class="header">
  <div class="header-top">
    <div class="row">
      <div class="col-sm-6">
        <a href="{{url('/')}}"><img src="{{url('/')}}/img/logo-desktop.png" alt="Four Green Fields Farm" class="img-responsive"></a>
      </div>
      <div class="col-sm-6 text-right">
        <p>From Ireland to America, We Work the Land</p>
        <p>O Eirinn go Mericea, Saothraimid an Talamh</p>
        <p>Rodney, MI 49342</p>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/')}}/img/logo-mobile.png" alt="Four Green Fields Farm"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse" id="navbar-collapse-top">
        <ul class="nav navbar-nav">
          <li class="{{(isset($active_page)) && ($active_page == 'farm-history')?'active':''}}"><a href="{{url('/')}}/farm-history">Our History</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'maple-syrup')?'active':''}}"><a href="{{url('/')}}/maple-syrup">Syrup</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'honey')?'active':''}}"><a href="{{url('/')}}/honey">Honey</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'pumpkin-patch')?'active':''}}"><a href="{{url('/')}}/pumpkin-patch">Pumpkin Patch</a></li>
          <li class="dropdown {{(isset($active_page)) && ($active_page == 'maze')?'active':''}}"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Corn Maze <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{url('/')}}/maze">How to Play</a></li>
              <li><a href="{{url('/')}}/building-the-maze">Building the Maze</a></li>
              <li><a href="{{url('/')}}/haunted-maze">Haunted Maze</a></li>
            </ul>
            </li>
          <li class="{{(isset($active_page)) && ($active_page == 'rides')?'active':''}}"><a href="{{url('/')}}/rides">Hay &amp; Sleigh Rides</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'events')?'active':''}}"><a href="{{url('/')}}/events">Reservations &amp; Events</a></li>
        </ul>
      </div>
    <!-- /.navbar-collapse -->
  </nav>
</header>

<div class="content">