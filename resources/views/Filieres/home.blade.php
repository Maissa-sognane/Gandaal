@extends('layoutconnexion.app')
@section('content')
    <title>filieres</title>
    <style>
    div.filiere{
        margin-top: 10%;
    }
    div.card{
        background: rgb(0, 0, 0, 0.6);
        background-size: auto;
    }



    </style>
    <p class="container-fluid" style="margin-top: 15px; width: 50px;    " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
        <a href="#">
            <button type="button" class="btn btn-secondary" style="font-size: 30px;">
                <i class="fas fa-plus-circle"></i>
            </button>
        </a></p>
        {{$filieres->links()}}
<div class="backfiliere">
    <div class="filiere container-fluid  d-flex justify-content-around flex-wrap" >
        @foreach($filieres as $filiere)
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$filiere->nom ?? ''}}</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-around flex-wrap">
                        <a href="{{route('voir_filieres', ['id'=>$filiere->id])}}"><button class="btn btn-success">Niveau</button></a>
                        <a href="{{route('editer_filieres', ['id'=>$filiere->id])}}"><button class="btn btn-secondary">editer</button>
                        </a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$filiere->id ?? ''}}">Supprimer
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle Filiére</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('filieres.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom">
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



    <div class="modal fade" id="exampleModal{{$filiere->id ?? ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer Filiére</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="filieres/{{$filiere->id ?? ''}}" method="post" id="deleteFil">
                  @csrf
                  @method('delete')
                <div class="modal-body">
                     <input type="hidden" name="delete" value="supprimer">
                     <p>Etes Vous sur de vouloir supprimer la filière {{$filiere->nom ?? ''}}</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
                </form>
            </div>
        </div>
    </div>



@endsection
