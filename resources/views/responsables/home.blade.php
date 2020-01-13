@extends('layoutconnexion.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
                  <style>
        i{
            font-size: 500%;
            color: #ab45cb;

        }
        p{
            color: white;
        }
       span a:hover{
            text-decoration: none;
            text-decoration-line: none;

        }
       i:hover
       {

       }
        div.container{
            margin-top: 70px;
            height: 40px;
        }
        div.res{
            background: rgb(0, 0, 0, 0.6);
            backdrop-filter: opacity(0.8);
        }
    </style>
    <div class="container align-middle">
        <div class="row">
            <div class="col-6 col-sm-12 res">
                <div style="align-items: center;">
                    <div class="row">
                        <div class="col-6 col-md-4">
                <span>
                  <a href="{{route('filieres.index')}}">
                     <i class="fas fa-layer-group"></i>
                     <p style="font-size: 20px;">Filieres</p>
                  </a>
                </span>
                        </div>
                        <div class="col-6 col-md-4">
                  <span>
                        <a href="{{route('niveaux.index')}}">
                            <i class="fas fa-folder-open"></i>
                            <p style="font-size: 20px;">Niveaux</p>
                        </a>
                  </span>
                        </div>
                        <div class="col-6 col-md-4">
                <span>
                    <a href="{{route('classes.index')}}">
                        <i class="fas fa-school"></i>
                        <p style="font-size: 20px;">Classes</p>
                    </a>
                </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4">
                <span>
                    <a href="{{route('eleve.index')}}">
                        <i class="fas fa-user-graduate"></i>
                        <p style="font-size: 20px;">Etudiants</p>
                    </a>
                </span>
                        </div>
                        <div class="col-6 col-md-4">
                <span>
                    <a href="{{route('Enseignants.index')}}">
                        <i class="fas fa-user-tie"></i>
                        <p style="font-size: 20px;">Prof</p>
                    </a>
                </span>
                        </div>
                        <div class="col-6 col-md-4">
                 <span>
                    <a href="{{route('cahier.index')}}">
                        <i class="fas fa-book-open"></i>
                        <p style="font-size: 20px;">Cahiers</p>
                    </a>
                 </span>
                        </div>
                    </div>

                    <!--
                    <div class="row">
                        <div class="col-6 col-md-4">
                <span>
                    <a href="{{route('matiere.index')}}">
                        <i class="fas fa-book"></i>
                         <p style="font-size: 20px;">Modules</p>
                    </a>
                </span>
                        </div>
                        <div class="col-6 col-md-4">
                <span>
                    <a href="#">
                        <i class="fas fa-calendar-plus"></i>
                        <p style="font-size: 20px;">EDT</p>
                    </a>
                </span>
                        </div>
                        <div class="col-6 col-md-4">
                <span>
                    <a href="#">
                        <i class="fas fa-calendar-plus"></i>
                        <p style="font-size: 20px;">Autres</p>
                    </a>
                </span>

                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection
