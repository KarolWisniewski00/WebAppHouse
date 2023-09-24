@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('about')}}">O nas</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMBS + FILTER-->
@include('module.info.about')
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12 col-md-4">
                <a href="{{route('invest.wodna')}}"><img class="img-fluid w-100" alt="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_wodna'])}}" src="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_wodna'])}}"></a>
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary my-4 p-4" style="background-color:#f5f7f9!important;     border: 1px solid #d28f6f !important;">
                    <div class="d-flex flex-row mb-3 justify-content-start align-items-start w-100">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 ms-3 text-primary">Wodna</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{route('invest.kopernika')}}"><img class="img-fluid w-100" alt="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_kopernika'])}}" src="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_kopernika'])}}"></a>
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary my-4 p-4" style="background-color:#f5f7f9!important;     border: 1px solid #d28f6f !important;">
                    <div class="d-flex flex-row mb-3 justify-content-start align-items-start w-100">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 ms-3 text-primary">Kopernika</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{route('invest.dlugosza')}}"><img class="img-fluid w-100" alt="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_dlugosza'])}}" src="{{asset('asset/photo/'.$setting['zdjecie_1_na_stronie_dlugosza'])}}"></a>
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary my-4 p-4" style="background-color:#f5f7f9!important;     border: 1px solid #d28f6f !important;">
                    <div class="d-flex flex-row mb-3 justify-content-start align-items-start w-100">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 ms-3 text-primary">Długosza</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mb-4 pb-4">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-transparent my-4 p-4 text-center">
                    <p class="lead text-primary">Od początku stawiamy na wysoką jakość i oryginalność. W naszych
                        inwestycjach zachowujemy najwyższe standardy deweloperskie i dbamy o to,
                        by inwestycje mieściły się w spokojnych i zielonych lokalizacjach, z
                        dala od zgiełku, wśród podobnych zabudowań. Nasze inwestycje wyróżniają
                        innowacyjne technologie oraz bardzo atrakcyjna architektura. Każdy
                        projekt tworzymy z myślą o przyszłych mieszkańcach oraz zastanym
                        otoczeniu. Ważnym dla nas aspektem jest wpływ na przyrodę, dlatego też
                        sięgamy po sprawdzone ekologiczne rozwiązania. Jako mieszkańcom Piekar
                        Śląskich szczególnie zależy nam na pokazaniu atrakcyjności naszego
                        miasta. Nasza najnowsza inwestycja – Luxor Residence – to perła w naszym
                        portfolio.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.search.filter')
@endsection