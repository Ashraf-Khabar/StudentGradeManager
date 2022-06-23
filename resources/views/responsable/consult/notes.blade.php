<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>bilan</title>
</head>
<body>
<div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
    <div class="main">
        <div style="text-align: center;">
            <div class="main">
                <h1 style="color: red">Relevé de notes</h1><br><br>
                <a style="text-decoration: none" class="button-24" role="button" href="{{url('resp_dashboard')}}">Back</a>
                <br><br>
                <h5>{{session('status')}}</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover table-bordered" >
            <thead class="bill-header cs" >
            <tr style="color: #be0a38 ; font-size: 15px" >
                <th>module</th>
                <th>element module</th>
                <th>note</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($notes as $item)
                <tr style="color: #decdcd ; background-color: #2c2929" >
                    <td>{{$item->code_mod}}</td>

                    <td>{{$item->code_elm_mod}}</td>
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
</div>


</body>
</html>
