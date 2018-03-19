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
        <nav class="navbar navbar-expand-md navbar-light">

            <a class="navbar-brand" href="#">
                <img src="/images/logo2.png" alt="Lebridge consults">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            </ul> -->

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    
                <ul class="navbar-nav font-weight-600 text-black">
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Properties</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    @if (Auth::guest())
                        <li class="nav-item edit"><a type="btn" href="/admin/login" class="nav-link btn btn-dark text-white"> <i class="fa fa-user" aria-hidden="true"></i><span>&nbsp;&nbsp;Login</span></a></li>
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
                <i class="fa fa-pencil fa-3x"></i>
            </div>
            <div class="col-sm-12 col-md-5 text-center text-md-left mb-3 mb-md-0">
                <h4>Property Management</h4>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-briefcase fa-3x"></i>
            </div>
            <div class="col-sm-12 col-md-5 text-center text-md-left mb-3 mb-md-0 now">
            <h4>Real Estate Financing</h4>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-gamepad fa-3x"></i>
            </div>
            <div class="col-sm-12 col-md-5 text-center text-md-left mb-3 mb-md-0">
            <h4>Land documentation</h4>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                <i class="fa fa-line-chart fa-3x"></i>
            </div>
            <div class="col-sm-12 col-md-5 text-center text-md-left mb-3 mb-md-0">
            <h4>Housing Construction</h4>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>           
        </div>
    </div>
</div>
<div class="call-to-action">
    <div class="container">
                <div class="row">
                    <div class="call1 col-sm-12 col-md-6">
                        Summer holiday sale!
                        <h3>Let's try again 40% discount!</h3>
                    </div>
                    <div class="call2 col-sm-12 col-md-6">
                        <a class="btn btn-lg bg-white text-fast-blue btn-circle" href="#"><span class="tz-text">PURCHASE NOW</span><i class="fa fa-shopping-basket icon-extra-small"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-lg btn-outline-light bg-primary highlight-button-white-border btn-circle text-white" href="#"><span class="tz-text">READ MORE</span>&nbsp;&nbsp;<i class="fa fa-angle-right icon-extra-small"></i></a>
                    </div>
                </div>
            </div>    
        </div>
        <div class="hop text-center">
            <div class="container">
                <h2>RECENT PROPERTIES</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iusto eius quod ad aperiam fugit veniam! Inventore officia velit repellat dolores?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, culpa neque id commodi eum minus excepturi eius quia vel doloribus itaque delectus sint laboriosam ab, nulla quaerat, nemo iure dolore.</p>
            </div>
        </div>
        <div class="card-deck">
            <div class="container">
                <div class="row">
                    <div class="card  col-sm-12 col-md-4">
                        <img class="card-img-top img-fluid" src="img/node.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">NodeJS</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card  col-sm-12 col-md-4">
                        <img class="card-img-top img-fluid" src="img/mongo.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Mongo DB</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card  col-sm-12 col-md-4">
                        <img class="card-img-top img-fluid" src="img/react.png" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">ReactJS</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
               
                </div>
                <div class="card-button text-center">
                    <!-- <span class="button button-outline-dark">Read More</span> -->
                    <span class="btn btn-outline-dark">READ MORE</span>
                </div>
            </div>
        </div>
<!-- <div id="join-container" class="pt-lg-6 pb-lg-6 pt-5">
    <div class="container text-center">
        <h2 class="text-uppercase">Give us your email</h2>
        <h4 class="text-uppercase">We will give you Awesome Stuff like Emails, Invites and Discounts</h4>

        <form>
            <div class="form-group row pt-lg-5 pb-lg-5 pt-5">
                <div class="col-sm-12 col-md-8">    
                        <input type="email" class="form-control mb-4" id="exampleInput" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="col-sm-12 col-md-3">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase bg-primary">Send</button>
                </div>
            </div>    
       </form>
    </div>
</div> -->

<footer id="footer-section" class="foot">
    <div class="container">
        <div class="row col-md-12 col-sm-6">
            <div class="col-md-6 col-sm-6 text-center copyright">
                <span class="text-small">© 2018 Lebridge All Rights Reserved.</span>
            </div>
            <div class="col-md-6 col-sm-6 text-right text-center">
                <div class="social icon-extra-small no-margin">
                    <a href="#" class="margin-eight-right">
                        <i class="fa fa-facebook tz-icon-color"></i>
                    </a>
                    <a href="#" class="margin-eight-right">
                        <i class="fa fa-twitter tz-icon-color"></i>
                    </a>
                    <a href="#" class="margin-eight-right">
                        <i class="fa fa-google-plus tz-icon-color"></i>
                    </a>
                    
                </div>
            </div>
            
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
