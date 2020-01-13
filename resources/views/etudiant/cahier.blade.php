@extends('layouts.app-default')
@section('content')
    <title>Cahier</title>
        @foreach($cahier as $cahier_note)
                <div class="container" style="align-items: center">
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-header">{{$cahier_note->nom}}</div>
                                <div class="card-body">
                                    <a href="{{route('etudiant.matiere', ['id'=>$cahier_note->id])}}"><button type="button" class="btn btn-success">{{$cahier_note->nom}}</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
        @endforeach
@endsection



