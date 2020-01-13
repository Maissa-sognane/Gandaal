<!DOCTYPE html>
<html lang="en">
<head>

    <title>Accueil</title>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    <style type="text/css">

        i
        {
            font-size: 130px;
        }
        body
        {
        	background: url('{{asset('images/6.jpg')}}');
        }

    </style>

</head>
<body>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" style="background:url('{{asset('images/6.jpg')}}'); background-size: cover; background-repeat: no-repeat;">
            	<div style="background:rgb(0,0,0,0.6);">
					<span class="login100-form-title p-b-43" style="color: white;">
						Espaces Connexions
					</span>
            <div class="d-flex flex-wrap justify-content-between">
                <div>
                    <a href="{{route('admin.login')}}">
                       <i class="fas fa-user-lock" title="Administrateur" style="color: white;"></i><br>
                        <span style="font-size: 20px; color: white;">Administrateur</span>
                    </a>
                </div>

                <div >
                    <a href="{{route('responsable.login')}}">
                        <i class="fas fa-user-tie" title="Responsables" style="color: white;"></i><br>
                        <span style="font-size: 20px; color: white;">Responsables</span>
                    </a>
                </div>

            </div><br>

            <div class="d-flex flex-wrap justify-content-between">

                <div >
                    <a href="{{route('professeur.login')}}">
                        <i class="fas fa-chalkboard-teacher" title="Professeurs" style="color: white;"></i><br>
                        <span style="font-size: 20px; color: white;">Professeurs</span>
                    </a>
                </div>
                <div >
                    <a href="{{route('etudiant.login')}}">
                        <i class="fas fa-user-graduate" title="Etudiants" style="color: white;"></i><br>
                        <span style="font-size: 20px; color: white;">Etudiants</span>
                    </a>
                </div>
            </div>
        </div>





                <div class="flex-sb-m w-full p-t-3 p-b-32">

                </div>

                <div class="container-login100-form-btn">
                </div>

                <div class="text-center p-t-46 p-b-20">
                </div>

                <div class="login100-form-social flex-c-m">
                </div>
            </form>

            <div class="login100-more" id="home" class="intro route bg-image">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/1.jpg')}}" class="d-block w-100" alt="..." style="height:760px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Gandaal</h1>
                                <h5>Une Plateforme de gestion et communication</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/4.jpg')}}" class="d-block w-100" alt="..." style="height:760px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Simple</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/7.jpg')}}" class="d-block w-100" alt="..." style="height:760px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Pratique</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/8.jpg')}}" class="d-block w-100" alt="..." style="height:760px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Securisée</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/6.jpg')}}" class="d-block w-100" alt="..." style="height:760px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Destinée aux responsables, professeurs et etudiants d'établissement scolaire</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!--
                    <div class="overlay-itro"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">

                                <h1 class="intro-title mb-4">Gandaal</h1>
                                <p class="intro-subtitle"><span class="text-slider-items">Gandaal est une plateforme de gestion
                                   et de communication simple, pratique et sécurisée à destination des responsables et personnels d'établissement scolaire.  </span><strong class="text-slider"></strong></p>

                            </div>
                        </div>
                    </div>
				-->
            </div>
        </div>
    </div>
</div>









<script src="https://kit.fontawesome.com/8435a2a226.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




</body>

</html>
