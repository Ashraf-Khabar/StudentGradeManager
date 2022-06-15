<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=820568f5bc17b2eadf42d912a6587674">
    <title>filiere registration</title>
</head>
<body>
<x-guest-layout>
    <x-auth-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div style="text-align: center;">
            @auth
                @if (session('status'))
                    <div style="color: red; font-size: 30px"><i class="bi bi-check"></i> succefully</div>
                @endif
                <form action="{{url('Filieres')}}" method="POST">

                    @csrf
                    @method('PUT')
                    <x-label for="code">code</x-label>
                    <input type="text" name="code"><br>

                    <x-label for="designation">name</x-label>
                    <input type="text" name="designation"><br>

                    <x-label for="responsable">responsable</x-label>
                    <input type="text" name="responsable"><br>
                    <center>
                        <br><button type="submit" style="text-decoration: none" class="button-24" role="button" href="{{url('Filiere')}}">Create</button>
                    </center>
                </form>
                <center>
                    <br><a style="text-decoration: none" class="button-24" role="button" href="{{url('Eleves')}}">back</a>
                </center>
                </form>
            @endauth
        </div>
    </x-auth-card>
</x-guest-layout>


</body>
</html>
