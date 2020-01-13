@extends('layoutconnexion.app')
@section('content')
<title>Modification</title>
<br>
<form method="POST" action="{{route('update_filieres', ['id'=>$filieres->id])}}">
    @csrf
    @method('patch')

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="nom" name="nom" value="{{$filieres->nom}}">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
</form>
@endsection


