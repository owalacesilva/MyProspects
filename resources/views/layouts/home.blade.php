<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

      <!-- Title -->
      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
      <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

      <!-- SEO Metatags -->
      <meta name="robots" content="all,follow">
      <meta name="googlebot" content="index,follow,snippet,archive">
      <meta name="title" content="Fique Rico com Saúde - Loja">
      <meta name="description" content="Fique Rico com Saúde - Marketing de Relacionamento">
      <meta name="author" content="Douglas Souza">
      <meta name="keywords" content="MMN, Marketing, Relacionamento, Multinivel">
      <meta rel="icon" type="image/png" href="{{ asset('img/logo-square.png') }}">
      <meta property="og:title" content="Fique Rico com Saúde - Loja">
      <meta property="og:description" content="Fique Rico com Saúde - Marketing de Relacionamento">
      <meta property="og:image" content="{{ asset('img/logo-square.png') }}">
      <meta property="og:site_name" content="fiquericocomsaude">
      <meta property="og:locale" content="pt_BR">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://fiquericocomsaude.com.br">
  </head>
  <body>  
    @yield('content')
  </body>
</html>
