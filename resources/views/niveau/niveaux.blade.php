@extends('layoutconnexion.app')
@section('content')
    <title>Niveaux</title>
    <style>
        div.niveaux{
            margin-top: 20%;
        }

    </style>
    <p class="container-fluid" style="margin-top: 15px; width: 50px;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
        <a href="#">
            <button type="button" class="btn btn-secondary" style="font-size: 30px;">
                <i class="fas fa-plus-circle"></i>
            </button>
        </a></p>
    <div class="niveaux container-fluid  d-flex justify-content-around flex-wrap" >
        @foreach($niveaux as $Niveau)

            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$Niveau->nom ?? ''}}</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-around flex-wrap">
                        <a href="{{route('editer_niveaux', ['id'=>$Niveau->id])}}"><button class="btn btn-success">editer</button></a>
                        <form action="niveaux/{{$Niveau->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" name="delete" value="supprimer" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Niveau</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('niveaux.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{$filieres->id}}" name="filiere_id" class="form-control">
                        </div>
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
