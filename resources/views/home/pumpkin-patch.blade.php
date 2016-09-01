@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Pumpkin Patch</h1>

<div class="slideshow margin-bottom-15 img-width-800">
	<div class="arrows"></div>
	<div class="item active">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch1.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch1.jpg" alt="Pumpkin Patch 1" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch2.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch2.jpg" alt="Pumpkin Patch 2" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch3.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch3.jpg" alt="Pumpkin Patch 3" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch4.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch4.jpg" alt="Pumpkin Patch 4" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch5.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch5.jpg" alt="Pumpkin Patch 5" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch6.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch6.jpg" alt="Pumpkin Patch 6" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch7.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch7.jpg" alt="Pumpkin Patch 7" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch8.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch8.jpg" alt="Pumpkin Patch 8" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch9.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch9.jpg" alt="Pumpkin Patch 9" /></a>
    </div>
</div>

<p>We had lots of folks in our first year ask us to plant a Pumpkin Patch so they could do some of their Halloween shopping while enjoying the Maze.  That sounded like a good idea so we have started planting a patch every year. Hopefully the weather, deer, and bugs will cooperate and we will have a nice crop of pumpkins for you to pick.</p>

@stop

@section('scripts')
<script type="text/javascript" src="{{ elixir('js/slideshow.js') }}"></script>
@stop