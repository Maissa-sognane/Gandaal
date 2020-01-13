<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static updateOrCreate(array $array)
 */
class responsable extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
    
    public function classes(){

    	return $this->hasMany('App\classe');
    }
}
