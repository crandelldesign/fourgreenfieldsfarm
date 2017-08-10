@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>It's Time to Slow Down and Relax</h1>

<div class="slideshow img-width-800 margin-bottom-15">
	<div class="arrows"></div>
    <div class="item active">
        <a class="" href="#" data-toggle="modal" data-target="#youtube-modal-1"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh-youtube-1.jpg" alt="Hay &amp; Sleigh Rides YouTube Video" /></a>
    </div>
	<div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh1.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh1.jpg" alt="Photo of Hay and Sleigh Rides 1" /></a>
    </div>
	<div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh2.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh2.jpg" alt="Photo of Hay and Sleigh Rides 2" /></a>
    </div>
    <!--<div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh3.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh3.jpg" /></a>
    </div>-->
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh4.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh4.jpg" alt="Photo of Hay and Sleigh Rides 3" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh5.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh5.jpg" alt="Photo of Hay and Sleigh Rides 4" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh6.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh6.jpg" alt="Photo of Hay and Sleigh Rides 5" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh7.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh7.jpg" alt="Photo of Hay and Sleigh Rides 6" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh8.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh8.jpg" alt="Photo of Hay and Sleigh Rides 7" /></a>
    </div>
    <!--<div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh10.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/heysleigh10.jpg" /></a>
    </div>-->
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh11.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh11.jpg" alt="Photo of Hay and Sleigh Rides 8" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh12.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh12.jpg" alt="Photo of Hay and Sleigh Rides 9" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh13.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh13.jpg" alt="Photo of Hay and Sleigh Rides 10" /></a>
    </div>
    <!--<div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh14.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh14.jpg" /></a>
    </div>-->
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh15.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh15.jpg" alt="Photo of Hay and Sleigh Rides 11" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh16.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh16.jpg" alt="Photo of Hay and Sleigh Rides 12" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh17.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh17.jpg" alt="Photo of Hay and Sleigh Rides 13" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh18.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh18.jpg" alt="Photo of Hay and Sleigh Rides 14" /></a>
    </div>
    <!--<div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh19.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh19.jpg" /></a>
    </div>-->
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh20.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh20.jpg" alt="Photo of Hay and Sleigh Rides 15" /></a>
    </div>
    <!--<div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh21.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh21.jpg" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh22.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh22.jpg" /></a>
    </div>-->
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh23.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh23.jpg" alt="Photo of Hay and Sleigh Rides 16" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh24.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh24.jpg" alt="Photo of Hay and Sleigh Rides 17" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh25.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh25.jpg" alt="Photo of Hay and Sleigh Rides 18" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh26.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh26.jpg" alt="Photo of Hay and Sleigh Rides 19" /></a>
    </div>
    <div class="item">
		<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/heysleigh27.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/heysleigh27.jpg" alt="Photo of Hay and Sleigh Rides 20" /></a>
    </div>
</div>

<div class="img-left-sm">
	<a class="thumbnail-popup" href="{{url('/')}}/img/photos/rides1.jpg"><img class="img-responsive center-block img-border" src="{{url('/')}}/img/photos/cropped/rides1.jpg" alt="Rides" /></a>
</div>
<div class="clearfix visible-xs"></div>

<p>We offer private group wagon and sleigh ride opportunities from September to March in addition to wagon rides when our Maze is open and sleigh rides.* We generally only book one group a day because we want you to enjoy the experience and the beauty of our farm at your own pace.  We can take groups of up to 12 people on the wagon at a time (a few more if some are kids or real skinny) and our prices will fit the budget of even the most cost conscious group. (Prices are listed below.) We can take groups of any size but just understand that only 12 or so can go on the wagon at once.   If you've got a really big group, Rocky and Charlie have friends so contact us and we'll try to add a second team and sleigh.</p>

<p>There are 2.2 miles of trails throughout our farm that cut through open fields, woods, and wetlands giving you a chance to see the natural diversity of the farm.   We have a warming house for your use and an area set up for camp fires so there is no need to hurry off at the end of your ride.  You can bring your own goodies and sit around a roaring fire, visit, roast hot dogs, make smores, or just &quot;be.&quot;  We'll do our best to make you comfortable and no one will be pushing you down the road so toss another log on the fire and relax.   As an old Irishman once said, &quot;You'd better slow down boyo or you'll be chasin' your own shadow for sure.&quot;</p>

<!--<p>Don't want to bother with your own food but still want to feast a little as part of your hay/sleigh ride?  We can arrange for catering from <strong>Pepper's Cafe and Deli</strong> or <strong>Snyder's Market in Big Rapids</strong>.   Pepper's offers a variety of deli style sandwiches, soup, and soft drinks and Snyder's has pulled pork sandwiches, coleslaw, baked beans, potato salad, and soft drinks.   Just contact us for details and prices.

<p>If you really want to &quot;step it up a notch&quot; when it comes to food, you can check out Snyder's at <a href="http://www.snydersbbq.com">www.snydersbbq.com</a>. They are sure to have whatever you want on their extensive catering menu.</p> -->

<div class="img-right-sm text-center">
	<a class="thumbnail-popup" href="{{url('/')}}/img/photos/rides3.jpg"><img class="img-responsive center-block img-border" src="{{url('/')}}/img/photos/cropped/rides3.jpg" alt="Rides 2" /></a>
    <div class="caption">Rocky and Charlie are ready to go,<br> all they need is you.</div>
</div>
<div class="clearfix visible-xs"></div>

<p>Here is what you can look forward to seeing in the winter.  Think about it:  A frosty ride through the woods to a roaring bonfire where you can laugh talk and realize what beauty Michigan has no matter the season. If you book in the winter and there is no snow, don't worry we will just use the wheeled wagon.</p>

<div class="clearfix"></div>
<p class="text-center"><strong>Wagon/Sleigh Ride with bonfire and use of our warming house is $80. Please contact us for pricing options for groups of 40 or more people.</strong></p>

<p>If you'd like to combine the corn maze experience with a wagon ride, contact us for details on how you can do that. You can contact us at the email link or phone number on our home page.</p>

<p>*We use the sleigh if there is enough snow and if not we used the wheeled wagon.</p>

<!-- Modal -->
<div class="modal fade" id="youtube-modal-1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="853" height="480" src="https://www.youtube.com/embed/4MDSAb9MyoY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@stop

@section('scripts')
<script type="text/javascript" src="{{ elixir('js/slideshow.js') }}"></script>
@stop
