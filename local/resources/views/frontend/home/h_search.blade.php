{!! Form::open(array('route' => 'search.start','method'=>'POST','id'=>'form-search')) !!}
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
                <option value="-1">--Chọn Quận--</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mức Giá</label>
                    <select class="form-control" name="price">
                        <option value="-1">--Chọn Mức Giá--</option>
                        <option value="0-500">< 500 triệu</option>
                        <option value="500-800">500 - 800 triệu</option>
                        <option value="800-1000">800 triệu - 1 tỷ</option>
                        <option value="1000-2000">1 - 2 tỷ</option>
                        <option value="2000-3000">2 - 3 tỷ</option>
                        <option value="3000-5000">3 - 5 tỷ</option>
                        <option value="5000-7000">5 - 7 tỷ</option>
                        <option value="7000-10000">7 - 10 tỷ</option>
                        <option value="10000-20000">10 - 20 tỷ</option>
                        <option value="20000-30000">20 - 30 tỷ</option>
                        <option value="30000-99999">> 30 tỷ</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Diện Tích(m2)</label>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::text('area-from',null, array('placeholder' => 'từ','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('area-to',null, array('placeholder' => 'đến','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <button type="button" id="btn-search">Tìm Kiếm</button>
    </div>
</div>
{{Form::close()}}