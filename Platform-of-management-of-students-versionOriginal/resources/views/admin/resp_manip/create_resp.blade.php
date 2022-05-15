<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student registration</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>
            
        @endif
            
        
        <form action="{{url('Responsable_filieres')}}" method="POST">
            @csrf

            <label for="nom">name</label>
            <input type="text" name="nom"><br>
            
            <label for="prenom">prenom</label>
            <input type="text" name="prenom"><br>
            
            <label for="niveau">departement</label>
            <input type="text" name="departement"><br>
            
            <label for="login">login</label>
            <input type="text" name="login" ><br>

            <input type="submit" value="register">
        </form>
        <a href="{{url('Responsable_filieres')}}">back</a>
        @endauth
    </div>
    
</body>
</html>