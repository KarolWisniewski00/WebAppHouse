@extends('layout.main')
@section('content')
@include('module.slider.main')
@include('module.search.main')
@include('module.info.main')
@include('module.location')
@include('module.slider.photo')
@include('module.icons')
@include('module.search.filter')
@include('module.comfort')
<div class="container-fluid px-0 position-relative video-container overflow-hidden my-4">
    <video loop="" playsinline="" class="v-size" controls>
        <source src="{{asset('v.mp4')}}" type="video/mp4">
    </video>
</div>
@include('module.contact')
@endsection