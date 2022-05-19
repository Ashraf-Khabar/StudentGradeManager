<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">

    <link rel="stylesheet" href="/assets/css/docs.css">

    <title>edit eleve</title>
</head>
<body style="background-image: url('../../../assets/img/b1.png') ; background-size: auto">
    <div class="main">
        <x-guest-layout>
            <x-auth-card>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <center>
                    @auth
                        @if (session('status'))
                            <div style="color: red; font-size: 30px"><i class="bi bi-check"></i> succefully</div>
                        @endif
                        <form action="{{url('Eleves/'.$eleve->id)}}" method="POST">

                            @csrf
                            @method('PUT')
                            <x-label for="code">code</x-label>
                            <input type="text" name="code" value="{{$eleve->code}}"><br>

                            <x-label for="nom">nom et prenom</x-label>
                            <input type="text" name="nom" value="{{$eleve->nom}}"><br>


                            <x-label for="niveau">niveau</x-label>
                            <input type="text" name="niveau" value="{{$eleve->niveau}}"><br>

                            <x-label for="code_fil">code filiere</x-label>
                            <input type="text" name="code_fil" value="{{$eleve->code_fil}}"><br>

                            <x-label for="login">login</x-label>
                            <input type="text" name="login" value="{{$eleve->login}}"><br>

                            <center>
                                <br><button type="submit" style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">Update</button>
                            </center>
                        </form>
                        <center>
                                <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">back</a>
                        </center>
                        </form>
                    @endauth
                </center>
            </x-auth-card>
        </x-guest-layout>

    </div>
</body>
</html>
