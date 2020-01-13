@extends('layouts.app-default')
@section('content')
    <title>Modules</title>


    <table class="table table-striped table-dark" style="margin-top: 30px;">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Coefficient</th>
            <th scope="col">Note devoir 1</th>
            <th scope="col">Note devoir 2</th>
            <th scope="col">Moyenne devoir</th>
            <th scope="col">Note examen</th>
            <th scope="col">Moyenne</th>

        </tr>
        </thead>

        @foreach($cahier->matiere as $matiere)
            <tbody>
            <tr>
                <td>{{$matiere->nom}}</td>
                <td>{{$matiere->coefficient}}</td>
                <td>{{$matiere->note_devoir_1}}</td>
                <td>{{$matiere->note_devoir_2}}</td>
                <td>{{$matiere->moyenne_devoir}}</td>
                <td>{{$matiere->note_examen}}</td>
                <td>{{$matiere->moyenne}}</td>
            </tr>
            </tbody>

        @endforeach
    </table>
@endsection

