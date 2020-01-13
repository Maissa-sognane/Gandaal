<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emploi_temp extends Model
{
   public function matieres(){

    	return $this->belongsTo('App\matiere');
    }

    public function classe(){

    	return $this->belongsTo('App\classe');
    }
    public function matieres(){

    	return $this->belongsToMany('App\matiere');

    }
    public function professeurs(){

    	return $this->belongsToMany('App\professeur');
    }
}
