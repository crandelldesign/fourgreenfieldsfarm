@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Pumpkin Patch</h1>

<div id="slideshow1" class="slideshow carousel slide margin-bottom-15" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch1.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch1.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch2.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch2.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch3.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch3.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch4.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch4.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch5.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch5.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch6.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch6.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch7.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch7.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch8.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch8.jpg" /></a>
	    </div>
	    <div class="item">
	    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/pumpkin_patch9.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pumpkin_patch9.jpg" /></a>
	    </div>
	</div>
</div>

<script type="text/javascript">
	/*$(document).ready(function() {
		$(".slideshow-link").colorbox({rel:'slideshow-link'});
		$('.slideshow').cycle({ 
			fx: 'scrollLeft',
			random: true
		});
	});*/
</script>

<!-- <p class="center"><a href="{{url('/')}}/img/photos/pumpkin_patch4.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/tpumpkin_patch4.jpg" width="800" height="200" style="border:#090 4px solid;" /></a></p> -->

<p>We had lots of folks in our first year ask us to plant a Pumpkin Patch so they could do some of their Halloween shopping while enjoying the Maze.  That sounded like a good idea so we have started planting a patch every year. Hopefully the weather, deer, and bugs will cooperate and we will have a nice crop of pumpkins for you to pick.</p>

@stop