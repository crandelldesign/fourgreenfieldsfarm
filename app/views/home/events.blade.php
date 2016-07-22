@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Reservations &amp; Upcoming Events</h1>

    <div class="pull-left margin-right-15 margin-bottom-15 img-aside-sm">
        <div id="slideshow1" class="slideshow carousel slide center-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events1.jpg"><img src="{{url('/')}}/img/photos/cropped/events1.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events2.jpg"><img src="{{url('/')}}/img/photos/cropped/events2.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events3.jpg"><img src="{{url('/')}}/img/photos/cropped/events3.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events4.jpg"><img src="{{url('/')}}/img/photos/cropped/events4.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events5.jpg"><img src="{{url('/')}}/img/photos/cropped/events5.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events6.jpg"><img src="{{url('/')}}/img/photos/cropped/events6.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events7.jpg"><img src="{{url('/')}}/img/photos/cropped/events7.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events8.jpg"><img src="{{url('/')}}/img/photos/cropped/events8.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events9.jpg"><img src="{{url('/')}}/img/photos/cropped/events9.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events10.jpg"><img src="{{url('/')}}/img/photos/cropped/events10.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events11.jpg"><img src="{{url('/')}}/img/photos/cropped/events11.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events12.jpg"><img src="{{url('/')}}/img/photos/cropped/events12.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events13.jpg"><img src="{{url('/')}}/img/photos/cropped/events13.jpg" class="img-responsive center-block" /></a>
                </div>
                <div class="item">
                    <a class="slideshow-link" data-featherlight="image" href="{{url('/')}}/img/photos/events14.jpg"><img src="{{url('/')}}/img/photos/cropped/events14.jpg" class="img-responsive center-block" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix visible-xs"></div>

<p>Do you have a church youth group, scout troop, fraternity or sorority, or employee group looking for a fun and affordable event?   What about a unique birthday party for your son or daughter? Booking the maze at Four Green Fields is just what you're looking for.   After all, what could be better than spending time outside in the beautiful Michigan fall weather?  If you just want to book a hay ride or sleigh ride without doing the maze, click on the <a href="{{url('/')}}/rides">Hay &amp; Sleigh Rides</a> page for details.</p>

<p>A private maze booking gives you the Maze all to yourselves and access to our fire pit and picnic area. You can go through the maze and then gather back around a roaring bonfire and munch on whatever goodies you want to bring with you. How about roasting hotdogs over the fire? Better yet, roast marshmallows and then make Smores. You can also walk the trails on the farm and enjoy the beautiful fall colors. (Helps burn off a few of those extra calories.)</p>

<p>Want to make the event really special?  How about combining a maze visit with a hay ride? You can add a horse drawn wagon ride to your maze booking for just $50.</p>

<p>We offer special discounted group rates and use of the picnic area is only $10.  Just look at the calendar and see if the date and time you want is available.  Contact us at (231) 580-1463 or at <a href="mailto:fourgreenfieldsman@yahoo.com">fourgreenfieldsman@yahoo.com</a> when you are ready to book or if you have any questions.  If you want to come when the maze is in operation on Saturday and Sunday, you can still book the picnic area for your group.</p>

<p>We'd be happy to give you names of folks who have booked in the past if you'd like to hear from them.</p>

<hr>

<div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-push-4 text-center"><h2 id="calendar"><span class="calendar-month">{{date('F',$date)}}</span></h2></div>
    <div class="col-xs-6 col-sm-4 col-sm-pull-4"><a href="{{url('/')}}/events/{{strtolower(getdate($prevMonth)['month'])}}-{{date('Y',$prevMonth)}}#calendar" class="last-month">Last Month</a></div>
    <div class="col-xs-6 col-sm-4 text-right"><a href="{{url('/')}}/events/{{strtolower(getdate($nextMonth)['month'])}}-{{date('Y',$nextMonth)}}#calendar" class="next-month">Next Month</a></div>
</div>
<div class="clearfix"></div>
<table class="table calendar">
    <thead>
        <tr>
            <th><span class="visible-xs">Sun</span><span class="hidden-xs">Sunday</span></th>
            <th><span class="visible-xs">Mon</span><span class="hidden-xs">Monday</span></th>
            <th><span class="visible-xs">Tues</span><span class="hidden-xs">Tuesday</span></th>
            <th><span class="visible-xs">Wed</span><span class="hidden-xs">Wednesday</span></th>
            <th><span class="visible-xs">Thurs</span><span class="hidden-xs">Thursday</span></th>
            <th><span class="visible-xs">Fri</span><span class="hidden-xs">Friday</span></th>
            <th><span class="visible-xs">Sat</span><span class="hidden-xs">Saturday</span></th>
        </tr>
    </thead>
    <tbody>
	<tr>
        <?php $i = 1 ?>
        @for ($p = 1; $p <= date('w',$firstDayOfTheMonth); $p++)
            <td class="not-this-month">{{date('t',$prevMonth) - (date('w',$firstDayOfTheMonth) - $p)}}</td>
            <?php $i ++ ?>
        @endfor
        @foreach ($month->dates as $dates)
            <td data-date="{{$dates->dateTime}}" class="{{(isset($dates->events) && isset($dates->events[0]->name))?'has-event':''}} {{(date('mdY',$dates->phpDate) == date('mdY',$currentDate))?'active':''}}">
                <strong class="day-count">{{$dates->dayCount}}</strong>
                @if(isset($dates->events))
                @foreach ($dates->events as $event)
                @if (isset($event->name))
                <div class="cal-event">
                    <span class="event-title">{{$event->name}}</span><br>
                    {{date('g:ia',strtotime($event->starts_at))}} - {{date('g:ia',strtotime($event->ends_at))}}<br>
                    @if($event->haunted_by)
                    Haunted by: {{$event->haunted_by}}
                    @endif
                </div>
                @endif
                @endforeach
                @endif
            </td>
            @if($i % 7 == 0)
            <tr></tr>
            @endif
            <?php $i++; ?>
        @endforeach

        @for ($f = 1; $f <= (6 - date('w', $lastDayOfTheMonth)); $f++)
            <td class="not-this-month">{{$f}}</td>
            <?php $i ++ ?>
        @endfor
	</tr>
    </tbody>
</table>
<script type='text/ejs' id='template_month'>
<tr>
<%
    var i = 1;
    for (p = 1; p <= data.lastMonthDays; p++) {
%>
    <td class="not-this-month"><%== data.lastMonthLastDay - (data.lastMonthDays - p) %></td>
<%
    i++;
    }
    for (d = 1; d <= data.daysInTheMonth; d++) {
%>
    <td data-date="<%= data.month.dates[d].dateTime %>" class="<%== ((typeof(data.month.dates[d].events) != 'undefined') && (typeof(data.month.dates[d].events[0].name) != 'undefined'))?'has-event':'' %> <%== (moment(data.month.dates[d].phpDate*1000).format('MMDDYYYY') == {{date('mdY',$currentDate)}})?'active':'' %>">
        <strong class="day-count"><%= data.month.dates[d].dayCount %></strong><br>
        
        <%
        if (typeof(data.month.dates[d].events) != "undefined")
        {
            for (e = 0; e <= (data.month.dates[d].events.length - 1); e++)
            {
                if (typeof(data.month.dates[d].events[e].name) != "undefined")
                {
            %>
                    <div class="cal-event">
                    <span class="event-title"><%= data.month.dates[d].events[e].name %></span><br>
                    <%== moment(data.month.dates[d].events[e].starts_at).format('h:mma') %> - <%== moment(data.month.dates[d].events[e].ends_at).format('h:mma') %><br>
                    <% if (data.month.dates[d].events[e].haunted_by.length > 0)
                    {
                        %>
                            Haunted by: <%= data.month.dates[d].events[e].haunted_by %>
                        <%
                    }
                    %>
                    </div>
                <%
                }
            }
        }
        %>
    </td>
<%
        if(i % 7 == 0) {
%>
    <tr></tr>
<%
        }
    i++;
    }
    for (f = 1; f <= (6 - moment(data.lastDayOfTheMonth*1000).format('d')); f++) {
%>
    <td class="not-this-month"><%== f %></td>
<%
    i++;
    }
%>
</tr>
</script>

<!-- Modal -->
<div class="modal fade" id="dayModal" tabindex="-1" role="dialog" aria-labelledby="dayModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="dayModalLabel">Modal title</h2>
      </div>
      <div class="modal-body">
        <div class="date-info">
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>


@stop

@section('footercode')
<script>
// Variables
original_month = "{{date('n',$date)}}";
original_year = "{{date('Y',$date)}}";
current_month = "{{date('n',$date)}}";
current_year = "{{date('Y',$date)}}";
last_month_slug = "{{strtolower(getdate($prevMonth)['month'])}}";
last_month = "{{date('n',$prevMonth)}}"
last_month_year = "{{date('Y',$prevMonth)}}";
next_month_slug = "{{strtolower(getdate($nextMonth)['month'])}}";
next_month = "{{date('n',$nextMonth)}}"
next_month_year = "{{date('Y',$nextMonth)}}";

window.onpopstate = function(event)
{
    events_control.URLchange();
};

Month = can.Model({
    findAll: 'GET {{url("/")}}/api/month'
},{});
EventsControl = can.Control(
{
	init: function()
    {
    	//this.Search();
    },
    //Events
    /*'.last-month click': function(element, event)
    {
        if($('html').hasClass('history'))
        {
            event.preventDefault();
            var stateObject = {};
            var title = "Group Bookings/Events - Four Green Fields Farm";
            var newUrl = "{{url('/')}}/events/"+last_month_slug+"-"+last_month_year;
            history.pushState(stateObject,title,newUrl);
        }
        current_month = last_month;
        current_year = last_month_year;
        this.Search();
    },
    '.next-month click': function(element, event)
    {
        if($('html').hasClass('history'))
        {
            event.preventDefault();
            var stateObject = {};
            var title = "Group Bookings/Events - Four Green Fields Farm";
            var newUrl = "{{url('/')}}/events/"+next_month_slug+"-"+next_month_year;
            history.pushState(stateObject,title,newUrl);
        }
        current_month = next_month;
        current_year = next_month_year;
        this.Search();
    },*/
    '.has-event click': function(element, event)
    {
        eventDate = moment(element.data('date')).format('dddd, MMMM Do, YYYY');

        eventData = element.clone();
        $('#dayModal .modal-title').html(eventDate);
        $('#dayModal .modal-body .date-info').html(eventData);
        $('#dayModal').modal('show')
    },
    //Methods
    'URLchange': function()
    {
        var url = window.location.pathname.replace('/events','');
        var url = url.replace('/','');
        if (url.length > 0)
        {
            var urlArray = [];
            urlArray = url.split('-');
            urlDate = Date.parse(urlArray[0]+' 1, '+urlArray[1]);
            current_month = moment(urlDate).format('M');
            current_year = moment(urlDate).format('YYYY');
        } else {
            current_month = original_month;
            current_year = original_year;
        }
        this.Search();
        
    },
    'Search': function()
    {
    	var self = this;
    	var MonthObject = {
            month: current_month,
            year: current_year
        };
    	Month.findAll(MonthObject, function(data) {
            self.BindMonth(data['0']);
        });
    },
    'BindMonth': function(data)
    {
        $('.calendar-month').html(moment(data.date*1000).format('MMMM'));
        current_month = moment(data.date*1000).format('M');
        current_year = moment(data.date*1000).format('YYYY');
        last_month_slug = moment(data.prevMonth*1000).format('MMMM').toLowerCase();
        last_month = moment(data.prevMonth*1000).format('M');
        last_month_year = moment(data.prevMonth*1000).format('YYYY');
        $('a.last-month').attr('href', '{{url('/')}}/events/'+last_month_slug+'-'+last_month_year);
        next_month_slug = moment(data.nextMonth*1000).format('MMMM').toLowerCase();
        next_month = moment(data.nextMonth*1000).format('M');
        next_month_year = moment(data.nextMonth*1000).format('YYYY');
        $('a.next-month').attr('href', '{{url('/')}}/events/'+next_month_slug+'-'+next_month_year);
        $('.table.calendar tbody').html(can.view('template_month',
        {
            data : data
        }));
    },
});

events_control = new EventsControl($('body'));
</script>
@stop