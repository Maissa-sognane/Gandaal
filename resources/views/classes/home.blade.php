@extends('layoutconnexion.app')
@section('content')
    <style>
    </style>
<title>Classes</title>

<div>
    <p class="container-fluid" style="margin-top: 15px; width: 50px;" data-toggle="modal" data-target="#staticBackdrop" data-whatever="@mdo">
        <a href="#">
            <button type="button" class="btn btn-secondary" style="font-size: 30px;">
                <i class="fas fa-plus-circle"></i>
            </button>
        </a></p>
 <div class="container-fluid  d-flex justify-content-around flex-wrap">
    @foreach($classes as $classe)
    <!-- Button trigger modal -->
    <button type="button" class="btn" style="font-size: 100px; background: rgb(0, 0, 0,0.6); color: white" data-toggle="modal" data-target="#exampleModal{{$classe->id}}" title="Classe: {{$classe->nom ?? ''}} ">
        <h2>Nom: <em>{{$classe->nom ?? ''}}</em></h2>
        <h2>Filiere: <em>{{$classe->filiere->nom ?? ''}}</em></h2>
        <h2>Niveau: <em>{{$classe->niveau->nom ?? ''}}</em></h2>
    </button>
    <div class="modal fade" id="exampleModal{{$classe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: url('{{asset('images/7.jpg')}}'); background-size: cover; background-repeat: no-repeat;">
                <div class="modal-header">
                  <div style="background: rgb(0, 0, 0, 0.6); background-size: cover; width: 100%; color: white; text-align: center">
                      <h5 class="modal-title" id="exampleModalCenterTitle"><h3>{{$classe->nom ?? ''}}</h3></h5>
                  </div>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="background: rgb(0, 0, 0, 0.6); background-size: cover; width: 100%; color: white; text-align: center">
                        <h1>DETAILS</h1>
                    </div>

                    <div class="d-flex justify-content-around">
                    <p><a href="{{route('voir_eleves', ['id'=>$classe->id])}}" role="button" class="btn btn-warning popover-test" title="Eleves de {{$classe->nom ?? ''}}     " data-content="Popover body content is set in this attribute.">Etudiants</a></p>
                    <p><a href="{{route('mesclasses', ['id'=>$classe->id])}}" role="button" class="btn btn-info popover-test" title="Professeurs de {{$classe->nom ?? ''}}     " data-content="Popover body content is set in this attribute.">Professeurs</a></p>
                    </div>
                        <hr>
                    <div style="background: rgb(0, 0, 0, 0.6); background-size: cover; width: 100%; color: white; text-align: center">
                        <h1 style="color: white">MODIFICATION</h1>
                    </div>
                    <div class="d-flex justify-content-around">
                        <p><a href="{{route('editer_classes', ['id'=>$classe->id])}}" role="button" class="btn btn-success popover-test" title="Editer la {{$classe->nom ?? ''}}     " data-content="Popover body content is set in this attribute.">Editer</a></p>
                        <form action="classes/{{$classe->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" name="delete" value="supprimer">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
 </div>

    <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle Classe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('classes.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Niveau</label>
                            <select name="niveau_id" id="niveau_id" class="form-control">
                                <option value=""></option>
                                @foreach($niveaux as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Filiére</label>
                            <select name="filiere_id" id="filiere_id" class="form-control">
                                <option value=""></option>
                                @foreach($filieres as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
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
