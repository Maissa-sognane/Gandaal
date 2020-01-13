<title>{{ Auth::user()->name }}</title>
@extends('layouts.app-default')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <div class="container" style="align-items: center">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">Information personnelle</div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Information
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">Mes Cahiers</div>
                        <div class="card-body">
                            <a href="{{route('etudiant.cahier', Auth::user()->id)}}"><button type="button" class="btn btn-success">Cahier</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" style="background: url('{{asset('images/7.jpg')}}'); background-size: cover; background-repeat: no-repeat;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container-fluid  d-flex justify-content-around flex-wrap" >
                        <div class="card text-white  mb-3" style="max-width: 18rem; background: rgb(0, 0, 0, 0.6);">
                            <div class="card-header">Pseudo:  {{ Auth::user()->name }}</div>
                            <div class="card-header">Prenom:  {{ Auth::user()->prenom }}</div>
                            <div class="card-header">Nom: {{ Auth::user()->nom }}</div>
                            <div class="card-header">Email: {{ Auth::user()->email }}</div>
                            <div class="card-header">Genre: {{ Auth::user()->genre }}</div>
                            <div class="card-header">Date naissance: {{ Auth::user()->date_naissance }}</div>
                            <div class="card-header">Lieu naissance: {{ Auth::user()->lieu_naissance }}</div>
                            <div class="card-header">Telephone: {{ Auth::user()->Telephone }}</div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Quitter</button>
                </div>

            </div>
        </div>
    </div>
@endsection

