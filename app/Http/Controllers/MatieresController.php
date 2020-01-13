<?php

namespace App\Http\Controllers;

use App\cahier_note;
use App\matiere;
use Illuminate\Http\Request;

class MatieresController extends Controller
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
        $matieres = matiere::all();
        return view('matiere.voir   ', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $cahier = cahier_note::find($id);
        $matieres = matiere::pluck('nom', 'id');
        return view('matiere.create', compact('cahier', 'matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       $matiere =  matiere::updateOrCreate([
        'nom'=>$request->input('nom'),
        'coefficient'=>$request->input('coefficient'),
        'note_devoir_1'=>$request->input('note_devoir_1'),
        'note_devoir_2'=>$request->input('note_devoir_2'),
        'moyenne_devoir'=>$request->input('moyenne_devoir'),
        'note_examen'=>$request->input('note_examen'),
        'moyenne'=>$request->input('moyenne')
        ]);
       $matiere->cahier()->attach([$request->input('cahier_note_id')]);
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
        $cahier = cahier_note::pluck('nom', 'id');
        $matieres = matiere::find($id);
        return view('matiere.edit', compact('matieres', 'cahier'));
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
        $matieres = matiere::find($id);
        if($matieres){
           $matiere =  $matieres->update ([
                'nom'=>$request->input('nom'),
                'note_devoir_1'=>$request->input('note_devoir_1'),
                'note_devoir_2'=>$request->input('note_devoir_2'),
                'moyenne_devoir'=>$request->input('moyenne_devoir'),
                'note_examen'=>$request->input('note_examen'),
                'moyenne'=>$request->input('moyenne')
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
        $matieres = matiere::find($id);
        if ($matieres)
        {
            $matieres->delete();
            return back();
        }


    }
}
