<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Oswald,Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<link rel="stylesheet"  href="{{ asset('css/app.css') }}">

<title>Lakhveer Bawa - Full Stack Web Developer</title>
</head>
<body>
<div id="app">

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation" style="margin-bottom: 30px;">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Projects
                </a>

                <a class="navbar-item">
                    Skills
                </a>

                <a class="navbar-item">
                    Contact Me
                </a>

            </div>

        </div>
    </nav>

<div class="container">

    @yield('content')
</div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>