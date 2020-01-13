<title>Classes</title>
@extends('layouts.app-default')
@section('content')
    @foreach($classes as $classe)
        <div class="container" style="align-items: center">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">{{$classe->nom}}</div>
                        <div class="card-body">
                            <a href="#"><button type="button" class="btn btn-success">{{$classe->nom}}</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
@endsection




