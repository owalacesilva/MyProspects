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

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/admin-styles.css?v=20200820001') }}" rel="stylesheet">
      <style>.whatsapp-button{position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;z-index:100}.whatsapp-button:hover{color:#fff}.whatsapp-button .fa{margin-top:15px}</style>

      <!-- Scripts -->
      <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/admin-scripts.js?v=20200820001') }}"></script>
      <script src="https://use.fontawesome.com/53b1854a8e.js"></script>
  </head>
<body>
    <div id="app">
        <!-- Authentication Links -->
        @guest
            <!-- Nothing -->
        @else
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ request()->route()->getName() === 'user_home' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user_home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item {{ request()->route()->getName() === 'user_contacts' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('user_contacts') }}">My Contacts</a>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->display_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @endguest
        <main class="py-5">
            @yield('content')
            <!-- Authentication Links -->
            @guest
                <a href="https://api.whatsapp.com/send?phone=595975371025&text=Olá,+preciso+de+ajuda" target="_blank" class="whatsapp-button">
                    <i class="fa fa-whatsapp"></i>
                </a>
            @else
                <a href="https://api.whatsapp.com/send?phone=595975371025&text=Olá+{{ Auth::user()->display_name }},+preciso+de+ajuda" target="_blank" class="whatsapp-button">
                    <i class="fa fa-whatsapp"></i>
                </a>
            @endguest
        </main>
    </div>
</body>
</html>
