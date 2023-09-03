<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="overflow:hidden">
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/search.jpg')}}">
                        <div class="position-absolute p-1px" id="segment-A1">
                            <div class="{{ ($floor_1 == true) ? 'segment-success' : 'segment-danger' }} @if(isset($clicked)) {{ ($clicked == 'floor-1') ? 's-clicked' : '' }} @endif h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(Storage::exists('public/'.$floor[0]->file_pdf)&& $floor[0]->file_pdf != null)
                                    <a href="{{ asset('storage/'.$floor[0]->file_pdf) }}" download type="button" class="btn btn-primary me-3 btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                                    @else
                                    <button type="button" class="btn btn-primary me-3 btn-sm text-danger">Plik nie istnieje</button>
                                    @endif
                                    <form method="post" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="1">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-A2">
                            <div class="{{ ($floor_2 == true) ? 'segment-success' : 'segment-danger' }} @if(isset($clicked)) {{ ($clicked == 'floor-2') ? 's-clicked' : '' }} @endif h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(Storage::exists('public/'.$floor[1]->file_pdf)&& $floor[1]->file_pdf != null)
                                    <a href="{{ asset('storage/'.$floor[1]->file_pdf) }}" download type="button" class="btn btn-primary me-3 btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                                    @else
                                    <button type="button" class="btn btn-primary me-3 btn-sm text-danger">Plik nie istnieje</button>
                                    @endif
                                    <form method="post" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="2">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B1">
                            <div class="{{ ($floor_3 == true) ? 'segment-success' : 'segment-danger' }} @if(isset($clicked)) {{ ($clicked == 'floor-3') ? 's-clicked' : '' }} @endif h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(Storage::exists('public/'.$floor[2]->file_pdf )&& $floor[2]->file_pdf != null)
                                    <a href="{{ asset('storage/'.$floor[2]->file_pdf) }}" download type="button" class="btn btn-primary me-3 btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                                    @else
                                    <button type="button" class="btn btn-primary me-3 btn-sm text-danger">Plik nie istnieje</button>
                                    @endif
                                    <form method="post" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="3">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute p-1px" id="segment-B2">
                            <div class="{{ ($floor_4 == true) ? 'segment-success' : 'segment-danger' }} @if(isset($clicked)) {{ ($clicked == 'floor-4') ? 's-clicked' : '' }} @endif h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    @if(Storage::exists('public/'.$floor[3]->file_pdf )&& $floor[3]->file_pdf != null)
                                    <a href="{{ asset('storage/'.$floor[3]->file_pdf) }}" download type="button" class="btn btn-primary me-3 btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                                    @else
                                    <button type="button" class="btn btn-primary me-3 btn-sm text-danger">Plik nie istnieje</button>
                                    @endif
                                    <form method="post" action="{{route('invest.filter')}}">
                                        @csrf
                                        <input type="hidden" name="floor" value="4">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
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