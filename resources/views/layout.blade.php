<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
<header>
        <a href="{{ route('home')}}">home</a>
        <a href="{{ route('about')}}">about</a>
        <a href="{{ route('contact')}}">contact</a>
    </header>

    @yield('content')

    <footer>
    @yield('footer')
    </footer>
</body>
</html>