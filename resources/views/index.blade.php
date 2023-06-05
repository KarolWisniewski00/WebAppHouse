<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartamenty</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .accordion {
            --bs-accordion-active-bg: transparent !important;
        }

        .segment {
            transition: background-color 0.3s ease;
        }

        #segment-A1 {
            top: 29%;
            left: 8%;
            width: 21%;
            height: 37%;
        }

        #segment-A2 {
            top: 29%;
            left: 29%;
            width: 21%;
            height: 37%;
        }

        #segment-B1 {
            top: 29%;
            left: 50%;
            width: 18%;
            height: 37%;
        }

        #segment-B2 {
            top: 29%;
            left: 68%;
            width: 19%;
            height: 37%;
        }

        .segment:hover {
            background-color: rgba(255, 255, 0, 0.8);
        }

        .p-1px {
            padding: 1px;
        }
    </style>
</head>

<body>
    <!--NAV-->
    <section>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-4 border-bottom">
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center me-md-auto text-dark text-decoration-none">
                    <img alt="logo" src="{{asset('asset/photo/logo.png')}}" class="img-fluid bg-transparent" style="max-width: 10em;">
                </a>
                <ul class="nav nav-pills d-flex flex-row justify-content-center align-items-center flex-wrap">
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="#" class="nav-link active" aria-current="page"><i class="fa-solid fa-house me-2"></i>Strona główna</a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{route('page')}}" class="nav-link">Inwestycja</a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="#" class="nav-link">O nas</a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="#" class="nav-link">Kontakt</a>
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
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators d-none d-xl-flex justify-content-end align-items-end">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-1.jpeg')}});    background-position: center;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1 class="text-white">Fenomenalna lokalizacja</h1>
                                <p>ul.Żurawia 4/2, 42-583 Bobrowniki</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Zobacz na mapie</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-2.jpeg')}});    background-repeat: no-repeat;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                        </div>

                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1 class="text-white">Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-3.jpeg')}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                        </div>

                        <div class="container">
                            <div class="carousel-caption text-end fpb">
                                <h1 class="text-white">One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
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
                    <div class="col-12 col-xl-5">
                        <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                                    <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-house p-2"></i></a>
                                    <h3>Zankomita lokalizacja</h3>
                                    <p class="lead">Szybki i łatwy dojazd do Katowic, Chorzowa, Tarnowskich Gór, Piekar Śląskich, Siemianowic Śląskich i innych miast ościennych.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                                    <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-brands fa-pagelines p-2"></i></a>
                                    <h3>Ogród lub balkon</h3>
                                    <p class="lead">Lokale na parterze mają indywidualne ogródki, mieszkania na piętrze posiadają balkon i dodatkowo poddasze z oknem dachowym.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                                    <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-building p-2"></i></a>
                                    <h3>Funkcjonalny układ</h3>
                                    <p class="lead">Osiedle 2 budynków mieszkalnych jednorodzinnych dwulokalowych, mieszkania na parterze o powierzchni 55,12 m² i na piętrze o powierzchni 45,96m² dodatkowo duży strych o powierzchni 15 m².</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="d-flex flex-column justify-content-center align-items-center h-100" style="min-height: 30em; background-image: url({{asset('asset/photo/info-1.jpg')}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                        </div>
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
                    <div class="col-12 col-xl-5">
                        <div class="row text-center">
                            <div class="my-4">
                                <h1 class="mb-2">
                                    Zacisze
                                    <small class="text-muted">Bobrowniki</small>
                                </h1>
                                <p class="lead">Zacisze Bobrowniki zlokalizowane jest w Bobrownikach, na granicy z Rogożnikiem te obydwie miejscowości wyróżniają się terenami zielonymi, placami zabaw, zalewem kąpielowym, skateparkiem, trasami rowerowymi oraz pieszymi. Blisko do Parku w Świerklańcu który też posiada swój akwen. Spokój cisza brak hałasu samochodów. Zacisze Bobrowniki wyróżniaja się szybkim przemieszczeniem do innych miejscowości, takich jak Tarnowskie Góry, Chorzów, Siemianowice, Piekary Ślaskie, Wymysłów, Katowice.</p>
                                <p class="lead">Droga do dużych miast Chorzów ok 15 min, Katowice ok 20 min, Siemianowice ok 15 min.</p>
                                <p class="lead">Ta doskonała lokalizacja jest dla osób które pracują lub uczą się w większych miastach ościennych.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                            <img alt="info-2" src="{{asset('asset/photo/info-2.jpg')}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row text-center">
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100 boredr-0" id="accordion-1">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-1">
                                                <a href="" class="btn btn-primary mb-3 fs-2" type="button"><i class="fa-solid fa-tree p-2"></i></a>
                                                <button class="accordion-button border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-1-collapseOne" aria-expanded="true" aria-controls="panel-1-collapseOne">
                                                    Tereny rekreacyjne
                                                </button>
                                            </h2>
                                            <div id="panel-1-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-1">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <div class="d-flex flex-column justify-content-center align-items-center w-100">
                                                            <h5 class="mb-1 fs-3">Park Rogoźnik</h5>
                                                            <h5 class="mb-1">2 min</h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <div class="d-flex flex-column justify-content-center align-items-center w-100">
                                                            <h5 class="mb-1 fs-3">Jeziora Rogoźnik I i II</h5>
                                                            <h5 class="mb-1">4 min</h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <div class="d-flex flex-column justify-content-center align-items-center w-100">
                                                            <h5 class="mb-1 fs-3">Park Świerklaniec</h5>
                                                            <h5 class="mb-1">10 min</h5>
                                                        </div>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100" id="accordion-2">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-2">
                                                <a href="" class="btn btn-primary mb-4 fs-2 border-0" type="button"><i class="fa-solid fa-city p-2"></i></a>
                                                <button class="accordion-button w-100 border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-2-collapseOne" aria-expanded="true" aria-controls="panel-2-collapseOne">
                                                    Duże miasta
                                                </button>
                                            </h2>
                                            <div id="panel-2-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-2">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Siemianowice</h5>
                                                        <h5 class="mb-1">15 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Katowice</h5>
                                                        <h5 class="mb-1">20 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Chorzów</h5>
                                                        <h5 class="mb-1">15 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Piekary Śląskie</h5>
                                                        <h5 class="mb-1">15 min</h5>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100 border-0" id="accordion-3">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-3">
                                                <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-road p-2"></i></a>
                                                <button class="accordion-button w-100 border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-3-collapseOne" aria-expanded="true" aria-controls="panel-3-collapseOne">
                                                    Kluczowe trasy
                                                </button>
                                            </h2>
                                            <div id="panel-3-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-3">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Autostrada A1</h5>
                                                        <h5 class="mb-1">15 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Droga 86</h5>
                                                        <h5 class="mb-1">10 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Droga 94</h5>
                                                        <h5 class="mb-1">10 min</h5>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100 border-0" id="accordion-4">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-4">
                                                <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-truck-medical p-2"></i></a>
                                                <button class="accordion-button w-100 border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-4-collapseOne" aria-expanded="true" aria-controls="panel-4-collapseOne">
                                                    Ośrodki zdrowia
                                                </button>
                                            </h2>
                                            <div id="panel-4-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-4">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Apteka</h5>
                                                        <h5 class="mb-1">4 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Przychodnia</h5>
                                                        <h5 class="mb-1">5 min</h5>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100 border-0" id="accordion-5">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-5">
                                                <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-graduation-cap p-2"></i></a>
                                                <button class="accordion-button w-100 border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-5-collapseOne" aria-expanded="true" aria-controls="panel-5-collapseOne">
                                                    Placówki edukacyjne
                                                </button>
                                            </h2>
                                            <div id="panel-5-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-5">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Żłobek</h5>
                                                        <h5 class="mb-1">4 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Publiczne przedszkole</h5>
                                                        <h5 class="mb-1">3 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Szkoła podstawowa</h5>
                                                        <h5 class="mb-1">5 min</h5>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="d-flex flex-column justify-content-center align-items-start my-4">
                                    <div class="accordion w-100 border-0" id="accordion-6">
                                        <div class="accordion-item w-100 border-0">
                                            <h2 class="accordion-header w-100 border-0" id="panel-6">
                                                <a href="" class="btn btn-primary mb-4 fs-2" type="button"><i class="fa-solid fa-basket-shopping p-2"></i></a>
                                                <button class="accordion-button w-100 border-0 fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panel-6-collapseOne" aria-expanded="true" aria-controls="panel-6-collapseOne">
                                                    Usługi
                                                </button>
                                            </h2>
                                            <div id="panel-6-collapseOne" class="accordion-collapse collapse show border-0" aria-labelledby="panel-6">
                                                <div class="accordion-body border-0">
                                                    <p class="lead">
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Biedronka</h5>
                                                        <h5 class="mb-1">2 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Lewiatan</h5>
                                                        <h5 class="mb-1">2 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Fryzjer</h5>
                                                        <h5 class="mb-1">2 min</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="flex-column align-items-start h-100 w-100">
                                                        <h5 class="mb-1 fs-3">Siłownia</h5>
                                                        <h5 class="mb-1">3 min</h5>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <!--SLIDER-->
                        <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                            <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                                @for($x = 0; $x <= 12; $x++) @if($x==0) <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" class="active" aria-current="true" aria-label="Slide {{$x+1}}"></button>
                                    @else
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" aria-label="Slide {{$x+1}}"></button>
                                    @endif
                                    @endfor
                            </div>
                            <div class="carousel-inner">
                                @for($x = 1; $x <= 12; $x++) @if($x==1) <div class="carousel-item active text-center">
                                    <img class="img-fluid" alt="" src="{{asset('asset/photo/album/'.$x.'.jpg')}}">
                            </div>
                            @else
                            <div class="carousel-item text-center">
                                <img class="img-fluid" alt="" src="{{asset('asset/photo/album/'.$x.'.jpg')}}">
                            </div>
                            @endif
                            @endfor
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                            <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left text-white"></i></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                            <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right text-whitet"></i></span>
                        </button>
                    </div>
                    <!--END SLIDER-->
                </div>
                <div class="col-6 offset-3">
                    <div>
                        <a href="" class="btn btn-primary w-100"><i class="fa-solid fa-image me-2"></i>Zobacz wszystkie zdjęcia</a>
                    </div>
                </div>
            </div>
            <div class="text-end m-0 p-0 pt-1 opacity-50">
                <p class="text-muted lead">03</p>
            </div>
            </div>
        </section>
        <!--END ALBUM-->
        <!--COUNTER-->
        <section>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-location-dot"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">Doskonała lokalizacja</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-bell-slash"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">Cicha okolica</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-shield"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">pewna inwestycja</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-coins"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">VAT i amortyzacja</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-maximize"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">poszukiwane metraże</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-wallet"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">najlepsza cena</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-user-tag"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">idealne pod wynajem</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0" style="font-size: 3.2em;"><i class="fa-solid fa-scale-balanced"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h6 class="text-white m-0 p-0 text-center">przejrzysta prawna sytuacja inwestora</h6>
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
        <!--SEARCH PHOTO-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="position-relative">
                                <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/search.jpg')}}">
                                <div class="position-absolute p-1px" id="segment-A1">
                                    <div class="segment h-100 w-100"></div>
                                </div>
                                <div class="position-absolute p-1px" id="segment-A2">
                                    <div class="segment h-100 w-100"></div>
                                </div>
                                <div class="position-absolute p-1px" id="segment-B1">
                                    <div class="segment h-100 w-100"></div>
                                </div>
                                <div class="position-absolute p-1px" id="segment-B2">
                                    <div class="segment h-100 w-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">05</p>
                </div>
            </div>
        </section>
        <!--END SEARCH PHOTO-->
        <!--INFO-->
        <section>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-12">
                        <div class="my-4">
                            <h1>Komfort w doskonałym stylu</h1>
                            <p class="lead">Zacisze Bobrowniki to nie tylko lokalizacja, ale również przyjazny klimat. Inwestycja obejmuje dwa budynki jednorodzinne dwulokalowe w zabudowie szeregowej. Mieszkania na parterze mają powierzchnię 55,12 m², natomiast na piętrze – 45,96 m² dodatkowo strych do własnej adaptacji ok. 15 m2 . Budynki wyróżnia atrakcyjna, nowoczesna architekturą, czystymi i prostymi liniami, szczególnie widocznymi w elementach zewnętrznych. Nasze budynki są zaprojektowane tak, aby wpisywały się idealnie w sąsiedztwo i zielone tereny. Stawiamy na połączenie elegancji z naturą zarówno przy doborze materiałów wykończeniowych jak i przy projekcie samej konstrukcji domu. Od samego początku zamysłem była prostota i funkcjonalność, bez nadmiernych ekstrawagancji. Nasze nieruchomości spełniają wszystkie warunki idealnego domu rodzinnego.</p>
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
                    <div class="col-12 col-md-4">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-house"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0 text-center">Wysoki standard</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Do budowy domów stosujemy sprawdzone materiały i technologie, które zapewniają wieloletnie użytkowanie.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-solid fa-key"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0 text-center">PRYWATNOŚĆ ORAZ SPOKÓJ</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Osobne wejścia do budynków, odzielenie ścianą akustyczą garażową, przekładają się na codzienny komfort mieszkańców.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="h-100 pb-4">
                            <div class="d-flex flex-column justify-content-center align-items-center bg-primary h-100">
                                <div class="mx-4 my-2">
                                    <h1 class="text-white m-0 p-0"><i class="fa-brands fa-hotjar"></i></h1>
                                </div>
                                <div class="mx-4 my-2">
                                    <h2 class="text-white m-0 p-0 text-center">ORZEWANIE</h2>
                                </div>
                                <div class="mx-4 my-2">
                                    <p class="text-white lead m-0 p-0 text-center">Mieszkania mają ogrzewanie gazowe podłogowe, co gwarantuje szybsze ogrzewanie i lepszy komfort w użytkowaniu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end m-0 p-0 pt-1 opacity-50">
                    <p class="text-muted lead">06</p>
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
                            <a href="tel:+48503517499" class="card-text m-0 p-0 mx-4 my-2 text-nowrap" style="text-decoration: none;">503-517-499</a>
                            <a href="tel:+48731518516" class="card-text m-0 p-0 mx-4 my-2 text-nowrap" style="text-decoration: none;">731-518-516</a>
                            <a href="mailto:zaciszebobrowniki@gmail.com" class="card-text m-0 p-0 mx-4 my-2" style="text-decoration: none;">zaciszebobrowniki@gmail.com</a>
                            <p class="card-text m-0 p-0 mx-4 my-2">ul.Żurawia 4/2, 42-583 Bobrowniki</p>
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
                    <li class="nav-item"><a href="{{route('page')}}" class="nav-link px-2 text-white">Inwestycja</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">O nas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Kontakt</a></li>
                    <li class="nav-item"><a href="https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/" class="nav-link px-2 text-white"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <p class="text-center text-white">&copy; 2023 Nowe Inspiracje, desinged by Karol Wiśniewski</p>
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
        });
        //ON LOAD
        $(document).ready(function() {
            //APART
            $('#card-form-apart-container').height($('#card-form-apart').height() / 2)
            $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2)
            //CONTACT
            $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
            $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
        });

        //SEARCH
        $(document).ready(function() {
            $('.segment').mouseenter(function() {
                $(this).css('background-color', 'rgba(255, 255, 0, 0.8)');
            });
            $('.segment').mouseleave(function() {
                $(this).css('background-color', 'transparent');
            });
        });
    </script>
</body>

</html>
<!--<img alt="slider-2" src="{{asset('asset/photo/slider-2.jpeg')}}" class="img-fluid" style="filter: brightness(0.75) saturate(1.4);">-->