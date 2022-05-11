<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manipulation d'eleve</title>
</head>
<body>
    <div class="main">
        <h1>posts</h1>
        <a href="{{url('admin_dashboard')}}"> back</a>
        <a href="{{url('Eleves/create')}}">create</a>
        <h5>{{session('status')}}</h5>
    </div>
</body>
</html>