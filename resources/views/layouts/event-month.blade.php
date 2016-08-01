<div class="calendar-page">
    <div class="calendar-overlay"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i><span class="sr-only">Loading...</span></div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-push-4 text-center"><h2><span class="calendar-month">{{date('F',$date)}}</span></h2></div>
        <div class="col-xs-6 col-sm-4 col-sm-pull-4"><a href="{{url('/')}}/events/{{strtolower(getdate($prev_month)['month']).'-'.date('Y',$prev_month)}}" class="last-month month-nav" data-month_link="{{strtolower(getdate($prev_month)['month']).'-'.date('Y',$prev_month)}}" data-month_title="{{getdate($prev_month)['month'].' '.date('Y',$prev_month)}}">Last Month</a></div>
        <div class="col-xs-6 col-sm-4 text-right"><a href="{{url('/')}}/events/{{strtolower(getdate($next_month)['month']).'-'.date('Y',$next_month)}}" class="next-month month-nav" data-month_link="{{strtolower(getdate($next_month)['month']).'-'.date('Y',$next_month)}}" data-month_title="{{getdate($next_month)['month'].' '.date('Y',$next_month)}}">Next Month</a></div>
    </div>
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
            @for ($p = 1; $p <= date('w',$first_day_of_the_month); $p++)
                <td class="not-this-month">{{date('t',$prev_month) - (date('w',$first_day_of_the_month) - $p)}}</td>
                <?php $i ++ ?>
            @endfor
            @foreach ($month->dates as $dates)
                <td data-date="{{$dates->date_time}}" data-php_date="{{$dates->php_date}}" class="{{(isset($dates->events) && isset($dates->events[0]->name))?'has-event':''}} {{(date('mdY',$dates->php_date) == date('mdY',$current_date))?'active':''}}">
                    <strong class="day-count">{{$dates->day_count}}</strong>
                    @if(isset($dates->events))
                    @foreach ($dates->events as $event)
                    @if (isset($event->name))
                    <a class="cal-event" data-event_id="{{$event->id}}">
                        <span class="event-title">{{$event->name}}</span>
                        @if(!$event->is_all_day)
                        <br>
                        {{date('g:ia',strtotime($event->starts_at))}} @if($event->is_has_ends_at) - {{date('g:ia',strtotime($event->ends_at))}} @endif
                        @endif
                    </a>
                    @endif
                    @endforeach
                    @endif
                </td>
                @if($i % 7 == 0)
                </tr><tr>
                @endif
                <?php $i++; ?>
            @endforeach

            @for ($f = 1; $f <= (6 - date('w', $last_day_of_the_month)); $f++)
                <td class="not-this-month">{{$f}}</td>
                <?php $i ++ ?>
            @endfor
        </tr>
        </tbody>
    </table>
</div>