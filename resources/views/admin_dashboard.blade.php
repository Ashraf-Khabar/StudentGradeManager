<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=820568f5bc17b2eadf42d912a6587674">
    <title>Bootstrap Example</title>
</head>
<body style="background-image: url('../assets/img/b1.png') ; background-size: auto">

<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="../assets/img/monLogo.png" width="70px">
            </a>
            <button style="background-color: #dc3855" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="new-pass">change password</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a style="color: #dc3855" href="{{ route('register') }}" class="nav-link active" >Register</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="/messages">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: #dc3855" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Modify
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('Eleves')}}">Modify student</a></li>
                            <li><a class="dropdown-item" href="{{url('Responsable_filieres')}}">modify Responsable_filiere</a></li>
                            <li><a class="dropdown-item" href="{{url('Filieres')}}">modify filiere</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

                        <a style="color: #dc3855" class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section id="services" class="services">
    <div class="container-md section-title">
        <div class="text-center"><h5 class="d-inline-block justify-content-lg-center"
                                     style="background-color: #e2d6b5;width: 120px;margin-left: 0px;border-radius: 30px;padding: 5px;margin-top: 20px;color: #ffffff;font-size: 18px;">
                SERVICES</h5>
            <h2 style="color: #75aadb;">We Offer Awesome<span
                    style="color: #d12d33;"><strong>&nbsp;Services</strong></span></h2>
            <p class="d-inline-block" style="width: 50%; color: #edf2f7"><strong>Tous les services de notre platforme a votre disposition ,
                vous pouvez utiliser tous les parties autoriser a votre privilege .</strong><br>&nbsp; &nbsp;&nbsp;</p></div>
        <div class="row">
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon"><i class="fas fa-chalkboard-teacher" style="margin-bottom: 15px;"></i><h4
                            class="title"><a href="{{url('Eleves')}}">Etudiants</a></h4>
                        <p class="description">Ce champs consite a visualiser les etudiants avec les informations personelles
                            , avec la possibilite de modification .
                            excepturi<br>&nbsp; &nbsp; &nbsp;&nbsp;</p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon"><i class="fas fa-book-open" style="margin-bottom: 15px;"></i><h4 class="title">
                            <a href="{{url('Filieres')}}">Filieres</a></h4>
                        <p class="description">Ce champs consite a visualiser les filieres , avec les responsables
                            des filieres , plus la possibilite de modification .<br>&nbsp; &nbsp; &nbsp;&nbsp;</p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon"><i class="far fa-registered" style="margin-bottom: 15px;"></i><h4 class="title">
                            <a href="{{ route('register') }}">Register</a></h4>
                        <p class="description">Ce champs consite a enregister des nouveaux elements , a savoir
                            des etudiants , des modules et des chefs de filieres .<br>&nbsp; &nbsp; &nbsp;&nbsp;</p></div>
                </div>
            </div>
            <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon"><i class="fab fa-telegram" style="margin-bottom: 15px;"></i><h4 class="title">
                            <a href="/messages">Messagerie</a></h4>
                        <p class="description">Ce champs consite a envoyer des messages entres les differents gens
                            inscrit dans l'application .<br>&nbsp; &nbsp; &nbsp;&nbsp;</p></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End: animated-services -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

