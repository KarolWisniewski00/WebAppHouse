<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($table == 1)
                <h1>{{$setting['naglowek_etap_1']}}</h1>
                @else
                <h1>{{$setting['naglowek_etap_2']}}</h1>
                @endif
            </div>
            @if(isset($clicked))
            @if($clicked == 'floor--1')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
            @if($clicked == 'floor-0')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="-1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -2</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="-1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -2</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
            @if($clicked == 'floor-1')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
            @if($clicked == 'floor-2')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
            @if($clicked == 'floor-3')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 3</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 3</button>
                    </form>
                    @endif
                </div>
            </div>
            @endif
            @if($clicked == 'floor-4')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
                    </form>
                    @else
                    <form method="post" action="{{route('invest.filter.second')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    @if($table == 1)
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @else
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest.second')}}" style="background-color: #0f4c64;">Plan pięter</a>
                    @endif
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
                    @if($clicked == 'floor-1')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f1.jpg')}}">
                        @foreach($tables as $key => $t)
                        @if($t->id == 1)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 32.5%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 1)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 2)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 25%;width: 7.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 2)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 3)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 3)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 4)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 4)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 5)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 7.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 5)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 6)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 32.5%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 6)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 7)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 7)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 8)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 53.5%;width: 11.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 8)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 9)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 9)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 10)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 53.5%;width: 11.5%;height: 23%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 10)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 11)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 11)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @if($clicked == 'floor-3')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f3.jpg')}}">
                        @foreach($tables as $key => $t)
                        @if($t->id == 24)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 42.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 24)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 25)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 32.5%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 25)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 26)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 25%;width: 7.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 26)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 27)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 27)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 28)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 28)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 29)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 7.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 29)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 30)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 32.5%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 30)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 31)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 31)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 32)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 53.5%;width: 11.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 32)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 33)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 33)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 34)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 53.5%;width: 11.5%;height: 23%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 34)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 35)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 35)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @if($clicked == 'floor-4')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f4.jpg')}}">
                        @foreach($tables as $key => $t)
                        @if($t->id == 36)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 42.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 36)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 37)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 32.5%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 37)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 38)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 25%;width: 7.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 38)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 39)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 39)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 40)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 40)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 41)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 7.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 41)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 42)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 32.5%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 42)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 43)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 43)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 44)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 53.5%;width: 11.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 44)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 45)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 45)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 46)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 53.5%;width: 11.5%;height: 23%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 46)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 47)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 47)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    @if($clicked == 'floor-2')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f2.jpg')}}">
                        @foreach($tables as $key => $t)
                        @if($t->id == 12)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 42.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 12)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 13)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 32.5%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 13)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 14)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 25%;width: 7.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 14)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 15)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 38.5%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 15)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 16)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 16)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 17)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 7.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 17)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 18)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 32.5%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 18)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 19)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43%;width: 10.5%;height: 20.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 19)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 20)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 53.5%;width: 11.5%;height: 23.5%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 20)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 21)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 21)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 22)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 53.5%;width: 11.5%;height: 23%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 22)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($t->id == 23)
                        <div class="s-neutral-b position-absolute p-1px @if($t->status == 'avaiable') {{'segment-success'}} @elseif ( $t->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 64.5%;width: 11.5%;height: 35%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route($table == 1 ? 'invest.show' : 'invest.show.second', 23)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
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