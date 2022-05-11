<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>


    <br>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif

    <br><a href="{{route('student_reg')}}" >student registration</a>

    <br><a href="{{url('Eleves')}}">modify eleve</a>
    <br><a href="{{url('Responsable_filieres')}}">modify Responsable_filiere</a>

    
</body>
</html>