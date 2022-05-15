<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>projectplsql</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=6e0c1425437cc83bc19e4f65349ea72d">
</head>
<body>
    <div class="text-center" style="margin-top: 60px;">
        <img
            src="/assets/img/monLogo.png?h=72d8733f107fd1fc0ee29766f4f7e9d6">
    </div>
    <div class="text-center" style="margin-top: 41px;height: 100.2px;"><p
            style="font-family: 'Archivo Black', sans-serif;color: var(--bs-gray-dark);font-size: 26px;">Student
            Management</p>
    </div>
    <div class="text-center" style="margin-top: 46px;">
        <p
            style="color: var(--bs-white);font-weight: bold;margin-top: -75px;">This web site is developped by tree student
            in order to manage the results of students .</p>
    </div>
    <div class="text-center" style="margin-top: 33px;">
        @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-primary" type="button"
                    style="border-radius: 27px;background:#ffa726;font-weight: bold;margin-top: 97px;">Dashboard
            </a>
            @else
                <a href="{{ route('login') }}" class="bt btn btn-primary" type="button"
                   style="border-radius: 27px;background:midnightblue;font-weight: bold;margin-top: 97px;">Log in
                </a>
            @endauth
        @endif
    </div>
    <div class="text-center" style="margin-top: 38px;">
        <a href="https://github.com/Ashraf-Khabar/Platform-of-management-of-students/branches" style="color: #253594">
            <i class="fa fa-github" style="font-size: 47px;">
            </i>
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
