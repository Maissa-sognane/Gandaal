<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @method static updateOrCreate(array $array)
 */

class filiere extends Model
{

    protected $guarded = [];
    public function classes(){

    	return $this->hasMany('App\classe');
    }

    public function niveaux(){

    	return $this->belongsToMany('App\Niveau');
    }
}
