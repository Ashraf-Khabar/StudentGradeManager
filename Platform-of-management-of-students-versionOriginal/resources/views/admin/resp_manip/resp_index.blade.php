<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REsp</title>
</head>
<body>
    <div class="navbar">
        <h3>responsable filiere</h3>
    <a href="{{url('Responsable_filieres/create')}}">create</a>
    <a href="{{url('admin_dashboard')}}">back</a>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nom</th>
                    <th>prenom</th>
                    
                    <th>departement</th>
                    <th>login</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($resp as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->departement}}</td>
                <td>{{$item->login}}</td>
                <td><a href="{{url('Responsable_filieres/'.$item->id.'/edit')}}"> edit</a></td>
                <td><form action="{{url('Responsable_filieres/'.$item->id)}}" method="POST">
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