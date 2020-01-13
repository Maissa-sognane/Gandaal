@extends('layouts.app-default')

@section('content')
    <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    </div>
    <div class="container-fluid">
        <br>

            <div class="container-fluid">
                <br>
                <div class="container-fluid  d-flex justify-content-around flex-wrap" >
                    <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6); width: 1200px;">
                        <h1 style="text-align: center; color: white;">Information</h1>
                        <div class="card-header">Pseudo:  {{ Auth::user()->name }}</div>
                        <div class="card-header">Prenom:  {{ Auth::user()->prenom }}</div>
                        <div class="card-header">Nom: {{ Auth::user()->nom }}</div>
                        <div class="card-header">Email: {{ Auth::user()->email }}</div>
                        <div class="card-header">Genre: {{ Auth::user()->genre }}</div>
                        <div class="card-header">Date naissance: {{ Auth::user()->date_naissance }}</div>
                        <div class="card-header">Lieu naissance: {{ Auth::user()->lieu_naissance }}</div>
                        <div class="card-header">Telephone: {{ Auth::user()->Telephone }}</div>
                    </div>
                    <div>
                        <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6); width: 1200px;">
                            <h1 style="text-align: center; color: white;">Cahier de note de</h1>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-around flex-wrap">
                                    <a href="#">
                                        <button type="button" class="btn btn-primary">Voir</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
@endsection
