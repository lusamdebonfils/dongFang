<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    {{-- top bar  --}}
    <div class="topnav container">
        <nav class="navbar navbar-expand-md navbar-light sticky-top">

            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" alt="Lebridge consults">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            </ul> -->

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    
                <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Properties</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    @if (Auth::guest())
                        <li class="nav-item"><a type="btn" href="/admin/login" class="nav-link"> <i class="fa fa-user"></i>Login</a></li>
                        <!-- <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li> -->
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>

        </nav>
    </div>

    @yield('content')

</div>
<div class="feature-wrapper pt-5 pb-5 mt-5 mt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-gamepad fa-2x"></i>
            </div>
            <div class="col-sm-12 col-md-3 text-center text-md-left mb-3 mb-md-0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat laborum odit!</p>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-sitemap fa-2x"></i>
            </div>
            <div class="col-sm-12 col-md-3 text-center text-md-left mb-3 mb-md-0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat laborum odit!</p>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-line-chart fa-2x"></i>
            </div>
            <div class="col-sm-12 col-md-3 text-center text-md-left mb-3 mb-md-0">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat laborum odit!</p>
            </div>
           
        </div>
    </div>
</div>
<div id="join-container" class="pt-lg-6 pb-lg-6 pt-5">
    <div class="container text-center">
        <h2 class="text-uppercase">Give us your email</h2>
        <h4 class="text-uppercase">We will give you Awesome Stuff like Emails, Invites and Discounts</h4>

        <form>
            <div class="form-group row pt-lg-5 pb-lg-5 pt-5">
                <div class="col-sm-12 col-md-5">    
                        <input type="email" class="form-control mb-4" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="col-sm-12 col-md-5">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase bg-primary">Send</button>
                </div>
            </div>    
       </form>
    </div>
</div>
<div class="footer text-center">
    <div class="container">
        <h2>Contact information</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Iusto eius quod ad aperiam fugit veniam! Inventore officia velit repellat dolores?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, culpa neque id commodi eum minus excepturi eius quia vel doloribus itaque delectus sint laboriosam ab, nulla quaerat, nemo iure dolore.</p>
    </div>
    

</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
