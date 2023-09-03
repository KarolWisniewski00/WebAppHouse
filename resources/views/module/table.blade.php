<!--TABLE-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 overflow-auto">
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
                            <th scope="col">Status</th>
                            <th scope="col"><i class="fa-solid fa-file-pdf me-2"></i>Plik</th>
                            <th scope="col"></i>Umowa</th>
                            <th scope="col"><i class="fa-solid fa-magnifying-glass"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tables as $key => $table)
                        <tr>
                            <td>
                                {{$key+1}}
                            </td>
                            <td>
                                @if($table->segment == 'floor-4')
                                Piętro 3
                                @elseif($table->segment == 'floor-3')
                                Piętro 2
                                @elseif($table->segment == 'floor-2')
                                Piętro 1
                                @elseif($table->segment == 'floor-1')
                                Parter
                                @endif
                            </td>
                            <td>
                                @if($table->flat == 'room-4')
                                4 Pokoje
                                @elseif($table->flat == 'room-3')
                                3 Pokoje
                                @elseif($table->flat == 'room-2')
                                2 Pokoje
                                @elseif($table->flat == 'room-1')
                                1 Pokój
                                @endif
                            </td>
                            <td>
                                {{$table->surface}} m²
                            </td>
                            <td>
                                {{$table->price_surface}} PLN za m²
                            </td>
                            <td>
                                {{$table->price}} PLN
                            </td>
                            <td class="px-6 py-4">
                                @if($table->status == 'avaiable')
                                <span class="text-success">Dostępny</span>
                                @else
                                <span class="text-danger">Niedostępny</span>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$table->file_pdf))
                                <a href="{{ asset('storage/'.$table->file_pdf) }}" download type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$table->file_priv))
                                <a href="{{ asset('storage/'.$table->file_priv) }}" download type="button" class="btn btn-primary download-button"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            <td><a href="{{route('invest.show', $table->id)}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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