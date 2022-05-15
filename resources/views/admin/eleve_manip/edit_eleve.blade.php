<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit eleve</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>
        
        @endif
         <form action="{{url('Eleves/'.$eleve->id)}}" method="POST">
            
            @csrf
            @method('PUT')
            <label for="code">code</label>
            <input type="text" name="code" value="{{$eleve->code}}"><br>

            <label for="nom">name</label>
            <input type="text" name="nom" value="{{$eleve->nom}}"><br>
            
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" value="{{$eleve->prenom}}"><br>
            
            <label for="niveau">niveau</label>
            <input type="text" name="niveau" value="{{$eleve->niveau}}"><br>
            
            <label for="code_fil">code filiere</label>
            <input type="text" name="code_fil" value="{{$eleve->code_fil}}"><br>
            
            <label for="login">login</label>
            <input type="text" name="login" value="{{$eleve->login}}"><br>

            <input type="submit" value="update">
        </form>
        <a href="{{url('Eleves')}}">back</a>
        
        
        </form>   
        @endauth
    </div>
</body>
</html>