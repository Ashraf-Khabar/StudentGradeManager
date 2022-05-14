<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>manipulation des elements de module</title>
</head>
<body>
    <div class="main">
        <h1>posts</h1>
        <a href="{{url('resp_dashboard')}}"> back</a>
        <a href="{{url('Element_Modules/create')}}">create</a>
        <h5>{{session('status')}}</h5>
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>designation</th>
                    <th>vh</th>
                    <th>pois</th>
                    <th>code module</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                @foreach ($elements as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->code}}</td>
                <td>{{$item->designation}}</td>
                <td>{{$item->vh}}</td>
                <td>{{$item->poids}}</td>
                <td>{{$item->code_mod}}</td>

                <td><a href="{{url('Element_Modules/'.$item->id.'/edit')}}"> edit</a></td>
                <td><form action="{{url('Element_Modules/'.$item->id)}}" method="POST">
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