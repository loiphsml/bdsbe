@extends('frontend.master')
@section('title')
    Nội Thất
@stop
@section('description')
    Nội Thất
@stop

@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 mb-3">MAIN MENU LEFT</div>
            <div class="col-md-9">

                @include('frontend.categories.c_list')

            </div>
        </div>
    </div>
@stop