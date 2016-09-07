@extends('layouts.default')
@section('content')
<h1>Calendar</h1>

<div class="img-left-sm img-width-300">
    <div class="slideshow">
        <div class="arrows"></div>
        <div class="item active">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events1.jpg"><img src="{{url('/')}}/img/photos/cropped/events1.jpg" class="img-responsive center-block" alt="Event page photo 1" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events2.jpg"><img src="{{url('/')}}/img/photos/cropped/events2.jpg" class="img-responsive center-block" alt="Event page photo 2" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events3.jpg"><img src="{{url('/')}}/img/photos/cropped/events3.jpg" class="img-responsive center-block" alt="Event page photo 3" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events4.jpg"><img src="{{url('/')}}/img/photos/cropped/events4.jpg" class="img-responsive center-block" alt="Event page photo 4" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events5.jpg"><img src="{{url('/')}}/img/photos/cropped/events5.jpg" class="img-responsive center-block" alt="Event page photo 5" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events6.jpg"><img src="{{url('/')}}/img/photos/cropped/events6.jpg" class="img-responsive center-block" alt="Event page photo 6" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events7.jpg"><img src="{{url('/')}}/img/photos/cropped/events7.jpg" class="img-responsive center-block" alt="Event page photo 7" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events8.jpg"><img src="{{url('/')}}/img/photos/cropped/events8.jpg" class="img-responsive center-block" alt="Event page photo 8" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events9.jpg"><img src="{{url('/')}}/img/photos/cropped/events9.jpg" class="img-responsive center-block" alt="Event page photo 9" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events10.jpg"><img src="{{url('/')}}/img/photos/cropped/events10.jpg" class="img-responsive center-block" alt="Event page photo 10" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events11.jpg"><img src="{{url('/')}}/img/photos/cropped/events11.jpg" class="img-responsive center-block" alt="Event page photo 11" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events12.jpg"><img src="{{url('/')}}/img/photos/cropped/events12.jpg" class="img-responsive center-block" alt="Event page photo 12" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events13.jpg"><img src="{{url('/')}}/img/photos/cropped/events13.jpg" class="img-responsive center-block" alt="Event page photo 13" /></a>
        </div>
        <div class="item">
            <a class="slideshow-link thumbnail-popup" href="{{url('/')}}/img/photos/events14.jpg"><img src="{{url('/')}}/img/photos/cropped/events14.jpg" class="img-responsive center-block" alt="Event page photo 14" /></a>
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

@include('layouts.event-month')

<div class="modal fade" tabindex="-1" role="dialog" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{isset($event_date)?date('l, F j, Y',$event_date):''}}&nbsp;</h4>
            </div>
            <div class="modal-body">
                <div id="event-template-container">
                    @if (isset($events))
                        <div class="panel-group" id="event-accordion" role="tablist" aria-multiselectable="true">
                            @foreach ($events as $event)
                            <div class="panel event-panel">
                                <div class="panel-heading" role="tab" id="heading{{$event->id}}">
                                    @if ($event->description)
                                    <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse{{$event->id}}" class="see-more-left event-see-more collapsed">
                                    <i class="fa fa-angle-right rotate" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    <h4 class="panel-title">
                                        {{$event->name}}
                                        <div class="more-info">
                                            @if (!$event->is_all_day)
                                            <div class="event-time">
                                                {{$event->starts_at_time_formatted}}
                                                @if ($event->is_has_ends_at)
                                                - {{$event->ends_at_time_formatted}}
                                                @endif
                                            </div>
                                            @endif
                                            @if ($event->description)
                                            <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse{{$event->id}}" class="btn btn-xs btn-darkgreenblue event-see-more see-more-text collapsed">
                                                See More
                                            </a>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                    </h4>
                                </div>
                                @if ($event->description)
                                <div id="collapse{{$event->id}}" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                    {!! $event->description !!}
                                    </div>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script id="event-template" type="text/x-handlebars-template">
    <div class="panel-group" id="event-accordion" role="tablist" aria-multiselectable="true">
    @{{#each data}}
    <div class="panel event-panel">
        <div class="panel-heading" role="tab" id="heading@{{id}}">
            @{{#if description}}
            <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse@{{id}}" class="see-more-left event-see-more collapsed">
            <i class="fa fa-angle-right rotate" aria-hidden="true"></i>
            </a>
            @{{/if}}
            <h4 class="panel-title">
                @{{name}}
                <div class="more-info">
                    @{{#if haunted_by}}
                    <div class="event-time">
                        Haunted By: @{{haunted_by}}
                    </div>
                    @{{/if}}
                    @{{#unless is_all_day}}
                    <div class="event-time">
                        @{{starts_at_time_formatted}}
                        @{{#if is_has_ends_at}}
                        - @{{ends_at_time_formatted}}
                        @{{/if}}
                    </div>
                    @{{/unless}}
                    @{{#if description}}
                    <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse@{{id}}" class="btn btn-xs btn-darkgreenblue event-see-more see-more-text collapsed">
                        See More
                    </a>
                    @{{/if}}
                    <div class="clearfix"></div>
                </div>
            </h4>
        </div>
        @{{#if description}}
        <div id="collapse@{{id}}" class="panel-collapse collapse" role="tabpanel">
            <div class="panel-body">
            @{{{description}}}
            </div>
        </div>
        @{{/if}}
    </div>
    @{{/each}}
    </div>
</script>
@stop

@section('scripts')
<script type="text/javascript" src="{{ elixir('js/slideshow.js') }}"></script>
<script>
$(document).ready(function()
{

    window.onpopstate = function(event)
    {
        location.reload();
    };

    $('.calendar-page').on('click', '.month-nav', function(event)
    {
        event.preventDefault();
        $('.calendar-page').find('.calendar-overlay').addClass('loading');
        var month_link = $(this).data('month_link');
        var month_title = $(this).data('month_title');
        $('.calendar-page').load('{{url("/events")}}/'+month_link+'/simple .calendar-page > *', function(responseTxt, statusTxt, xhr)
        {
            if(statusTxt == "success")
                $('.calendar-page').find('.calendar-overlay').removeClass('loading');
            if(statusTxt == "error")
                console.log("Error: " + xhr.status + ": " + xhr.statusText);
        });
        if (history.pushState) {
            var stateObject = {};
            //var title = month_title+' Events | Christ Lutheran Church of Waterford'; // Add back when browsers use it
            var title = 'Events | Christ Lutheran Church of Waterford';
            var newUrl = '{{url("/events/")}}/'+month_link;
            history.pushState(stateObject,title,newUrl);
        }
    });

    $('.calendar-page').on('click', '.has-event', function(event)
    {
        $('.calendar-page').find('.calendar-overlay').addClass('loading');
        var php_date = $(this).data('php_date');
        var date = moment($(this).data('date')).format('dddd, MMMM D, YYYY');
        $.ajax({
            url: '{{url("/api/events")}}/'+php_date,
            success: function(data) {
                var source = $("#event-template").html();
                var template = Handlebars.compile(source);
                var html = template({
                    data: JSON.parse(data)
                });
                $('#event-template-container').html(html);
                $('#event-modal').find('.modal-title').html(date);
                $('#event-modal').modal('show');
                $('.calendar-page').find('.calendar-overlay').removeClass('loading');
            },
            type: 'GET'
        });
    });
    $('#event-modal').on('click', '.event-see-more', function(event)
    {
        $(this).parents('.panel-heading').find('.rotate').toggleClass('down');

        if ($(this).parents('.panel-heading').find('.see-more-text').hasClass('collapsed')) {
            $(this).parents('.panel-heading').find('.see-more-text').text('See Less');
        } else {
            $(this).parents('.panel-heading').find('.see-more-text').text('See More');
        }
    });

    function getUrlVars()
    {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
        });
        return vars;
    }

    if (getUrlVars()['event']) {
        var event_id = getUrlVars()['event'];
        $('#heading'+event_id).find('.rotate').toggleClass('down');
        $('#heading'+event_id).find('.see-more-text').text('See Less');
        $('#collapse'+event_id).collapse('show').on('shown.bs.collapse', function () {
            $('#event-modal').modal('show');
        });
    }
});
</script>
@stop
