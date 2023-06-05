<!--SLIDER MAIN-->
<section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators d-none d-xl-flex justify-content-end align-items-end">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-1.jpeg')}});    background-position: center;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>
                <div class="container">
                    <div class="carousel-caption text-end fpb">
                        <h1 class="text-white">Fenomenalna lokalizacja</h1>
                        <p>ul.Żurawia 4/2, 42-583 Bobrowniki</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Zobacz na mapie</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-2.jpeg')}});    background-repeat: no-repeat;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>

                <div class="container">
                    <div class="carousel-caption text-end fpb">
                        <h1 class="text-white">Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex flex-column justify-content-center align-items-center" style="height: 50em; background-image: url({{asset('asset/photo/slider-3.jpeg')}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>

                <div class="container">
                    <div class="carousel-caption text-end fpb">
                        <h1 class="text-white">One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
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