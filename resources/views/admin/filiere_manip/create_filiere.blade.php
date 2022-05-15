<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>filiere registration</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>
            
        @endif
            
        
        <form action="{{url('Filieres')}}" method="POST">
            @csrf
            <label for="code">code</label>
            <input type="text" name="code"><br>

            <label for="designation">name</label>
            <input type="text" name="designation"><br>
            
            <label for="responsable">responsable</label>
            <input type="text" name="responsable"><br>
            

            <input type="submit" value="register">
        </form>
        <a href="{{url('Filieres')}}">back</a>
        @endauth
    </div>
    
</body>
</html>