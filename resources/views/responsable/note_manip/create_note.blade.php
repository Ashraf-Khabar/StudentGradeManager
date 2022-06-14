<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">

    <title>notes registration</title>
</head>
<body>
{{--    <div class="main">
        @auth
        @if (session('status'))
            <div>{{session('status')}}</div>

        @endif


        <form action="{{url('Notes')}}" method="POST">
            @csrf
            <label for="code_eleve">code_eleve</label>
            <input type="text" name="code_eleve"><br>

            <label for="code_elm_mod">element de module</label>
            <input type="text" name="code_elm_mod"><br>

            <label for="note">note</label>
            <input type="text" name="note"><br>

            <input type="submit" value="register">
        </form>
        <a href="{{url('Notes')}}">back</a>
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
                        <form action="{{url('Notes')}}" method="POST">

                            @csrf
                            <x-label for="code_eleve">code_eleve</x-label>
                            <input type="text" name="code_eleve"><br>

                            <x-label for="code_elm_mod">element de module</x-label>
                            <input type="text" name="code_elm_mod"><br>

                            <x-label for="note">note</x-label>
                            <input type="text" name="note"><br>

                            <center>
                                <br><button type="submit" style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">Update</button>
                            </center>
                        </form>
                        <center>
                            <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Notes')}}"">back</a>
                        </center>
                        </form>
                    @endauth
                </div>
            </x-auth-card>
        </x-guest-layout>

    </div>

</body>
</html>
