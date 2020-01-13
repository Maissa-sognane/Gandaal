@extends('layouts.app-default')
@section('content')
    <style>
        body{

        }
    </style>
    <title>Etudiants</title>
    <hr>
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
            <th scope="col">Classe</th>
            <th scope="col">Modification</th>
            <th scope="col">Suppression</th>

        </tr>
        </thead>

        @foreach($eleves as $eleve)
            <tbody>
            <tr>
                <th scope="row">{{$eleve->name }}</th>
                <td>{{$eleve->prenom}}</td>
                <td>{{$eleve->nom}}</td>
                <td>{{$eleve->email ?? ''}}</td>
                <td>{{$eleve->date_naissance ?? ''}}</td>
                <td>{{$eleve->lieu_naissance ?? ''}}</td>
                <td>{{$eleve->Telephone ?? ''}}</td>
                <td>{{$eleve->genre ?? ''}}</td>
                <td>{{$eleve->classe->nom ?? ''}}</td>
                <td><a href="#"><button type="button" class="btn btn-primary">editer</button></a></td>
                <td>
                    <form action="eleve/{{$eleve->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" name="delete" value="supprimer">
                    </form>
                </td>
            </tr>
            </tbody>

        @endforeach
    </table>
    {{$eleves->links() }}

@endsection

