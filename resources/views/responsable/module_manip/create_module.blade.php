<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>filiere registration</title>
</head>
<body>
{{--    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>
        @endif


        <form action="{{url('Modules')}}" method="POST">
            @csrf
            <label for="code">code</label>
            <input type="text" name="code"><br>

            <label for="designation">name</label>
            <input type="text" name="designation"><br>

            <label for="niveau">niveau</label>
            <input type="text" name="niveau"><br>

            <label for="semestre">semestre</label>
            <input type="text" name="semestre"><br>

            <label for="code_fil">code_fil</label>
            <input type="text" name="code_fil"><br>


            <input type="submit" value="register">
        </form>
        <a href="{{url('Modules')}}">back</a>
        @endauth
    </div>--}}

    <div class="main">
        <x-guest-layout>
            <x-auth-card>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div style="text-align: center;">
                    @auth
                        @if (session('status'))
                            <div style="color: red; font-size: 30px"><i class="bi bi-check"></i> succefully</div>
                        @endif
                        <form action="{{url('Modules')}}" method="POST">

                            @csrf
                            <x-label for="code">code</x-label>
                            <input type="text" name="code"><br>

                            <x-label for="designation">name</x-label>
                            <input type="text" name="designation"><br>

                            <x-label for="niveau">niveau</x-label>
                            <input type="text" name="niveau"><br>

                            <x-label for="semestre">semestre</x-label>
                            <input type="text" name="semestre"><br>

                            <x-label for="code_fil">code_fil</x-label>
                            <input type="text" name="code_fil"><br>

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
