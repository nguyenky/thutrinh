<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    protected $table = 'chanels';
	
    protected $fillable = [
        'date',
        'kqxs_id',
        'name',
        'code',
    ];

    public function chanel_value(){
    	return $this->hasMany(\App\ChanelValue::class);
    }
}
