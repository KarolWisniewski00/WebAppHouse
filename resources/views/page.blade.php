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
                <a href="/" class="d-flex align-items-center justify-content-center me-md-auto text-dark text-decoration-none">
                    <span class="fs-4">LOGO</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inwestycje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nowe</a>
                            <a class="dropdown-item" href="#">Ukończone</a>
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
        <!--BREADCRUMBS + FILTER-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Strona główna</a></li>
                            <li class="breadcrumb-item"><a href="#">Inwestycje</a></li>
                            <li class="breadcrumb-item active">Nowe</li>
                        </ol>
                    </div>
                    <div class="col-12">
                        <div class="card border-primary mb-3" id="card-form-apart">
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
                                <div class="card-body"><button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i>Szukaj aparamentu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END BREADCRUMBS + FILTER-->
        <!--TABLE-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Numer</th>
                                    <th scope="col">Piętro</th>
                                    <th scope="col">Pokoje</th>
                                    <th scope="col">Metraż</th>
                                    <th scope="col">Cena za m2</th>
                                    <th scope="col">Cena aparamentu</th>
                                    <th scope="col">Cena apartamentu</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"><i class="fa-solid fa-file-pdf me-2"></i>Plik</th>
                                    <th scope="col"><i class="fa-solid fa-magnifying-glass"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-primary">
                                    <th>1</th>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>7500</td>
                                    <td>44.26m2</td>
                                    <td>400.400 zł</td>
                                    <td>580.580 zł</td>
                                    <td class="text-success">Dostępne</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button></td>
                                </tr>
                                <tr class="table-secondary">
                                    <th>2</th>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>7500</td>
                                    <td>44.26m2</td>
                                    <td>400.400 zł</td>
                                    <td>580.580 zł</td>
                                    <td class="text-danger">Nie dostępne</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button></td>
                                </tr>
                                <tr class="table-primary">
                                    <th>1</th>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>7500</td>
                                    <td>44.26m2</td>
                                    <td>400.400 zł</td>
                                    <td>580.580 zł</td>
                                    <td class="text-success">Dostępne</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button></td>
                                </tr>
                                <tr class="table-secondary">
                                    <th>2</th>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>7500</td>
                                    <td>44.26m2</td>
                                    <td>400.400 zł</td>
                                    <td>580.580 zł</td>
                                    <td class="text-danger">Nie dostępne</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                                    <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!--END TABLE-->
    </main>
    <!--END MAIN-->
    <!--FOOTER-->
    <section class="bg-primary py-4">
        <div class="container">
            <footer class="py-3">
                <ul class="nav justify-content-center pb-3 mb-3 fpt">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inwestycje</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Nowe</a>
                            <a class="dropdown-item" href="#">Ukończone</a>
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

</body>

</html>