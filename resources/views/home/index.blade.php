@extends('layouts.default')

@section('head')
@stop

@section('content')

<h1>Welcome to the Four Green Fields Farm</h1>

<div class="img-right-sm">
    <p><a href="{{url('/')}}/img/photos/enterance-sign-pic.jpg" class="thumbnail-popup"><img src="{{url('/')}}/img/photos/enterance-sign-pic.jpg" class="img-responsive img-border center-block img-width-300" alt="Four Green Fields Enterance Sign" /></a></p>
</div>
<div class="clearfix visible-xs"></div>
<p>We are located about 7 miles east of US 131 off exit 139 and about 5 miles east of the City of Big Rapids.</p>

<p class="text-center"><a class="btn btn-camarone" href="{{url('/')}}/directions"><i class="fa fa-map-o" aria-hidden="true"></i> Driving &amp; Directions</a><span class="hidden-xs">&nbsp;&nbsp;&nbsp;</span><br class="visible-xs-block"><br class="visible-xs-block"><a class="btn btn-lynch" href="http://www.facebook.com/pages/Rodney-MI/Four-Green-Fields-Farm/101570023237276"><i class="fa fa-facebook-official" aria-hidden="true"></i> Find Us on Facebook</a></p>

<hr />

<p class="text-center"><strong>Check the calendar on <a href="{{url('/')}}/events">Group Bookings/Events</a> for weather related cancellations.</strong></p>

<hr />

<p>Every year we are open, we have more fun that the year before. We expect this year to be the same. Our maze, pumpkin patch, and horse drawn wagon rides all waiting for you still at the same low prices as the day we opened in 2006 (see details below). Don’t forget that on Friday and Saturday nights in October we haunt the maze for those brave souls not afraid of what lurks in a dark corn field. Want the Maze all to yourself? We love doing private group bookings. They are great for scouts, church youth groups, family outings, friends, and birthday parties. We offer you use of our picnic area and bonfire pit too. We can also accommodate groups during regular business hours so give us a call.</p>

<hr />

<h2>Four Green Fields Farm Corn Maze</h2>
<p>Rodney, MI 49342</p>
<p><strong>FUN FOR ALL AGES</strong></p>
<div class="row hours-prices">
    <div class="col-sm-6 col-md-5">
        <h3>Corn Maze</h3>
        <p>September 19 to November 1</p>
        <h4>Hours</h4>
        <table class="table">
            <tr>
                <th>Saturday</th>
                <td>Noon to 5:30pm</td>
            </tr><tr>
                <th>Sundays</th>
                <td>2pm to 5pm</td>
            </tr>
        </table>
        <h4>Prices</h4>
        <table class="table">
            <tr>
                <th>Admission</th>
                <td>$3</td>
            </tr><tr>
                <th>Kids under 5</th>
                <td>Free!</td>
            </tr><tr>
                <th>Horse Drawn Wagon Rides</th>
                <td>$2</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-6 col-md-5 col-md-offset-2">
        <h3>Haunted Maze</h3>
        <p>October 9th to 31st</p>
        <h4>Hours</h4>
        <table class="table">
            <tr>
                <th>Friday</th>
                <td>8pm to 10:30pm</td>
            </tr><tr>
                <th>Saturday</th>
                <td>8pm to 10:30pm</td>
            </tr>
        </table>
        <h4>Prices</h4>
        <table class="table">
            <tr>
                <th>Admission</th>
                <td>$4</td>
            </tr>
        </table>
    </div>
</div>
<!--<p>The regular maze is open Saturdays from Noon to 5:30pm and Sundays from 2 to 5 from September 19 to November 1 <small>(Weather Permitting)</small></p>
<p>Admission: $3. Kids under 5 are FREE! Horse Drawn Wagon Rides $2</p>
<h3>Haunted Maze</h3>
<p>Open Friday and Saturday nights from 8 to 10:30pm October 9th to 31st.</p>
<p>Admission: $4</p>-->
<p class="text-center">PRIVATE GROUP BOOKINGS AVAILABLE!</p>

<h3>Contact</h3>
<p><i class="fa fa-phone-square" aria-hidden="true"></i> 231-580-1463 and ask for Kevin<br>
    <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a></p>

@stop

@section('scripts')
@stop