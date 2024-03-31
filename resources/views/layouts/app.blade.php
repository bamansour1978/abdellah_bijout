<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>motawakil - @yield("title")</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-black shadow-sm py-2">
            <div class="container">
                <a class="navbar-brand text-warning" href="{{ url('/') }}">
                    MOTAWAKIL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link text-warning" style="font-size : 16px ; font-weight : 400" href="/home">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" style="font-size : 16px ; font-weight : 400" href="/products">{{ __('products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" style="font-size : 16px ; font-weight : 400" href="/contact">{{ __('Contact') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link text-warning" href="/search" style="display:flex;align-items:center"><ion-icon name="search" style="font-size : 20px"></ion-icon></a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-warning" href="{{ route('login') }}" style="display:flex;align-items:center"><ion-icon name="person" style="font-size : 20px"></ion-icon></a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-black">
            @yield('content')
        </main>

        <footer class="text-center text-lg-start bg-black text-muted">
            <section class="d-flex justify-content-center align-items-center px-4 py-2 border-bottom">
                <div class="me-5 d-none text-warning d-lg-block">
                    <span>Don't Forget To Check Our Social Media :  </span>
                </div>
                <div>
                    <a href="https://www.facebook.com/" class="me-5 text-reset fs-3" style="text-decoration: none;">
                        <ion-icon class="text-warning" name="logo-facebook"></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/" class="me-5 text-reset fs-3" style="text-decoration: none;">
                        <ion-icon class="text-warning" name="logo-instagram"></ion-icon>
                    </a>
                    <a href="https://www.tiktok.com/en/" class="me-5 text-reset fs-3" style="text-decoration: none;">
                        <ion-icon class="text-warning" name="logo-tiktok"></ion-icon>
                    </a>
                </div>
            </section>
            <section class="">
                <div class="container text-center text-warning text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
                            <h6 class="text-uppercase fw-bold mb-4">Motawakil Store</h6>
                            <p>The Almutawakkil Gold Online Store stands out for offering a wide range of exquisite gold products characterized by unique designs and excellent quality. Additionally, products can be easily browsed and chosen to suit your tastes.</p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                            <h6 class="text-uppercase fw-bold mb-4">Store</h6>
                                <p class="mb-2"><a href="/home" class="text-reset" style="text-decoration: none;">Home</a></p>
                                <p class="mb-2"><a href="/products" class="text-reset" style="text-decoration: none;">products</a></p>
                                <p class="mb-2"><a href="/contact" class="text-reset" style="text-decoration: none;">Contact</a></p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                            <h6 class="text-uppercase fw-bold mb-4">Policy</h6>
                                <p class="mb-2"><a href="/politique" class="text-reset" style="text-decoration: none;">Terms & Conditions</a></p>
                                <p class="mb-2"><a href="/livraison" class="text-reset" style="text-decoration: none;">Delivery</a></p>
                                <p class="mb-2"><a href="/about" class="text-reset" style="text-decoration: none;">About Us</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-2 text-white" style="background-color: rgba(0, 0, 0, 0.929);">
                © 2024 Copyright : <a class="text-reset fw-bold" href="">Motawakil</a> | <a class="text-reset fw-bold" href="">Ffollo Digital</a>
            </div>
        </footer>
    </div>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>