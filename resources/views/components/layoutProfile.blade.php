@props(['bg'=>""])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <title>Ilungi @yield('title')</title>
</head>
<body class="{{$bg}}">

    <header>
        <nav  {{$attributes->merge(['class'=>'bg-primary navbar navbar-dark navbar-expand-md pt-sm-4 py-4'])}} id="navigation">

            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/ilungi.png')}}" alt="ilungi" class="d-block" style="width: 6rem">
                </a>

                <div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name}}
                                    </a>
                                    <ul class="dropdown-menu">
                                       @if (Auth::user()->role == "admin")
                                        <li><a class="dropdown-item" style="font-weight: 600" href="/dashboard">dasboard</a></li>
                                       @endif
                                        <li><a class="dropdown-item" style="font-weight: 600" href="/profile">profile</a></li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button class="dropdown-item" style="font-weight: 600" type="submit">Logout</button>
                                        </form>
                                    </ul>
                                </li>
                            @endauth

                        </ul>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>

        </nav>

    </header>
    <main>{{ $slot }}</main>

</body>
</html>
