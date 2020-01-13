@extends('layouts.app-default')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row justify-content-center">

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Responsables</div>
                                <div class="card-body">
                                  <a href="{{route('voir_responsable')}}"><button type="button" class="btn btn-secondary">Responsables</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Etudiants</div>
                                <div class="card-body">
                                 <a href="{{route('voir_etudiant')}}"><button type="button" class="btn btn-success">Etudiants</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Professeurs</div>
                                <div class="card-body">
                                <a href="{{route('voir_professeur')}}"><button type="button" class="btn btn-dark">Professeurs</button></a>
                                </div>
                            </div>
                        </div>

    </div>
</div>
@endsection
