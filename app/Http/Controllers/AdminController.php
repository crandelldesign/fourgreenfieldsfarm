<?php

namespace fourgreenfieldsfarm\Http\Controllers;

use Illuminate\Http\Request;

use fourgreenfieldsfarm\Http\Requests;
use fourgreenfieldsfarm\Http\Controllers\Controller;

use fourgreenfieldsfarm\CalendarEvent;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $view = view('admin.index');
        $view->active_page = 'home';
        return $view;
    }

    public function getEvents($id = null)
    {
        if (!$id) {
            return $this->listEvents();
        } else {
            return $this->editEvent($id);
        }
    }

    public function postEvents(Request $request, $action = null)
    {
        $action = '';
        if ($request->get('event_id') == 0) {
            $event = new CalendarEvent;
            $success_message = 'The event, '.$request->get('event_name').', has successfully been added';
        }
        else {
            $event = CalendarEvent::find($request->get('event_id'));
            $success_message = 'The event, '.$request->get('event_name').', has successfully been updated';
        }

        if (empty($event))
            return redirect('/admin/events/'.$request->get('event_id'))->with('not_found','There was an error saving the event. Please reload and try again.');

        $starts_at = strtotime($request->get('event_date').' '.(($request->get('is_all_day'))?'12:00 AM':$request->get('start_time')));
        $ends_at = strtotime($request->get('event_date').' '.(($request->get('is_all_day'))?'11:59 PM':$request->get('end_time')));
        $event->name = $request->get('event_name');
        $event->slug = $this->toAscii($request->get('event_name'));
        $event->starts_at = date('Y-m-d H:i:s', $starts_at);
        $event->ends_at = date('Y-m-d H:i:s', $ends_at);
        $event->is_has_ends_at = ($request->get('is_has_ends_at'))?1:0;
        $event->is_featured = ($request->get('is_featured'))?1:0;
        $event->is_all_day = ($request->get('is_all_day'))?1:0;
        $event->haunted_by = $request->get('haunted_by');
        $event->description = $request->get('description');
        $event->save();

        if ($request->get('add_another'))
            return redirect('/admin/events/add')->with('success',$success_message);
        elseif ($request->get('continue'))
            return redirect('/admin/events')->with('success',$success_message);
        else
            return redirect('/admin')->with('success',$success_message);
    }

    protected function listEvents()
    {
        $events = CalendarEvent::orderBy('starts_at', 'desc');
        $events = $events->get();
        $view = view('admin.events-list');
        $view->active_page = 'edit-event';
        $view->events = $events;
        return $view;
    }

    protected function editEvent($id)
    {
        $event = CalendarEvent::find($id);
        $view = view('admin.event');
        $view->active_page = 'add-event';
        if($event) {
            $view->active_page = 'edit-event';
            $view->event = $event;
        }
        return $view;
    }

    public function getDeleteEvent($id = null)
    {
        if (!$id)
            return redirect('/admin/events');

        $event = CalendarEvent::find($id);    
        $event->delete();

        return redirect('/admin/events')->with('success','Event deleted successfully.');
    }

    public function getChangePassword()
    {
        $view = view('admin.change-password');
        $view->active_page = 'change-password';
        return $view;
    }

    public function postChangePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $credentials = [
            'email' => \Auth::user()->email,
            'password' => $request->get('current_password'),
        ];

        if(\Auth::validate($credentials)) {
            $user = \Auth::user();
            $user->password = bcrypt($request->get('password'));
            $user->save();
            return redirect('/admin')->with('message', 'Password changed successfully.');
        } else {
            return redirect()->back()->withErrors('Incorrect old password.');
        }
    }

    public function getPasswordReset()
    {
        $view = view('emails.password');
        $view->token = '1234';
        return $view;
    }
}
