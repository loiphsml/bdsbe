<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>CÁC DỰ ÁN LIÊN QUAN</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    {{--@foreach($data['featuredProject'] as $key=>$item)--}}
                    @for ($i = 0; $i < 5; $i++)

                        <div class="project-items border">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url({{URL::asset('images/uploads/images/3-la.jpg')}}">
                                </div>
                            </div>
                            <div class="p-4">
                                <h4>TÊN MẪU {{$i}}</h4>
                                {{--<span>159 XA LỘ HÀ NỘI, THẢO ĐIỀN, QUẬN 2 - 40 FLOOR</span>--}}
                                <p>Thông tin mẫu {{$i}}</p>

                                <div class="mt-3 mb-3">
                                    <a href=""><i class="fas fa-long-arrow-alt-right pr-1"></i>CHI TIẾT</a>
                                    <a href=""><i class="far fa-building pr-1"></i>XEM DANH SÁCH</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    {{--@endforeach--}}
                </div>

                <button class="btn_pre"> <i class="fas fa-chevron-circle-left"></i> </button>
                <button class="btn_next"> <i class="fas fa-chevron-circle-right"></i> </button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all"><a class="text-white" href="{{URL::to('du-an.html')}}">XEM TẤT CẢ DỰ ÁN</a></button>
            </div>
        </div>
    </div>
</div>