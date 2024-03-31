<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>elphasim - @yield("title")</title>
    <link rel="icon" href="ico.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="dashboard">
        <div class="header">
            <div class="l_side">
                <span class="menu-btn"><ion-icon name="menu"></ion-icon></span>
                <img src="{{asset('imgs/elphasim.png')}}" alt="">
            </div>
            <div class="r_side">
                <h5>welcome <span>{{ Auth::user()->name }}</span></h5>
            </div>
        </div>
        <div class="content">
            <div class="menu">
                <div class="nav_bar">
                    <a class="nav-dash" href="/dashboard" style="background-color:@yield("dashboard")">
                        <span><ion-icon name="home"></ion-icon></span>
                        <h5 class="h5s">dashboard</h5>
                    </a>
                    <a class="nav-prods" href="/produits" style="background-color:@yield("produits")">
                        <span><ion-icon name="server"></ion-icon></span>
                        <h5 class="h5s">produits</h5>
                    </a>
                    <a class="nav-cmds" href="/commands" style="background-color:@yield("commands")">
                        <span><ion-icon name="pricetags"></ion-icon></span>
                        <h5 class="h5s">commands</h5>
                    </a>
                    <a class="nav-admins" href="/admins" style="background-color:@yield("admins")">
                        <span><ion-icon name="settings"></ion-icon></span>
                        <h5 class="h5s">admins</h5>
                    </a>
                </div>
                <div class="footer">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span><ion-icon name="power"></ion-icon></span><h6 class="logout_footer">{{ __('Logout') }}</h6>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="dash">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>