<style>
</style>


<div class="container-fluid" id="h_2">
    <div class="container">
        <div class="row p-2">
            <div class="col-12 text-left nav-title">
                <ul>
                    <li><a href=""><i class="far fa-building"></i></i> HOME</a></li>
                    <li><a href="">HO CHI MINH</a></li>
                    <li><a href="">DISTRICT 2</a></li>
                </ul>
            </div>
        </div>


        <div class="row mt-2">
            <div class="col-12 text-left pb-3 ml-2">
                <div id="nav">
                    <ul>
                        <li><a class="nav-r active" id="h_top_nav" href="#p_1">
                                <p>Description</p>
                            </a>
                        </li>
                        <li><a class="nav-r" id="h_1_nav" href="#p_2">
                                <p>Overview</p>
                            </a></li>
                        <li><a class="nav-r" id="h_2_nav" href="#p_3">
                                <p>Facilities</p>
                            </a></li>
                        <li><a class="nav-r" id="h_3_nav" href="#p_4">
                                <p>Location</p>
                            </a></li>
                        <li><a class="nav-r" id="h_4_nav" href="#h_4">
                                <p>Listing</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3" id="pr-info">
            <div class="col-12 text-left">

                {{--<h6>{{ $data['product']->name}}</h6>--}}
                <h6>DANH SÁCH CĂN HỘ TRONG DỰ ÁN</h6>

            </div>


            {{--<div class="col-12 d-flex justify-content-between">--}}
            {{--<a href="" class=""><p class="text-left"><i class="fas fa-map-marker-alt pr-2"></i> Binh Thanh District, Ho--}}
            {{--Chi Minh</p></a>--}}
            {{--@if(!is_null($data['product']->code))--}}
            {{--<div class="r-housecode">--}}
            {{--<div class="inner">--}}
            {{--<h6 style="font-size: 22px">CH01234</h6>--}}
            {{--<h6>{{$data['product']->code}}</h6>--}}
            {{--<p>HOUSE CODE</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endif--}}
            {{--</div>--}}
        </div>
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
                            <h5>CĂN HỘ SỐ 1</h5>
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
    </div>
</div>


