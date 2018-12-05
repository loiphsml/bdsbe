<div class="container-fluid" id="h_2">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                {{--<h4>@lang('content.home_feature_properties')</h4>--}}
                <h4>DANH SÁCH CĂN HỘ</h4>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>
                    {{--@foreach($data['featuredProperties'] as $key=>$item)--}}
                    {{--<button class="tablinks" onclick="openCity(event, '{{$item->id}}')">{{$item->name}}</button>--}}
                    {{--@endforeach--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'quan2')">Quận 2</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'District3')">District 3</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'District4')">District 4</button>--}}

                    <div id="London" class="tabcontent">
                        <div class="row mt-3">
                            {{--@if(count($item->products)!=0)--}}
                            {{--@foreach($item->products as $key2=>$item2)--}}
                            @foreach($data['products'] as $key=>$item)

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
                                    <div><a href="">{{$item->name}}</a></div>
                                    <div class="thongtin d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>{{$item->area}}</p>
                                        <i class="fas fa-shower"></i>
                                        <p> @if($item->price!==0){{$item->price}}{{$item->unit->name}}@else Liên Hệ @endif</p>
                                        {{--<i class="fas fa-map-marked-alt"></i>--}}
                                        {{--<p>QUẬN 2</p>--}}
                                    </div>
                                    <!--Carousel-->
                                </div>
                                {{--@endforeach--}}
                                {{--@endif--}}
                            @endforeach


                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="view-all"><a class="text-white"
                                                            href="">XEM TẤT CẢ</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--@foreach($data['featuredProperties'] as $key=>$item)--}}
                    <div id="quan2" class="tabcontent">
                        <div class="row mt-3">
                            {{--@if(count($item->products)!=0)--}}
                            {{--@foreach($item->products as $key2=>$item2)--}}
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
                                            <h5>CĂN HỘ SỐ {{$i}}</h5>
                                        </a></div>
                                    <div><a href="">Sophisticated 3
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


                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="view-all"><a class="text-white"
                                                            href="">XEM TẤT CẢ</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--@endforeach--}}

                </div>
            </div>
        </div>
    </div>
</div>

