<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartamenty</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        *:not(i) {
            font-family: 'Roboto', sans-serif !important;
        }

        .accordion {
            --bs-accordion-active-bg: transparent !important;
        }

        #segment-A1 {
            top: 86%;
            left: 4%;
            width: 93%;
            height: 13%;
        }

        #segment-A2 {
            top: 75%;
            left: 4%;
            width: 93%;
            height: 11%;
        }

        #segment-B1 {
            top: 64%;
            left: 4%;
            width: 93%;
            height: 11%;
        }

        #segment-B2 {
            top: 49%;
            left: 4%;
            width: 93%;
            height: 15%;
        }

        #flat-1 {
            top: 10%;
            left: 9%;
            width: 40%;
            height: 50%;
        }

        #flat-2 {
            top: 10%;
            left: 53%;
            width: 40%;
            height: 50%;
        }

        .btn-d {
            visibility: hidden !important;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s ease, background-color 0.5s ease;
            background-color: transparent;
        }

        .segment-success:hover .btn-d {
            visibility: visible !important;
            opacity: 1;
            background-color: rgba(88, 189, 123, 0.3) !important;
        }

        .segment-warning:hover .btn-d {
            visibility: visible !important;
            opacity: 1;
            background-color: rgba(255, 204, 0, 0.3) !important;
        }

        .segment-danger:hover .btn-d {
            visibility: visible !important;
            opacity: 1;
            background-color: rgba(184, 71, 67, 0.3) !important;
        }

        .s-neutral:hover .btn-d {
            visibility: visible !important;
            opacity: 1 !important;
            background-color: rgba(15, 76, 100, 0.5);
            transition: visibility 0s, opacity 0.5s ease, background-color 0.5s ease;
        }

        .s-neutral-b:hover .btn-d {
            visibility: visible !important;
            opacity: 1 !important;
            background-color: rgba(0, 0, 0, 0.3);
            transition: visibility 0s, opacity 0.5s ease, background-color 0.5s ease;
        }

        .s-clicked .btn-d {
            visibility: visible !important;
            opacity: 1 !important;
            background-color: rgba(15, 76, 100, 0.5);
            transition: visibility 0s, opacity 0.5s ease, background-color 0.5s ease;
        }

        .s-clicked-2 .btn-d {
            visibility: visible !important;
            opacity: 1 !important;
            background-color: rgba(15, 76, 100, 0.5);
            transition: visibility 0s, opacity 0.5s ease, background-color 0.5s ease;
        }

        .p-1px {
            padding: 1px;
        }

        .color-extra {
            color: #d28f6f;
            transition: 1s ease-in-out;
        }

        .color-extra-2 {
            color: #0f4c64;
            fill: #0f4c64;
            transition: 1s ease-in-out;
        }

        .bg-extra {
            background-color: #9cca36;
        }

        .bg-extra-hover {
            transition: 1s ease-in-out;
        }

        .bg-extra-hover:hover {
            background-color: #0f4c64 !important;
            transition: 1s ease-in-out;
        }

        .bg-extra-hover:hover .text-hover {
            color: white !important;
            transition: 1s ease-in-out;
        }

        .bg-extra-hover:hover .color-extra {
            color: white !important;
            transition: 1s ease-in-out;
        }

        .bg-extra-hover:hover .color-extra-2 {
            color: white !important;
            fill: white !important;
            transition: 1s ease-in-out;
        }

        .text-hover {
            transition: 1s ease-in-out;
        }

        .btn-extra {
            --bs-btn-color: #fff;
            --bs-btn-bg: #d28f6f;
            --bs-btn-border-color: #d28f6f;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #c17e5c;
            /* Dostosowany kolor tła po najechaniu myszką */
            --bs-btn-hover-border-color: #a9714a;
            /* Dostosowany kolor obramowania po najechaniu myszką */
            --bs-btn-focus-shadow-rgb: 210, 143, 111;
            /* Dostosowany kolor cienia w stanie focus */
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #a9714a;
            /* Dostosowany kolor tła w stanie aktywnym */
            --bs-btn-active-border-color: #965f3e;
            /* Dostosowany kolor obramowania w stanie aktywnym */
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #d28f6f;
            /* Dostosowany kolor tła w stanie wyłączonym */
            --bs-btn-disabled-border-color: #d28f6f;
            /* Dostosowany kolor obramowania w stanie wyłączonym */
        }

        .border-custom-left-2 {
            border: 1px solid #d28f6f !important;
        }

        .border-custom-right-2 {
            border: 1px solid #d28f6f !important;
        }

        .border-custom-01 {
            border: 1px solid #d28f6f !important;
            border-top: 0px solid #d28f6f !important;
        }

        .border-custom-02 {
            border: 1px solid #d28f6f !important;
            border-bottom: 0px solid #d28f6f !important;
        }

        #card-form-apart {
            position: relative !important;
        }

        .mt-sm-custom {
            margin-top: 8em !important;
        }

        @media (min-width: 576px) {
            .border-custom-left {
                border-left: 1px solid #d28f6f !important;
            }

            .border-custom-right {
                border-right: 1px solid #d28f6f !important;
            }

            @media (max-width: 768px) {
                .border-custom-left-md {
                    border-left: 1px solid #d28f6f !important;
                }
            }
        }

        .custom-size {
            font-size: 1em !important;
        }

        .custom-size-p {
            font-size: 0.8em !important;
        }

        .translate-custom {
            background-color: #f5f7f9;
            --bs-card-border-width: 0 !important;
            --bs-card-border-color: transparent !important;
        }

        @media (min-width: 1200px) {
            .mt-sm-custom {
                margin-top: 0em !important;
            }

            .top-xl-0 {
                top: 0% !important;
            }

            #card-form-apart {
                position: absolute !important;
            }

            .custom-size {
                font-size: 3em !important;
            }

            .custom-size-p {
                font-size: 2em !important;
            }

            .translate-custom {
                top: 100%;
                right: 0%;
                transform: translate(-50%, -50%);
                position: absolute !important;
                max-width: 30rem;
                z-index: 100;
                background-color: #f5f7f9;
            }

            .pb-12 {
                padding-bottom: 12em;
            }

            .border-custom-left-2 {
                border-left: 0px solid #d28f6f !important;
            }

            .border-custom-right-2 {
                border-right: 0px solid #d28f6f !important;
            }

            .border-custom-01 {
                border-top: 1px solid #d28f6f !important;
            }

            .border-custom-02 {
                border-bottom: 1px solid #d28f6f !important;
            }
        }

        .hbtn {
            position: relative !important;
            box-sizing: border-box !important;
            display: inline-block !important;
            overflow: hidden !important;
            padding: 8px 20px !important;
            margin: 0px 3px 6px !important;
            text-align: center !important;
            border: 2px solid #0f4c64 !important;
            text-decoration: none !important;
            color: black !important;
            white-space: nowrap !important;
            z-index: 0 !important;
            background-color: #f5f7f9;
        }


        .hbtn i {
            padding-right: 8px !important;
        }


        .hb-fill-left-br::before {
            position: absolute !important;
            content: "" !important;
            background: #0f4c64 !important;
            transition-duration: 0.3s !important;
            z-index: -1 !important;
            inset: 0px 0px auto auto !important;
            width: 0px !important;
            height: 100% !important;
            opacity: 1 !important;
            border: 2px solid #0f4c64 !important;
        }


        .hb-fill-left-br:hover::before {
            width: 100% !important;
            height: 100% !important;
            opacity: 1 !important;
        }


        .hb-fill-left-br:hover {
            color: #f5f7f9 !important;
            background: #0f4c64 !important;
            transition: color 0.3s ease 0s, background 0s ease 0.3s !important;
        }

        .hbtnon {
            color: #f5f7f9 !important;
            background: #0f4c64 !important;
            transition: color 0.3s ease 0s, background 0s ease 0.3s !important;
        }

        .hbtnon::before {
            width: 100% !important;
            height: 100% !important;
            opacity: 1 !important;
        }

        .hbtnon-2 {
            color: #f5f7f9 !important;
            background: #0f4c64 !important;
            transition: color 0.3s ease 0s, background 0s ease 0.3s !important;
        }

        .hbtnon-2::before {
            width: 100% !important;
            height: 100% !important;
            opacity: 1 !important;
        }

        .v-size {
            width: 100%;
            transition: width 1s ease-in-out;
            transition: margin-left 1s ease-in-out;
        }

        .nav-hover {
            transition: ease-in-out 200ms;

        }

        .nav-hover:hover {
            transform: scale(1.05);
            color: #0f4c64;
            transition: ease-in-out 200ms;
        }

        .hover-1 {
            transition: ease-in-out 200ms;
        }

        .hover-1:hover {
            transform: scale(1.05);
            transition: ease-in-out 200ms;
        }

        .filter {
            filter: brightness(0.75) saturate(1.4);
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <meta name="author" content="Karol Wiśniewski">
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta property="og:locale" content="pl_PL" />
    <link rel="icon" href="{{asset('asset/photo/'.$setting['logo_w_pasku_nawigacyjnym'])}}" type="image/png">
    <link rel="apple-touch-icon" href="{{asset('asset/photo/'.$setting['logo_w_pasku_nawigacyjnym'])}}">
    <meta name="base-url" content="https://dggdevelopment.pl/">
    <link rel="canonical" href="https://dgginvestments.pl/">
    <meta property="og:url" content="https://dggdevelopment.pl/">
    <meta property="og:site_name" content="DGG Development" />
    <meta name="twitter:card" content="summary" />
    <!--SEO-->
    @yield('SEO')
</head>

<body>
    <style>
        .phone-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            font-size: 24px;
            z-index: 1000000;
        }

        .phone-button:hover {
            background-color: #b91c1c;
            color: white;
        }

        .modal-dialog-custom {
            margin: 0;
            height: 100%;
            display: flex;
            align-items: flex-end;
        }

        .modal-content-custom {
            width: 100vw;
            height: 100%;
            border-radius: 0;
            padding: 15px;
        }

        .modal-body-custom p {
            margin-bottom: 15px;
        }
    </style>
    <style>
        .bubble-container {
            position: fixed;
            z-index: 1050;
            background-color: #030712;
            border-radius: 10px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            bottom: 20px;
            left: 100px;
            min-height: 60px;
            clip-path: polygon(10px 0%, 100% 0%, 100% 100%, 10px 100%, 0% 50%);
        }

        .bubble-text {
            margin-right: 5px;
            font-size: 16px;
            color: #333;
            color: #f5f7f9;
        }

        .close-bubble {
            background: none;
            border: none;
            font-size: 16px;
            color: #333;
            cursor: pointer;
            color: #f5f7f9;
        }
    </style>
    </head>

    <body>
        @php
        $isWeekday = $currentTime->isWeekday();
        $isBetween9And15 = $currentTime->hour >= 9 && $currentTime->hour < 15;
            @endphp

            @if($isWeekday && $isBetween9And15)
            @if($setting['moduldzwonienie']=='on' )
            <!-- Przycisk -->
            <a href="tel:731518516" class="phone-button m-0 p-0 rounded-circle border-0">
                <i class="fas fa-phone"></i>
            </a>
            @else
            <!-- Przycisk z dymkiem -->
            <div class="bubble-container" id="infoBubble">
                <span class="bubble-text">Chcesz, żebyśmy zadzwonili do<br> Ciebie w 26 sekund?</span>
                <button class="close-bubble" onclick="closeBubble()">&times;</button>
            </div>
            <!-- Przycisk telefonu -->
            <button type="button" class="phone-button m-0 p-0 rounded-circle border-0" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="fas fa-phone"></i>
            </button>
            @endif
            @else
            <!-- Przycisk z dymkiem -->
            <div class="bubble-container" id="infoBubble">
                <span class="bubble-text">Chcesz, żebyśmy zadzwonili do<br> Ciebie w 26 sekund?</span>
                <button class="close-bubble" onclick="closeBubble()">&times;</button>
            </div>
            <!-- Przycisk telefonu -->
            <button type="button" class="phone-button m-0 p-0 rounded-circle border-0" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="fas fa-phone"></i>
            </button>
            @endif

            <script>
                // Funkcja zamykająca dymek
                function closeBubble() {
                    const bubble = document.getElementById('infoBubble');
                    bubble.style.display = 'none';
                }
            </script>
            <!-- Modal -->
            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-custom">
                    <div class="modal-content modal-content-custom">
                        <form class="mb-4" action="{{ route('contact.call.store') }}" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contactModalLabel">Kontakt</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body modal-body-custom">
                                <h2 class="text-center mb-4">Żaden konsultant nie jest obecnie dostępny.<br><br>
                                    Czy chcesz żebyśmy zadzwonili w innym terminie?</h2>
                                @csrf
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Wprowadź email">
                                </div>
                                <div class="mb-2">
                                    <label for="phone" class="form-label">Numer telefonu</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Wprowadź numer telefonu">
                                </div>

                                <p class="text-muted text-center">Korzystając z widgetu zgadzasz się na <a href="{{route('rodo')}}">politykę informacyjną</a></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #0f4c64;">Wyślij</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if($setting['banner']=='on')
            @if(isset($banner) && $banner == true)
            <script>
                $(document).ready(function() {
                    $('#exampleModal2').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#exampleModal2').modal('show');
                });
            </script>

            <div
                class="modal fade"
                id="exampleModal2"
                tabindex="-1"
                aria-labelledby="exampleModal2Label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="ratio ratio-16x9">
                            <img alt="" src="{{asset('asset/photo/'.$setting['banner_photo'])}}" class="filter w-100 h-100">
                        </div>
                        <button type="button" class="btn-close position-absolute top-0 end-0 m-2 bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            @endif
            @endif
            <!--NAV-->
            <section>
                <div class="container">
                    <header class="d-flex flex-wrap justify-content-center py-4">
                        <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center me-xl-auto text-dark text-decoration-none">
                            <img alt="logo" src="{{asset('asset/photo/'.$setting['logo_w_pasku_nawigacyjnym'])}}" class="my-4 img-fluid bg-transparent" style="max-width: 10em;">
                        </a>
                        <ul class="nav nav-pills d-flex flex-row justify-content-center align-items-center flex-wrap">
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{route('index')}}" class="nav-link nav-hover active" style="background-color: #0f4c64;"><i class="fa-solid fa-house me-2"></i>{{$setting['naglowek_strona_glowna']}}</a>
                                </div>
                            </li>
                            @if(isset($setting['a1']) && $setting['a1'] === 'on')
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{ route('invest') }}" class="nav-link nav-hover">Etap 1</a>
                                </div>
                            </li>
                            @endif

                            @if(isset($setting['a2']) && $setting['a2'] === 'on')
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{ route('invest.second') }}" class="nav-link nav-hover">Etap 2</a>
                                </div>
                            </li>
                            @endif

                            @if(isset($setting['a3']) && $setting['a3'] === 'on')
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="" class="nav-link nav-hover">Etap 3</a>
                                </div>
                            </li>
                            @endif
                            @if($setting['wykonczenia']=='on')
                            <li class="nav-item dropdown mx-auto">
                                <button type="button" class="nav-link dropdown-toggle nav-hover" id="navbarDarkDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Wykończenia Wnętrz
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink2">
                                    <li><a class="dropdown-item" href="{{ asset('asset/Pakiet Premium.pdf') }}">Pakiet Premium</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('asset/Pakiet Classic.pdf') }}">Pakiet Classic</a></li>
                                </ul>
                            </li>
                            @endif
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{route('about.invest')}}" class="nav-link nav-hover">{{$setting['naglowek_o_inwestycji']}}</a>
                                </div>
                            </li>
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{route('about')}}" class="nav-link nav-hover">{{$setting['naglowek_O_nas']}}</a>
                                </div>
                            </li>
                            <li class="nav-item mx-auto">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{route('contact')}}" class="nav-link nav-hover">{{$setting['naglowek_kontakt']}}</a>
                                </div>
                            </li>
                            <li class="nav-item mx-auto d-flex">
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{$setting['facebook_link_w_pasku_nawigacyjnym']}}" class="nav-link nav-hover"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{$setting['instagram_link_w_pasku_nawigacyjnym']}}" class="nav-link nav-hover"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                                    <a href="{{$setting['tiktok_link_w_pasku_nawigacyjnym']}}" class="nav-link nav-hover"><i class="fa-brands fa-tiktok"></i></a>
                                </div>
                            </li>
                        </ul>
                    </header>
                </div>
            </section>
            <!--END NAV-->
            <!--MAIN-->
            <main id="main">
                <!--ALERTS-->
                <section>
                    <div class="container">
                        @if(session('success'))
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            {{ session('success') }}
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </section>
                <!---->
                @yield('content')
            </main>
            <!--END MAIN-->
            <!--FOOTER-->
            <section class=" py-4" style="background-color: #0f4c64;">
                <div class="container">
                    <footer class="py-3">
                        <ul class="nav justify-content-center pb-3 mb-3 fpt">
                            <li class="nav-item"><a href="{{route('index')}}" class="nav-link px-2 text-white">Strona główna</a></li>
                            <li class="nav-item"><a href="{{route('invest')}}" class="nav-link px-2 text-white">Inwestycja</a></li>
                            <li class="nav-item"><a href="{{route('about')}}" class="nav-link px-2 text-white">O nas</a></li>
                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link px-2 text-white">Kontakt</a></li>
                            <li class="nav-item"><a href="{{$setting['facebook_link_w_pasku_nawigacyjnym']}}" class="nav-link px-2 text-white"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="nav-item"><a href="{{$setting['instagram_link_w_pasku_nawigacyjnym']}}" class="nav-link px-2 text-white"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="nav-item"><a href="{{$setting['tiktok_link_w_pasku_nawigacyjnym']}}" class="nav-link px-2 text-white"><i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                        <p class="text-center text-white">&copy; {{ date('Y') }} Nowe Inspiracje, designed by Karol Wiśniewski</p>
                    </footer>
                </div>
            </section>
            <!--END FOOTER-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <script>
                //ON RESIZE
                $(window).resize(function() {
                    $('#card-form-apart-container').height($('#card-form-apart').height() / 2);
                    //APART
                    if ($(window).width() >= 1200) {
                        $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2);
                    } else {
                        $('.fpb').css('padding-bottom', 0);
                    }
                    //CONTACT
                    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
                    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
                });
                //ON LOAD
                $(document).ready(function() {
                    //APART
                    $('#card-form-apart-container').height($('#card-form-apart').height() / 2);
                    if ($(window).width() >= 1200) {
                        $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2);
                    } else {
                        $('.fpb').css('padding-bottom', 0);
                    }
                    //CONTACT
                    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
                    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
                });
            </script>
            <script>
                //SCROLL TRIGGER
                gsap.registerPlugin(ScrollTrigger);

                function st(string) {
                    const elements = document.querySelectorAll(string);
                    elements.forEach(element => {
                        gsap.fromTo(element.children, {
                            opacity: 0,
                            y: 100,
                            scale: 0.8
                        }, {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 1,
                            ease: "power4.out",
                            scrollTrigger: {
                                trigger: element,
                                start: '-20% 50%',
                                end: 'top 50%',
                            }
                        });
                    });
                };

                st('#main .gsap');
            </script>
    </body>

</html>