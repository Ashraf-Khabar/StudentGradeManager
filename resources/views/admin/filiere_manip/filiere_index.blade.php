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
        <a href="{{url('Filieres/create')}}">create</a>
        <h5>{{session('status')}}</h5>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>designation</th>
                    <th>responsable</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                @foreach ($filieres as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->code}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->responsable}}</td>

                <td><a href="{{url('Filieres/'.$item->id.'/edit')}}"> edit</a></td>
                <td><form action="{{url('Filieres/'.$item->id)}}" method="POST">
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