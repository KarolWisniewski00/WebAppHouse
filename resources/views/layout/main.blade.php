<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apartamenty</title>
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/main.css')}}">
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
            <script src="{{asset('asset/js/bootstrap.js')}}"></script>
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