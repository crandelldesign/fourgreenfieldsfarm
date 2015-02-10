<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		if(!Auth::check()) {
			//echo 'Admin!';
			$code = array();
	        //$code[] = View::make('home.jscode.index');
	        $vw = View::make('admin.login')->with('code', implode(' ', $code));
	        $vw->title = "Four Green Fields Farm - Admin Access";
	        $vw->description = "";

	        return $vw;
		} else {
			//echo 'Because I\'m Batman!';
			$code = array();
	        //$code[] = View::make('home.jscode.index');
	        $vw = View::make('admin.index')->with('code', implode(' ', $code));
	        $vw->title = "Four Green Fields Farm - Admin Access";
	        $vw->description = "";

	        if (Input::get('new_event'))
			{
				$vw->event = CalendarEvent::find(Input::get('new_event'));
				$vw->event_action_type = Input::get('type');
			}

	        return $vw;
		}
		
	}

	public function postIndex()
	{
		$username = Input::get('username');
        $password = Input::get('password');
        if(Auth::attempt(array('username'=>$username,'password'=>$password)))
        {
        	return Redirect::to(url('/').'/events/admin');
        } else {
        	return Redirect::to(url('/').'/events/admin')->with(array('signInError' => true));
        }
	}

	public function getAddEvent()
	{
		if(!Auth::check())
			return Redirect::to(url('/').'/events/admin');

		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('admin.add-event')->with('code', implode(' ', $code));
        $vw->title = "Four Green Fields Farm - Admin Access";
        $vw->description = "";

        return $vw;
	}

	public function postAddEvent()
	{
		if(!Auth::check())
			return Redirect::to(url('/').'/events/admin');

		$event_name = Input::get('event_name');
		$starts_at = strtotime(Input::get('event_date').' '.Input::get('start_time'));
		$ends_at = strtotime(Input::get('event_date').' '.Input::get('end_time'));
		$haunted_by = Input::get('haunted_by');

		$events = new CalendarEvent;
		$events->name = $event_name;
		$events->slug = $this->toAscii($event_name);
		$events->starts_at = date('Y-m-d H:i:s', $starts_at);
		$events->ends_at = date('Y-m-d H:i:s', $ends_at);
		$events->haunted_by = $haunted_by;
		$events->save();

		return Redirect::to(url('/').'/events/admin?new_event='.$events->id.'&type=add');
	}

	public function getAllEvents($year=null, $month=null)
	{
		if(!Auth::check())
			return Redirect::to(url('/').'/events/admin');

		$events = CalendarEvent::orderBy('starts_at', 'desc');
		if(($year) && ($month))
		{
			$monthDate = strtotime($month.'/1/'.$year);
			// echo date("Y-m-d H:i:s", strtotime(date('m',$monthDate).'/'.date('t',$monthDate).'/'.date('Y',$monthDate)));
			$events = $events->where('starts_at','>=',date("Y-m-d H:i:s", $monthDate))
				->where('ends_at','<',date("Y-m-d H:i:s", strtotime(date('m',$monthDate).'/'.date('t',$monthDate).'/'.date('Y',$monthDate))));
		} 
		elseif($year) {
			$events = $events->where('starts_at','>=',date("Y-m-d H:i:s", strtotime('1/1/'.$year)))
				->where('ends_at','<',date("Y-m-d H:i:s", strtotime('12/31/'.$year)));
		}
		$events = $events->get();

		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('admin.all-events')->with('code', implode(' ', $code));
        $vw->title = "Four Green Fields Farm - Admin Access";
        $vw->description = "";
        $vw->events = $events;
        $vw->year = $year;
        $vw->month = $month;

        return $vw;
	}

	public function getChangePassword()
	{
		if(!Auth::check())
			return Redirect::to(url('/').'/events/admin');

		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('admin.change-password')->with('code', implode(' ', $code));
        $vw->title = "Four Green Fields Farm - Admin Access";
        $vw->description = "";

        return $vw;
	}

	public function postChangePassword()
	{
		$validator = Validator::make(
            Input::all(),
            array(
                'current_password' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            )
        );
        if ($validator->fails())
        {
            return Redirect::to(url('/').'/events/admin/change-password')->withErrors($validator);
        }
        if(!Auth::validate(array('email' => Auth::User()->email, 'password' => Input::get('current_password'))))
        {
            return Redirect::to(url('/').'/events/admin/change-password')->with(array('invalid_password' => 'true'));
        }
        $user = Auth::User();
        $user->password = Input::get('password');
        $user->save();
        return Redirect::to(url('/').'/events/admin')->with(array('password_changed' => 'true'));
        //$password = Input::get('password');
		/*$password = Hash::make(Input::get('password'));
        	echo Auth::user()->username;
	    	$user = Auth::user();
	        $user->password = Hash::make(Input::get('new_password'));
	        $user->save();
	    	return Redirect::to(url('/').'/events/admin?changepassword=Y');*/
	}

	public function getLogout()
    {
        Auth::logout();
        return Redirect::to(url('/').'/events/admin');
    }

	protected function toAscii($str, $replace=array(), $delimiter='-')
	{
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}

		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}

}
