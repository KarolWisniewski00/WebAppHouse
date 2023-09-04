<!--FORM SEARCH-->
<section>
    <form method="post" action="{{route('invest.filter')}}">
        @csrf
        <div class="position-relative" id="card-form-apart-container">
            <div class="card border-primary mb-3 position-absolute top-0 start-50 translate-middle" id="card-form-apart" style="
        background-color:#f5f7f9;
        --bs-card-border-width:0!important;
        --bs-card-border-color:transparent!important;
        border: 1px solid #d28f6f!important;">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="card-body">
                        <div class="d-flex justify-content-start align-items-center w-100">
                            <div class="form-group mx-auto">
                                <label for="exampleFormControlInput1">Powierzchnia</label>
                                <div class="d-flex justify-content-start align-items-center" id="exampleFormControlInput1">
                                    <input type="number" step="0.01" class="form-control mx-1" id="exampleFormControlInput2" placeholder="Od" name="from">
                                    <div>-</div>
                                    <input type="number" step="0.01" class="form-control mx-1" id="exampleFormControlInput3" placeholder="Do" name="to">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start align-items-center w-100">
                            <div class="form-group mx-auto">
                                <label for="exampleSelect1" class="form-label">Liczba pokoi</label>
                                <select class="form-select" id="exampleSelect1" name="room">
                                    <option value="Wybierz">Wybierz</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start align-items-center w-100">
                            <div class="form-group mx-auto">
                                <label for="exampleSelect2" class="form-label">Piętra</label>
                                <select class="form-select" id="exampleSelect2" name="floor">
                                    <option value="Wybierz">Wybierz</option>
                                    <option value="1">Parter</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body"><button class="btn btn-extra w-100 my-auto" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i>Szukaj</button></div>
                </div>
            </div>
        </div>
    </form>
</section>
<!--END FORM SEARCH-->