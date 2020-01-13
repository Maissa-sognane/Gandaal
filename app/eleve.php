<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static updateOrCreate(array $array)
 */
class eleve extends Authenticatable
{
    use Notifiable;
    //protected $fillable = [ce qu'on veur lister]
    protected $guarded = [];



    public function classe (){

    	return $this->belongsTo('App\classe');
    }
    public function cahier_note(){

    	return $this->hasMany('App\cahier_note');
    }
}
