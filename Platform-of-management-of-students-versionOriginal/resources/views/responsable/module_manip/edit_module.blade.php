<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit module</title>
</head>
<body>
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>
        
        @endif
         <form action="{{url('Modules/'.$module->id)}}" method="POST">
            
            @csrf
            @method('PUT')
            <label for="code">code</label>
            <input type="text" name="code" value="{{$module->code}}"><br>

            <label for="designation">designation</label>
            <input type="text" name="designation" value="{{$module->designation}}"><br>
            
            <label for="niveau">niveau</label>
            <input type="text" name="niveau" value="{{$module->niveau}}"><br>
            
            <label for="semestre">semestre</label>
            <input type="text" name="semestre" value="{{$module->semestre}}"><br>
            
            <label for="code_fil">code filiere</label>
            <input type="text" name="code_fil" value="{{$module->code_fil}}"><br>
        

            <input type="submit" value="update">
        </form>
        <a href="{{url('Modules')}}">back</a>
        
        
        </form>   
        @endauth
    </div>
</body>
</html>