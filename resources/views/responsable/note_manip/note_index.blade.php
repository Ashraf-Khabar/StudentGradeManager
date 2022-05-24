<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>manipulation des note</title>
</head>
<body>

<div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
    <div style="text-align: center;">
        <div class="main">
            <h1>posts</h1>
            <a href="{{url('resp_dashboard')}}"> back</a>
            <a href="{{url('Notes/create')}}">create</a>
            <h5>{{session('status')}}</h5>
        </div>
    </div>
    <div class="show_records">
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>code eleve</th>
                <th>code element de module</th>
                <th>note</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($notes as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->code_eleve}}</td>
                    <td>{{$item->code_elm_mod}}</td>
                    <td>{{$item->note}}</td>

                    <td><a href="{{url('Notes/'.$item->id.'/edit')}}"> edit</a></td>
                    <td><form action="{{url('Notes/'.$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete">
                        </form></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
