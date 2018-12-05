<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left mt-4">
                <h5>CÁC CĂN HỘ TƯƠNG TỰ</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">

                    @foreach( $data['otherProduct'] as $key=>$item)
                        <div class="project-items">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url({{URL::to($item->image)}});">
                                </div>
                                {{--@if(!is_null($item->price)&&!is_null($item->unit_id))--}}
                                    {{--<div class="price-rent"><p>{{$item->price}} {{$item->units->name}}</p></div>--}}
                                {{--@endif--}}

                                    <div class="price-rent"><p>@if($item->price!==0){{$item->price}}{{$item->unit->name}}@else Liên Hệ @endif</p></div>

                            </div>
                            <div class="bottom-project">
                                {{--@if(!is_null($item->code))--}}
                                {{--<h3>HOUSE CODE {{$item->code}}</h3>--}}
                                {{--@endif--}}

                                    <h3>HOUSE CODE 123</h3>

                                {{--<h6><a href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}</a></h6>--}}
                                <h6><a href="">{{$item->name}}</a></h6>

                                <div class="thongtin d-flex align-items-center">
                                    <i class="fas fa-bed"></i>
                                    <p>Room</p>
                                    <i class="fas fa-shower"></i>
                                    <p>WC</p>
                                    <i class="fas fa-map-marked-alt"></i>
                                    <p>{{$item->location->name}}</p>
                                </div>
                            </div>
                        </div>
                    {{--@endforeach--}}
                    @endforeach
                </div>

                <button class="btn_pre"><i class="fas fa-chevron-circle-left"></i></button>
                <button class="btn_next"><i class="fas fa-chevron-circle-right"></i></button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all">XEM TẤT CẢ</button>
            </div>
        </div>
    </div>
</div>