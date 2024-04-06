<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('Front/js/auth.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('Front/css/auth.css') }}" rel="stylesheet">
    <script src="{{asset('Front/JS/jquery.min.js') }}"  type="text/javascript"  defer></script>
<script src="{{asset('Front/JS/bootstrap.bundle.min.js')}}" type="text/javascript"  defer></script>
<link href="{{asset('Front/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{asset('Front/css/bootstrap-icons.css') }}" rel="stylesheet">


<link rel="apple-touch-icon" href="{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="/{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="/{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('Front/IMG/IframeLogo.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('Front/IMG/IframeLogo.png')}}">

<link rel="icon" href="{{asset('Front/ICON/IframeLogo.png')}}" type="image/x-icon" />
</head>
<body  style="background-Image:url({{asset('Front/ICON/IframecoverclippingMask.png') }}) ;          background-repeat: no-repeat;
    background-size: cover;
    background-position-x: 50%;
    /*background-blend-mode: luminosity;*/
    zoom: 100%;
    opacity: 0.80;">

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">



            <div  class='col-md-5'>
    <img src="{{asset('Front/IMG/IframeLogo.png')}}" width="152px" height="70px" alt="IframeCMS" title="IframeCMS">
</div>


<div  class='' >
 <i class="bi bi-globe"></i><a class="navbar-brand" href="{{ route('index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>   </div>






                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->


@if($admin == 'true' )


@foreach($company  as  $companies)
<li class="nav-item"> 
   
<img src="http://{{$Domain_site}}/Front/IMG/{{$companies->path_pic}}" width="152px" height="70px" alt="companyLogo" title="companyLogo">

</li>
@endforeach




@else

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Admin.Login') }}">{{ __('Admin Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Admin.register') }}">{{ __('Admin Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::User()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


     


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
