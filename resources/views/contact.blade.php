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
            <div class="col-12">
                <div class="hstack gap-3 mb-3">
                    <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                    <h1 class="p-0 m-0">Biuro <span class="text-muted">DGG</span></h1>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <p>ul.Sienkiewicza 1, 1 piętro, Piekary Śląskie 41-940</p>
                <p>NIP: 498-01-71-674</p>
                <p><a href="mailto:biuronoweinspiracje@gmail.com">biuronoweinspiracje@gmail.com</a></p>
                <p>Sprzedaż – <a href="tel:503517499">503-517-499</a></p>
                <p>Nadzór remontowy – <a href="tel:517929025">517-929-025</a></p>
                <p>Projekty wnętrz – <a href="tel:533997018">533-997-018</a></p>
                <div class="d-flex flex-row justify-content-start align-items-start fs-1">
                    <a href="https://www.facebook.com/people/Nowe-Inspiracje/100063527142284/" class="me-2"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="me-2"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.nowe-inspiracje.com.pl/"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5089.192137789474!2d18.947!3d50.374086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d359233182f7%3A0xe73192fcbc76c5c0!2sHenryka%20Sienkiewicza%201%2C%2041-940%20Piekary%20%C5%9Al%C4%85skie!5e0!3m2!1spl!2spl!4v1686061705431!5m2!1spl!2spl" class="w-100 h-auto" style="border:0; min-height:30em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--
            <hr class="my-2">
            <div class="col-12">
                <h1>Lokalizacja inwestycji <span class="text-muted">BOBROWNIKI</span></h1>
            </div>
            <div class="col-12 col-md-6">
                <p>ul.Żurawia 4/2, 42-583 Bobrowniki</p>
                <p><a href="mailto:zaciszebobrowniki@gmail.com">zaciszebobrowniki@gmail.com</a></p>
                <p><a href="tel:731518516">731-518-516</a></p>
                <p><a href="tel:503517499">503-517-499</a></p>
            </div>
            <div class="col-12 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.690916745814!2d19.015119200000004!3d50.3909601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d5590ca8f05d%3A0x21221ef9127cf607!2s%C5%BBurawia%204a%2F2%2C%2044-122%20Bobrowniki!5e0!3m2!1spl!2spl!4v1686062031161!5m2!1spl!2spl" class="w-100 h-auto" style="border:0; min-height:30em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                -->
        </div>
    </div>
</section>
@include('module.contact')
@endsection