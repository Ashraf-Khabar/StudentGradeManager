<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit element</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>
        
        @endif
         <form action="{{url('Element_Modules/'.$element->id)}}" method="POST">
            
            @csrf
            @method('PUT')
            <label for="code">code</label>
            <input type="text" name="code" value="{{$element->code}}"><br>

            <label for="designation">designation</label>
            <input type="text" name="designation" value="{{$element->designation}}"><br>
            
            <label for="vh">vh</label>
            <input type="text" name="vh" value="{{$element->vh}}"><br>
            
            <label for="poids">poids</label>
            <input type="text" name="poids" value="{{$element->poids}}"><br>
            
            <label for="code_mod">code module</label>
            <input type="text" name="code_mod" value="{{$element->code_mod}}"><br>
        

            <input type="submit" value="update">
        </form>
        <a href="{{url('Element_Modules')}}">back</a>
        
        
        </form>   
        @endauth
    </div>
</body>
</html>