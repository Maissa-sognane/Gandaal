@extends('layout')
@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Contact</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>


<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index.html">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
                <label for="tel">Téléphone</label>
                <input type="text" id="tel" class="form-control form-control-lg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input type="submit" value="Envoyer" class="btn btn-primary btn-lg px-5">
            </div>
        </div>
    </div>
</div>

<div class="section-bg style-1" style="background-image: url('images/3.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-mortarboard"></span>
                <h3>Notre philosophie</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-school-material"></span>
                <h3>Nos principes</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                    Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-library"></span>
                <h3>Le succés</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                    Dolore, amet reprehenderit.</p>
            </div>
        </div>
    </div>
</div>
@endsection
