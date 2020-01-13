@extends('layoutconnexion.app')
@section('content')
<title>Modification</title>
<form method="POST" action="{{route('update_eleve',['id'=>$eleves->id])}}" style="margin-top: 10px; color: white;">
    @csrf
    @method('patch')

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Pseudo</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="name" name="name" value="{{$eleves->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$eleves->prenom}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$eleves->nom}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-3">
            <input type="email" class="form-control" id="email" name="email" value="{{$eleves->email}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date de Naissance</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="date" name="date" value="{{$eleves->date_naissance}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="lieu" class="col-sm-2 col-form-label">Lieu de Naissance</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="lieu" name="lieu" value="{{$eleves->lieu_naissance}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-3">
            <input type="tel" class="form-control" id="tel" name="tel" value="{{$eleves->Telephone}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="classe" class="col-sm-2 col-form-label">Classe</label>
        <div class="col-sm-3">
            <select name="classe_id" id="classe_id" class="form-control">
                <option value=""></option>
                @foreach($classes as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="homme" value="{{$eleves->genre}}" checked>
                    <label class="form-check-label" for="gridRadios1">
                        homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="femme" value="{{$eleves->genre}}">
                    <label class="form-check-label" for="gridRadios2">
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
