<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table = 'numbers';
	
    protected $fillable = [
        'number',
        'type',
        'price',
        'trans',
        'chanel_trung',
        'chanel_bac',
        'rest',
        'date_customer_id',
        'region',
    ];
}
