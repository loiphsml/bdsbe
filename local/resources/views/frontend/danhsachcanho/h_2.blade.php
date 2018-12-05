<div class="container-fluid mt-4 mb-5" id="h_2">
        <div class="row">

                    <div class="col-12 text-left nav-title">
                        <ul class="mb-2">
                            <li><a href="{{URL::to('/')}}"><i class="far fa-building"></i> HOME</a></li>
                            {{--@if($data['type']==1)--}}
                                {{--<li><a href="">{{$data['category']->name}}</a></li>--}}
                            {{--@endif--}}
                        </ul>
                        <h4 style="font-size: 27px;margin-bottom: 13px;">DANH SÁCH CĂN HỘ</h4>
                    </div>

                            @for ($i = 0; $i < 8; $i++)

                                <div class="col-md-3 col-6 text-left proj-items">
                                    <!--Carousel-->
                                    <div class="position-relative">
                                        <div id="owl-demo" class="owl-carousel owl-theme owl-h2"
                                             style="margin-top: 20px;">
                                            {{--@php--}}
                                            {{--$listImage=explode(';',$item2->sub_image);--}}
                                            {{--$j=0--}}
                                            {{--@endphp--}}
                                            {{--@foreach($listImage as $key3=>$item3)--}}
                                            <div class="owl-img"
                                                 style="background-image: url({{URL::asset('images/uploads/images/3-la.jpg')}});">
                                            </div>
                                            <div class="owl-img"
                                                 style="background-image: url({{URL::asset('images/uploads/images/3-la.jpg')}});">
                                            </div>
                                            <div class="owl-img"
                                                 style="background-image: url({{URL::asset('images/uploads/images/3-la.jpg')}});">
                                            </div>
                                            {{--@php--}}
                                            {{--$j++;--}}
                                            {{--@endphp--}}
                                            {{--@if($j==3)--}}
                                            {{--@break--}}
                                            {{--@endif--}}
                                            {{--@endforeach--}}
                                        </div>
                                        {{--@if(!is_null($item2->price)&&!is_null($item2->unit_id))--}}
                                        <div class="price">
                                            {{--{{$item2->price}} {{$item2->units->name}}--}}
                                            800$
                                        </div>
                                        {{--@endif--}}
                                    </div>

                                    <div><a href="">
                                            <h5>CĂN HỘ SỐ 1</h5>
                                        </a></div>
                                    <div><a href="{{URL::asset('can-ho-chi-tiet')}}">Sophisticated 3
                                            bedroom
                                            apartment in Masteri Thao Dien</a></div>
                                    <div class="thongtin d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>Room</p>
                                        <i class="fas fa-shower"></i>
                                        <p>WC</p>
                                        <i class="fas fa-map-marked-alt"></i>
                                        <p>QUẬN 2</p>
                                    </div>
                                    <!--Carousel-->
                                </div>
                                {{--@endforeach--}}
                                {{--@endif--}}
                            @endfor


                            {{--<div class="col-md-12 mt-5 text-center">--}}
                                {{--<button class="view-all"><a class="text-white"--}}
                                                            {{--href="">XEM TẤT CẢ</a>--}}
                                {{--</button>--}}
                            {{--</div>--}}


        </div>
</div>

