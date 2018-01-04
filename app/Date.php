<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'date';
	
    protected $fillable = [
        'day',
    ];
    public function chanel(){
    	return $this->hasMany(\App\Chanel::class);
    }
}
