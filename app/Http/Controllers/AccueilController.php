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
    	//return view("eleves.page_eleves", compact("id"));
    	return view("eleves.page_eleves");
    }
}
