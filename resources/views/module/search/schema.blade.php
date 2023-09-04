<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            @if(isset($clicked))
            @if($clicked == 'floor-1')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 2</button>
                    </form>
                </div>
            </div>
            @endif
            @if($clicked == 'floor-2')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Parter</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 3</button>
                    </form>
                </div>
            </div>
            @endif
            @if($clicked == 'floor-3')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 2</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 4</button>
                    </form>
                </div>
            </div>
            @endif
            @if($clicked == 'floor-4')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 3</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">

                </div>
            </div>
            @endif
            @endif
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="overflow:hidden">
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/a1.jpg')}}">
                        <div class="s-neutral-b position-absolute p-1px" id="flat-1">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">

                                    <input type="hidden" name="floor" value="1">
                                    <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></button>

                                </div>
                            </div>
                        </div>
                        <div class="s-neutral-b position-absolute p-1px" id="flat-2">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">

                                    <input type="hidden" name="floor" value="2">
                                    <button type="submit" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>