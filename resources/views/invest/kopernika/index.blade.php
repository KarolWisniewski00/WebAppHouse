@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest')}}">Inwestucje</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest.kopernika')}}">Kopernika</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMBS + FILTER-->
<!--INFO-->
<section>
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-12">
                <div class="row d-flex flex-row justify-content-center align-items-start flex-wrap">
                    <div class="col-12">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center my-4">
                            <h3>Lorem Ipsum</h3>
                            <p class="lead">jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @for($x=1;$x<4;$x++)
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{asset('asset/photo/kopernika-'.$x.'.jpg')}}" class="w-100" />
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="text-end m-0 p-0 pt-1 opacity-50">
            <p class="text-muted lead">01</p>
        </div>
    </div>
</section>
<!--END INFO-->
@endsection