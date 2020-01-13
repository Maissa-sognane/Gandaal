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
/*

Route::resource('Admissions','AdmissionController');
Route::resource('Accueil', 'AboutController');
Route::resource('Organisation', 'OrganisationController');
Route::resource('Contact', 'ContactController');
Route::resource('Formations', 'FormationController');
Route::get('Formations/details', 'FormationController@course');
Route::resource('Professeur', 'ProfesseurController');
Route::resource('Gandaal', 'PageLoginController');

*/
Route::get('/', 'PageLoginController@index')->name('accueil');


Route::group(['prefix'=> 'responsable'], function (){

    Route::get('accueil', 'ResponsableController@index');
    Route::resource('eleve', "EleveController");
    Route::get('/eleve/edit/{id}', 'EleveController@edit')->name('editer_eleve');
    Route::patch('/eleve/edit/{id}', "EleveController@update")->name('update_eleve');
    Route::get('/eleve/information/{id}', 'EleveController@show')->name('voir_information');
    Route::get('/eleve/information/{id}/cahier/', 'CahierNoteController@eleve')->name('voir_cahier');
    Route::get('/eleve/information/{id}/cahier/matiere/', 'CahierNoteController@matiere')->name('voir_matiere');
    Route::get('/eleve/information/{id}/cahier/matiere/ajout', 'MatieresController@create')->name('ajouter');
    Route::get('/search', 'EleveController@search');


    Route::resource('cahier', 'CahierNoteController');
    Route::get('/cahier/edit/{id}', 'CahierNoteController@edit')->name('editer_cahier');
    Route::patch('/cahier/edit/{id}', 'CahierNoteController@update')->name('update_cahier');
//Route::get('/cahier/note/{id}', 'CahierNoteController@matiere')->name('voir_matiere');

    Route::resource('matiere', 'MatieresController');
    Route::get('matiere/edit/{id}', 'MatieresController@edit')->name('editer_matiere');
    Route::patch('matiere/edit/{id}', 'MatieresController@update')->name('update_matiere');
//Route::get('/eleve/cahier_note/{id}', 'CahierNoteController@eleve')->name('voir_cahier');



    Route::resource('classes', 'ClasseController');
    Route::get('/classes/edit/{id}', 'ClasseController@edit')->name('editer_classes');
    Route::patch('/classes/edit/{id}', 'ClasseController@update')->name('update_classes');
    Route::get('/classes/eleve/{id}', 'ClasseController@eleves')->name('voir_eleves');
    Route::get('/classes/emplois_du_temps/{id}', 'EmploitempsController@temps')->name('emploistemps');
    Route::get('/classes/professeurs/{id}', 'ProfControlleur@MesClasses')->name('mesclasses');
    Route::get('/classes/professeurs/information/{id}', 'ProfControlleur@show')->name('voir_prof');
   // Route::get('/classes/professeurs/{id}/ajout', 'ProfControlleur@crate')->name('ajout');
    Route::resource('EmploiTemps', 'EmploitempsController');

    Route::resource('filieres', 'FiliereController');
    Route::get('/filieres/edit/{id}', 'FiliereController@edit')->name('editer_filieres');
    Route::patch('/filieres/edit/{id}', 'FiliereController@update')->name('update_filieres');
    Route::get('/filieres/niveaux/{id}', 'NiveauController@niveaux')->name('voir_filieres');
    Route::delete('/filieres/niveaux/niveaux/{id}', 'NiveauController@destroy')->name('supprimer');
   // Route::get('/filieres/niveaux/{id}/ajouter_niveaux', 'NiveauController@create')->name('ajout');




    Route::resource('niveaux', 'NiveauController');
    Route::get('/niveaux/edit/{id}', 'NiveauController@edit')->name('editer_niveaux');
    Route::patch('/niveaux/edit/{id}', 'NiveauController@update')->name('update_niveaux');
    Route::delete('/niveaux/{id}', 'NiveauController@destroy');
    Route::get('/filiere/{filiere}/niveaux/classes/{id}', 'NiveauController@classes')->name('voir_classes');
    Route::delete('/filiere/{filiere}/niveaux/classes/classes/{id}', 'ClasseController@destroy');

    Route::resource('Enseignants', 'ProfControlleur');
    Route::get('Enseignants/edit/{id}', 'ProfControlleur@edit')->name('editer_prof');
    Route::patch('Enseignants/edit/{id}', 'ProfControlleur@update')->name('update_prof');

    Route::namespace('responsable')->group(function () {

        Route::get('/login','Auth\LoginController@showLoginForm')->name('responsable.login');
        Route::post('/login', 'Auth\LoginController@login');
        Route::get('/moification_password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('responsable.password');
    });
    Route::get('/home', 'ResponsableController@voir')->name('responsable.home');

});



Route::group(['prefix'=>'etudiant'], function () {

    Route::namespace('eleve')->group(function () {
       Route::get('/login', 'Auth\LoginController@showLoginForm')->name('etudiant.login');
       Route::post('/login', 'Auth\LoginController@login');
    });
    Route::get('/home', 'EtudiantController@index')->name('etudiant.home');
    //Route::get('/home/information', 'EtudiantController@show')->name('etudiant.information');
    Route::get('/home/cahier/{id}', 'EtudiantController@show')->name('etudiant.cahier');
    Route::get('/home/cahier/{id}/matiere', 'EtudiantController@matiere')->name('etudiant.matiere');
});



Route::group(['prefix'=>'professeur'], function () {

    Route::namespace('professeur')->group(function () {
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('professeur.login');
        Route::post('/login', 'Auth\LoginController@login');
    });
    Route::get('/home', 'ProfesseurController@index')->name('professeur.home');
    Route::get('/home/classe/{id}', 'ProfesseurController@show')->name('professeur.classe');
});




Route::resource('professeur', 'ProfesseurController');
Route::resource('etudiant', 'EtudiantController');

//Route::resource('eleve	', "AccueilController@index");
//Route::get('/produits', "Productcontroller@index");
//Route::get('/produits/{id}', "Productcontroller@show");



Route::get('/inscription/{id}', function ($id) {
    return 'veuillez vous insrire $id';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Admin auth routes */
Route::namespace('Admin')->group(function () {
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
    Route::get('/admin/home/creation', 'AdminController@create')->name('ajout');
    Route::post('/admin/home/enregistrer', 'AdminController@store')->name('enregistrer');
    Route::get('/admin/List_responsables', 'AdminController@responsable')->name('voir_responsable');
    Route::get('/admin/List_responsables/{id}','AdminController@edit' )->name('editer');
    Route::get('/admin/List_responsables/{id}','AdminController@update' )->name('update');
    Route::delete('/admin/supprimer/{id}', 'AdminController@destroy')->name('delete');
    Route::get('/admin/List_etudiants', 'AdminController@etudiant')->name('voir_etudiant');
    Route::get('/admin/List_professeurs', 'AdminController@professeur')->name('voir_professeur');
    Route::get('/admin_password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password');
    Route::post('/admin/reset', 'Auth\ResetPasswordController@showResetForm')->name('admin.reset');
    Route::post('/admin/update', 'Auth\ResetPasswordController@reset')->name('admin.update');

});
