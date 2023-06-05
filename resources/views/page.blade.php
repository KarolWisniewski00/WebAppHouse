@extends('layout.main')
@section('content')
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
@include('module.search.photo')
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
@endsection