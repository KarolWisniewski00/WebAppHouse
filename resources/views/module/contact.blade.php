<!--FORM CONTACT-->
<section>
    <div class="position-relative" id="card-form-contact-container">
        <div class="card border-primary mb-3 position-absolute top-100 start-50 translate-middle" id="card-form-contact">
            <div class="card-header">Kontakt</div>
            <div class="card-body">
                <div class="d-flex flex-column justify-content-center align-items-start mb-4 mx-2">
                    <h4 class="card-title mb-4">Masz pytania?</h4>
                    <label class="form-label">Dane</label>
                    <form id="contact-form" class="w-100">
                        <div class="row w-100">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3 w-100">
                                    <input type="text" class="form-control w-100" id="name">
                                    <label for="name">Imię</label>
                                    <div class="invalid-feedback" id="name-invalid"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3 w-100">
                                    <input type="text" class="form-control w-100" id="surname">
                                    <label for="surname">Nazwisko</label>
                                    <div class="invalid-feedback" id="surname-invalid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 w-100 has-success">
                            <input type="email" class="form-control" id="email">
                            <label for="email">Email</label>
                            <div class="invalid-feedback" id="email-invalid"></div>
                        </div>
                        <div class="form-floating mb-3 w-100 has-danger">
                            <input type="text" class="form-control" id="title">
                            <label for="title">Tytuł</label>
                            <div class="invalid-feedback" id="title-invalid"></div>
                        </div>

                        <div class="form-group mb-3 w-100">
                            <label for="mess" class="form-label">Wiadomość</label>
                            <textarea class="form-control" id="mess" rows="3"></textarea>
                            <div class="invalid-feedback" id="mess-invalid"></div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-start my-4 flex-wrap">
                            <p class="card-text m-0 p-0 mx-4 my-2 text-start mb-3">Administratorem Pani/Pana danych osobowych jest PERFECT JOBS SP Z.O.O z siedzibą w Piekarach Śląskich przy ulicy Walentego Roździeńskiego 2a/20 NIP 4980269203</p>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check1" required>
                                <label class="form-check-label" for="check1">
                                    Oświadczam że zapoznałem się z <a href="{{route('rodo')}}">polityką informacyjną</a>
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check2" required>
                                <label class="form-check-label" for="check2">
                                    Wyrażam zgodę na przetwarzanie moich danych osobowych w zakresie imienia i nazwiska, numeru telefonu, adresu email, oraz wysyłanie informacji reklamowych.
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="check3" required>
                                <label class="form-check-label" for="check3">
                                    Podaję dane osobowe dobrowolnie i oświadczam, że są one zgodne z prawdą.
                                </label>
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
<script>
    $(document).ready(function() {
        $('#contact-form').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize(); // Pobranie danych z formularza

            $.ajax({
                type: 'POST',
                url: '/url-do-twojego-endpointu', // Zmień na właściwy URL
                data: formData,
                success: function(response) {
                    // Obsługa odpowiedzi po udanym zapytaniu
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Obsługa błędów
                    $('#title').addClass('is-invalid')
                    $('#title-invalid').html('test')
                    $('#name').addClass('is-invalid')
                    $('#name-invalid').html('test')
                    $('#surname').addClass('is-invalid')
                    $('#surname-invalid').html('test')
                    $('#email').addClass('is-invalid')
                    $('#email-invalid').html('test')
                    $('#mess').addClass('is-invalid')
                    $('#mess-invalid').html('test')
                }
            });
        });
    });
</script>
<!--END FORM CONTACT-->