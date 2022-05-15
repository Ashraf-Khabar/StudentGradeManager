<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit note</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>
        
        @endif
         <form action="{{url('Notes/'.$note->id)}}" method="POST">
            
            @csrf
            @method('PUT')
            <label for="code_eleve">code_eleve</label>
            <input type="text" name="code_eleve" value="{{$note->code_eleve}}"><br>

            <label for="code_elm_mod">code_elm_mod</label>
            <input type="text" name="code_elm_mod" value="{{$note->code_elm_mod}}"><br>
            
            <label for="note">note</label>
            <input type="text" name="note" value="{{$note->note}}"><br>
            

        

            <input type="submit" value="update">
        </form>
        <a href="{{url('Notes')}}">back</a>
        
        
        </form>   
        @endauth
    </div>
</body>
</html>