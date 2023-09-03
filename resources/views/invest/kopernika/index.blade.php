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
                    <li class="breadcrumb-item"><a href="{{route('invest.kopernika')}}">Kopernika</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMBS + FILTER-->
<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="col-12">
                        <div class="d-flex flex-column justify-content-center align-items-center my-4">
                            <div class="d-flex flex-row mb-3 justify-content-start align-items-start w-100">
                                <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                                <h1 class="p-0 m-0 ms-3">{{$setting['naglowek_na_stronie_kopernika']}}</h1>
                            </div>
                            <p class="lead">{{$setting['paragraf_na_stronie_kopernika']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @for($x=1;$x<4;$x++) <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{asset('asset/photo/'.$setting['zdjecie_'.$x.'_na_stronie_kopernika'])}}" alt="{{$setting['alt_zdjecie_'.$x.'_na_stronie_kopernika']}}" class="w-100" />
                </div>
                @endfor
            </div>
        </div>
    </div>
    </div>
</section>
<!--END INFO-->
@endsection