<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" />
    <title>Chega de Descaso | @yield('title')</title>
  </head>
  <body>
    <header id="header">
      <div class="logo">
        Chega de Descaso | Mapa da Saúde
      </div>
      <div>
        Faça sua denúncia
      </div>
    </header>
    @yield('content')
  </body>
</html>
