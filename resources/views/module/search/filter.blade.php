<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($table2 == 1)
                <h1>{{$setting['naglowek_etap_1']}}</h1>
                @else
                <h1>{{$setting['naglowek_etap_2']}}</h1>
                @endif
                <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="overflow:hidden">
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/search.jpg')}}">
                        <div class="position-absolute p-1px" id="segment-A1">
                            <div id="h1" class="segment-hover-3 segment-hover-2 s-neutral h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(isset($setting['a2']) && $setting['a2'] === 'on')
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter.second')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="1">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100">
                                            <div class="h5" style="color: white;">Etap 2</div>
                                        </button>
                                    </form>
                                    @endif
                                    @if(isset($setting['a1']) && $setting['a1'] === 'on')
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="1">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;">
                                            <div class="h5" style="color: white;">Etap 1</div>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-A2">
                            <div id="h2" class="segment-hover-3 segment-hover-2 s-neutral h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(isset($setting['a2']) && $setting['a2'] === 'on')
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter.second')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="2">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100">
                                            <div class="h5" style="color: white;">Etap 2</div>
                                        </button>
                                    </form>
                                    @endif
                                    @if(isset($setting['a1']) && $setting['a1'] === 'on')
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="2">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;">
                                            <div class="h5" style="color: white;">Etap 1</div>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B1">
                            <div id="h3" class="segment-hover-3 segment-hover-2 s-neutral h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(isset($setting['a2']) && $setting['a2'] === 'on')
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter.second')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="3">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100">
                                            <div class="h5" style="color: white;">Etap 2</div>
                                        </button>
                                    </form>
                                    @endif
                                    @if(isset($setting['a1']) && $setting['a1'] === 'on')
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="3">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;">
                                            <div class="h5" style="color: white;">Etap 1</div>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B2">
                            <div id="h4" class="segment-hover-3 segment-hover-2 s-neutral h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(isset($setting['a2']) && $setting['a2'] === 'on')
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter.second')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="4">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100">
                                            <div class="h5" style="color: white;">Etap 2</div>
                                        </button>
                                    </form>
                                    @endif
                                    @if(isset($setting['a1']) && $setting['a1'] === 'on')
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="4">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100">
                                            <div class="h5" style="color: white;">Etap 1</div>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute start-50 translate-middle text-center" style="top: 3em;">
                            <h1 class="fs-6">Interaktywne zdjęcie</h1>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <div class="h4 align-self-start">
                        Z zdjęcia lub z listy:
                    </div>
                    @if($table2 == 1)
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button id="4" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 3</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button id="3" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 2</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button id="2" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 1</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button id="1" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Parter</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button id="0" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Garaż -1</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="-1">
                        <button id="-1" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Garaż -2</button>
                    </form>
                    @else
                    <form method="post" class="w-100" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button id="4" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 3</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button id="3" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 2</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button id="2" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Piętro 1</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button id="1" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Parter</button>
                    </form>
                    <form method="post" class="w-100" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button id="0" type="submit" class="segment-hover hbtn hb-fill-left-br w-100 h5">Garaż -1</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--END SEARCH PHOTO-->
<script>
    $(document).ready(function() {
        // Znajdź wszystkie elementy z klasą 'segment-hover'
        var segmentHover = $('.segment-hover');

        // Dodaj obsługę zdarzenia hover
        segmentHover.hover(function() {
            // Wywołaj hover na wszystkich pasujących elementach w obu sekcjach
            var id = $(this).attr('id'); // Pobierz ID segmentu, który jest howerowany
            $('#h' + id).addClass('s-clicked-2'); // Dodaj klasę 'hovered' do wszystkich pasujących elementów
            // Dodaj dowolne dodatkowe działania, które chcesz wykonać w momencie hovera

        }, function() {
            var id = $(this).attr('id');
            // Po opuszczeniu hovera, usuń klasę 'hovered'
            $('#h' + id).removeClass('s-clicked-2');

            // Dodaj dowolne dodatkowe działania po opuszczeniu hovera

        });

        // Znajdź wszystkie elementy z klasą 'segment-hover'
        var segmentHover3 = $('.segment-hover-3');

        // Dodaj obsługę zdarzenia hover
        segmentHover3.hover(function() {
            // Wywołaj hover na wszystkich pasujących elementach w obu sekcjach
            var id = $(this).attr('id'); // Pobierz ID segmentu, który jest howerowany
            id = id.substring(1);

            $('#' + id).addClass('hbtnon-2'); // Dodaj klasę 'hovered' do wszystkich pasujących elementów
            // Dodaj dowolne dodatkowe działania, które chcesz wykonać w momencie hovera

        }, function() {
            var id = $(this).attr('id');
            id = id.substring(1);
            // Po opuszczeniu hovera, usuń klasę 'hovered'
            $('#' + id).removeClass('hbtnon-2');

            // Dodaj dowolne dodatkowe działania po opuszczeniu hovera

        });
    });
</script>