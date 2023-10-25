<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body class="antialiased">
  <header>
    <nav>
      <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
      </div>
    </nav>
  </header>
  <main>
    <h1>Hello laravel</h1>
    <h2>{{$message}}</h2>
  </main>
</body>

</html>