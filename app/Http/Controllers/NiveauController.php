<?php

namespace App\Http\Controllers;

use App\classe;
use App\filiere;
use App\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
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
        $filieres = filiere::all();
        $niveaux = Niveau::all();
        return view('niveau.Voirfiliere', compact('niveaux', 'filieres'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('niveau.create');
    }
    public function classes($filiere, $id)

    {
        $filieres = filiere::pluck('nom', 'id');
        $niveaux = Niveau::pluck('nom', 'id');
        $classes = classe::where('niveau_id',$id)->where('filiere_id', $filiere)->with(['filiere','niveau'])->get();
        return view('classes.maclasse', compact( 'classes', 'filieres', 'niveaux'));
    }
    public function niveaux($id)
    {
        $filieres = filiere::find($id);
        $niveaux = $filieres->niveaux;
        return view('niveau.voir', compact('niveaux','filieres'));
    }
    /*
    public function supprimer($filiere, $id)
    {
        $classes = classe::where('niveau_id',$id)->where('filiere_id', $filiere)->with(['filiere','niveau'])->get();
    if ($classes)
    {
        $classes->delete();
    }
    return back();
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
       $filieres = filiere::pluck('nom', 'id');
        $niveaux =  Niveau::updateOrCreate
        ([
            'nom'=>$request->input('nom')
        ]);
        $niveaux->filieres()->attach([$request->input('filiere_id')]);
        session()->flash('message', "Niveau ajouté avec succes!");
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
        $niveaux = \App\Niveau::find($id);
        return view('niveau.edit', compact('niveaux'));
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
        $niveaux = \App\Niveau::find($id);
        $nom = $niveaux->nom;
        if ($niveaux){
            $niveaux->update([
                'nom'=>$request->input('nom')
            ]);
        }
        session()->flash('message', $nom." modifié avec succes en ".$niveaux->nom);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $niveaux = Niveau::find($id);
        $filieres = filiere::pluck('nom', 'id');
        $niv = $niveaux->filieres;
        $niv->delete();

        return back();
    }
}
