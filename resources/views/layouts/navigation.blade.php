<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
</head>
<body>
<!-- Example Code -->
<nav class="navbar navbar-expand-lg " style="background-color: #2d3748">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="../assets/img/monLogo.png" width="45px">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
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
                    <a style="color: #dc3855" class="nav-link active" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

