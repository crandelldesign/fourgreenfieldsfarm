<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.index')->with('code', implode(' ', $code));
        $vw->title = "Four Green Fields Farm - Rodney, MI";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";

        return $vw;
	}

	public function getDirections()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.directions')->with('code', implode(' ', $code));
        $vw->title = "Directions - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";

        return $vw;
	}

	public function getFarmHistory()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.farm-history')->with('code', implode(' ', $code));
        $vw->title = "Farm History - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'farm-history';

        return $vw;
	}

	public function getMapleSyrup()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.maple-syrup')->with('code', implode(' ', $code));
        $vw->title = "Maple Syrup - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'maple-syrup';

        return $vw;
	}

	public function getHoney()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.honey')->with('code', implode(' ', $code));
        $vw->title = "Bees and Honey - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'honey';

        return $vw;
	}

	public function getPumpkinPatch()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.pumpkin-patch')->with('code', implode(' ', $code));
        $vw->title = "Pumpkin Patch - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'pumpkin-patch';

        return $vw;
	}

	public function getMaze()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.maze')->with('code', implode(' ', $code));
        $vw->title = "Maze - How to Play - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'maze';

        return $vw;
	}

	public function getBuildingTheMaze()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.building-the-maze')->with('code', implode(' ', $code));
        $vw->title = "Building The Maze - How to Play - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'maze';

        return $vw;
	}

	public function getHauntedMaze()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.haunted-maze')->with('code', implode(' ', $code));
        $vw->title = "Haunted Maze - How to Play - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'maze';

        return $vw;
	}

	public function getRides()
	{
		$code = array();
        //$code[] = View::make('home.jscode.index');
        $vw = View::make('home.rides')->with('code', implode(' ', $code));
        $vw->title = "Hay &amp; Sleigh Rides - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'rides';

        return $vw;
	}

	public function getEvents($monthYear = null)
	{
		$code = array();
        //$code[] = View::make('home.jscode.events');
        $vw = View::make('home.events')->with('code', implode(' ', $code));
        $vw->title = "Group Bookings/Events - Four Green Fields Farm";
        $vw->description = "From Ireland to America, We Work the Land - O Eirinn go Mericea, Saothraimid an Talamh";
        $vw->active_page = 'events';

        if ($monthYear)
        {
        	if ($monthYear == 'index.php')
        		return Redirect::to('/events', 301);
        	$url = explode('-', $monthYear);
        	$date = strtotime($url[0].' 1, '.$url[1]);
        } else {
        	$date = time();
        }
		
		$vw->currentDate = time();
		$prevMonth = strtotime('-1 month', $date);
		$nextMonth = strtotime('+1 month', $date);
		$today = getdate();
		$vw->date = $date;
		$vw->today = $today;
		$vw->prevMonth = $prevMonth;
		$vw->nextMonth = $nextMonth;
		$firstDayOfTheMonth = strtotime(date('F', $date).' 1, '.date('Y', $date));
		$lastDayOfTheMonth = strtotime(date('F', $date).' '.date('t', $date).', '.date('Y', $date));
		$vw->firstDayOfTheMonth = $firstDayOfTheMonth;
		$vw->lastDayOfTheMonth = $lastDayOfTheMonth;
		$vw->daysToDisplay = date('w', $firstDayOfTheMonth) + date('t', $date) + (6 - date('w', $lastDayOfTheMonth));

		$events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $firstDayOfTheMonth))
				->where('ends_at','<',date("Y-m-d H:i:s", $nextMonth))
				->orderBy('starts_at')
				->get();

		//print_r($events);

		$month = new \StdClass;
		for ($d = 1; $d <= date('t',$date); $d++)
		{	
			$month->dates[$d] = new \StdClass;
			$day = strtotime(date('F', $date).' '.$d.', '.date('Y', $date));
			$nextDay = strtotime('+1 day', $day);
			$month->dates[$d]->phpDate = $day;
			$month->dates[$d]->dateTime = date('Y-m-d H:i:s', $day);
			$month->dates[$d]->dayCount = $d;
			$e = 0;
			foreach ($events as $event) {
				$month->dates[$d]->events[$e] = new \StdClass;
				if($event->starts_at >= date("Y-m-d H:i:s", $day) && $event->ends_at < date("Y-m-d H:i:s", $nextDay))
				{
					$month->dates[$d]->events[$e] = json_decode($event);
					$e++;
				}
			}
		}
		$vw->month = $month;

        return $vw;
	}

}
