<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>notes registration</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>
            
        @endif
            
        
        <form action="{{url('Notes')}}" method="POST">
            @csrf
            <label for="code_eleve">code_eleve</label>
            <input type="text" name="code_eleve"><br>

            <label for="code_elm_mod">element de module</label>
            <input type="text" name="code_elm_mod"><br>
            
            <label for="note">note</label>
            <input type="text" name="note"><br>


            

            <input type="submit" value="register">
        </form>
        <a href="{{url('Notes')}}">back</a>
        @endauth
    </div>
    
</body>
</html>