<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>
        @yield('title', 'blog')
    </title>
</head>
<body>
    <ul class="nav">
        <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"> Home</a></li>
        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
        <li><a class="{{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Create post</a></li>
    </ul>
    <div class="main">
    @yield('content')
    </div>
</body>
</html>