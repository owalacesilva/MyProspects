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
      <script src="{{ asset('js/scripts.js') }}" defer></script>
      <script src="https://use.fontawesome.com/53b1854a8e.js"></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <style>.whatsapp-button{position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;z-index:100}.whatsapp-button:hover{color:#fff}.whatsapp-button .fa{margin-top:15px}</style>

      <!-- SEO Metatags -->
      <meta name="robots" content="all,follow">
      <meta name="googlebot" content="index,follow,snippet,archive">
      <meta name="title" content="Fique Rico com Saúde - Loja">
      <meta name="description" content="Fique Rico com Saúde - Marketing de Relacionamento">
      <meta name="author" content="Douglas Souza">
      <meta name="keywords" content="MMN, Marketing, Relacionamento, Multinivel">
      <meta rel="icon" type="image/png" href="{{ asset('img/image2.png') }}">
      <meta property="og:title" content="Fique Rico com Saúde - Loja">
      <meta property="og:description" content="Fique Rico com Saúde - Marketing de Relacionamento">
      <meta property="og:image" content="{{ asset('img/image2.png') }}">
      <meta property="og:site_name" content="fiquericocomsaude">
      <meta property="og:locale" content="pt_BR">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://fiquericocomsaude.com.br">
  </head>
  <body>  
    @yield('content')

    <a href="#div-form" class="whatsapp-button">
      <i class="fa fa-whatsapp"></i>
    </a>
  </body>
</html>
