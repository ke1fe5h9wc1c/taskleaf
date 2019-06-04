<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- jqueryの読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<html>
  <head>
    <title>アプリ名 - @yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-light mb-2" style="background-color:#e3f2fd;">
      <a href="#" class="navbar-brand">Taskleaf</a>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
