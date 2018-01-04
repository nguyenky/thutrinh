<?php

use Illuminate\Database\Seeder;
use App\Date;
use Carbon\Carbon;

class KqxsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kqxs::truncate();

        $weekdays = [];
        for ($i=0; $i <7 ; $i++) {
        	$a = $i-6;
            array_push($weekdays,Carbon::now()->addDays($a)->format('Y-m-d H:i:s'));
        }
        foreach ($weekdays as $key => $weekday) {

        	Date::create([
        		'day' => $weekday
        	]);
        }

    }
}
