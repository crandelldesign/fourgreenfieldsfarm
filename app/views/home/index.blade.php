@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Welcome to the Four Green Fields Farm</h1>

<div class="pull-right margin-left-15 margin-bottom-15 img-aside-sm">
	<p><a href="{{url('/')}}/img/photos/enterance-sign-pic.jpg" data-featherlight="image"><img src="{{url('/')}}/img/photos/enterance-sign-pic.jpg" class="img-responsive img-border center-block" style="max-width: 300px" alt="Four Green Fields Enterance Sign" /></a></p>
</div>
<div class="clearfix visible-xs"></div>
<p>We are located about 7 miles east of US 131 off exit 139 and about 5 miles east of the City of Big Rapids.</p>

<p><a href="{{url('/')}}/directions">Driving &amp; Directions</a></p>
<p><a href="http://www.facebook.com/pages/Rodney-MI/Four-Green-Fields-Farm/101570023237276">Find Us on Facebook</a></p>

<hr />

<p style="text-align:center"><strong>Check the calendar on <a href="{{url('/')}}/events">Group Bookings/Events</a> for weather related cancellations.</strong></p>

<hr />

<p>Thanks to all of our wonderful customers who gave us another great and fun filled fall season. We never get tired of seeing all the smiles, seeing old friends and meeting new ones, or hearing the screams and laughter in the Haunted Maze.  It is truly a joy and blessing to have you visit our farm. Now its sleigh ride season so put on some warm clothes and boots, book a sleigh ride, and come enjoy Michigan's winter wonderland. Check out what we can offer you by clicking on our &quot;<a href="{{url('/')}}/rides">Hay &amp; Sleigh Rides</a>&quot; tab.</p>

<hr />

<h3>Four Green Fields Farm Corn Maze</h3>
<p>Rodney, MI 49342</p>
<p><strong>FUN FOR ALL AGES</strong></p>
<p>The regular Maze is Open Saturdays from Noon to 5:30pm and Sundays from 2 to 5 from September 19 to November 1 <span style="font-size:10px">(Weather Permitting)</span></p>
<p>Admission: $3. Kids under 5 are FREE! Horse Drawn Wagon Rides $2</p>
<p>The Haunted Maze is open Friday and Saturday nights from 8 to 10:30pm October 9th to 31st.</p>
<p>Admission: $4</p>
<p class="text-center">PRIVATE GROUP BOOKINGS AVAILABLE!</p>
<p>Phone: 231-580-1463 and ask for Kevin<br />
OR<br />
Email: <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a></p>

@stop

@section('footercode')
@stop