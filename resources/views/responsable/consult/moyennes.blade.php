<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bilan</title>
</head>
<body>
    <div class="main">
        <h1>bilan</h1>
        <a href="{{url('resp_dashboard')}}"> back</a>
        
    </div>
    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>niveau</th>
                    <th>moyenne</th>

                    
                    

                </tr>
            </thead>
            <tbody>
                @foreach ($moyennes as $item)
                <tr>
                <td>{{$item->niveau}}</td>
                <td>{{$item->note}}</td>
                

                {{-- <td><a href="{{url('Element_Modules/'.$item->id.'/edit')}}"> edit</a></td>
                <td><form action="{{url('Element_Modules/'.$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form></td> --}}
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>