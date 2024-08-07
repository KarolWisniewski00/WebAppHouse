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
    <!--NAV-->
    <section>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-4">
                <a href="{{route('index')}}" class="d-flex align-items-center justify-content-center me-md-auto text-dark text-decoration-none">
                    <img alt="logo" src="{{asset('asset/photo/'.$setting['logo_w_pasku_nawigacyjnym'])}}" class="my-4 img-fluid bg-transparent" style="max-width: 10em;">
                </a>
                <ul class="nav nav-pills d-flex flex-row justify-content-center align-items-center flex-wrap">
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{route('index')}}" class="nav-link nav-hover active" style="background-color: #0f4c64;"><i class="fa-solid fa-house me-2"></i>{{$setting['naglowek_strona_glowna']}}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-auto">
                        <a class="nav-link dropdown-toggle nav-hover" href="{{route('invest')}}" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$setting['naglowek_osiedle_luxor_residence']}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            @if(isset($setting['a1']) && $setting['a1'] === 'on')
                            <li><a class="dropdown-item" href="{{ route('invest') }}">{{ $setting['naglowek_etap_1'] }}</a></li>
                            @endif

                            @if(isset($setting['a2']) && $setting['a2'] === 'on')
                            <li><a class="dropdown-item" href="{{ route('invest.second') }}">{{ $setting['naglowek_etap_2'] }}</a></li>
                            @endif

                            @if(isset($setting['a3']) && $setting['a3'] === 'on')
                            <li><span class="dropdown-item">{{ $setting['naglowek_etap_3'] }}</span></li>
                            @endif
                        </ul>
                    </li>
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
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{$setting['facebook_link_w_pasku_nawigacyjnym']}}" class="nav-link nav-hover"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
                            <a href="{{$setting['instagram_link_w_pasku_nawigacyjnym']}}" class="nav-link nav-hover"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </li>
                    <li class="nav-item mx-auto">
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
                <p class="text-center text-white">&copy; 2023 Nowe Inspiracje, desinged by Karol Wiśniewski</p>
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