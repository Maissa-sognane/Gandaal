@extends('layoutconnexion.app')
@section('content')
<title>Niveaux</title>
<div>
    <p class="container-fluid"><a href="{{route('niveaux.create')}}">
        </a></p>
    <div class="container-fluid  d-flex justify-content-around flex-wrap" >
        @foreach($filieres->classes     as $class)
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$class->niveau->nom ?? ''}}</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-around flex-wrap">
                        <a href="{{route('voir_classes', ['filiere'=>$filieres->id,'id'=>$class->niveau->id])}}"><button class="btn btn-success">Classes</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

