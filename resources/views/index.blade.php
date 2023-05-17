<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartamenty</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!--NAV-->
    <section>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-4 border-bottom">
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center me-md-auto text-dark text-decoration-none">
                    <span class="fs-4">LOGO</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inwestycje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('page')}}">Nowe</a>
                            <a class="dropdown-item" href="{{route('page')}}">Ukończone</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">O nas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kontakt</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </header>
        </div>
    </section>
    <!--END NAV-->
    <!--MAIN-->
    <main>
        <!--ALERTS-->
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
        <!--END ALERTS-->
        <!--SLIDER-->
        <section>
            <div id="slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators d-none d-xl-flex justify-content-end align-items-end">
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--END SLIDER-->
        <!--FORM APART-->
        <section>
            <div class="position-relative" id="card-form-apart-container">
                <div class="card border-primary mb-3 position-absolute top-0 start-50 translate-middle" id="card-form-apart">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <label for="exampleSelect1" class="form-label">Powierzchnia</label>
                                    <select class="form-select" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <label for="exampleSelect2" class="form-label">Liczba pokoi</label>
                                    <select class="form-select" id="exampleSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <label for="exampleSelect3" class="form-label">Piętro</label>
                                    <select class="form-select" id="exampleSelect3">
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body"><button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i>Szukaj aparamentu</button></div>
                    </div>
                </div>
            </div>
        </section>
        <!--END FORM APART-->
        <!--INFO-->
        <section>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-12 col-md-6">
                        <div class="my-4">
                            <h1 class="mb-2">
                                Heading
                                <small class="text-muted">with muted text</small>
                            </h1>
                            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-location-dot"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-heart"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <svg class="img-fluid h-100 w-100" style="min-height: 30em;" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>
                    </div>
                </div>
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">01</p>
                </div>
            </div>
        </section>
        <!--END INFO-->
        <!--INFO RVERSED-->
        <section>
            <div class="container">
                <div class="row my-4 py-4 flex-row-reverse">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-bell-slash"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-people-roof"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-key"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <a href="" class="btn btn-primary mb-4" type="button"><i class="fa-solid fa-flag"></i></a>
                                    <h3>Heading</h3>
                                    <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <svg class="img-fluid h-100 w-100" style="min-height: 30em;" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>
                    </div>
                </div>
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">02</p>
                </div>
            </div>
        </section>
        <!--END INFO RVERSED-->
        <!--ALBUM-->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!--SLIDER-->
                        <div id="slider1" class="carousel slide" data-bs-ride="carousel" style="z-index: -1;">
                            <div class="carousel-indicators d-none d-xl-flex justify-content-start align-items-end">
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img" width="100%" style="min-height: 50em;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777" />
                                    </svg>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slider1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slider1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!--END SLIDER-->
                    </div>
                </div>
            </div>
            <div class="position-relative" id="card-info-container">
                <div class="card text-white bg-primary mb-3 position-absolute top-0 translate-middle" style="left:75%!important" id="card-info">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">03</p>
                </div>
            </div>
        </section>
        <!--END ALBUM-->
        <!--INFO-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="my-4">
                            <h1>Title</h1>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="list-group h-100">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                        </div>
                        <div class="text-end m-0 p-0 pt-1 opacity-50">
                            <p class="text-muted lead">01</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="list-group h-100">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                        </div>
                        <div class="text-end m-0 p-0 pt-1 opacity-50">
                            <p class="text-muted lead">02</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="list-group h-100">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                        </div>
                        <div class="text-end m-0 p-0 pt-1 opacity-50">
                            <p class="text-muted lead">03</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-5">
                        <div class="list-group h-100">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start h-100">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                </div>
                            </a>
                        </div>
                        <div class="text-end m-0 p-0 pt-1 opacity-50">
                            <p class="text-muted lead">04</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END INFO-->
        <!--INFO-->
        <section>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-12">
                        <div class="my-4">
                            <h1>Some title</h1>
                            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END INFO-->
        <!--COUNTER-->
        <section>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-building"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0">2</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Budynki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-layer-group"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0">4</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Piętra</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-house"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0">48</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Mieszkań</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-car"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0">77</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Miejsc parkingowych</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">04</p>
                </div>
            </div>
        </section>
        <!--END COUNTER-->
        <!--FORM CONTACT-->
        <section>
            <div class="position-relative" id="card-form-contact-container">
                <div class="card border-primary mb-3 position-absolute top-100 start-50 translate-middle" id="card-form-contact">
                    <div class="card-header">Kontakt</div>
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-start mb-4 mx-2">
                            <h4 class="card-title mb-4">Masz pytania?</h4>
                            <label class="form-label">Dane</label>
                            <div class="row w-100">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3 w-100">
                                        <input type="text" class="form-control w-100" id="floatingInput">
                                        <label for="floatingInput">Imię</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3 w-100">
                                        <input type="text" class="form-control w-100" id="floatingInput1">
                                        <label for="floatingInput1">Nazwisko</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3 w-100 has-success">
                                <input type="email" class="form-control is-valid" id="floatingInput2">
                                <label for="floatingInput2">Email</label>
                                <div class="valid-feedback">Poprawnie przyjęte dane.</div>
                            </div>
                            <div class="form-floating mb-3 w-100 has-danger">
                                <input type="text" class="form-control is-invalid" id="floatingInput3">
                                <label for="floatingInput3">Tytuł</label>
                                <div class="invalid-feedback">Niepoprawne dane.</div>
                            </div>

                            <div class="form-group mb-3 w-100">
                                <label for="exampleTextarea" class="form-label">Wiadomość</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary mb-3 w-100" type="submit">Wyślij</button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-4 flex-wrap">
                            <p class="card-text m-0 p-0 mx-4 my-2 text-nowrap">+48 123 456 789</p>
                            <p class="card-text m-0 p-0 mx-4 my-2">przykład@przykład.pl</p>
                            <p class="card-text m-0 p-0 mx-4 my-2">Piekary Śląskie Ul.Przykładowa 3</p>
                        </div>
                    </div>
                </div>
        </section>
        <!--END FORM CONTACT-->
    </main>
    <!--END MAIN-->
    <!--FOOTER-->
    <section class="bg-primary py-4">
        <div class="container">
            <footer class="py-3">
                <ul class="nav justify-content-center pb-3 mb-3 fpt">
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link px-2 text-white">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inwestycje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('page')}}">Nowe</a>
                            <a class="dropdown-item" href="{{route('page')}}">Ukończone</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">O nas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <p class="text-center text-white">&copy; 2022 Company, Inc</p>
            </footer>
        </div>
    </section>
    <!--END FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        //ON RESIZE
        $(window).resize(function() {
            //APART
            $('#card-form-apart-container').height($('#card-form-apart').height() / 2)
            $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2)
            //CONTACT
            $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
            $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
            //INFO
            $('#card-info-container').height($('#card-info').height() / 2)
            //SVG
            $('#card-svg-container').height($('#card-svg').height() / 2)
        });
        //ON LOAD
        $(document).ready(function() {
            //APART
            $('#card-form-apart-container').height($('#card-form-apart').height() / 2)
            $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2)
            //CONTACT
            $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
            $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
            //INFO
            $('#card-info-container').height($('#card-info').height() / 2)
            //SVG
            $('#card-svg-container').height($('#card-svg').height() / 2)
        });
    </script>
</body>

</html>