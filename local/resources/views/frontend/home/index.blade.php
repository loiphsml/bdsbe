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
            <div class="col-md-5 area-right">
                {!! Form::open(array('route' => 'post.store','method'=>'POST','id'=>'form-search')) !!}
                <div class="form-group">
                    <label>Tên Bất Động Sản</label>
                    {!! Form::text('name',null, array('placeholder' => 'nhập tên bất động sản','class' => 'form-control')) !!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Khu Vực</label>
                            {!! Form::select('city',$dataSearch['dd_locations_city'], null,array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quận</label>
                            <select class="form-control" name="district">
                                <option>--Chọn Quận--</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mức Giá</label>
                            <select class="form-control" id="sel1">
                                <option>--Chọn Mức Giá--</option>
                                <option>< 500 triệu</option>
                                <option>500 - 800 triệu</option>
                                <option>800 triệu - 1 tỷ</option>
                                <option>1 - 2 tỷ</option>
                                <option>2 - 3 tỷ</option>
                                <option>3 - 5 tỷ</option>
                                <option>5 - 7 tỷ</option>
                                <option>7 - 10 tỷ</option>
                                <option>10 - 20 tỷ</option>
                                <option>20 - 30 tỷ</option>
                                <option>> 30 tỷ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button id="btn-search">Tìm Kiếm</button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@stop
@section('container')
    @include('frontend.home.h_product')
@stop