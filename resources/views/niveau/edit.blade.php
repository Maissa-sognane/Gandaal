@extends('layoutconnexion.app')
@section('content')
    <title>Modification</title>
<form method="POST" action="{{route('update_niveaux', ['id'=>$niveaux->id])}}" style="margin-top: 10px; color: white;">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label for="nom" class="col-form-label">Niveau</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{$niveaux->nom}}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary"><Enregistrer></Enregistrer></button>
        </div>
    </div>
</form>
@endsection
