@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    @if($table2 == 1)
                    <li class="breadcrumb-item"><a href="{{route('invest')}}">Inwestycje {{$setting['naglowek_etap_1']}}</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{{route('invest.second')}}">Inwestycje {{$setting['naglowek_etap_2']}}</a></li>
                    @endif
                    <li class="breadcrumb-item"><a href="{{route('invest.show',$slug)}}">{{$t->flat}}</a></li>
                </ol>
                @if($table2 == 1)
                <h1>{{$setting['naglowek_etap_1']}}</h1>
                @else
                <h1>{{$setting['naglowek_etap_2']}}</h1>
                @endif
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table2 == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        @if($t->segment == 'floor-4')
                        <input type="hidden" name="floor" value="4">
                        @elseif($t->segment == 'floor-3')
                        <input type="hidden" name="floor" value="3">
                        @elseif($t->segment == 'floor-2')
                        <input type="hidden" name="floor" value="2">
                        @elseif($t->segment == 'floor-1')
                        <input type="hidden" name="floor" value="1">
                        @endif
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Plan Piętra</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        @if($t->segment == 'floor-4')
                        <input type="hidden" name="floor" value="4">
                        @elseif($t->segment == 'floor-3')
                        <input type="hidden" name="floor" value="3">
                        @elseif($t->segment == 'floor-2')
                        <input type="hidden" name="floor" value="2">
                        @elseif($t->segment == 'floor-1')
                        <input type="hidden" name="floor" value="1">
                        @endif
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Plan Piętra</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <h1>Apartament NR. {{$t->id}}</h1>
                    @if($t->status == 'available')
                    <h6 class="text-danger">Niedostępne</h6>
                    @else
                    <h6 class="text-success">Dostępne</h6>
                    @endif
                    <p> @if($t->segment == 'floor-4')
                        Piętro 3
                        @elseif($t->segment == 'floor-3')
                        Piętro 2
                        @elseif($t->segment == 'floor-2')
                        Piętro 1
                        @elseif($t->segment == 'floor-1')
                        Parter
                        @endif</p>
                    <p>Liczba pokoi:
                        @if($t->flat == 'room-4')
                        4
                        @elseif($t->flat == 'room-3')
                        3
                        @elseif($t->flat == 'room-2')
                        2
                        @elseif($t->flat == 'room-1')
                        1
                        @endif
                    </p>
                    <p>Metraż {{$t->surface}} m2</p>
                    <p>Cena za metr: {{$t->price_surface}} PLN</p>
                    <p>Cena: {{$t->price}} PLN</p>
                    <p>Najniższa cena z ostatnich 30 dni: {{$t->lowestPriceLast30Days()}} PLN</p>
                    <a href="{{ asset('storage/'.$t->file_pdf) }}" style="background-color: #0f4c64;" target="_blank" class="btn btn-primary m-1 my-4"><i class="fa-solid fa-magnifying-glass me-2"></i>Otwórz w nowej karcie plan PDF</a>
                    <a href="{{ asset('storage/'.$t->file_pdf) }}" style="background-color: #0f4c64;" download class="btn btn-primary m-1"><i class="fa-solid fa-file-pdf me-2"></i>Pobierz plan PDF</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.7/pdfobject.min.js"></script>
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <div class="w-100 text-center" id="pdfViewer"></div>
                    <script>
                        var options = {
                            height: "500px",
                            pdfOpenParams: {
                                view: 'FitH'
                            }
                        };
                        PDFObject.embed("{{ asset('storage/'.$t->file_pdf) }}", "#pdfViewer", options);
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection