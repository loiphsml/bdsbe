@extends('frontend.master')
@section('title')
    SÀI GÒN REAL 365
@stop
@section('description')
    SÀI GÒN REAL 365
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
            <div class="col-md-5 area-right">
                @include('frontend.home.h_search')
            </div>
        </div>
    </div>
@stop
@section('container')
    @include('frontend.home.h_product')
    @include('frontend.home.h_loicontact')
    {{--@include('frontend.home.h_contact')--}}

@stop