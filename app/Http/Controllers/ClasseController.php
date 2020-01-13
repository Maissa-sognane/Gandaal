<?php

namespace App\Http\Controllers;

use App\classe;
use App\eleve;
use App\filiere;
use App\Niveau;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:responsable');
    }

    public function index()
    {
        $classes = classe::all();
        $filieres = filiere::pluck('nom', 'id');
        $niveaux = Niveau::pluck('nom', 'id');
        return view('classes.home', compact('classes', 'filieres', 'niveaux'));
    }
    public function eleves($id)
    {
        $classes = \App\classe::find($id);
        $eleves = \App\eleve::where('classe_id', $id)->paginate(10);
        $niveaux = \App\Niveau::pluck('nom', 'id');
        $filiere = \App\filiere::pluck('nom', 'id');
        $garcons = $eleves->where('genre', 'M')->count();
        $filles = $eleves->where('genre', 'F')->count();
        return view('eleves.page_eleves', compact('classes', 'eleves', 'niveaux', 'filiere', 'garcons', 'filles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $filieres = filiere::pluck('nom', 'id');
        $niveaux = Niveau::pluck('nom', 'id');

        return view('classes.index', compact('filieres', 'niveaux'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $filieres = filiere::pluck('nom', 'id');
        $niveaux = Niveau::pluck('nom', 'id');
        classe::updateOrCreate([
            'nom'=>$request->input('nom'),
            'niveau_id'=>$request->input('niveau_id'),
            'filiere_id'=>$request->input('filiere_id')]);
        session()->flash('message', "Classe ajouté avec succes!");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $classes = \App\classe::find($id);
        $niveaux = \App\Niveau::pluck('nom', 'id');
        $filieres = \App\filiere::pluck('nom', 'id');

        return view('classes.edit', compact('classes', 'niveaux', 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $classes = \App\classe::find($id);
        if ($classes){
            $classes->update([
                'nom'=>$request->input('nom'),
                'niveau_id'=>$request->input('niveau_id'),
                'filiere_id'=>$request->input('filiere_id')
            ]);
            session()->flash('message', "Classe modifié avec succes!");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $filieres = filiere::pluck('nom', 'id');
        $niveaux = Niveau::pluck('nom', 'id');
        $classes = classe::find($id);
        if ($classes)
        {
            $classes->delete();
        }
        return back();
    }
}
