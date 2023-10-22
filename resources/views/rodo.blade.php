@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    <li class="breadcrumb-item"><a href="{{route('rodo')}}">Rodo</a></li>
                </ol>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5 pb-2">
                    <embed src="{{ asset('asset/rodo.pdf') }}" type="application/pdf" width="100%" height="500px" />
                </div>
            </div>
        </div>
    </div>
</section>
@include('module.contact')
@endsection