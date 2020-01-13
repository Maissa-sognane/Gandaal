@extends('layouts.app-default')
@section('content')
    <title>Professeurs</title>
    <hr>
    <table class="table table-hover table-dark table-bordered table-sm" style="margin-top: 30px;">
        <thead>
        <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Date</th>
            <th scope="col">Lieu</th>
            <th scope="col">Email</th>
            <th scope="col">Module</th>
            <th scope="col">Telephone</th>
            <th scope="col">Genre</th>
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
                <td><button type="button" class="btn btn-primary"><a href="#" style=" color: white">editer</a></button></td>
                <td>
                    <form action="Enseignants/{{$professeur->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="supprimer" name="delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>


@endsection

