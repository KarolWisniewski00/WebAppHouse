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
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <h1>Apartament {{$table->flat}}</h1>
                    @if($table->status == 'available')
                    <h6 class="text-danger">Niedostępne</h6>
                    @else
                    <h6 class="text-success">Dostępne</h6>
                    @endif
                    <p> @if($table->segment == 'floor-4')
                        Piętro 3
                        @elseif($table->segment == 'floor-3')
                        Piętro 2
                        @elseif($table->segment == 'floor-2')
                        Piętro 1
                        @elseif($table->segment == 'floor-1')
                        Parter
                        @endif</p>
                    <p>Liczba pokoi:
                        @if($table->flat == 'room-4')
                        4
                        @elseif($table->flat == 'room-3')
                        3
                        @elseif($table->flat == 'room-2')
                        2
                        @elseif($table->flat == 'room-1')
                        1
                        @endif
                    </p>
                    <p>Metraż {{$table->surface}} m2</p>
                    <p>Cena za metr: {{$table->price_surface}} PLN</p>
                    <p>Cena {{$table->price}} PLN</p>
                    <a href="{{ asset('storage/'.$table->file_pdf) }}" style="background-color: #0f4c64;" target="_blank" class="btn btn-primary m-1 my-4"><i class="fa-solid fa-magnifying-glass me-2"></i>Otwórz w nowej karcie plan PDF</a>
                    <a href="{{ asset('storage/'.$table->file_pdf) }}" style="background-color: #0f4c64;" download class="btn btn-primary m-1"><i class="fa-solid fa-file-pdf me-2"></i>Pobierz plan PDF</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <embed src="{{ asset('storage/'.$table->file_pdf) }}" type="application/pdf" width="100%" height="850px" />
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection