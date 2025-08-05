<!--TABLE-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 overflow-auto">
                @if(isset($clicked))
                @if($clicked == 'floor--1')
                <div class="col-12">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                        <img alt="" src="{{ asset('asset/garaz-2.png') }}" class="w-100 h-auto">
                    </div>
                </div>
                @elseif($clicked == 'floor-0')
                <div class="col-12">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                        <img alt="" src="{{ asset('asset/garaz-1.png') }}" class="w-100 h-auto">
                    </div>
                </div>
                @else
                <div id="pin-modal" style="display: none;">
                    <div class="d-flex flex-column justify-content-center align-items-start text-center my-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">PIN</span>
                            <input type="text" class="form-control" id="pin-input" placeholder="Wprowadź kod pin" aria-describedby="basic-addon1">
                        </div>
                        <button id="pin-confirm" class="btn btn-primary">Potwierdź</button>
                    </div>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Numer</th>
                            <th scope="col">Piętro</th>
                            <th scope="col">Pokoje</th>
                            <th scope="col">Metraż</th>
                            <th scope="col">Cena za m²</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Najniższa cena z ostatnich 30 dni</th>
                            <th scope="col">Status</th>
                            <th scope="col"><i class="fa-solid fa-file-pdf me-2"></i>Plik</th>
                            <th scope="col"></i>Umowa</th>
                            <th scope="col"><i class="fa-solid fa-magnifying-glass"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tables as $key => $t)
                        <tr>
                            <td>
                                {{$t->id}}
                            </td>
                            <td>
                                @if($t->segment == 'floor-4')
                                Piętro 3
                                @elseif($t->segment == 'floor-3')
                                Piętro 2
                                @elseif($t->segment == 'floor-2')
                                Piętro 1
                                @elseif($t->segment == 'floor-1')
                                Parter
                                @endif
                            </td>
                            <td>
                                @if($t->flat == 'room-4')
                                4
                                @elseif($t->flat == 'room-3')
                                3
                                @elseif($t->flat == 'room-2')
                                2
                                @elseif($t->flat == 'room-1')
                                1
                                @endif
                            </td>
                            <td>
                                {{$t->surface}} m²
                            </td>
                            <td>
                                {{$t->price_surface}}
                            </td>
                            <td>
                                {{$t->price}} <span style="font-size: xx-small;">zł</span>
                            </td>
                            <td>
                                {{$t->lowestPriceLast30Days()}} <span style="font-size: xx-small;">zł</span>
                            </td>
                            <td class="px-6 py-4">
                                @if($t->status == 'avaiable')
                                <span class="text-success">Dostępne</span>
                                @elseif($t->status == 'reservation')
                                <span class="text-warning">Rezerwacja</span>
                                @elseif($t->status == 'sold')
                                <span class="text-danger">Sprzedane</span>
                                @else
                                <span class="text-danger">Niedostępne</span>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$t->file_pdf))
                                <a href="{{ asset('storage/'.$t->file_pdf) }}" download style="background-color: #0f4c64;" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$t->file_priv))
                                <a href="{{ asset('storage/'.$t->file_priv) }}" download style="background-color: #0f4c64;" class="btn btn-primary  hover-1 download-button"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            @if($table2 == 1)
                            <td><a href="{{route('invest.show', $t->id)}}" class="btn btn-primary hover-1 " style="background-color: #0f4c64;"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                            @else
                            <td><a href="{{route('invest.show.second', $t->id)}}" class="btn btn-primary hover-1 " style="background-color: #0f4c64;"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
                @else
                <div id="pin-modal" style="display: none;">
                    <div class="d-flex flex-column justify-content-center align-items-start text-center my-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">PIN</span>
                            <input type="text" class="form-control" id="pin-input" placeholder="Wprowadź kod pin" aria-describedby="basic-addon1">
                        </div>
                        <button id="pin-confirm" class="btn btn-primary">Potwierdź</button>
                    </div>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Numer</th>
                            <th scope="col">Piętro</th>
                            <th scope="col">Pokoje</th>
                            <th scope="col">Metraż</th>
                            <th scope="col">Cena za m²</th>
                            <th scope="col">Cena</th>
                            <th scope="col">Najniższa cena z ostatnich 30 dni</th>
                            <th scope="col">Status</th>
                            <th scope="col"><i class="fa-solid fa-file-pdf me-2"></i>Plik</th>
                            <th scope="col"></i>Umowa</th>
                            <th scope="col"><i class="fa-solid fa-magnifying-glass"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tables as $key => $t)
                        <tr>
                            <td>
                                {{$t->id}}
                            </td>
                            <td>
                                @if($t->segment == 'floor-4')
                                Piętro 3
                                @elseif($t->segment == 'floor-3')
                                Piętro 2
                                @elseif($t->segment == 'floor-2')
                                Piętro 1
                                @elseif($t->segment == 'floor-1')
                                Parter
                                @endif
                            </td>
                            <td>
                                @if($t->flat == 'room-4')
                                4
                                @elseif($t->flat == 'room-3')
                                3
                                @elseif($t->flat == 'room-2')
                                2
                                @elseif($t->flat == 'room-1')
                                1
                                @endif
                            </td>
                            <td>
                                {{$t->surface}} m²
                            </td>
                            <td>
                                {{$t->price_surface}}
                            </td>
                            <td>
                                {{$t->price}} <span style="font-size: xx-small;">zł</span>
                            </td>
                            <td>
                                {{$t->lowestPriceLast30Days()}} <span style="font-size: xx-small;">zł</span>
                            </td>
                            <td class="px-6 py-4">
                                @if($t->status == 'avaiable')
                                <span class="text-success">Dostępne</span>
                                @elseif($t->status == 'reservation')
                                <span class="text-warning">Rezerwacja</span>
                                @elseif($t->status == 'sold')
                                <span class="text-danger">Sprzedane</span>
                                @else
                                <span class="text-danger">Niedostępne</span>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$t->file_pdf))
                                <a href="{{ asset('storage/'.$t->file_pdf) }}" download style="background-color: #0f4c64;" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('downloadAllFiles') }}" download style="background-color: #0f4c64;" class="btn btn-primary  hover-1 download-button"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                            </td>
                            @if($table2 == 1)
                            <td><a href="{{route('invest.show', $t->id)}}" class="btn btn-primary hover-1 " style="background-color: #0f4c64;"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                            @else
                            <td><a href="{{route('invest.show.second', $t->id)}}" class="btn btn-primary hover-1 " style="background-color: #0f4c64;"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</section>
<script>
    var pinned = false;
    $(document).ready(function() {
        $(".download-button").click(function(e) {
            if (pinned == false) {
                e.preventDefault();
                $("#pin-modal").show();
            }
        });

        $("#pin-confirm").click(function() {
            var enteredPin = $("#pin-input").val();
            $.ajax({
                url: "{{ route('pin') }}",
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    pin: enteredPin
                },
                success: function(response) {
                    if (response['success'] == false) {
                        alert("Błędny kod PIN. Spróbuj ponownie.");
                    } else {
                        $("#pin-modal").hide();
                        pinned = true;
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

    });
</script>
<!--END TABLE-->