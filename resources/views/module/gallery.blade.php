<!--Gallery-->
<section id="gallery">
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12">
                <h1>Zdjęcia zewnętrzne</h1>
            </div>
            @for($x=1;$x<=9;$x++) <div class="col-6 col-md-4">
                <button type="button" style="border:0;" class="m-0 p-0 mb-4" data-bs-toggle="modal" data-bs-target="#modal-out-{{$x}}">
                    <img class="img-fluid" alt="" src="{{asset('asset/photo/album_out/'.$x.'.jpg')}}">
                </button>

                <div class="modal fade" id="modal-out-{{$x}}" tabindex="-1" aria-labelledby="ModalOutLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 75%; margin-right:auto;margin-left:auto;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid" alt="" src="{{asset('asset/photo/album_out/'.$x.'.jpg')}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
        <hr>
        <div class="col-12">
            <h1>Zdjęcia wewnętrzne</h1>
        </div>
        @for($x=1;$x<=12;$x++) <div class="col-6 col-md-4">
            <button type="button" style="border:0;" class="m-0 p-0 mb-4" data-bs-toggle="modal" data-bs-target="#modal-in-{{$x}}">
                <img class="img-fluid" alt="" src="{{asset('asset/photo/'.$x.'.jpg')}}">
            </button>

            <div class="modal fade" id="modal-in-{{$x}}" tabindex="-1" aria-labelledby="ModalInLabel" aria-hidden="true">
                <div class="modal-dialog" style="max-width: 75%; margin-right:auto;margin-left:auto;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img class="img-fluid" alt="" src="{{asset('asset/photo/'.$x.'.jpg')}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
    <hr>
    <div class="col-12">
        <h1>Wizualizacje wewnętrzne</h1>
    </div>
    @for($x=1;$x<=9;$x++) <div class="col-6 col-md-4">
        <button type="button" style="border:0;" class="m-0 p-0 mb-4" data-bs-toggle="modal" data-bs-target="#modal-viz-{{$x}}">
            <img class="img-fluid" alt="" src="{{asset('asset/photo/album_viz/'.$x.'.jpg')}}">
        </button>

        <div class="modal fade" id="modal-viz-{{$x}}" tabindex="-1" aria-labelledby="ModalVizLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="max-width: 75%; margin-right:auto;margin-left:auto;">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" alt="" src="{{asset('asset/photo/album_viz/'.$x.'.jpg')}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark me-2"></i>Zamknij</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endfor
        </div>
        <div class="text-end m-0 p-0 pt-1 opacity-50">
            <p class="text-muted lead">02</p>
        </div>
        </div>
</section>
<!--END Gallery-->