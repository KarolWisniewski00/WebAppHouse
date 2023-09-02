<!--TABLE-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 overflow-auto">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Numer</th>
                            <th scope="col">Segment</th>
                            <th scope="col">Mieszkanie</th>
                            <th scope="col">Metraż</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cena</th>
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
                                {{$table->flat}}

                            </td>
                            <td>
                                {{$table->surface}} m2

                            </td>
                            <td class="px-6 py-4">
                                @if($table->status == 'avaiable')
                                <span class="text-success">Dostępny</span>
                                @else
                                <span class="text-danger">Niedostępny</span>
                                @endif
                            </td>
                            <td>
                                {{$table->price}} PLN

                            </td>
                            <td>
                                @if(Storage::exists('public/'.$table->file_pdf))
                                <a href="{{ asset('storage/'.$table->file_pdf) }}" download  type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                @else
                                <p class="text-danger">Plik PDF nie istnieje.</p>
                                @endif
                            </td>
                            <td>
                                @if(Storage::exists('public/'.$table->file_priv))
                                <a href="{{ asset('storage/'.$table->file_priv) }}" download type="button" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down"></i></a>
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
<!--END TABLE-->