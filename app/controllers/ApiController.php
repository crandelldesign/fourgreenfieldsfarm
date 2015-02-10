<?php

class ApiController extends BaseController {

	public function getMonth($month = null, $year = null)
	{
		$results = new \StdClass;
		$results->data = new \StdClass;

		if (Input::get('month') && Input::get('year'))
        {
        	//$url = explode('-', $monthYear);
        	$date = strtotime(Input::get('month').'/1/'.Input::get('year'));
        } else {
        	$date = time();
        }

		$results->data->currentDate = time();
		$prevMonth = strtotime('-1 month', $date);
		$nextMonth = strtotime('+1 month', $date);
		$today = getdate();
		$results->data->date = $date;
		$results->data->today = $today;
		$results->data->prevMonth = $prevMonth;
		$results->data->nextMonth = $nextMonth;
		$firstDayOfTheMonth = strtotime(date('F', $date).' 1, '.date('Y', $date));
		$lastDayOfTheMonth = strtotime(date('F', $date).' '.date('t', $date).', '.date('Y', $date));
		$results->data->firstDayOfTheMonth = $firstDayOfTheMonth;
		$results->data->lastDayOfTheMonth = $lastDayOfTheMonth;
		$results->data->daysInTheMonth = date('t',$date);
		$results->data->lastMonthDays = date('w',$firstDayOfTheMonth);
		$results->data->lastMonthLastDay = date('t',$prevMonth);

        $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $firstDayOfTheMonth))
                ->where('ends_at','<',date("Y-m-d H:i:s", $nextMonth))
                ->orderBy('starts_at')
                ->get();

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
                    $month->dates[$d]->events[$e] = $event;
                    $e++;
                }
            }
		}
		$results->data->month = $month;

		$return = new \StdClass;
		$return->data = array();

		foreach($results as $object)
        {
            if(method_exists($object, 'toArray'))
                $return->data[] = $object->toArray();
            else
                $return->data[] = $object;
        }

        //print_r($return);

        return json_encode($return);
        //return Response::json($results);
	}

    public function getEvent()
    {
        $event_id = Input::get('id');
        $event = CalendarEvent::find($event_id);
        return json_encode($event);
    }

    public function postUpdateEvent($id=null)
    {
        $event = CalendarEvent::find($id);
        $event_name = Input::get('event_name');
        $starts_at = strtotime(Input::get('event_date').' '.Input::get('start_time'));
        $ends_at = strtotime(Input::get('event_date').' '.Input::get('end_time'));
        $haunted_by = Input::get('haunted_by');

        $event->name = $event_name;
        $event->slug = $this->toAscii($event_name);
        $event->starts_at = date('Y-m-d H:i:s', $starts_at);
        $event->ends_at = date('Y-m-d H:i:s', $ends_at);
        $event->haunted_by = $haunted_by;
        $event->save();

        return $event;
    }

    public function postDeleteEvent($id=null)
    {
        $event = CalendarEvent::find($id);
        $event->delete();
        return $event;
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

	protected function format($results)
    {
        ini_set('memory_limit', '1024M');
        $return = new \StdClass;
        $return->data = array();
        $return->stats = isset($results['stats']) ? $results['stats'] : array('returned' => 0, 'page' => 0, 'limit' => 0, 'total' => 0);
        if(is_array($results))
        {
            if(isset($results['objects']))
            {
                foreach($results['objects'] as $object)
                {
                    if(method_exists($object, 'toArray'))
                        $return->data[] = $object->toArray();
                    else
                        $return->data[] = $object;
                }
            }
            else
            {
                foreach($results as $object)
                {
                    if(method_exists($object, 'toArray'))
                        $return->data[] = $object->toArray();
                    else
                        $return->data[] = $object;
                }
            }
        }
        else
        {
            if(method_exists($results, 'toArray'))
                $return = $results->toArray();
            else
                $return = $results;
        }
        return json_encode($return);
    }



}
