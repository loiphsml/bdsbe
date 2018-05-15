@extends('frontend.master')
@section('title')
    Nội Thất
@stop
@section('description')
    Nội Thất
@stop

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('frontend.search.s_info')
            </div>
            <div class="col-md-4">
                @include('frontend.search.s_sidebar')
            </div>
        </div>
    </div>
@stop