<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'E-store') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body>
  <div id="app">

@include('layouts.nav')

@if($errors->any())
  @foreach($errors->all() as $error)
    {{$error}}
  @endforeach
@endif

  <main class="py-4">

    @yield('content')
  </main>
</div>
</body>
</html>
