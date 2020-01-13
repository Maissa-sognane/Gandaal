<?php

namespace App\Http\Controllers\Admin;

use App\eleve;
use App\Http\Controllers\Controller;
use App\professeur;
use App\responsable;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $responsables = responsable::all();
        return view('admin.home', compact('responsables'));
    }
    public function responsable()
    {
        $responsables = responsable::paginate(8);
        return view('admin.voir_responsable', compact('responsables'));
    }
    public function etudiant()
    {
        $eleves = eleve::paginate(8);
        return view('admin.voir_etudiant', compact('eleves'));
    }
    public function professeur()
    {
        $prof = professeur::paginate(8);
        return view('admin.voir_professeur', compact('prof'));
    }
    public function create()
    {
        $responsables = responsable::pluck('nom', 'id');
        return view('admin.create', compact('responsables'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        responsable::updateOrCreate([
            'name'=>$request->input('name'),
            'prenom'=>$request->input('prenom'),
            'nom'=>$request->input('nom'),
            'lieu_naissance'=>$request->input('lieu'),
            'date_naissance'=>$request->input('date'),
            'email'=>$request->input('email'),
            'genre'=>$request->input('genre'),
            'Telephone'=>$request->input('tel')
        ]);
        return  back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $responsables = responsable::find($id);
        return view('prof.edit', compact('responsables'));
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
        $responsables = responsable::find($id);
        if($responsables)
        {
            $responsables->update([
                'name'=>$request->input('name'),
                'prenom'=>$request->input('prenom'),
                'nom'=>$request->input('nom'),
                'lieu_naissance'=>$request->input('lieu'),
                'date_naissance'=>$request->input('date'),
                'email'=>$request->input('email'),
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
       $responsables = responsable::find($id);
        if($responsables)
        {
            $responsables->delete();
        }
        return back();
    }
}
