<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartamenty</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/main.css')}}">
</head>

<body>
    <!--NAV-->
    <section>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-4">
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center me-md-auto text-dark text-decoration-none">
                    <img alt="logo" src="{{asset('asset/photo/logo.png')}}" class="img-fluid bg-transparent" style="max-width: 10em;">
                </a>
                <ul class="nav nav-pills d-flex flex-row justify-content-center align-items-center flex-wrap">
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{route('index')}}" class="nav-link active" aria-current="page"><i class="fa-solid fa-house me-2"></i>Strona główna</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Inwestycje
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><h6 class="dropdown-header">W trakcie realizacji</h6></li>
                            <li><a class="dropdown-item" href="{{route('invest')}}">DGG</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><h6 class="dropdown-header">Ukończone</h6></li>
                            <li><a class="dropdown-item" href="{{route('invest.wodna')}}">Wodna</a></li>
                            <li><a class="dropdown-item" href="{{route('invest.kopernika')}}">Kopernika</a></li>
                            <li><a class="dropdown-item" href="{{route('invest.dlugosza')}}">Długosza</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{route('about')}}" class="nav-link">O nas</a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{route('contact')}}" class="nav-link">Kontakt</a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="#" class="nav-link"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
    </section>
    <!--END NAV-->
    <!--MAIN-->
    <main>
        <!--ALERTS
        <section>
            <div class="container">
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Sukces!</strong> Pomyślnie zalogowano <a href="#" class="alert-link">zobacz konto</a>.
                </div>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Error!</strong> Coś poszło nie tak <a href="#" class="alert-link">zobacz</a>.
                </div>
            </div>
        </section>
        -->
        @yield('content')
    </main>
    <!--END MAIN-->
    <!--FOOTER-->
    <section class="bg-primary py-4">
        <div class="container">
            <footer class="py-3">
                <ul class="nav justify-content-center pb-3 mb-3 fpt">
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link px-2 text-white">Strona główna</a></li>
                    <li class="nav-item"><a href="{{route('invest')}}" class="nav-link px-2 text-white">Inwestycja</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link px-2 text-white">O nas</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link px-2 text-white">Kontakt</a></li>
                    <li class="nav-item"><a href="https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/" class="nav-link px-2 text-white"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <p class="text-center text-white">&copy; 2023 Nowe Inspiracje, desinged by Karol Wiśniewski</p>
            </footer>
        </div>
    </section>
    <!--END FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{asset('asset/js/bootstrap.js')}}"></script>
</body>

</html>