<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->

</head>
<body>
<form method="POST" action="{{route('Enseignants.store')}}">
    @csrf
    <div class="row alert alert-primary">Ajouter</div>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
    </div>
    <div class="form-group row">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date de Naissance</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="date" name="date">
        </div>
    </div>

    <div class="form-group row">
        <label for="lieu" class="col-sm-2 col-form-label">Lieu de Naissance</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lieu" name="lieu">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="matiere" class="col-sm-2 col-form-label">Matiere</label>
        <div class="col-sm-10">
            <input type="matiere" class="form-control" id="matiere" name="matiere">
        </div>
    </div>

    <div class="form-group row">
        <label for="tel" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="tel" name="tel">
        </div>
    </div>

    <div class="form-group row">
        <label for="classe" class="col-sm-2 col-form-label">classe</label>
        <div class="col-sm-10">
            <select name="classe_id" id="classe_id" class="form-control">
                <option value=""></option>
                @foreach($classes as $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="homme" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="femme" value="0">
                    <label class="form-check-label" for="gridRadios2">
                        Femme
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
