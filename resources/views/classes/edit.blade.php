@extends('layoutconnexion.app')
@section('content')
<title>Modification de la classe {{$classes->nom}}</title>
<form method="POST" action="{{route('update_classes', ['id'=>$classes->id])}}" style="margin-top: 10px; color: white;">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label for="nom" class="col-form-label">Nom </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$classes->nom}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="classe" class="col-form-label">Niveau</label>
        <div class="col-sm-5">
            <select name="niveau_id" id="niveau_id" class="form-control">
                <option value=""></option>
                @foreach($niveaux as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="classe" class="col-form-label">Filiere</label>
        <div class="col-sm-5">
            <select name="filiere_id" id="filiere_id" class="form-control">
                <option value=""></option>
                @foreach($filieres as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</form>
@endsection
