<?php

namespace fourgreenfieldsfarm\Console\Commands;

use Illuminate\Console\Command;
use fourgreenfieldsfarm\CalendarEvent;

class ImportCalendar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import_calendar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
        set_time_limit(30*60); // 30 Mins
        ini_set('memory_limit', '1024M');
        $this->info("Begin Loading Old Events");
        $counter = 0;

        \DB::table('calendar_events')->truncate();
        if (($handle = fopen(url('/')."/data/old-events.csv", "r")) !== FALSE)
        {
            if(($data = fgetcsv($handle, null, ",")) !== FALSE)
            {
                //skip the label row
                //var_dump($data);
                $num = count($data);
                $this->info("old-events.csv ".$num." columns\n");
            }

            $counter=0;
            while (($data = fgetcsv($handle, null, ",")) !== FALSE)
            {  
                if(count($data)!=$num)
                {
                    $this->info($counter.": column # mismatch ".count($data)."\n");
                }
                else
                {
                    $event = new CalendarEvent;
                    $event->name = $data[3];
                    $event->slug = $this->toAscii($data[3]);
                    $event->starts_at = $data[5];
                    $event->ends_at = $data[6];
                    if (strlen($data[7]) > 0 && $data[7] != 'NULL')
                        $event->description = $data[7];
                    $event->is_featured = $data[8];
                    $event->is_has_ends_at = (strpos($data[6], ' 00:00:00') !== false)?0:1;
                    $event->is_all_day = $data[9];
                    $event->save();
                    $counter++;
                }
            }
            fclose($handle);
        }
        \DB::table('cache')->truncate();
        $this->info("Loaded $counter Old Events\n");
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
}
