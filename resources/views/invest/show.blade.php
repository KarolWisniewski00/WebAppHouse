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
                    <li class="breadcrumb-item"><a href="{{route('invest.show',$slug)}}">{{$table->flat}}</a></li>
                </ol>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <h1>Apartament {{$table->flat}}</h1>
                    @if($table->status == 'available')
                    <h6 class="text-success">Dostępne</h6>
                    @else
                    <h6 class="text-danger">Niedostępne</h6>
                    @endif
                    <p>Metraż {{$table->surface}} m2</p>
                    <p>Cena {{$table->price}} PLN</p>
                    <a href="{{ asset('storage/'.$table->file_pdf) }}" target="_blank" class="btn btn-primary m-1"><i class="fa-solid fa-magnifying-glass me-2"></i>Podgląd plan PDF</a>
                    <a href="{{ asset('storage/'.$table->file_pdf) }}" download class="btn btn-primary m-1"><i class="fa-solid fa-file-pdf me-2"></i>Pobierz plan PDF</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection