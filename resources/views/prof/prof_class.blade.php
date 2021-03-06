@extends('layoutconnexion.app')
@section('content')
<title>Professeurs</title>
<hr>
    <div class="container d-flex justify-content-around" style="color: white; background: rgb(0,0,0,0.6)">
    <h3>Total: {{$prof->count() }}</h3>
    <h3>Homme(s): {{$garcons}}</h3>
        <h3>Femme(s): {{$filles}}</h3>
    </div>

<p class="container-fluid" style="margin-top: 15px; width: 50px;" data-toggle="modal" data-target="#exampleModalScrollable">
    <a href="#">
        <button type="button" class="btn btn-secondary" style="font-size: 30px;">
            <i class="fas fa-plus-circle"></i>
        </button>
    </a></p>


<table class="table table-hover table-dark table-bordered table-sm" style="color: white;">
    <thead>
    <tr>
        <th scope="col">Pseudo</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Date</th>
        <th scope="col">Lieu</th>
        <th scope="col">Email</th>
        <th scope="col">Matiere</th>
        <th scope="col">Telephone</th>
        <th scope="col">Genre</th>
        <th scope="col">Info</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>

    </tr>
    </thead>
    @foreach($prof as $professeur)
        <tbody>
        <tr>
            <th scope="row">{{$professeur->name}}</th>
            <td>{{$professeur->prenom}}</td>
            <td>{{$professeur->nom}}</td>
            <td>{{$professeur->date_naissance}}</td>
            <td>{{$professeur->lieu_naissance}}</td>
            <td>{{$professeur->email}}</td>
            <td>{{$professeur->matiere ?? ''}}</td>
            <td>{{$professeur->Telephone}}</td>
            <td>{{$professeur->genre}}</td>
            <td><a href="{{route('voir_prof', ['id'=>$professeur->id])}}"><button type="button" class="btn btn-success">Voir</button></a></td>
            <td><a href="{{route('editer_prof', ['id'=>$professeur->id])}}" style=" color: white"><button type="button" class="btn btn-primary">editer</button></a></td>
            <td>
                <form action="professeur/{{$professeur->id}}" method="post">
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
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'etudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('Enseignants.store')}}">
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
                    <div class="form-group ">
                        <label for="matiere" class="col-form-label">Module</label>
                        <input type="matiere" class="form-control" id="matiere" name="matiere">
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
                    <div class="form-group">
                        <input type="hidden" value="{{$classes->id}}" name="classe_id" class="form-control">
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="homme" value="M">
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

@endsection

