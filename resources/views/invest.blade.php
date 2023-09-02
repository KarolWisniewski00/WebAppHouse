@extends('layout.main')
@section('content')
<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12 col-xl-6">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h1 class="p-0 m-0">{{$setting['naglowek_sekcji_1_na_stronie_o_inwestycji']}}</h1>
                    </div>
                    <p class="lead" style="font-size: 15px;">{{$setting['paragraf_1_sekcji_1_na_stronie_o_inwestycji']}}</p>
                    <p class="lead" style="font-size: 15px;">{{$setting['paragraf_2_sekcji_1_na_stronie_o_inwestycji']}}</p>
                    <p class="lead" style="font-size: 15px;">{{$setting['paragraf_3_sekcji_1_na_stronie_o_inwestycji']}}</p>
                    <p class="lead" style="font-size: 15px;">{{$setting['paragraf_4_sekcji_1_na_stronie_o_inwestycji']}}</p>
                    <p class="lead" style="font-size: 15px;">{{$setting['paragraf_5_sekcji_1_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-center align-items-center overflow-hidden">
                <div class="" style="margin: 0 -10em;">
                    <img class="w-100 my-4" alt="{{$setting['alt_zdjecie_sekcji_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/'.$setting['zdjecie_sekcji_1_na_stronie_o_inwestycji'])}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO-->
<!--INFO WITH BG GREEN-->
<section style="background-color: #f5f7f9!important;  border-bottom: 1px solid #d28f6f;  border-top: 1px solid #d28f6f;">
    <div class="container-fluid">
        <div class="row my-4 py-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-center align-items-center overflow-hidden">
                <div class="" style="margin: 0 -10em;">
                    <img class="w-100 my-4" alt="{{$setting['alt_zdjecie_sekcji_2_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_sekcji_2_na_stronie_o_inwestycji'])}}">
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap h-100">
                    <div class="col-12 h-100">
                        <div class="d-flex flex-column justify-content-center align-items-center text-start my-4 h-100">
                            <div class="hstack gap-3 mb-3">
                                <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                                <h1 class="p-0 m-0 text-primary">{{$setting['naglowek_sekcji_2_na_stronie_o_inwestycji']}}</h1>
                            </div>
                            <p class="lead text-primary">
                            <ul>
                                <li class="text-primary">{{$setting['lista_1_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_2_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_3_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_4_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_5_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_6_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_7_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_8_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_9_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_10_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_11_sekcji_2_na_stronie_o_inwestycji']}}</li>
                                <li class="text-primary">{{$setting['lista_12_sekcji_2_na_stronie_o_inwestycji']}}</li>
                            </ul>
                            </p>
                            <p class="lead text-primary">{{$setting['paragraf_1_sekcji_2_na_stronie_o_inwestycji']}}</p>
                            <p class="lead text-primary">{{$setting['paragraf_2_sekcji_2_na_stronie_o_inwestycji']}}</p>
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
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h1 class="p-0 m-0">{{$setting['naglowek_karuzeli_1_na_stronie_o_inwestycji']}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mx-0 px-0 overflow-hidden pb-12">
        <div class="row">
            <div class="col-12 mb-3 mx-0 px-0">
                <!--SLIDER-->
                <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-inner position-relative overflow-visible">
                        @for($x = 1; $x <= 9; $x++) @if($x==1) <div class="carousel-item active text-center ">
                            <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                            <div class="card text-primary mb-3 translate-custom">
                                <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                                <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                    <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                                </div>
                            </div>
                    </div>
                    @elseif($x==2)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==3)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==4)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==5)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==6)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==7)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @elseif($x==8)
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="carousel-item text-center ">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji'])}}">
                        <div class="card text-primary mb-3 translate-custom">
                            <div class="card-header" style="border: 1px solid #d28f6f;">{{$setting['naglowek_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</div>
                            <div class="card-body" style="border: 1px solid #d28f6f; border-top:0px;">
                                <p class="card-text" style="font-size: 14px;">{{$setting['paragraf_zdjecie_'.$x.'_karuzeli_1_na_stronie_o_inwestycji']}}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endfor
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
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
    <div class="container-fluid px-5 mt-5">
        <div class="row my-4 p-4 g-0">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-center align-items-center me-xl-0 pe-xl-0">
                <img class="img-fluid my-4" alt="{{$setting['alt_zdjecie_sekcji_2_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_sekcji_2_na_stronie_o_inwestycji'])}}">
            </div>
            <div class="col-12 col-xl-6 ms-xl-0 ps-xl-0 py-xl-5">
                <div class="d-flex flex-column justify-content-center align-items-center text-start h-100 p-4 border-custom-left-2" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h5 class="p-0 m-0 text-primary">{{$setting['naglowek_sekcji_2_na_stronie_o_inwestycji']}}</h5>
                    </div>
                    <p class="lead text-primary">{{$setting['paragraf_sekcji_2_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO WITH BG MUTED-->
<!--SLIDER PHOTO
<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4 h-100">
                    <h1 class="p-0 m-0 my-2" style="font-size: 3.8em;">O Inwestycji</h1>
                    <p class="p-0 m-0  my-2 mb-5" style="font-size: 1.8em;">Budynek Apartamenty Rzuty 3D Dlaczego warto?</p>
                </div>
            </div>
            <div class="col-12">
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
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left text-primary"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right text-primaryt"></i></span>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>
END SLIDER PHOTO-->
<!--SLIDER PHOTO-->
<section style="background-color: #f5f7f9; border-bottom: 1px solid #d28f6f; border-top: 1px solid #d28f6f;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4 h-100">
                    <h1 class="p-0 m-0 my-2  text-primary" style="font-size: 3em;">{{$setting['naglowek_karuzeli_2_na_stronie_o_inwestycji']}}</h1>
                    <p class="p-0 m-0  my-2 mb-5 text-primary" style="font-size: 1.8em;">{{$setting['paragraf_karuzeli_2_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12">
                <div id="myCarousel3" class="carousel slide" data-bs-ride="carousel" style="z-index: 1;">
                    <div class="carousel-indicators d-none d-xl-flex justify-content-center align-items-end">
                        @for($x = 0; $x <= 9; $x++) @if($x==0) <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="{{$x}}" class="active" aria-current="true" aria-label="Slide {{$x+1}}"></button>
                            @else
                            <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="{{$x}}" aria-label="Slide {{$x+1}}"></button>
                            @endif
                            @endfor
                    </div>
                    <div class="carousel-inner">
                        @for($x = 1; $x <= 9; $x++) @if($x==1) <div class="carousel-item active text-center">
                            <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_2_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_2_na_stronie_o_inwestycji'])}}">
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="{{$setting['alt_zdjecie_'.$x.'_karuzeli_2_na_stronie_o_inwestycji']}}" src="{{asset('asset/photo/album/'.$setting['zdjecie_'.$x.'_karuzeli_2_na_stronie_o_inwestycji'])}}">
                    </div>
                    @endif
                    @endfor
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
                    <span class="bg-black p-2 px-4 fs-1" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                </button>
            </div>
        </div>
    </div>
    </div>
</section>
<!--END SLIDER PHOTO-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-start text-start my-4 h-100">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h1 class="p-0 m-0">{{$setting['naglowek_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h1>
                    </div>
                    <p class="lead text-muted mb-5">{{$setting['paragraf_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_1_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
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
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_2_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_3_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
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
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_4_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_5_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
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
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_6_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_7_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
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
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_8_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
<!--INFO SMALL 01-->
<section>
    <div class="container text-primary">
        <div class="row my-4 p-4">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
            <div class="col-12 col-xl-6">
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_9_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
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
                <div class="d-flex flex-column justify-content-start align-items-start text-start bg-secondary h-100 p-4 border-custom-01" style="background-color:#f5f7f9!important;">
                    <div class="hstack gap-3 mb-3">
                        <div class="vr bg-extra" style="border: 2px solid #d28f6f; opacity: .75;"></div>
                        <h3 class="p-0 m-0 text-primary">{{$setting['naglowek_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji']}}</h3>
                    </div>
                    <p class="lead text-primary">{{$setting['podtytul_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                    <p class="lead text-primary">{{$setting['paragraf_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji']}}</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-start align-items-start">
                <img class="img-fluid w-100" alt="{{$setting['alt_zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji']}}" src="{{$setting['zdjecie_10_sekcji_ostatniej_na_stronie_o_inwestycji']}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO SMALL 02-->
@include('module.contact')
@endsection