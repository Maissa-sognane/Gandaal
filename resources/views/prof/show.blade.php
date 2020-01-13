@extends('layoutconnexion.app')
@section('content')
    <title>{{$professeurs->prenom}}</title>
    <br>
    <h1 style="color: white; background: rgb(0, 0, 0, 0.6); text-align: center;">{{$professeurs->prenom}} {{$professeurs->nom}}</h1>
    <br>
    <div class="container">
    <div class=" d-flex justify-content-around flex-wrap" >
        <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6); width: 1200px;">
            <h1 style="text-align: center; color: white;">Information</h1>
            <div class="card-header">Prenom: {{$professeurs->prenom}}</div>
            <div class="card-header">Nom: {{$professeurs->nom}}</div>
            <div class="card-header">Email: {{$professeurs->email}}</div>
            <div class="card-header">Matiere: {{$professeurs->matiere}}</div>
            <div class="card-header">Genre: {{$professeurs->genre}}</div>
            <div class="card-header">Date naissance: {{$professeurs->date_naissance}}</div>
            <div class="card-header">Lieu naissance: {{$professeurs->lieu_naissance}}</div>
            <div class="card-header">Telephone: {{$professeurs->Telephone}}</div>
        </div>
        <div>
</div>


@endsection

