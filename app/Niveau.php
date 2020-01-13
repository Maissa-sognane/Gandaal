<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array)
 */

class Niveau extends Model
{
    protected $guarded = [];

    public function classes(){

    	return $this->hasMany('App\classe');
    }

    public function filieres(){

    	return $this->belongsToMany('App\filiere');
    }
}
