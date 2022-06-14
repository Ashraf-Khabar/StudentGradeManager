<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>eleve</title>
</head>
<body>
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
                        <a style="color: #dc3855" class="nav-link active" href="/messages">Messages</a>
                    </li>
                    <li class="nav-item">

                        <a style="color: #dc3855" class="nav-link active" href="{{url('new-pass')}}">change password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: #dc3855" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Modify
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('Modules')}}">Modify Module</a></li>
                            <li><a class="dropdown-item" href="{{url('Element_Modules')}}">modify Element de module</a></li>
                            <li><a class="dropdown-item" href="{{url('Notes')}}">modify Notes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">

    </div>
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
<div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
    @if (session('status'))
        <h3>{{session('status')}}</h3>
    @endif
    <div class="container">
        <table class="table table-hover table-bordered" >
            <thead class="bill-header cs">
            <tr style="color: #be0a38 ; font-size: 15px">
                <th>ID</th>
                <th>code</th>
                <th>nom et prenom</th>
                <th>niveau</th>
                <th>code filiere</th>
                <th>login</th>
                <th>Notes</th>
                <th>Moyenne</th>
            </tr>
            </thead>
            <tbody>
            {{-- <tr class="warning no-result">
                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
            </tr> --}}
            @foreach ($students as $item)
                <tr style="color: #decdcd ; background-color: #2c2929">
                    <td>{{$item->id}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->niveau}}</td>
                    <td>{{$item->code_fil}}</td>
                    <td>{{$item->login}}</td>
                    <td>
                        <a href="{{url('Notes/'.$item->code)}}" class="btn btn-danger" style="margin-left: 5px;" type="submit">voir notes</a>
                    </td>
                    <td>
                        <a href="{{url('moyennes/'.$item->code)}}" class="btn btn-danger" style="margin-left: 5px;" type="submit">voir moyenne</a>
                        @endforeach
                    </td>
                </tr>

            </tbody>
        </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
