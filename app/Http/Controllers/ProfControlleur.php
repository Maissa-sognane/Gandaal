<?php

namespace App\Http\Controllers;

use App\classe;
use App\matiere;
use App\professeur;
use Illuminate\Http\Request;

class ProfControlleur extends Controller
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
        $prof = professeur::paginate(5);
        $garcons = $prof->where('genre', 'M')->count();
        $filles = $prof->where('genre', 'F')->count();
        $classes = classe::pluck('nom', 'id');
        return view('prof.index', compact('prof', 'classes', 'garcons', 'filles'));
    }

    public function MesClasses($id)
    {
        $classes = classe::find($id);
        $prof = $classes->professeurs;
        $classes->professeurs();
        $garcons = $prof->where('genre', 'M')->count();
        $filles = $prof->where('genre', 'F')->count();
        return view('prof.prof_class', compact('prof', 'classes', 'garcons', 'filles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $classes = classe::find($id);
        $professeurs = professeur::all();
        $matieres  = matiere::pluck('nom', 'id');
        return view('prof.create', compact('professeurs', 'matieres', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)

    {
        $classes = classe::pluck('nom', 'id');
        $prof = professeur::updateOrCreate([
            'name'=>$request->input('name'),
            'prenom'=>$request->input('prenom'),
            'nom'=>$request->input('nom'),
            'lieu_naissance'=>$request->input('lieu'),
            'date_naissance'=>$request->input('date'),
            'email'=>$request->input('email'),
            'matiere'=>$request->input('matiere'),
            'genre'=>$request->input('genre'),
            'Telephone'=>$request->input('tel')
        ]);
        $prof->classes()->attach([$request->input('classe_id')]);
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
        $classes = classe::pluck('id', 'nom');
        $professeurs = professeur::find($id);
        return view('prof.show', compact('professeurs', 'classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $professeurs = professeur::find($id);
        return view('prof.edit', compact('professeurs'));
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
        $professeurs = professeur::find($id);
        if($professeurs)
        {
            $professeurs->update([
                'name'=>$request->input('name'),
                'prenom'=>$request->input('prenom'),
                'nom'=>$request->input('nom'),
                'lieu_naissance'=>$request->input('lieu'),
                'date_naissance'=>$request->input('date'),
                'email'=>$request->input('email'),
                'matiere'=>$request->input('matiere'),
                'genre'=>$request->input('genre'),
                'Telephone'=>$request->input('tel')
            ]);
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
       $professeur = professeur::find($id);
       if($professeur)
       {
           $professeur->delete();
       }
       return back();
    }
}
