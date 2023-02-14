<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet">

        <title>Coffee Shop</title>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-md mb-5">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo ms-3" src="{{asset('images/logo1.png')}}" alt=""><span class="title me-5">ouuuffeeee</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item ms-5 me-3">
                            <a class="nav-link me-auto text-dark fw-semibold" aria-current="page" href="{{route('menu.index')}}">Menu</a>
                        </li>   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link aut fs-6 text-dark fw-semibold text-decoration-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link aut fs-6 text-dark fw-semibold me-3 text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link aut fs-6 text-dark fw-semibold me-3 text-decoration-none" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('profile')}}">
                                        Edit Profile
                                    </a>
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
                    </ul>
                </div>
            </div>
        </nav>
        
    <section class="">
       
        <div class="introduction mx-auto mt-5 d-flex justify-content-center text-white flex-column">
            <p class="titre pt-3">ENJOY YOUR</p>
            <p class="titre">MORNING COFFEE .</p>
            <p class="text">Boost your productivity and build your Mood</p>
            <p class="text">with a glass of Coffee in the Morning</p>
        </div>
        <div class="menu text-center mt-5 py-5">
            <p class="menu-title">Welcome to The Best Coffee in Morocco!</p>
            <p class="citation">Great Coffee Served Everyday</p>
            <p class="citation">A gathering place in Downtown Farmville! Stop by and enjoy coffee, tea, live music,</p>
            <p class="citation">ice cream and much more!</p>
        </div>
        {{-- <div>
            <p class="fs-3 fw-bold text-center">Our Menu</p>  
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%;background-color: #efefef;">
            @foreach ($dishes as $dish)
            <div class="col">
                <div class="card rounded-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                <img src="{{$dish->image_path}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$dish->name}}</h5>
                    <p class="">{{$dish->Category}}</p>
                    <p class="card-text text-truncate">{{$dish->description}}</p>
                    <button class="btn border-0 text-white px-4 my-3" style="background-color: #567189;box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">{{$dish->price}} Euro</button>             
                </div>
                </div>
            </div>
            @endforeach
        </div> --}}

        <div class="fiche mx-auto mt-5 d-flex align-items-center justify-content-evenly">
            <div style="width: 250px;">
            </div>
            <div class="d-flex flex-column">
                <p class="fiche-title text-center">TAKE YOUR</p>
                <p class="fiche-title text-center">COFFEE NOW .</p>
            </div>
            <div class="d-flex flex-column">
                <p class="fiche-text text-center">Don't let your coffee Cold.</p>
                <p class="fiche-text text-center">Let's go to <span>Couuuffeeee</span> and</p>
                <p class="fiche-text text-center">get your Coffee and</p>
                <p class="fiche-text text-center">boost your day now !</p>
            </div>
        </div>
        
    </section>
    <footer style="background-color:#393E46;">
        <div class="container mt-5 py-5">
            <div class="d-flex flex-nowrap justify-content-center">
                <a href="#" style="color: white;"><i id="bx1" class='bx bxl-facebook fs-1 mx-2'></i></a>
                <a href="#" style="color: white;"><i id="bx2" class='bx bxl-twitter fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx3" class='bx bxl-instagram fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx4" class='bx bxl-youtube fs-1 mx-2' ></i></a>
                <a href="#" style="color: white;"><i id="bx5" class='bx bxl-whatsapp fs-1 mx-2' ></i></a>
            </div>
            <div class="d-flex justify-content-around mt-5">
                <div class="d-flex flex-column text-white me-4">
                    <p><img class="logo" src="{{asset('images/logo1.png')}}" alt=""><span class="title me-5">ouuuffeeee</span></p>
                    <p class="ms-2">Couuuffeeee is a place that serve</p>
                    <p class="ms-2">many variant of coffee and other dashes</p>
                    <p class="ms-2 mb-5">with very confortable place.</p>
                </div>
                <div class="d-flex flex-column text-white mt-5">
                    <p class=""><i class='bx bx-map fs-4 mx-1'></i>Boulevard moulay youssef,</p>
                    <p class="ms-4"> Youssoufia, Maroc</p>
                </div>
            </div>
            <hr class="pb-5 text-white text-center">
            <div class="text-center py-2">
                <p class="text-white">© 2023 Couuuffeeee-Tous les droits sont réservés</p>
            </div>
            
            
        </div>
    </footer>
    </body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
