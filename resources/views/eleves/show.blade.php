@extends('layoutconnexion.app')
@section('content')

    <div class="container-fluid">
        <br>
        <div class="container-fluid  d-flex justify-content-around flex-wrap" >
                <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6); width: 1200px;">
                    <h1 style="text-align: center; color: white;">Information</h1>
                    <div class="card-header">Prenom: {{$eleves->prenom}}</div>
                    <div class="card-header">Nom: {{$eleves->nom}}</div>
                    <div class="card-header">Email: {{$eleves->email}}</div>
                    <div class="card-header">Genre: {{$eleves->genre}}</div>
                    <div class="card-header">Date naissance: {{$eleves->date_naissance}}</div>
                    <div class="card-header">Lieu naissance: {{$eleves->lieu_naissance}}</div>
                    <div class="card-header">Telephone: {{$eleves->Telephone}}</div>
                    <div class="card-header">Classe: {{$eleves->classe->nom}}</div>
                    <div class="card-header">Niveau: {{$eleves->classe->niveau->nom}}</div>
                    <div class="card-header">Filiere: {{$eleves->classe->filiere->nom}}</div>
                </div>
            <div>
                <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6); width: 1200px;">
                    <h1 style="text-align: center; color: white;">Cahier de note de {{$eleves->prenom}}</h1>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-around flex-wrap">
                            <a href="{{route('voir_cahier', ['id'=>$eleves->id])}}">
                                <button type="button" class="btn btn-primary">Voir</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection





