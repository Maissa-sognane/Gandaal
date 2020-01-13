@extends('layouts.app-default')
@section('content')
    <style>
        body{

        }
    </style>
    <title>Responsables</title>
    <hr>
    <p class="container-fluid" style="margin-top: 15px; width: 50px;" data-toggle="modal" data-target="#exampleModalScrollable">
        <a href="#">
            <button type="button" class="btn btn-secondary" style="font-size: 30px;">
                <i class="fas fa-plus-circle"></i>
            </button>
        </a></p>
    <table class="table table-hover table-dark table-bordered table-sm" style="margin-top: 30px;">
        <thead>
        <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Date_N</th>
            <th scope="col">Lieu_N</th>
            <th scope="col">Telephone</th>
            <th scope="col">Genre</th>
            <th scope="col">Modification</th>
            <th scope="col">Suppression</th>

        </tr>
        </thead>

        @foreach($responsables as $responsable)
            <tbody>
            <tr>
                <th scope="row">{{$responsable->name }}</th>
                <td>{{$responsable->prenom}}</td>
                <td>{{$responsable->nom}}</td>
                <td>{{$responsable->email}}</td>
                <td>{{$responsable->date_naissance}}</td>
                <td>{{$responsable->lieu_naissance}}</td>
                <td>{{$responsable->Telephone}}</td>
                <td>{{$responsable->genre}}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$responsable->id ?? ''}}">
                        Editer
                    </button></td>
                <td>
                    <form action="{{route('delete', ['id'=>$responsable->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" name="delete" value="supprimer">
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{$responsables->links() }}

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout de responsable</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('enregistrer')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Pseudo</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-form-label">Prenom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom">
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="form-group ">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-form-label">Date de Naissance</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="lieu" class="col-form-label">Lieu de Naissance</label>
                            <input type="text" class="form-control" id="lieu" name="lieu">
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Telephone</label>
                            <input type="tel" class="form-control" id="tel" name="tel">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="homme" value="M" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            homme
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="femme" value="F">
                                        <label class="form-check-label" for="gridRadios2">
                                            Femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal{{$responsable->id ?? ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('update', ['id'=>$responsable->id])}}">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Pseudo</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$responsable->name}}">
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-form-label">Prenom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$responsable->prenom}}">
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{$responsable->nom}}">
                        </div>
                        <div class="form-group ">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$responsable->email}}">
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-form-label">Date de Naissance</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{$responsable->date_naissance}}">
                        </div>
                        <div class="form-group">
                            <label for="lieu" class="col-form-label">Lieu de Naissance</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" value="{{$responsable->date_naissance}}">
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Telephone</label>
                            <input type="tel" class="form-control" id="tel" name="tel" value="{{$responsable->Telephone}}">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="homme" value="{{$responsable->genre}}" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            homme
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="femme" value="{{$responsable->genre}}">
                                        <label class="form-check-label" for="gridRadios2">
                                            Femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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

