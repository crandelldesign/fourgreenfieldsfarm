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

}