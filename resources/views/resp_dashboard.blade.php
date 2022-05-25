<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eleve</title>
</head>
<body>
    <h3>hello resp</h3>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <br><a href="{{url('Modules')}}">modify modules</a>
    <a href="{{url('new-pass')}}">change password</a>

    <br><a href="{{url('Element_Modules')}}">modify elements</a>
    <br><a href="{{url('Notes')}}">modify notes</a>
    @if (session('status'))
        <h3>{{session('status')}}</h3>
            
        @endif
    <div class="students">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
            <tr style="color: #be0a38 ; font-size: 15px">
                <th>ID</th>
                <th>code</th>
                <th>nom et prenom</th>
                <th>niveau</th>
                <th>code filiere</th>
                <th>login</th>
                
            </tr>
            </thead>
            <tbody>
            {{-- <tr class="warning no-result">
                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
            </tr> --}}
            @foreach ($students as $item)
                <tr style="color: #110505 ; background-color: #88f5c2">
                    <td>{{$item->id}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->niveau}}</td>
                    <td>{{$item->code_fil}}</td>
                    <td>{{$item->login}}</td>
                    <td>
                        
                            <a href="{{url('Notes/'.$item->code)}}" >voir notes</a>
                    </td>
                    <td>
                            <a href="{{url('moyennes/'.$item->code)}}" >voir moyenne</a>
                            
            @endforeach
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</body>
</html>