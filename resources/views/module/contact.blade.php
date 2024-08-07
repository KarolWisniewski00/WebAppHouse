<!--FORM CONTACT-->
<section>
    <div class="position-relative" id="card-form-contact-container">
        <div class="card border-primary mb-3 position-absolute top-100 start-50 translate-middle" id="card-form-contact">
            <div class="card-header">Kontakt</div>
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-start mb-4 mx-2">
                    <h4 class="card-title mb-4">Masz pytania?</h4>
                    <label class="form-label">Dane</label>
                    <form id="contact-form" class="w-100" action="{{ route('contact.form') }}" method="POST">
                        @csrf
                        <div class="row w-100">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3 w-100">
                                    <input type="text" class="form-control w-100" id="name" name="name">
                                    <label for="name">Imię</label>
                                    @error('name')
                                    <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3 w-100">
                                    <input type="text" class="form-control w-100" id="surname" name="surname">
                                    <label for="surname">Nazwisko</label>
                                    @error('surname')
                                    <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 w-100 has-success">
                            <input type="email" class="form-control" id="email" name="email">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3 w-100 has-danger">
                            <input type="text" class="form-control" id="title" name="title">
                            <label for="title">Tytuł</label>
                            @error('title')
                            <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 w-100">
                            <label for="mess" class="form-label">Wiadomość</label>
                            <textarea class="form-control" id="mess" rows="3" name="mess"></textarea>
                            @error('mess')
                            <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-start my-4 flex-wrap">
                            <p class="card-text m-0 p-0 mx-4 my-2 text-start mb-3">Administratorem Pani/Pana danych osobowych jest PERFECT JOBS SP Z.O.O z siedzibą w Piekarach Śląskich przy ulicy Sienkiewicza 1 NIP 4980269203</p>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check1" required name="check1">
                                <label class="form-check-label" for="check1">
                                    Oświadczam że zapoznałem się z <a href="{{route('rodo')}}">polityką informacyjną</a>
                                </label>
                                @error('check1')
                                <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check2" required name="check2">
                                <label class="form-check-label" for="check2">
                                    Wyrażam zgodę na przetwarzanie moich danych osobowych w zakresie imienia i nazwiska, numeru telefonu, adresu email, oraz wysyłanie informacji reklamowych.
                                </label>
                                @error('check2')
                                <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check3" required name="check3">
                                <label class="form-check-label" for="check3">
                                    Podaję dane osobowe dobrowolnie i oświadczam, że są one zgodne z prawdą.
                                </label>
                                @error('check3')
                                <div class="invalid-feedback" id="name-invalid">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary mb-3 w-100 hover-1" style="background-color: #0f4c64;" type="submit">Wyślij</button>
                    </form>
                </div>
                <div class="d-flex justify-content-center align-items-center my-4 flex-wrap">
                    <a href="tel:+48{{$setting['strona_kontaktowa_telefon_działu']}}" class="card-text m-0 p-0 mx-4 my-2 text-nowrap" style="text-decoration: none;">{{$setting['strona_kontaktowa_telefon_działu']}}</a>
                    <a href="mailto:{{$setting['strona_kontaktowa_email_działu']}}" class="card-text m-0 p-0 mx-4 my-2" style="text-decoration: none;">{{$setting['strona_kontaktowa_email_działu']}}</a>
                    <p class="card-text m-0 p-0 mx-4 my-2 text-center">{{$setting['strona_kontaktowa_napis_główny_ciemny']}} {{$setting['strona_kontaktowa_napis_główny_jasny']}} {{$setting['strona_kontaktowa_ulica']}}, {{$setting['strona_kontaktowa_miasto']}}</p>
                </div>
            </div>
        </div>
</section>

<!--END FORM CONTACT-->