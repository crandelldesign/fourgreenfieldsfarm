@extends('layouts.default')

@section('head')
<script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('content')

<div class="alert alert-warning">
    <p><strong>COVID-19 Information</strong></p>
    <p class="margin-bottom-0">We are an outside venue so masks are encouraged but not mandatory at the maze where there is plenty of room to do social distancing.</p>
</div>

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

<p>Thanks to all of our wonderful customers who gave us another great and fun filled fall season.  We never get tired of seeing all the smiles, seeing old friends and meeting new ones, or hearing the screams and laughter in the Haunted Maze.  It is truly a joy and blessing to have you visit our farm.   Now its sleigh ride season so put on some warm clothes and boots, book a sleigh ride, and come enjoy Michigan’s winter wonderland.  Check out what we can offer you by clicking on our “Hay & Sleigh Rides” tab <strong>and then check the calendar on "Reservations and Events" tab and see what days are open.</strong></p>

<hr />

<h2>Four Green Fields Farm Corn Maze<br><small>FUN FOR ALL AGES</small></h2>
<div class="row hours-prices">
    <div class="col-sm-6 col-md-5">
        <h3>Corn Maze</h3>
        <p>Sunday, September 26 to October 31</p>
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
        <p><small>Note: Opening day is on a Sunday, September 26 instead of the usual Saturday opening due to a family event</small></p>
    </div>
    <div class="col-sm-6 col-md-5 col-md-offset-2">
        <h3>Haunted Maze</h3>
        <p>October 8 to October 30</p>
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
<p>Admission: $4</p>
<p class="text-center">PRIVATE GROUP BOOKINGS AVAILABLE!</p>-->

<hr>

<h2>Contact</h2>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <ul class="fa-ul">
            <li><i class="fa-li fa fa-phone-square" aria-hidden="true"></i> 231-580-1463 and ask for Kevin</li>
            <li><i class="fa-li fa fa-envelope" aria-hidden="true"></i>  <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a></li>
            <li><i class="fa-li fa fa-map-marker" aria-hidden="true"></i> <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress">15693 Wilson Road</span><br>
                <span itemprop="addressLocality">Rodney</span>,
                <span itemprop="addressRegion">MI</span>
                <span itemprop="postalCode">49342</span>
            </address></li>
        </ul>
        <!--<p><i class="fa fa-phone-square" aria-hidden="true"></i> 231-580-1463 and ask for Kevin<br>
            <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a></p>-->
    </div>
    <div class="col-sm-6 col-md-8">
        <form id="contact-form" class="form" action="{{url('/')}}#contact-form" method="post" autocomplete="off">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">Please correct the errors in red below.</div>
            @endif
            <div class="form-group form-group-sm {{($errors->has('name'))?'has-error':''}}">
                <label class="control-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
                @foreach ($errors->get('name') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-sm {{($errors->has('email'))?'has-error':''}}">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        @foreach ($errors->get('email') as $error)
                            <div class="help-block with-errors">{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-sm {{($errors->has('phone'))?'has-error':''}}">
                        <label class="control-label" for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}">
                        @foreach ($errors->get('phone') as $error)
                            <div class="help-block with-errors">{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group form-group-sm {{($errors->has('message'))?'has-error':''}}">
                <label class="control-label" for="message">Message</label>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message">{{old('message')}}</textarea>
                @foreach ($errors->get('message') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <div class="form-group form-group-sm {{(count($errors) > 0 && $errors->first('g-recaptcha-response'))?'has-error':''}}">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}"></div>
                @foreach ($errors->get('g-recaptcha-response') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
                @foreach ($errors->get('recaptcha') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            {{ csrf_field() }}
            <div class="form-group form-group-submit">
                <button type="submit" class="btn btn-submit btn-camarone">Send</button>
            </div>
        </form>
    </div>
</div>

@stop

@section('scripts')
@stop
