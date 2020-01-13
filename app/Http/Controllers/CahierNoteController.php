<?php

namespace App\Http\Controllers;

use App\cahier_note;
use App\eleve;
use App\matiere;
use Illuminate\Http\Request;

class CahierNoteController extends Controller
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
        $i = 0;
        $j  = 1;
        $cahier = cahier_note::all();
        $eleves = eleve::all();
        return view('cahier.index' ,compact('cahier' ,'j', 'eleves' ));
    }

    public function eleve($id)
    {
        $eleves = eleve::find($id);
        $cahier = cahier_note::where('eleve_id', $id)->get();
        return view('cahier.voir_eleve', compact('cahier', 'eleves'));
    }

    public function matiere($id)
    {
        $mat = matiere::all();
        $cahier = cahier_note::find($id);
        $matieres = $cahier->matiere($id);
        return view('matiere.index', compact('matieres', 'cahier'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $eleves = \App\eleve::pluck('prenom','id');
        return view('cahier.create', compact('eleves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $cahier  = cahier_note::updateOrCreate([
        'nom'=>$request->input('nom'),
        'eleve_id'=>$request->input('eleve_id')
        ]);

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
        $cahier = cahier_note::find($id);
        return view('cahier.edit', compact('cahier'));
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
        $cahier = cahier_note::find($id);
        if ($cahier){
            $cahier->update([
                'nom'=>$request->input('nom')
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
        $cahier = cahier_note::find($id);
        if ($cahier)
        {
            $cahier->delete();
            return back();
        }

    }
}
