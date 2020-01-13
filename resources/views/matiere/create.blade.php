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
<form method="POST" action="{{route('matiere.store')}}">
    @csrf
    <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="nom">Nom</label>
            <div class="input-group">
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="nom">Coefficient</label>
            <div class="input-group">
                <input type="text" class="form-control" id="coefficient" placeholder="coefficient" name="coefficient">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="note_devoir_1">Note devoir 1</label>
            <div class="input-group">
                <input type="text" class="form-control" id="note_devoir_1" placeholder="Note devoir 1" name="note_devoir_1">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="note_devoir_2">Note devoir 2</label>
            <div class="input-group">
                <input type="text" class="form-control" id="note_devoir_2" placeholder="Note devoir 2" name="note_devoir_2">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="moyenne_devoir">Moyenne devoir</label>
            <div class="input-group">
                <input type="text" class="form-control" id="moyenne_devoir" placeholder="Moyenne devoir" name="moyenne_devoir">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="note_examen">Note examen</label>
            <div class="input-group">
                <input type="text" class="form-control" id="note_examen" placeholder="Note examen" name="note_examen">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="moyenne">Moyenne</label>
            <div class="input-group">
                <input type="text" class="form-control" id="moyenne" placeholder="moyenne" name="moyenne">
            </div>
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="moyenne">Semestre</label>
            <div class="input-group">
                <input type="hidden" value="{{$cahier->id}}" name="cahier_note_id" class="form-control">
            </div>
        </div>

        <div class="col-sm-3 my-1">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
