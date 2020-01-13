<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static updateOrCreate(array $array)
 */
class professeur extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];

    public function emploi(){

    	return $this->belongsToMany('App\emploi_temp');
    }
    public function classes(){

    	return $this->belongsToMany('App\classe');
    }
}
