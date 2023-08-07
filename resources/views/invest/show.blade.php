@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest')}}">Inwestucje</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest.show',$slug)}}">{{$slug}}</a></li>
                </ol>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h1>Apartament {{$slug}}</h1>
                    <h6 class="text-success">Dostępne</h6>
                    <p>Metraż 123m2</p>
                    <p>Cena za metr 123 PLN</p>
                    <button class="btn btn-primary"><i class="fa-solid fa-file-pdf me-2"></i>Pobierz plan PDF</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <button type="button" class="border-0 bg-transparent mb-3" data-bs-toggle="modal" data-bs-target="#Modal">
                    <img alt="" src="{{asset('asset/photo/schema/'.$slug.'.jpg')}}" class="img-fluid">
                </button>

                <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="ModalLabel">Plan PDF {{$slug}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img alt="" src="{{asset('asset/photo/schema/'.$slug.'.jpg')}}" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary"><i class="fa-solid fa-file-pdf me-2"></i>Pobierz plan PDF</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection