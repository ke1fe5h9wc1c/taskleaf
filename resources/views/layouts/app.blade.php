<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
  <nav class="navbar navbar-light" style="background-color:#e3f2fd;">
    <div class="mr-auto">
      <a class="navbar-brand" href="/">Taskleaf</a>
    </div>
    <a class="navbar-brand" href="/">タスク一覧</a>
    <a class="navbar-brand text-danger" href="/logout">ログアウト</a>
  </nav>
  <br>


  <div class="container">
    {{-- バリデーションエラー --}}
    @if(count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    {{-- フラッシュメッセージ --}}
    @if (session('flash_message'))
      <div class="alert alert-success text-center" role="alert">
          {{ session('flash_message') }}
      </div>
    @endif

    @yield('script')
    @yield('content')
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
