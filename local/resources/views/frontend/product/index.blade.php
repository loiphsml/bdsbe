@extends('frontend.master')
@section('title'){{$data['product']->seo_title}}@stop
@section('description')
    {{$data['product']->seo_description}}
@stop
@section('keyword')
    {{$data['product']->seo_keywords}}
@stop
@section('og-image'){{URL::to($data['product']->image)}}@stop

@section('container')
    @include('frontend.product.p_detail')
@stop