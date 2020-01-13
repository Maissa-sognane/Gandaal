<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array)
 */

class classe extends Model
{
    protected $guarded = [];

    public function niveau(){

    	return $this->belongsTo('App\Niveau');
    }
    public function filiere(){

    	return $this->belongsTo('App\filiere');
    }
    public function eleves(){

    	return $this->hasMany('App\eleve');
    }
    public function responsable(){

    	return $this->belongsTo('App\responsable');
    }
    public function emploi_temp(){

    	return $this->belongsTo('App\emploi_temp');
    }
    public function professeurs(){

        return $this->belongsToMany('App\professeur');
    }
}
