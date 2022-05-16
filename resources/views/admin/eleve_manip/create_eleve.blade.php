<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student registration</title>
</head>
<body style="background-image: url('../../../assets/img/b1.png') ; background-size: auto">
<x-guest-layout>
    <x-auth-card>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            @auth
                @if (session('status'))
                    <div>{{session('status')}}</div>
                @endif

                <form action="{{url('Eleves')}}" method="POST">
                    @csrf
                    <div style="text-align: center; color:red">
                        <x-label for="code">code</x-label>
                        <input type="text" name="code"><br>

                        <x-label for="nom">name</x-label>
                        <input type="text" name="nom"><br>

                        <x-label for="prenom">prenom</x-label>
                        <input type="text" name="prenom"><br>

                        <x-label for="niveau">niveau</x-label>
                        <input type="text" name="niveau"><br>

                        <x-label for="code_fil">code filiere</x-label>
                        <input type="text" name="code_fil"><br>

                        <x-label for="login">login</x-label>
                        <input type="text" name="login" value="AAA"><br>

                        <br>
                        <button class="button-24" role="button" type="submit" value="register">register<button>
                    </div>
                </form>
                <center>
                        <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">back</a>
                </center>

            @endauth
    </x-auth-card>
</x-guest-layout>

</body>
</html>
