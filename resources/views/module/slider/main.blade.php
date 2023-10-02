<!--SLIDER MAIN-->
<section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/'.$setting['zdjecie_1_karuzela_1_na_stronie_glownej'])}});    background-position: center;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>
                <div class="container">
                    <div class="carousel-caption text-end fpb">
                        <h1 class="text-white">{{$setting['naglowek_1_karuzela_1_na_stronie_glownej']}}</h1>
                        <p>{{$setting['paragraf_1_karuzela_1_na_stronie_glownej']}}</p>
                        <p><a class="btn btn-lg btn-primary"style="background-color: #0f4c64;" href="{{$setting['link_1_karuzela_1_na_stronie_glownej']}}">{{$setting['przycisk_1_karuzela_1_na_stronie_glownej']}}</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/'.$setting['zdjecie_2_karuzela_1_na_stronie_glownej'])}});    background-repeat: no-repeat;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>

                <div class="container">
                    <div class="carousel-caption text-end fpb">
                    <h1 class="text-white">{{$setting['naglowek_2_karuzela_1_na_stronie_glownej']}}</h1>
                        <p>{{$setting['paragraf_2_karuzela_1_na_stronie_glownej']}}</p>
                        <p><a class="btn btn-lg btn-primary" style="background-color: #0f4c64;" href="{{$setting['link_2_karuzela_1_na_stronie_glownej']}}">{{$setting['przycisk_2_karuzela_1_na_stronie_glownej']}}</a></p>
                    </div>
                </div>
            </div>
            <!--
            <div class="carousel-item">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/'.$setting['zdjecie_3_karuzela_1_na_stronie_glownej'])}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>

                <div class="container">
                    <div class="carousel-caption text-end fpb">
                        <h1 class="text-white">{{$setting['naglowek_3_karuzela_1_na_stronie_glownej']}}</h1>
                        <p>{{$setting['paragraf_3_karuzela_1_na_stronie_glownej']}}</p>
                        <p><a class="btn btn-lg btn-primary" href="{{$setting['link_3_karuzela_1_na_stronie_glownej']}}">{{$setting['przycisk_3_karuzela_1_na_stronie_glownej']}}</a></p>
                    </div>
                </div>
            </div>-->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!--END SLIDER MAIN-->