@extends('frontend.master')
@section('title')
    Nội Thất
@stop
@section('description')
    Nội Thất
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-md-7 p-0">
                @include('frontend.common.slider')
            </div>
            <div class="col-md-5">
                form
            </div>
        </div>
    </div>
@stop
@section('container')
    @include('frontend.home.h_product')
@stop