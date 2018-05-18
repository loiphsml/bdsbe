<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div class="container">
        <div id="menu-top">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-8 text-right p-0">
                            {{ Html::image('images/logo/logo_head.png','',array('class'=>'img-logo')) }}
                        </div>
                        {{--<div class="col-8 justify-content-center p-0 align-self-center text-left">--}}
                            {{--<span class="slogan"><b></b></span>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-7 text-right justify-content-center p-0 align-self-center">
                    <ul>
                        <li><i class="fas pr-2 fa-envelope text-primary"></i><span
                                    class="inf">{{$dataConfig['config-email']}}</span>
                        <li><i class="fas pr-2 fa-phone text-primary"></i><span class="inf">{{$dataConfig['config-phone']}}</span></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-bottom">
        <div class="container">
            <ul class="main-menu">
                <li class="li-normal"><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                <li class="li-normal"><a href="{{URL::to('/trang/gioi-thieu')}}">Giới Thiệu</a></li>
                <li class="li-has-item-down"><a href="">Dự Án</a>
                    <ul class="sub-menu">
                        @foreach($listFrontEndInfo['products'] as $key=>$data)
                        <li class="li-normal"><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="li-normal"><a href="{{URL::to('/trang/ky-gui')}}">Ký Gửi Dự Án</a></li>
                <li class="li-normal"><a href="{{URL::to('/trang/lien-he')}}">Liên Hệ</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
