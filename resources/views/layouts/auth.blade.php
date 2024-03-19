
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('css/loader-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/loader-dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/main-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/main-dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/structure-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/structure-dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/auth-cover-light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/auth-cover-dark.css') }}" rel="stylesheet" type="text/css" />
    <title>Admin - Muhammad Randi Nur Priyatna's Portfolio</title>
</head>
<body class="form">
    <div id="load_screen"> 
        <div class="loader"> 
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/loader.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>