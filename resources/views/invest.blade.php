@extends('layout.main')
@section('content')
<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12 col-md-6">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                        <h1 class="p-0 m-0">O Inwestycji</h1>
                    </div>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid my-4" alt="" src="{{asset('asset/photo/czarna_apla.jpeg')}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO-->
<!--INFO WITH BG GREEN-->
<section class="bg-light" style="background-color: #f8f9fa!important;">
    <div class="container-fluid">
        <div class="row my-4 py-4">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid my-4" alt="" src="{{asset('asset/photo/czarna_apla.jpeg')}}">
            </div>
            <div class="col-12 col-md-6">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap h-100">
                    <div class="col-12 h-100">
                        <div class="d-flex flex-column justify-content-center align-items-center text-start my-4 h-100">
                            <div class="hstack gap-3 mb-3">
                            <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                                <h1 class="p-0 m-0">O Inwestycji</h1>
                            </div>
                            <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                            <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                            <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO WITH BG GREEN-->
<!--SLIDER PHOTO-->
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-start text-center my-4 h-100">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                        <h1 class="p-0 m-0">O Inwestycji</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <!--SLIDER-->
                <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @for($x = 0; $x <= 9; $x++) @if($x==0) <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" class="active" aria-current="true" aria-label="Slide {{$x+1}}"></button>
                            @else
                            <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="{{$x}}" aria-label="Slide {{$x+1}}"></button>
                            @endif
                            @endfor
                    </div>
                    <div class="carousel-inner">
                        @for($x = 1; $x <= 9; $x++) @if($x==1) <div class="carousel-item active text-center">
                            <img class="img-fluid" alt="" src="{{asset('asset/photo/album/'.$x.'.jpg')}}">
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="" src="{{asset('asset/photo/album/'.$x.'.jpg')}}">
                    </div>
                    @endif
                    @endfor
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left text-white"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right text-whitet"></i></span>
                </button>
            </div>
            <!--END SLIDER-->
        </div>
    </div>
    </div>
</section>
<!--END SLIDER PHOTO-->
<!--INFO WITH BG MUTED-->
<section>
    <div class="container-fluid px-5">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-center align-items-center me-xl-0 pe-xl-0">
                <img class="img-fluid my-4" alt="" src="{{asset('asset/photo/czarna_apla.jpeg')}}">
            </div>
            <div class="col-12 col-xl-6 ms-xl-0 ps-xl-0 py-xl-5">
                <div class="d-flex flex-column justify-content-center align-items-center text-start bg-light h-100 p-4" style="background-color: #f8f9fa!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                        <h1 class="p-0 m-0">O Inwestycji</h1>
                    </div>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO WITH BG MUTED-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-start text-start my-4 h-100">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                        <h1 class="p-0 m-0">O Inwestycji</h1>
                    </div>
                    <p class="lead text-muted mb-5">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid" alt="" src="{{asset('asset/photo/czarna_apla.jpeg')}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4" style="background-color: #f8f9fa!important;">
                <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #9cca36; opacity: .75;"></div>
                        <h3 class="p-0 m-0">O Inwestycji</h3>
                    </div>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 01-->
<!--INFO SMALL 02-->
<section>
    <div class="container">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4" style="background-color: #f8f9fa!important;">
                <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #9cca36; opacity: .75;"></div>
                        <h3 class="p-0 m-0">O Inwestycji</h3>
                    </div>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                    <p class="lead">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid" alt="" src="{{asset('asset/photo/czarna_apla.jpeg')}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
@include('module.contact')
@endsection