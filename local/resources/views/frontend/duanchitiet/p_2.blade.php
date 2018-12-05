<div class="container-fluid" id="p_2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <h6>Overview</h6>
            </div>

            <div class="col-12">

                {{--@if(!is_null($data['product']->num_bath))--}}
                    <div class="items-ovv d-flex align-items-center">
                        <i class="fas fa-shower"></i>
                        <div class="pl-2">
                            <h5>2 Bathroom(s)</h5>
                            {{--<h5>{{$data['product']->num_bed}} Bathroom(s)</h5>--}}
                        </div>
                    </div>
                {{--@endif--}}
                <div class="items-ovv d-flex align-items-center">
                    <i class="far fa-building"></i>
                    <div class="pl-2">
                        <h5>Apartment</h5>
                        {{--<p>Project status</p>--}}
                    </div>
                </div>
                {{--@if(!is_null($data['product']->num_bath))--}}
                    <div class="items-ovv d-flex align-items-center">
                        <i class="fas fa-bed"></i>
                        <div class="pl-2">
                            {{--<h5>{{$data['product']->num_bath}} Bedroom(s)</h5>--}}
                            <h5>2 Bedroom(s)</h5>
                        </div>
                    </div>
                {{--@endif--}}


                <div class="items-ovv d-flex align-items-center">
                    <i class="fas fa-location-arrow"></i>
                    <div class="pl-2">
                        {{--<h5>-</h5>--}}
                        <h5>Location District</h5>
                    </div>
                </div>


                {{--@if(!is_null($data['product']->num_member))--}}
                    <div class="items-ovv d-flex align-items-center">
                        <i class="fas fa-users"></i>
                        <div class="pl-2">
                            <h5>2 Accommodate(s)</h5>
                            {{--<h5>{{$data['product']->num_member}} Accommodate(s)</h5>--}}
                        </div>
                    </div>
                {{--@endif--}}
                {{--@if(!is_null($data['product']->area))--}}
                    <div class="items-ovv d-flex align-items-center">
                        <i class="fas fa-chart-area"></i>
                        <div class="pl-2">
                            {{--<h5>{{$data['product']->area}}</h5>--}}
                            <h5>Vị trí</h5>
                        </div>
                    </div>
                {{--@endif--}}

                <div class="items-ovv d-flex align-items-center">
                    <i class="fas fa-umbrella"></i>
                    <div class="pl-2">
                        <h5>Furniture Full</h5>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center">
                {{--@php--}}
                    {{--$listImage=explode(';',$data['product']->sub_image);--}}
                {{--@endphp--}}
                {{--@foreach($listImage as $key=>$item)--}}
                @for ($i = 0; $i < 8; $i++)
                    <div class="img-prdetails">
                        {{--<a class="fancybox"--}}
                           {{--data-fancybox="gallery-cus"--}}
                           {{--href="{{URL::to($item)}}"><img src="{{URL::to($item)}}"--}}
                                        {{--alt="">--}}
                        {{--</a>--}}


                        <a class="fancybox"
                           data-fancybox="gallery-cus"
                           href=""><img src="{{URL::asset('images/temps/sliders/slider_12.jpg')}}"
                                                          alt="">
                        </a>

                    </div>
                @endfor
                {{--@endforeach--}}
            </div>
        </div>
    </div>
</div>