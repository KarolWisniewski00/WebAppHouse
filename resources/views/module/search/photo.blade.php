<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="overflow:hidden">
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/search.jpg')}}">
                        <div class="position-absolute p-1px" id="segment-A1">
                            <div id="h1" class="segment-hover-3 segment-hover-2 s-neutral {{ ($floor_1 == true) ? 'segment-success' : 'segment-danger' }} h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="1">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-A2">
                            <div id="h2" class="segment-hover-3 segment-hover-2 s-neutral {{ ($floor_2 == true) ? 'segment-success' : 'segment-danger' }} h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="2">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B1">
                            <div id="h3" class="segment-hover-3 segment-hover-2 s-neutral {{ ($floor_3 == true) ? 'segment-success' : 'segment-danger' }} h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <form method="post" class="w-100 h-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="3">
                                        <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B2">
                            <div id="h4" class="segment-hover-3 segment-hover-2 s-neutral {{ ($floor_4 == true) ? 'segment-success' : 'segment-danger' }} h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <form method="post" class="h-100 w-100" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="4">
                                        <button type="submit" style="background-color: transparent;" class="btn btn-primary btn-sm h-100 w-100"></button>
                                    </form>
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
        </div>
    </div>
</section>
<!--END SEARCH PHOTO-->