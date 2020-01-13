<?php

namespace App\Http\Controllers;

use App\cahier_note;
use App\classe;
use App\eleve;
use App\filiere;
use App\Niveau;
use App\professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EleveController extends Controller
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
        $eleves = eleve::paginate(10);
        $classes = classe::pluck('nom', 'id');
        $niveaux = Niveau::all();
        $filieres = filiere::all();
        $cahier = cahier_note::all();
        $garcons = $eleves->where('genre', 'M')->count();
        $filles = $eleves->where('genre', 'F')->count();

        return view('eleves.home', compact('eleves', 'classes', 'niveaux', 'filieres', 'cahier', 'garcons', 'filles'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $eleves = eleve::where('prenom','like', '%'.$search.'%')->paginate(5);
        return view('eleves.home', compact('eleves'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $classes = \App\classe::pluck('nom', 'id');
        $filieres = \App\filiere::pluck('nom', 'id');
        $niveaux = \App\Niveau::pluck('nom', 'id');
        return view('eleve.index', compact('classes', 'filieres', 'niveaux'));
    }

    public function cahier()
    {

        return view('cahier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'prenom'=>'required',
            'nom'=>'required',
            'email'=>'required'
        ]);

        eleve::updateOrCreate([
            'name'=>$request->input('name'),
            'prenom'=>$request->input('prenom'),
            'nom'=>$request->input('nom'),
            'email'=>$request->input('email'),
            'date_naissance'=>$request->input('date'),
            'lieu_naissance'=>$request->input('lieu'),
            'Telephone'=>$request->input('tel'),
            'genre'=>$request->input('genre'),
            'classe_id'=>$request->input('classe_id')
        ]);
        session()->flash('message', "etudiant ajouté avec succes!");

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $eleves = eleve::find($id);
        $classes = \App\classe::pluck('nom', 'id');
        $filieres = \App\filiere::pluck('nom', 'id');
        $niveaux = \App\Niveau::pluck('nom', 'id');
        return view('eleves.show', compact('eleves', 'classes', 'filieres', 'niveaux'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $classes=\App\classe::pluck('nom', 'id');
        $niveaux=\App\Niveau::pluck('nom', 'id');
        $filieres=\App\filiere::pluck('nom', 'id');
        $eleves= \App\eleve::find($id);
        return view('eleves.edit', compact('eleves', 'classes', 'niveaux', 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $eleves = \App\eleve::find($id);
        if($eleves){
            $eleves->update([
                'name'=>$request->input('name'),
                'prenom'=>$request->input('prenom'),
                'nom'=>$request->input('nom'),
                'email'=>$request->input('email'),
                'date_naissance'=>$request->input('date'),
                'lieu_naissance'=>$request->input('lieu'),
                'Telephone'=>$request->input('tel'),
                'genre'=>$request->input('genre'),
                'classe_id'=>$request->input('classe_id'),
                ]);
            session()->flash('message', "Modification réussi avec succes!");
        }
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
        $eleves = eleve::find($id);
        if ($eleves)
        {
            $eleves->delete();
            return back();
        }

    }
}
