{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (Auth::user())
        <h1>{{ Auth::user()->name }}</h1>
        <h1>{{ Auth::user()->role }}</h1>
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <h1>Anda belum login</h1>
        <a href="{{ route('login') }}">Login</a>
    @endif
</body>

</html> --}}


<x-guest-layout>

    <h3>ini home update</h3>
    @if (Auth::user())
        <h1>{{ Auth::user()->name }}</h1>
        <h1>{{ Auth::user()->role }}</h1>
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <h1>Anda belum login</h1>
        <a href="{{ route('login') }}">Login</a>
    @endif
</x-guest-layout>
