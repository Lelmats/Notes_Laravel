<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item {{url()->current() == route('list') ? 'active' : ''}}">
                        <a href="{{url('/')}}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>My notes</span>
                        </a>
                    </li>
                    <li class="main-nav-item {{url()->current() == route('adding') ? 'active' : ''}}">
                        <a href="{{url('add')}}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>New note</span>
                        </a>
                    </li>
                    <li class="main-nav-item {{url()->current() == route('edition') ? 'active' : ''}}">
                        <a href="{{url('edit')}}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Edit note</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        
        @yield("content")

        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el curso BASE DE DATOS II
                    <a href="#">ING EN PRODUCCIÓN MULTIMEDIA</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2022 Derechos Reservados - ULSA NOROESTE</p>
            </div>
        </footer>
    </div>
</body>
</html>