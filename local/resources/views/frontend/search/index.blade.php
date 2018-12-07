@extends('frontend.master')
@section('title')
    CĂN HỘ XINH 24H
@stop
@section('description')
    CĂN HỘ XINH 24H
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