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
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>nom</th>
                    <th>prenom</th>
                    
                    <th>niveau</th>
                    <th>code filiere</th>
                    <th>login</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->code}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->niveau}}</td>
                <td>{{$item->code_fil}}</td>
                <td>{{$item->login}}</td>
                <td><a href="{{url('Eleves/'.$item->id.'/edit')}}"> edit</a></td>
                <td><form action="{{url('Eleves/'.$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>