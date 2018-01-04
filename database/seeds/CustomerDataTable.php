<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomerDataTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        for ($i=0; $i < 10 ; $i++) { 
        	Customer::create([
        		'name'=>'Khách '.$i,
        	]);
        }
    }
}
