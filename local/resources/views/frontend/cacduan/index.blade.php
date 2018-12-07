@extends('frontend.master')
@section('title')
    CĂN HỘ XINH 24H
@stop
@section('description')
    CĂN HỘ XINH 24H
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.banner-title')
@stop
@section('container')
    {{--@include('frontend.home.h_product')--}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @include('frontend.cacduan.lp_1')
                </div>
                <div class="col-md-4">
                    @include('frontend.cacduan.pr_1')
                </div>
            </div>
        </div>
    </div>


    @include('frontend.common.map')
    {{--@include('frontend.home.h_contact')--}}
@stop

@section('jv-scripts')

@stop