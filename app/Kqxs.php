<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kqxs extends Model
{
	protected $table = 'kqxs';
	
    protected $fillable = [
        'day',
    ];
    public function chanel(){
    	return $this->hasMany(\App\Chanel::class);
    }

}
