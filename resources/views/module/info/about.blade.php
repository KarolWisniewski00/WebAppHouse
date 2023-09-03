<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12 col-md-6">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="d-flex flex-row mb-3">
                        <div class="vr bg-extra" style="border: 3px solid #d28f6f; opacity: .75;"></div>
                        <h1 class="p-0 m-0 ms-3">{{$setting['naglowek_na_stronie_o_nas']}}</h1>
                    </div>
                    <p class="lead">{{$setting['paragraf_na_stronie_o_nas']}}</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid" alt="{{$setting['alt_zdjecie_na_stronie_o_nas']}}" src="{{asset('asset/photo/'.$setting['zdjecie_na_stronie_o_nas'])}}">
            </div>
        </div>
    </div>
</section>
<!--END INFO-->