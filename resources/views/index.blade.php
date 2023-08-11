@extends('layout.main')
@section('content')
@include('module.slider.main')
@include('module.search.main')
@include('module.info.main')
@include('module.location')
@include('module.slider.photo')
@include('module.icons')
@include('module.search.photo')
@include('module.comfort')
<div class="container my-4">
    <div class="row mb-5">
        <div class="col-12 mb-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <iframe class="w-100 h-auto" style="min-height: 630px;" src="https://www.youtube.com/embed/-gFo3K4AwdY"></iframe>
            </div>
        </div>
    </div>
</div>
@include('module.contact')
@endsection