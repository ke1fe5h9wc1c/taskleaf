<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  {{-- navbar --}}
  <nav class="navbar navbar-light mb-2" style="background-color:#e3f2fd;">
    <a href="#" class="navbar-brand">Taskleaf</a>
  </nav>

  <div class="container">
    {{-- フラッシュメッセージ --}}
    @if (session('flash_message'))
      <div class="flash_message bg-success text-center py-3 my-0">
        {{ session('flash_message') }}
      </div>
    @endif
    @yield('content')
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
