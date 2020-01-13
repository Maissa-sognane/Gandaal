<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array)
 */
class matiere extends Model
{
    protected $guarded = [];
    public function emploi_temps(){

    	return $this->belongsToMany('App\emploi_temp');
    }
    public function cahier(){

    	return $this->belongsToMany('App\cahier_note');
    }
}
