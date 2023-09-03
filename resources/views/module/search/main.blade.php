<!--FORM SEARCH-->
<section>
    <div class="position-relative" id="card-form-apart-container">
        <div class="card border-primary mb-3 position-absolute top-0 start-50 translate-middle" id="card-form-apart" style="
        background-color:#F8F2F0;
        --bs-card-border-width:0!important;
        --bs-card-border-color:transparent!important;
        border: 1px solid #d28f6f!important;">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center w-100">
                        <div class="form-group mx-auto">
                            <label for="exampleFormControlInput1">Powierzchnia</label>
                            <div class="d-flex justify-content-start align-items-center" id="exampleFormControlInput1">
                                <input type="text" class="form-control mx-1" id="exampleFormControlInput2" placeholder="Od">
                                <div>-</div>
                                <input type="text" class="form-control mx-1" id="exampleFormControlInput3" placeholder="Do">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center w-100">
                        <div class="form-group mx-auto">
                            <label for="exampleSelect1" class="form-label">Liczba pokoi</label>
                            <select class="form-select" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center w-100">
                        <div class="form-group mx-auto">
                            <label for="exampleSelect2" class="form-label">Piętra</label>
                            <select class="form-select" id="exampleSelect2">
                                <option>Parter</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body"><a href="{{route('invest')}}" class="btn btn-extra w-100 my-auto" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i>Szukaj</a></div>
            </div>
        </div>
    </div>
</section>
<!--END FORM SEARCH-->