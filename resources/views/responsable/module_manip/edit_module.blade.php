<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit module</title>
</head>
<body>
{{--
    <div class="main">
        @auth
        @if (session('status'))
            <div>succefully</div>

        @endif
         <form action="{{url('Modules/'.$module->id)}}" method="POST">

            @csrf
            @method('PUT')
            <label for="code">code</label>
            <input type="text" name="code" value="{{$module->code}}"><br>

            <label for="designation">designation</label>
            <input type="text" name="designation" value="{{$module->designation}}"><br>

            <label for="niveau">niveau</label>
            <input type="text" name="niveau" value="{{$module->niveau}}"><br>

            <label for="semestre">semestre</label>
            <input type="text" name="semestre" value="{{$module->semestre}}"><br>

            <label for="code_fil">code filiere</label>
            <input type="text" name="code_fil" value="{{$module->code_fil}}"><br>


            <input type="submit" value="update">
        </form>
        <a href="{{url('Modules')}}">back</a>

        </form>
        @endauth
    </div>
--}}

    <div class="main">
        <x-guest-layout>
            <x-auth-card>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div style="text-align: center;">
                    @auth
                        @if (session('status'))
                            <div style="color: red; font-size: 30px"><i class="bi bi-check"></i> succefully</div>
                        @endif
                        <form action="{{url('Modules/'.$module->id)}}" method="POST">

                            @csrf
                            @method('PUT')
                            <x-label for="code">code</x-label>
                            <input type="text" name="code" value="{{$module->code}}"><br>

                            <x-label for="designation">designation</x-label>
                            <input type="text" name="designation" value="{{$module->designation}}"><br>

                            <x-label for="niveau">niveau</x-label>
                            <input type="text" name="niveau" value="{{$module->niveau}}"><br>

                            <x-label for="semestre">semestre</x-label>
                            <input type="text" name="semestre" value="{{$module->semestre}}"><br>

                            <x-label for="code_fil">code filiere</x-label>
                            <input type="text" name="code_fil" value="{{$module->code_fil}}"><br>

                            <center>
                                <br><button type="submit" style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">Update</button>
                            </center>
                        </form>
                        <center>
                            <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Modules')}}">back</a>
                        </center>
                        </form>
                    @endauth
                </div>
            </x-auth-card>
        </x-guest-layout>

    </div>
</body>
</html>
