@extends('layoutconnexion.app')
@section('content')
<title>Modification</title>
<form method="POST" action="{{route('update_prof',['id'=>$professeurs->id])}}" style="margin-top: 10px; color: white;">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Pseudo</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="name" name="name" value="{{$professeurs->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$professeurs->prenom}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$professeurs->nom}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date de Naissance</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="date" name="date" value="{{$professeurs->date_naissance}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="lieu" class="col-sm-2 col-form-label">Lieu de Naissance</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="lieu" name="lieu" value="{{$professeurs->lieu_naissance}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-3">
            <input type="email" class="form-control" id="email" name="email" value="{{$professeurs->email}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="matiere" class="col-sm-2 col-form-label">Matiere</label>
        <div class="col-sm-3">
            <input type="matiere" class="form-control" id="matiere" name="matiere" value="{{$professeurs->matiere}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-3">
            <input type="tel" class="form-control" id="tel" name="tel" value="{{$professeurs->Telephone}}">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="homme" value="{{$professeurs->genre}}" checked>
                    <label class="form-check-label" for="genre">
                        homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="femme" value="{{$professeurs->genre}}">
                    <label class="form-check-label" for="genre">
                        Femme
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
</form>
@endsection
