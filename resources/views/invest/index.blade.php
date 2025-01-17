@extends('layout.main')
@section('content')
<!--BREADCRUMBS + FILTER-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Strona główna</a></li>
                    @if($table2 == 1)
                    <li class="breadcrumb-item"><a href="{{route('invest')}}">Inwestycje {{$setting['naglowek_etap_1']}}</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{{route('invest.second')}}">Inwestycje {{$setting['naglowek_etap_2']}}</a></li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END BREADCRUMBS + FILTER-->
@if(isset($clicked))
@include('module.search.schema')
@else
@include('module.search.filter')
@endif
@include('module.table')
@endsection