<!--SLIDER PHOTO--
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                --SLIDER--
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
                            <img class="img-fluid" alt="" src="{{asset('asset/photo/'.$x.'.jpg')}}">
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <img class="img-fluid" alt="" src="{{asset('asset/photo/'.$x.'.jpg')}}">
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
            --END SLIDER--
        </div>
    </div>
    <div class="text-end m-0 p-0 pt-1 opacity-50">
        <p class="text-muted lead">03</p>
    </div>
    </div>
</section>
--END SLIDER PHOTO-->
<!--SLIDER PHOTO-->
<section style="background-color: #F8F2F0; border-top: 1px solid #d28f6f; border-bottom: 1px solid #d28f6f;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                    <h1 class="p-0 m-0 my-2 text-primary" style="font-size: 3em;">{{$setting['naglowek_karuzela_2_na_stronie_glownej']}}</h1>
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
                            <img class="img-fluid mb-5" alt="{{$setting['alt_zdjecie_'.$x.'_karuzela_2_na_stronie_glownej']}}" src="{{asset('asset/photo/'.$setting['zdjecie_'.$x.'_karuzela_2_na_stronie_glownej'])}}">
                    </div>
                    @else
                    <div class="carousel-item text-center">
                        <img class="img-fluid mb-5" alt="{{$setting['alt_zdjecie_'.$x.'_karuzela_2_na_stronie_glownej']}}" src="{{asset('asset/photo/'.$setting['zdjecie_'.$x.'_karuzela_2_na_stronie_glownej'])}}">
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
        </div>
    </div>
    </div>
</section>
<!--END SLIDER PHOTO-->
<!--INFO-->
<section>
    <div class="container-fluid">
        <div class="row my-4 py-4">
            <div class="col-12 col-xl-5">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="col-12 gsap">
                        <div class="row text-start">
                            <div class="my-4">
                                <div class="d-flex flex-row mb-3">
                                    <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                                    <h1 class="p-0 m-0 ms-3">
                                        <span>{{$setting['naglowek_sekcji_3_na_stronie_glownej']}}</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 gsap">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid hover-1" alt="" src="{{asset('asset/photo/'.$setting['zdjecie_na_gorze_sekcji_3_na_stronie_glownej'])}}">
                            </div>
                            <div class="col-8">
                                <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                    <h3>{{$setting['naglowek_na_gorze_sekcji_3_na_stronie_glownej']}}</h3>
                                    <p>{{$setting['paragraf_na_gorze_sekcji_3_na_stronie_glownej']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 gsap">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid hover-1" alt="" src="{{asset('asset/photo/'.$setting['zdjecie_na_dole_sekcji_3_na_stronie_glownej'])}}">
                            </div>
                            <div class="col-8">
                                <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                    <h3>{{$setting['naglowek_na_dole_sekcji_3_na_stronie_glownej']}}</h3>
                                    <p>{{$setting['paragraf_na_dole_sekcji_3_na_stronie_glownej']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-7">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 my-4" style="min-height: 30em; background-image: url({{asset('asset/photo/'.$setting['zdjecie_sekcji_3_na_stronie_glownej'])}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO-->