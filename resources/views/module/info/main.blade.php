<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12 col-xl-5">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="col-12">
                        <div class="row text-start">
                            <div class="my-4">
                                <div class="hstack gap-3 mb-3">
                                    <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                                    <h1 class="p-0 m-0">
                                        <span>{{$setting['naglowek_ciemny_sekcji_1_na_stronie_glownej']}}</span>
                                        <small class="text-muted">{{$setting['naglowek_jasny_sekcji_1_na_stronie_glownej']}}</small>
                                    </h1>
                                </div>
                                <p class="lead">{{$setting['paragraf_sekcji_1_na_stronie_glownej']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                            <a href="" class="btn btn-extra mb-4 fs-2" type="button">{!! $setting['ikona_po_lewej_sekcji_1_na_stronie_glownej'] !!}</a>
                            <h3>{{$setting['naglowek_ikony_po_lewej_sekcji_1_na_stronie_glownej']}}</h3>
                            <p class="lead">{{$setting['paragraf_ikony_po_lewej_sekcji_1_na_stronie_glownej']}}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                            <a href="" class="btn btn-extra mb-4 fs-2" type="button">{!! $setting['ikona_po_prawej_sekcji_1_na_stronie_glownej'] !!}</a>
                            <h3>{{$setting['naglowek_ikony_po_prawej_sekcji_1_na_stronie_glownej']}}</h3>
                            <p class="lead">{{$setting['paragraf_ikony_po_prawej_sekcji_1_na_stronie_glownej']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-7">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 my-4" style="min-height: 30em; background-image: url({{asset('asset/photo/'.$setting['zdjecie_sekcji_1_na_stronie_glownej'])}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO-->