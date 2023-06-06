<!--TABLE-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 overflow-auto">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Numer</th>
                            <th scope="col">Segmenty</th>
                            <th scope="col">Sypialnie</th>
                            <th scope="col">Metraż</th>
                            <th scope="col">Metraż ogrodu</th>
                            <th scope="col">Status</th>
                            <th scope="col"><i class="fa-solid fa-file-pdf me-2"></i>Plik</th>
                            <th scope="col"><i class="fa-solid fa-magnifying-glass"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-primary">
                            <th>1</th>
                            <td>A1</td>
                            <td>3 + garaż lub 4</td>
                            <td>101,08 m2</td>
                            <td>181,40 m2</td>
                            <td class="text-danger">Nie dostępne</td>
                            <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                            <td><a href="{{route('invest.show','A1')}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="table-secondary">
                            <th>2</th>
                            <td>A2</td>
                            <td>3 + garaż lub 4</td>
                            <td>101,08 m2</td>
                            <td>60m2</td>
                            <td class="text-success">Dostępne</td>
                            <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                            <td><a href="{{route('invest.show','A2')}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="table-primary">
                            <th>3</th>
                            <td>B1</td>
                            <td>3 + garaż lub 4</td>
                            <td>101,08 m2</td>
                            <td>60 m2</td>
                            <td class="text-danger">Nie dostępne</td>
                            <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                            <td><a href="{{route('invest.show','B1')}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="table-secondary">
                            <th>4</th>
                            <td>B2</td>
                            <td>3 + garaż lub 4</td>
                            <td>101,08 m2</td>
                            <td>181,40 m2</td>
                            <td class="text-danger">Nie dostępne</td>
                            <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></button></td>
                            <td><a href="{{route('invest.show','B2')}}" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--END TABLE-->