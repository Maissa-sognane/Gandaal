<?php

namespace App\Http\Controllers;

use App\classe;
use App\filiere;
use App\Niveau;
use Illuminate\Http\Request;

class FiliereController extends Controller
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
        $filieres = filiere::paginate(8);
        return view('Filieres.home', compact('filieres'));
    }

    public function niveaux($id)
    {
        $filieres = filiere::find($id);
        $niveeaux = $filieres->niveaux;
        return view('niveau.voir', compact('niveaux', 'filieres'));
    }
    public function voir($id)
    {
        $filieres = filiere::find($id);
        $niveaux = Niveau::pluck('nom', 'id');
        return view('niveau.voir', compact('filieres', 'niveaux'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        filiere::updateOrcreate([
            'nom'=>$request->input('nom')
        ]);
        session()->flash('message', "Filiere ajouté avec succes!");
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
        $filieres = filiere::find($id);
        return view('Filieres.edit', compact('filieres'));
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
        $filieres = \App\filiere::find($id);
        $nom = $filieres->nom;
        if($filieres){
            $filieres->update([
                'nom'=>$request->input('nom')
            ]);
        }
        session()->flash('message', $nom." modifié avec succes en ".$filieres->nom);
        return redirect('Administration/filieres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filieres = filiere::find($id);
        if ($filieres)
        {
            $filieres->delete();
            session()->flash('message', $filieres->nom." supprimé ");
            return back();
        }

    }
}
