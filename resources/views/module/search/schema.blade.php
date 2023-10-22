<!--SEARCH PHOTO-->
<section>
    <div class="container">
        <div class="row">
            @if(isset($clicked))
            @if($clicked == 'floor--1')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                </div>
            </div>
            @endif
            @if($clicked == 'floor-0')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="-1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -2</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="1">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                </div>
            </div>
            @endif
            @if($clicked == 'floor-1')
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="0">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Garaż -1</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="2">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Parter</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="3">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 1</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <form method="post" action="{{route('invest.filter')}}">
                        @csrf
                        <input type="hidden" name="floor" value="4">
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 3</button>
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
                        <button type="submit" class="btn btn-lg btn-primary h-100" style="background-color: #0f4c64;">Piętro 2</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-row justify-content-center align-items-center mb-3">
                    <a class="btn btn-lg btn-primary h-100" href="{{route('invest')}}" style="background-color: #0f4c64;">Plan pięter</a>
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
                        @foreach($tables as $key => $table)
                        @if($table->id == 1)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 33%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 1)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 2)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 2)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 3)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 3)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 4)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 4)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 5)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 5)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 6)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 33%;width: 10.5%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 6)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 7)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43.5%;width: 11%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 7)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 8)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 8)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 9)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 9)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 10)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 10)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 11)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 11)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
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
                        @foreach($tables as $key => $table)
                        @if($table->id == 24)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 43.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 24)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 25)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 33%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 25)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 26)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 26)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 27)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 27)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 28)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 28)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 29)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 29)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 30)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 33%;width: 10.5%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 30)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 31)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43.5%;width: 11%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 31)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 32)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 32)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 33)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 33)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 34)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 34)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 35)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 66%;width: 11.5%;height: 36%;">
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
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f4.jpg')}}">
                        @foreach($tables as $key => $table)
                        @if($table->id == 36)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 43.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 36)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 37)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 33%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 37)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 38)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 38)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 39)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 39)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 40)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 40)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 41)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 41)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 42)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 33%;width: 10.5%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 42)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 43)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43.5%;width: 11%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 43)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 44)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 44)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 45)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 45)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 46)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 46)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 47)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 66%;width: 11.5%;height: 36%;">
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
                    @if($clicked == 'floor-2')
                    <div class="position-relative">
                        <img class="img-fluid segment-img" alt="" src="{{asset('asset/photo/schema/f2.jpg')}}">
                        @foreach($tables as $key => $table)
                        @if($table->id == 12)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 43.5%;width: 11%;height: 20%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 12)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 13)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 33%;width: 10.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 13)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 14)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 14)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 15)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 39%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 15)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 16)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 14%;width: 11%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 16)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 17)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 25%;width: 8%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 17)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 18)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 33%;width: 10.5%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 18)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 19)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 14%;left: 43.5%;width: 11%;height: 21%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 19)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 20)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 20)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 21)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 11%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 21)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 22)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 58%;left: 54.5%;width: 11.5%;height: 24%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 22)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
                                </div>
                            </div>
                        </div>
                        @elseif($table->id == 23)
                        <div class="s-neutral-b position-absolute p-1px @if($table->status == 'avaiable') {{'segment-success'}} @elseif ( $table->status == 'reservation' ) {{'segment-warning'}} @else {{'segment-danger'}} @endif" style="top: 46%;left: 66%;width: 11.5%;height: 36%;">
                            <div class="h-100 w-100">
                                <div class="d-flex flex-row justify-content-center align-items-center text-center h-100 btn-d">
                                    <a href="{{route('invest.show', 23)}}" class="btn btn-primary btn-sm h-100 w-100" style="background-color: transparent;"></a>
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