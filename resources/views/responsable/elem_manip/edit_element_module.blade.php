<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>edit element</title>
</head>
<body>

    <div class="main">
        <x-guest-layout>
            <x-auth-card>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div style="text-align: center;">
                    @auth
                        @if (session('status'))
                            <div style="color: red; font-size: 30px"><i class="bi bi-check"></i> succefully</div>
                        @endif
                        <form action="{{url('Element_Modules/'.$element->id)}}" method="POST">

                            @csrf
                            @method('PUT')
                            <x-label for="code">code</x-label>
                            <input type="text" name="code" value="{{$element->code}}"><br>

                            <x-label for="designation">designation</x-label>
                            <input type="text" name="designation" value="{{$element->designation}}"><br>

                            <x-label for="vh">vh</x-label>
                            <input type="text" name="vh" value="{{$element->vh}}"><br>

                            <x-label for="poids">poids</x-label>
                            <input type="text" name="poids" value="{{$element->poids}}"><br>

                            <x-label for="code_mod">code module</x-label>
                            <input type="text" name="code_mod" value="{{$element->code_mod}}"><br>

                            <center>
                                <br><button type="submit" style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">Update</button>
                            </center>
                        </form>
                        <center>
                            <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Element_Modules')}}">back</a>
                        </center>
                        </form>
                    @endauth
                </div>
            </x-auth-card>
        </x-guest-layout>

    </div>
</body>
</html>
