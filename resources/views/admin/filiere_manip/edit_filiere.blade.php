<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit filiere</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>

        @endif
         <form action="{{url('Filieres/'.$filiere->id)}}" method="POST">

            @csrf
            @method('PUT')
            <label for="code">code</label>
            <input type="text" name="code" value="{{$filiere->code}}"><br>

            <label for="designation">designation</label>
            <input type="text" name="designation" value="{{$filiere->designation}}"><br>

            <label for="responsable">responsable</label>
            <input type="text" name="responsable" value="{{$filiere->responsable}}"><br>


            <input type="submit" value="update">
        </form>
        <a href="{{url('Filieres')}}">back</a>


        </form>
        @endauth
    </div>
</body>
</html>
