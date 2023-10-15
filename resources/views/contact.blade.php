@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('contact')}}">Kontakt</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMBS + FILTER-->
<section>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-5 gsap">
                <div class="d-flex flex-column flex-row justify-content-center align-items-start">
                    <div class="d-flex flex-row mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h1 class="p-0 m-0 ms-3">{{$setting['strona_kontaktowa_napis_główny_ciemny']}} <span class="text-muted">{{$setting['strona_kontaktowa_napis_główny_jasny']}}</span></h1>
                    </div>
                    <p>{{$setting['strona_kontaktowa_ulica']}}</p>
                    <p>{{$setting['strona_kontaktowa_miasto']}}</p>
                    <p><a href="mailto:{{$setting['strona_kontaktowa_email']}}">{{$setting['strona_kontaktowa_email']}}</a></p>
                    <hr>
                    <p>{{$setting['strona_kontaktowa_godziny_otwarcia_linia_1']}}</p>
                    <p>{{$setting['strona_kontaktowa_godziny_otwarcia_linia_2']}}</p>
                    <hr>
                    <!--
                <p>NIP: 498-01-71-674</p>
                <p>Sprzedaż – <a href="tel:503517499">503-517-499</a></p>
                <p>Nadzór remontowy – <a href="tel:517929025">517-929-025</a></p>
                <p>Projekty wnętrz – <a href="tel:533997018">533-997-018</a></p>-->
                    <div class="d-flex flex-row justify-content-start align-items-start fs-1">
                        <a href="{{$setting['facebook_link_w_pasku_nawigacyjnym']}}" class="me-2"><i class="fa-brands fa-facebook"></i></a>
                        <a href="{{$setting['instagram_link_w_pasku_nawigacyjnym']}}" class="me-2"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.nowe-inspiracje.com.pl/"><i class="fa-solid fa-link"></i></a>
                    </div>
                    <div class="w-100 p-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7964073982257!2d18.944425577254556!3d50.374089492857955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d3307d5711cf%3A0x598ebce1077d64a6!2sNowe%20Inspiracje!5e1!3m2!1spl!2spl!4v1693730706858!5m2!1spl!2spl" class="w-100 h-auto" style="border:0; min-height:30em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 gsap">
                <div class="d-flex flex-column justify-content-center align-items-end">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <img class="img-fluid" alt="Partyk Gogacz" src="{{asset('asset/photo/'.$setting['strona_kontaktowa_zdjecie'])}}">
                        </div>
                        <div class="d-flex flex-column justify-content-start align-items-start mt-3">
                            <h5 class="fw-bold">{{$setting['strona_kontaktowa_imie_i_nazwisko']}}</h5>
                            <h6>{{$setting['strona_kontaktowa_dział']}}</h6>
                            <hr>
                            <p><a href="mailto:{{$setting['strona_kontaktowa_email_działu']}}">{{$setting['strona_kontaktowa_email_działu']}}</a></p>
                            <p><a href="tel:+48{{$setting['strona_kontaktowa_telefon_działu']}}">{{$setting['strona_kontaktowa_telefon_działu']}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection