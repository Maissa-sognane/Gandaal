<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index(){

    	return "<h1>Bienvenue</h1>Je suis la page produit index.";
    }
     public function show($id){

    	return "<h1>Bienvenue</h1>Je suis a la page du produit de categorie $id";
    }

}
