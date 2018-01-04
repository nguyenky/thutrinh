<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateCustomer extends Model
{
     protected $table = 'date_customer';
	
    protected $fillable = [
        'date_id',
        'customer_id',
    ];
    public function numbers(){
    	return $this->hasMany(\App\Number::class);
    }
}
