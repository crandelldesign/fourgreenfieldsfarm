@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Haunted Maze</h1>

<div class="slideshow img-width-800 margin-bottom-15">
	<div class="arrows"></div>
	<div class="item active">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/haunted1.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/haunted1.jpg" alt="Photo of Haunted Maze 1" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/haunted2.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/haunted2.jpg" alt="Photo of Haunted Maze 2" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/haunted3.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/haunted3.jpg" alt="Photo of Haunted Maze 3" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/haunted4.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/haunted4.jpg" alt="Photo of Haunted Maze 4" /></a>
    </div>
    <div class="item">
    	<a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/haunted5.jpg"><img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/haunted5.jpg" alt="Photo of Haunted Maze 5" /></a>
    </div>
</div>

<p>It is a pleasant fall evening and there is not a star in the sky.  You hear the faint rustling of the corn stalks and you walk down a very dark path with just a small flashlight to guide you and your friends.  You don't know why but your heart is beating just a little faster and you can feel a bead of sweat on your forehead.   Suddenly from behind you comes a blood chilling scream and your first instinct is to run, but where?  After all what's in front of you might be worse than what's behind you.</p>

<p>This is what you'll face when the Maze at Four Green Fields is haunted on Friday and Saturday nights in October.  Check our <a href="{{url('/')}}/events">Events</a> page for dates and times. Ghosts, ghouls, and monsters wander through the Maze, hide among the corn, and generally do their best to make sure you have a good time running for your life and screaming at the top of your lungs.  Walking through the Maze at night presents a new challenge and when you add a little fear to the mixture it becomes a real “interesting” experience.</p>

<p>The shadows cast along the paths on a moonlight night gives the “spooks” a few more places to hide but also makes finding your way a little easier.  Looking up at a star filled sky with no artificial lights to interfere reminds you of the beauty that God has blessed us with.   Almost makes you forget what's waiting just around the corner for you.</p>

<p>Our &quot;haunters&quot; are members of local community groups like 4H and volunteer Fire Departments who get 50% of the night's income for their work so while you're having fun you are also helping out the local community. If you are a member of a community organization that would be interested in having some fun and raising funds for your organization, give us a call at 231.580.1463 or drop us an email using the link on the home page.  

<p>The cost of the Haunted Maze is just $5.  You won't find this much fun at this price anywhere in Big Rapids.</p>

@stop

@section('scripts')
<script type="text/javascript" src="{{ elixir('js/slideshow.js') }}"></script>
@stop
