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
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 1</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 2</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 1</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100">Piętro 3</button>
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

                </div>
            </div>
            @endif
            @endif
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3" style="overflow:hidden">
                    @if($clicked == 'floor-3')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f3.png')}}">
                        @foreach($tables as $key => $table)
                        @if($table->id == 24)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 48%;width: 10%;height: 25%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 24)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 25)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 37.75%;width: 10%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 25)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 26)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 31%;width: 6.75%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 26)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 27)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 20%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 27)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 28)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 20%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 28)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 29)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 31%;width: 6.75%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 29)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 30)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 12%;left: 37.75%;width: 10%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 30)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 31)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 12%;left: 47.75%;width: 10%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 31)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 32)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 57.75%;width: 11.5%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 32)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 33)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 69.25%;width: 11%;height: 42%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 33)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 34)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 64%;left: 58%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 34)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 35)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 50%;left: 69.25%;width: 11%;height: 42%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 35)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @if($clicked == 'floor-4')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f4.png')}}">
                        @foreach($tables as $key => $table)
                        @if($table->id == 36)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 48%;width: 10%;height: 25%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 36)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 37)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 37.75%;width: 10%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 37)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 38)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 31%;width: 6.75%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 38)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 39)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 41%;left: 20%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 39)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 40)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 20%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 40)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 41)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 31%;width: 6.75%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 41)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 42)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 12%;left: 37.75%;width: 10%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 42)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 43)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 12%;left: 47.75%;width: 10%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 43)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 44)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 57.75%;width: 11.5%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 44)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 45)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 9%;left: 69.25%;width: 11%;height: 42%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 45)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 46)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 64%;left: 58%;width: 11%;height: 28%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 46)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 47)
                        <div class="s-neutral-b position-absolute p-1px {{ $table->status == 'avaiable' ? 'segment-success' : 'segment-danger' }}" style="top: 50%;left: 69.25%;width: 11%;height: 42%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 47)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>