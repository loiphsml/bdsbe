@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Địa Điểm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('location.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($location,array('route' => ['location.update',$location->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Địa Điểm:</strong>
                            {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Trực Thuộc</strong>
                            <select class="form-control" name="parent">'
                                @foreach($dd_locations as $key=>$data) {
                                @if($data['index']===$location->parent_id)
                                    <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                                @else
                                    <option value="{{$data['index']}}">{{$data['value']}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Thứ Tự:</strong>
                            {!! Form::text('order',null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Kích Hoạt:</strong>
                            <input {{$location->is_active==1?'checked':''}} name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Chuyên Mục Bài Viết</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
