<?php

namespace fourgreenfieldsfarm\Http\Controllers;

use Illuminate\Http\Request;

use fourgreenfieldsfarm\Http\Controllers\Controller;
use Analytics;
use Auth;
use Cache;
use Mail;
use StdClass;
use fourgreenfieldsfarm\CalendarEvent;

class HomeController extends Controller
{

    public function getIndex()
    {
        $view = view('home.index');
        $view->active_page = 'home';
        $view->title = 'Welcome';
        $view->description = '';
        return $view;
    }

    public function getEvents(Request $request, $month_year = null, $simple = false)
    {
        if ($month_year)
        {
            $url = explode('-', $month_year);
            $date = strtotime($url[0].' 1, '.$url[1]);
        } else {
            $date = time();
        }
        $prev_month = strtotime('first day of -1 month', $date);
        $next_month = strtotime('first day of +1 month', $date);
        $today = getdate();
        $first_day_of_the_month = strtotime(date('F', $date).' 1, '.date('Y', $date));
        $last_day_of_the_month = strtotime(date('F', $date).' '.date('t', $date).', '.date('Y', $date));

        if (!$simple)
            $view = view('home.events');
        else
            $view = view('home.events-simple');
        $view->active_page = 'events';
        $view->title = 'Events';

        $view->current_date = time();
        $view->date = $date;
        $view->today = $today;
        $view->prev_month = $prev_month;
        $view->next_month = $next_month;
        $view->first_day_of_the_month = $first_day_of_the_month;
        $view->last_day_of_the_month = $last_day_of_the_month;
        $view->daysToDisplay = date('w', $first_day_of_the_month) + date('t', $date) + (6 - date('w', $last_day_of_the_month));

        /*$events = Cache::rememberForever(strtolower(date('F-Y',$date)), function() use ($first_day_of_the_month, $next_month) {
            return CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $first_day_of_the_month))
                ->where('starts_at','<',date("Y-m-d H:i:s", $next_month))
                ->orderBy('starts_at')
                ->orderBy('is_all_day')
                ->get();
        });*/

        $events = CalendarEvent::where('starts_at','>=',date('Y-m-d H:i:s', $first_day_of_the_month))
                ->where('starts_at','<',date('Y-m-d H:i:s', $next_month))
                ->orderBy('is_all_day','desc')
                ->orderBy('starts_at')
                ->get();

        $month = new StdClass;
        for ($d = 1; $d <= date('t',$date); $d++)
        {   
            $month->dates[$d] = new StdClass;
            $day = strtotime(date('F', $date).' '.$d.', '.date('Y', $date));
            $next_day = strtotime('+1 day', $day);
            $month->dates[$d]->php_date = $day;
            $month->dates[$d]->date_time = date('Y-m-d H:i:s', $day);
            $month->dates[$d]->day_count = $d;
            $e = 0;
            foreach ($events as $event) {
                $month->dates[$d]->events[$e] = new StdClass;
                if($event->starts_at >= date("Y-m-d H:i:s", $day) && $event->starts_at < date("Y-m-d H:i:s", $next_day))
                {
                    $month->dates[$d]->events[$e] = json_decode($event);
                    $e++;
                }
            }
        }
        $view->month = $month;

        if ($request->get('event')) {
            $event = CalendarEvent::find($request->get('event'));
            if ($event) {
                $phpdate = strtotime(strtok($event->starts_at,' '));
                $tomorrow = strtotime('+1 day', $phpdate);
                $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $phpdate))
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

                $view->event = $event;
                $view->events = $events;
                $view->event_date = $phpdate;
            }
        }

        return $view;
    }

}