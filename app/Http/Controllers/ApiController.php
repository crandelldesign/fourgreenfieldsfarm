<?php

namespace fourgreenfieldsfarm\Http\Controllers;

use Illuminate\Http\Request;

use fourgreenfieldsfarm\Http\Requests;
use fourgreenfieldsfarm\Http\Controllers\Controller;
use Analytics;
use Auth;
use Cache;
use Response;
use StdClass;
use fourgreenfieldsfarm\CalendarEvent;

class ApiController extends Controller
{

    public function getIndex()
    {
        //
    }

    public function getEvents($date)
    {
        if(!$date)
            abort(400);

        $tomorrow = strtotime('+1 day', $date);
        $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $date))
            ->where('starts_at','<',date("Y-m-d H:i:s", $tomorrow))
            ->orderBy('is_all_day','desc')
            ->orderBy('starts_at')
            ->get();

        foreach ($events as $event) {
            $event->starts_at_date_formatted = date('n/j/Y',strtotime($event->starts_at));
            $event->starts_at_time_formatted = date('g:ia',strtotime($event->starts_at));
            $event->ends_at_date_formatted = date('n/j/Y',strtotime($event->ends_at));
            $event->ends_at_time_formatted = date('g:ia',strtotime($event->ends_at));
        }

        Analytics::trackEvent('Calendar Click', 'click', 'Calandar Events Loaded', 1);

        return json_encode($events);
    }
}