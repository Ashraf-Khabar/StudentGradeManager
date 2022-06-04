<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit reponsable</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>
        
        @endif
         <form action="{{url('Responsable_filieres/'.$resp->id)}}" method="POST">
            
            @csrf
            @method('PUT')

            <label for="nom">name</label>
            <input type="text" name="nom" value="{{$resp->nom}}"><br>
            
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" value="{{$resp->prenom}}"><br>
            
            <label for="departement">departement</label>
            <input type="text" name="departement" value="{{$resp->departement}}"><br>
            
            <label for="login">login</label>
            <input type="text" name="login" value="{{$resp->login}}"><br>

            <input type="submit" value="update">
        </form>
        <a href="{{url('Responsable_filieres')}}">back</a>
        
        
        </form>   
        @endauth
    </div>
</body>
</html>