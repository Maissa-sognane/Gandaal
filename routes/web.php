<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', "AccueilController@home");
Route::get('/eleves	', "AccueilController@index");


//Route::get('/produits', "Productcontroller@index");
//Route::get('/produits/{id}', "Productcontroller@show");
    


Route::get('/inscription/{id}', function ($id) {
    return 'veuillez vous insrire $id';
});