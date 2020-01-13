<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function home()
    {
    	return view("Accueil");
    }
    //public function index ($id)
    public function index ()
    {
    	//return view("eleve.page_eleves", compact("id"));
    	return view("eleve.page_eleves");
    }
}
