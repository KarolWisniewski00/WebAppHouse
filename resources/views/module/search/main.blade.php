<!--FORM SEARCH-->
<section >
    <form method="post" action="{{route('invest.filter')}}" id="searchForm">
        @csrf
        <div class="position-relative" id="card-form-apart-container">
            <div class="card border-primary mb-3 top-100 top-xl-0 start-50 translate-middle" id="card-form-apart" style="
        background-color:#f5f7f9;
        --bs-card-border-width:0!important;
        --bs-card-border-color:transparent!important;
        border: 1px solid #d28f6f!important;">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-column flex-lg-row py-2 px-4 flex-xl-column">
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="form-group w-100 mx-1">
                                <label for="exampleFormControlInput1">Powierzchnia</label>
                                <div class="d-flex justify-content-start align-items-center" id="exampleFormControlInput1">
                                    <input type="number" step="0.01" class="form-control mx-1" id="exampleFormControlInput2" placeholder="Od" name="from">
                                    <input type="number" step="0.01" class="form-control mx-1" id="exampleFormControlInput3" placeholder="Do" name="to">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="form-group w-100 mx-1">
                                <label for="room" class="form-label">Liczba pokoi</label>
                                <select class="form-select" id="room" name="room">
                                    <option value="Wybierz">Wybierz</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group w-100 mx-1">
                                <label for="floor" class="form-label">Piętra</label>
                                <select class="form-select" id="floor" name="floor">
                                    <option value="Wybierz">Wybierz</option>
                                    <option value="1">Parter</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="form-group w-100 mx-1">
                                <label for="step" class="form-label">Etap</label>
                                <select class="form-select" id="step">
                                    @if(isset($setting['a1']) && $setting['a1'] === 'on')
                                    <option value="{{ $setting['naglowek_etap_1'] }}">{{ $setting['naglowek_etap_1'] }}</option>
                                    @endif

                                    @if(isset($setting['a2']) && $setting['a2'] === 'on')
                                    <option value="{{ $setting['naglowek_etap_2'] }}">{{ $setting['naglowek_etap_2'] }}</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 m-0 p-md-4">
                        <button class="btn btn-extra btn-sm w-100 my-auto hover-1" type="submit">
                            <i class="fa-solid fa-magnifying-glass me-2 d-none d-md-inline"></i>Szukaj
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<input type="hidden" id="invest_filter" value="{{route('invest.filter')}}">
<input type="hidden" id="invest_filter_second" value="{{route('invest.filter.second')}}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var invest_filter = $('#invest_filter').val();
        var invest_filter_second = $('#invest_filter_second').val();

        $('#step').change(function() {
            var selectedValue = $(this).val();
            console.log(selectedValue, invest_filter, invest_filter_second);
            if (selectedValue === invest_filter) {
                $('#searchForm').attr('action', invest_filter);
            } else {
                $('#searchForm').attr('action', invest_filter_second);
            }
        });
    });
</script>
<!--END FORM SEARCH-->