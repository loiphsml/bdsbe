<style>
    #owl-slider .slider-items {
        width: 100%;
        height: 100%;
    }

    #owl-slider .slider-items img {
        width: 100%;
        height: 100%;
    }
</style>
<div class="container-fluid p-0" id="top_slider">
    <div style="">
        <div id="slider2" style="background-image:url({{URL::asset('images/temps/sliders/slider_12.jpg')}});">

            <div id="filter_box">

                <div>
                    <h4>MUA BÁN CĂN HỘ TẠI SÀI GÒN</h4>
                </div>

                {!! Form::open(array('route' => 'search.start','method'=>'POST','id'=>'form-search')) !!}
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 mb-2 p-lg-1">
                            <div class="district-project">
                                <input name="input-search-text" type="text"
                                       placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 p-lg-1  mb-2 mb-lg-0">
                            <select name="select-project" style="padding-left: 8px!important;">
                                @foreach( $dataSearch['featuredProject'] as $key=>$item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                                <option value="-1" selected>Tất Cả</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="content mb-3" id="mobile-show">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-3 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    {!! Form::select('city',$dataSearch['dd_locations_city'], null,array('class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-3 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    <select class="form-control" name="district">
                                        <option value="-1">--Chọn Quận--</option>
                                    </select>
                                </div>

                                <div class="col-md-6 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
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
                        </div>
                    </div>
                </div>

                <div class="content d-lg-none d-block">
                    <div class="row">
                        <div class="col-12 mt-2 mb-2 text-right">
                            <a href="javascript:void(0)" class="text-primary" id="a-click-filter">More filter</a>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <button type="submit">TÌM KIẾM</button>
                    {{--<button type="submit">@lang('content.home_search')</button>--}}
                </div>
                {!! Form::close() !!}


            </div>
        </div>
    </div>

</div>

{{--<div id="slider_under" class="d-lg-block d-none">--}}
    {{--<ul>--}}
        {{--<li><p><i class="fas fa-trophy"></i> @lang('content.home_verified')</p></li>--}}
        {{--<li><p><i class="fab fa-squarespace"></i> @lang('content.home_easy')</p></li>--}}
        {{--<li><p><i class="fas fa-coffee"></i> @lang('content.home_relax')</p></li>--}}
    {{--</ul>--}}
{{--</div>--}}

