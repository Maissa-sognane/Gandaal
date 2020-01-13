@extends('layoutconnexion.app')
@section('content')
<title>Modules</title>
<p class="container-fluid" style="margin-top: 15px;" data-toggle="modal" data-target="#exampleModalScrollable" data-whatever="@mdo">
    <a href="#">
        <button type="button" class="btn btn-secondary" style="font-size: 30px;">
            <i class="fas fa-plus-circle"></i>
        </button>
    </a></p>

<table class="table table-hover table-dark" style="margin-top: 30px;">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
    </tr>
    </thead>
    @foreach($matieres as $matiere)
        <tbody>
        <tr>
            <th scope="row">{{$matiere->id}}</th>
            <td>{{$matiere->nom}}</td>
            <td><a href="{{route('editer_matiere', ['id'=>$matiere->id])}}"><button type="button" class="btn btn-primary">editer</button></a></td>
            <td>
                <form action="matiere/{{$matiere->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="supprimer" name="delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        </tbody>

    @endforeach
</table>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout de module</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('matiere.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection

