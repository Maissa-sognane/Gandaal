@extends('layoutconnexion.app')
@section('content')
<title>Modules</title>


<table class="table table-striped table-dark" style="margin-top: 30px;">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Coefficient</th>
        <th scope="col">Note devoir 1</th>
        <th scope="col">Note devoir 2</th>
        <th scope="col">Moyenne devoir</th>
        <th scope="col">Note examen</th>
        <th scope="col">Moyenne</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>

    </tr>
    </thead>

    @foreach($cahier->matiere as $matiere)
        <tbody>
        <tr>
            <th scope="row">{{$matiere->id}}</th>
            <td>{{$matiere->nom}}</td>
            <td>{{$matiere->coefficient}}</td>
            <td>{{$matiere->note_devoir_1}}</td>
            <td>{{$matiere->note_devoir_2}}</td>
            <td>{{$matiere->moyenne_devoir}}</td>
            <td>{{$matiere->note_examen}}</td>
            <td>{{$matiere->moyenne}}</td>
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
<a href="{{route('ajouter', ['id'=>$cahier->id])}}"> <button type="button" class="btn btn-secondary">Ajouter</button></a>
@endsection
