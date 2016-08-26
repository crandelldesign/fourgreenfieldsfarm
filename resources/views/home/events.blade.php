@extends('layouts.default')
@section('content')
<h1>Calendar</h1>

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
