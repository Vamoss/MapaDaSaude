<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" />
    <title>Chega de Descaso | @yield('title')</title>
  </head>
  <body>
    <header id="header">
      <a href="{{ url('/home') }}" class="logo">
        <svg x="0px" y="0px" viewBox="0 0 85 40">
          <path fill="#0087CA" d="M36.6,13.4H25.8V2.6c0-1.4-1.2-2.6-2.6-2.6H16c-1.4,0-2.6,1.2-2.6,2.6v10.8H2.6C1.2,13.4,0,14.6,0,16v7.1c0,1.4,1.2,2.6,2.6,2.6h10.8v10.8c0,1.4,1.2,2.6,2.6,2.6h7.1c1.4,0,2.6-1.2,2.6-2.6V25.8h10.8c1.4,0,2.6-1.2,2.6-2.6V16C39.2,14.6,38,13.4,36.6,13.4z"/>
          <path fill="#EF4648" d="M83.7,28.2l-8.6-8.6l8.6-8.6c1-1,1-2.7,0-3.7l-4.1-4.1c-1-1-2.7-1-3.7,0l-8.6,8.6l-8.6-8.6c-1-1-2.7-1-3.7,0l-4.1,4.1c-1,1-1,2.7,0,3.7l8.6,8.6l-8.6,8.6c-1,1-1,2.7,0,3.7L55,36c1,1,2.7,1,3.7,0l8.6-8.6l8.6,8.6c1,1,2.7,1,3.7,0l4.1-4.1C84.7,30.8,84.7,29.2,83.7,28.2z"/>
        </svg>
        <span>Chega de Descaso</span>
      </a>
    </header>
    @yield('content')
  </body>
</html>
