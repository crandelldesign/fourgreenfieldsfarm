<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class importCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'import';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import data from old database.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$type = $this->option('type');
        switch($type)
        {
            case 'users':
            	$this->users();
            	break;
            case 'events':
                $this->events();
                break;
            default:
            	$this->info('Possible --type= values: users, events');
            	break;
        }
	}

	public function users()
    {
    	set_time_limit(30*60); // 30 Mins
        ini_set('memory_limit', '1024M');
        $this->info("Begin Loading Users");
        $counter='';

        if (($handle = fopen("http://mattrcrandell.com/testbox/fourgreenfieldsfarm/public"."/data/user.csv", "r")) !== FALSE)
        {
            if(($data = fgetcsv($handle, null, ",")) !== FALSE)
            {
                //skip the label row
                //var_dump($data);
                $num = count($data);
                $this->info("user.csv ".$num." columns\n");
            }

            $counter=0;
            while (($data = fgetcsv($handle, null, ",")) !== FALSE)
            {  
                $counter++;
                if(count($data)!=$num)
                {
                    $this->info($counter.": column # mismatch ".count($data)."\n");
                }
                else
                {
                	$user = User::where("username","=",$data[1])->first();
                	if(empty($user))
                	{
                		/*DB::table('clients')->insert(array(
                        	'name' => $data[0],
                        	'slug' => $this->toAscii($data[0]),
                        ));*/
                		$user = new User;
                		$user->username = $data[1];
                		$user->password = $data[2];
						$user->first_name = $data[4];
						$user->last_name = $data[5];
						$user->is_admin = ($data[3] == 'Y')?1:0;
                		$user->save();
                	} else {
                		$user->username = $data[1];
                		$user->password = $data[2];
						$user->first_name = $data[4];
						$user->last_name = $data[5];
						$user->is_admin = ($data[3] == 'Y')?1:0;
                		$user->save();
                	}
                }
            }
        fclose($handle);
        }
        $this->info("Loaded $counter Users\n");
    }

    public function events()
    {
    	set_time_limit(30*60); // 30 Mins
        ini_set('memory_limit', '1024M');
        $this->info("Begin Loading Events");
        $counter=0;
        $updateCounter=0;

        if (($handle = fopen("http://mattrcrandell.com/testbox/fourgreenfieldsfarm/public"."/data/event.csv", "r")) !== FALSE)
        {
            if(($data = fgetcsv($handle, null, ",")) !== FALSE)
            {
                //skip the label row
                //var_dump($data);
                $num = count($data);
                $this->info("event.csv ".$num." columns\n");
            }

            while (($data = fgetcsv($handle, null, ",")) !== FALSE)
            {  
                $counter++;
                if(count($data)!=$num)
                {
                    $this->info($counter.": column # mismatch ".count($data)."\n");
                }
                else
                {
                	$event = CalendarEvent::where("old_id","=",$data[0])->first();
                	if(empty($user))
                	{
                		/*DB::table('clients')->insert(array(
                        	'name' => $data[0],
                        	'slug' => $this->toAscii($data[0]),
                        ));*/
                		$event = new CalendarEvent;
                		$event->name = $data[3];
                		$event->slug = $this->toAscii($data[3]);
						$event->starts_at = $data[1];
						$event->ends_at = $data[2];
						$event->haunted_by = ($data[4] != 'NULL')?$data[4]:'';
						$event->old_id = $data[0];
                		$event->save();
                		$counter++;
                	} else {
                		$event->name = $data[3];
                		$event->slug = $this->toAscii($data[3]);
						$event->starts_at = $data[1];
						$event->ends_at = $data[2];
						$event->haunted_by = ($data[4] != 'NULL')?$data[4]:'';
						$event->old_id = $data[0];
                		$updateCounter++;
                	}
                }
            }
        fclose($handle);
        }
        $this->info("Loaded $counter and updated $updateCounter events\n");
    }

    public function toAscii($str, $replace=array(), $delimiter='-')
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

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
            array('type', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
	}

}
