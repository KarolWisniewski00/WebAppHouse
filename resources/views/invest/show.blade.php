@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest')}}">Inwestycja</a></li>
                    <li class="breadcrumb-item"><a href="{{route('invest.show',$slug)}}">{{$slug}}</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection