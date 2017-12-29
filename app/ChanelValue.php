<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChanelValue extends Model
{
    protected $table = 'chanel_value';
	
    protected $fillable = [
        'giai',
        'value',
        'chanel_id',
    ];
}
