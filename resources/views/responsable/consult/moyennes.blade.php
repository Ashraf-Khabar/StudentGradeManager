<!DOCTYPE html>
{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bilan</title>
</head>
<body>
    <div class="main">
        <h1>bilan</h1>
        <a href="{{url('resp_dashboard')}}"> back</a>

    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>niveau</th>
                    <th>moyenne</th>



                </tr>
            </thead>
            <tbody>
                @foreach ($moyennes as $item)
                <tr>
                <td>{{$item->niveau}}</td>
                <td>{{$item->note}}</td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html> --}}


{{-- //////////////////////////////// --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=820568f5bc17b2eadf42d912a6587674">
    <title>resp</title>
</head>
<body>

<section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="../assets/img/monLogo.png" width="70px">
            </a>
            <button style="background-color: #dc3855" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="{{url('new-pass')}}">change password</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #dc3855" class="nav-link active" href="/messages">Messages</a>
                    </li>
                    <li class="nav-item">

                        <a style="color: #dc3855" class="nav-link active" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    <div class="main">
        <div style="text-align: center;">
            <div class="main">
                <h1 style="color: red">Bilan génerale</h1><br><br>
                <a style="text-decoration: none" class="button-24" role="button"
                   href="{{url('resp_dashboard')}}">Back</a>

                <br><br>
            </div>
        </div>
    </div>
    <div class="container" >
        <table class="table table-hover table-bordered"  >
            <thead class="bill-header cs" >
            <tr style="color: #be0a38 ; font-size: 15px">
                <th>niveau</th>
                <th>note</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr class="warning no-result">
                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
            </tr>
            <tr>
            @foreach ($moyennes as $item)
                <tr style="color: #fc8a48 ; background-color: #2c2929" >
                    <td>{{$item->niveau}}</td>
                    <td>{{$item->note}}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
