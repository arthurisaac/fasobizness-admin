<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Faso Biz Nèss</title>

    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link  href="{{ asset('css/fotorama.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/fotorama.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
</head>

<body>
{{--<nav class="ui top fixed inverted menu">
    <div class="left menu">
        <a href="#" class="sidebar-menu-toggler item" data-target="#sidebar">
            <i class="sidebar icon"></i>
        </a>
        <a href="#" class="header item">
            Faso Biz Nèss
        </a>
    </div>

    <div class="right menu">
        <a href="#" class="item">
            <i class="bell icon"></i>
        </a>
        <div class="ui dropdown item">
            <i class="user cirlce icon"></i>
            <div class="menu">
                <a href="#" class="item">
                    <i class="info circle icon"></i> Profile</a>
                <a href="#" class="item">
                    <i class="wrench icon"></i>
                    Settings</a>
                <a href="#" class="item">
                    <i class="sign-out icon"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>--}}
<br>
@yield('main')


<script src="{{ asset('js/semantic.min.js') }}"></script>
<script src="{{ asset('js/fasobizness.js') }}"></script>


</body>
</html>
