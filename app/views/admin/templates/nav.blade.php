<div class="page">

<nav class="navbar navbar-default margin-top-15" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Four Green Fields Farm</a>
    </div>
    @if(Auth::check())
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}/events/admin">Admin Home</a></li>
        <li><a href="{{url('/')}}/events/admin/add-event">Add Event</a></li>
        <li><a href="{{url('/')}}/events/admin/all-events">Edit Events</a></li>
        <li><a href="{{url('/')}}/events/admin/change-password">Change Password</a></li>
        <li><a href="{{url('/')}}/events/admin/logout">Logout</a></li>
      </ul>
    </div>
    @endif
  </div>
</nav>

<header class="header hidden">
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
          <li class="{{(isset($active_page)) && ($active_page == 'maze')?'active':''}}"><a href="{{url('/')}}/maze">Corn Maze</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'rides')?'active':''}}"><a href="{{url('/')}}/rides">Hay &amp; Sleigh Rides</a></li>
          <li class="{{(isset($active_page)) && ($active_page == 'events')?'active':''}}"><a href="{{url('/')}}/events">Reservations &amp; Events</a></li>
        </ul>
      </div>
    <!-- /.navbar-collapse -->
  </nav>
</header>

<div class="margin-bottom-15"></div>

<div class="content">