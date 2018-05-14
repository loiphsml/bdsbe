@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 margin-tb">
        <div class="row">
            <div class="col-md-8">
                <h2>Quản Lý Địa Điểm</h2>
            </div>
            <div class="col-md-4 text-right">
                @permission(('location-create'))
                <a class="btn btn-success" href="{{ route('location.create') }}"> Tạo Mới Địa Điểm</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div id="ulti-bar" class="col-md-12">
        <div class="row">
            <div class="ulti-edit" class="col-md-2">
                <ul class="ulti-head">
                    <li><a href="">Chỉnh Sửa</a>
                        <ul class="ulti-head-dropdown">
                            <li><a class="ulti-copy" href="#">Sao Chép</a></li>
                            {!! Form::open(array('route' => 'location.paste','method'=>'POST','id'=>'formPaste')) !!}
                            {{ Form::hidden('listID') }}
                            <li><a class="ulti-paste" href="#">Dán</a></li>
                            {!! Form::close() !!}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>TT</th>
            <th>ID</th>
            <th></th>
            <th>Tên Địa Điểm</th>
            <th>Ngày Đăng</th>
            <th>Ngày Cập Nhật</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($locations as $key => $data)
            <td>{{ ++$i }}</td>
            <td>{{ $data->id }}</td>
            <td>{{Form::checkbox('id[]',$data->id)}}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->created_at }}</td>
            <td>{{ $data->updated_at }}</td>
            <td>
                @permission(('location-edit'))
                <a class="btn btn-primary" href="{{ route('location.edit',$data->id) }}">Cập Nhật</a>
                @endpermission
                @permission(('location-delete'))
                {!! Form::open(['method' => 'DELETE','route' => ['location.destroy', $data->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
            </tr>
        @endforeach
    </table>
    {{--{!! $pages->links() !!}--}}
@stop