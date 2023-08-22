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
<section style="background-color: #3d5906;">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-4 h-100">
                    <h1 class="p-0 m-0 my-2  text-white" style="font-size: 3.8em;">Poznaj lepiej inwestycję osiedle sądowe</h1>
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
                    <div class="col-12">
                        <div class="row text-start">
                            <div class="my-4">
                                <div class="hstack gap-3 mb-3">
                                    <div class="vr bg-extra" style="border: 3px solid #9cca36; opacity: .75;"></div>
                                    <h1 class="p-0 m-0">
                                        <span>Poznaj nasze wyjątkowe
                                            apartamenty</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" alt="" src="{{asset('asset/photo/album/2.jpg')}}">
                            </div>
                            <div class="col-8">
                                <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                    <h3>MAŁY APARTAMENT – DUŻA MOC PERSONALIZACJI WNĘTRZA</h3>
                                    <p>Wszyscy wiemy, że wnętrza w których przebywamy, mają na Nas znacznie większy wpływ niż Nam się wydaje... Kiedy wracasz po pracy bardzo ważne jest aby zrelaksować ciało i umysł w odpowiedni sposób a kolory we wnętrzach mają ogromny wpływ na Nasz nastrój i samopoczucie ... inspirują oraz sprawiają, że nasza przestrzeń życiowa w której codziennie przebywamy nabiera zupełnie indywidualnego stylu i charakteru. To właśnie kolory, które Nas otaczają podnoszą poziom Naszej energii i mają niesamowite znaczenie w życiu. To one częściowo kreują Nasz dzień, wieczór i sen, wpływają na Nasze samopoczucie i usposobienie, bo Nasz nastrój jest przecież inny każdego dnia. Tak projektowane wnętrza mają uspokoić Nasze myśli i ułatwić zasypianie, zapewnić komfort i relaks po czasem ciężkiej pracy. Warto je wprowadzić do wnętrza i życia po to, by uzyskać odprężenie i relaks każdego dnia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" alt="" src="{{asset('asset/photo/album/5.jpg')}}">
                            </div>
                            <div class="col-8">
                                <div class="d-flex flex-column justify-content-start align-items-start text-start">
                                    <h3>
DESIGN BEZ GRANIC - ZNAJDŹ SWOJE WNĘTRZE</h3>
                                    <p>Możesz indywidualnie wykończyć własne wnętrze, w swoim stylu, w zasięgu własnych możliwości finansowych i zgodnie z własną wizją. Dopasuj je do własnych potrzeb dzisiaj i w przyszłości. Galeria przedstawia przykładowe aranżacje - wnętrz apartamentów przygotowane Naszych projektantów. Jak dobrze podejść do takiego wyzwania? ... Jak urządzić poszczególne wnętrza, by wyglądały one stylowo, a jednocześnie by były one w pełni komfortowe? Wszystkim Naszym Klientom mającym przed sobą to wyzwanie podpowiemy, jak urządzić wygodny apartament, który zachwyci swoim wyglądem. Wybór stylu w jakim urządzony zostanie apartament jest jednak kwestią indywidualną właściciela danego wnętrza i zależną w pełni od jego gustu i upodobań ... Zapraszam do zakładki INWESTYCJA / GALERIA i znajdź swój styl i kolory wnętrza. W przypadku indywidualnych koncepcji - zadzwoń chętnie pomożemy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-7">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 my-4" style="min-height: 30em; background-image: url({{asset('asset/photo/info-1.jpg')}});    background-size: cover;    background-position: center;    background-size: cover; filter: brightness(0.75) saturate(1.4);">
                </div>
            </div>
        </div>
    </div>
</section>
<!--END INFO-->