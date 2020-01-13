<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array)
 */
class cahier_note extends Model
{

    protected $guarded = [];
    public function eleve (){

    	return $this->belongsTo('App\eleve');
    }
    public function matiere(){

    	return $this->belongsToMany('App\matiere');
    }
}
