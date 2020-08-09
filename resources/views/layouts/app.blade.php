<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  @livewireStyles

 <!-- Scripts -->
 @livewireScripts
   <script src="{{ asset('js/app.js') }}" ></script>
   <script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="storage/sitepic/logo.png" alt="no img"  class="border border-info img-responsive rounded-circle" width="50" height="50">
                    I Care You
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-bars text-white fa-2x"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                                <a class="nav-link line" href="/about">About</a>
                            </li>



                             <li class="nav-item">
                                <a class="nav-link line" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> 
                             @if (Route::has('register'))
                                <li class="nav-item line">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item">
                                <a class="nav-link line" href="/home">Dashbord</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link line" href="/about">About</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="line">{{ Auth::user()->name }}</span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            <img src=" storage/{{Auth::user()->profile}}" alt="" height="40" width="40" 
                              class="img-responsive rounded-circle ">
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<div class="socailcover">
    <livewire:social-links/>
</div>

  
    <div class="heart">
    <livewire:heart/>
   </div>


   
   <hr>
        <div class="d-flex justify-content-around w-100  p-1 align-items-center ">
            
            <a href="/about"><small class="pt-2 ">All 	&#169;  2020 Reserved to I Care Oraganization</small>
      </a>
          <small>Developed By <a href="https://www.facebook.com/razesh.chand.1" target="_blank">Rajesh chand</a></small>
        
        </div>
   
        <br><br>

</body>
</html>
<script>
$('.dropdown-toggle').dropdown();
</script>