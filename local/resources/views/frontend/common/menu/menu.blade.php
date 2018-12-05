<div id="menu" class="container-fluid d-none d-md-block shadow-sm">
        <div id="menu-top">
            <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class=" pl-3 d-flex align-items-center">
                            {{ Html::image('images/logo/logo.png','',array('class'=>'img-logo')) }}
                            <div id="search_box">
                                <input name="input-search-text-menu" type="text" placeholder="Tìm kiếm dự án">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div id="nav-content">
                            <ul>
                                {{--@foreach($listMenu as $key=>$item)--}}
                                    {{--<li><a class="{{ request()->is($item->link()) ? 'active' : '/' }}"--}}
                                           {{--href="{{URL::to($item->link())}}">@lang($item->title)</a></li>--}}
                                {{--@endforeach--}}
                                <li><a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">Trang Chủ</a></li>
                                <li><a class="{{ request()->is('mua-ban-dat-nen*') ? 'active' : '/' }}" href="{{URL::to('mua-ban-dat-nen')}}">Mua Bán Đất Nền</a></li>
                                <li><a class="{{ request()->is('mua-ban-can-ho*') ? 'active' : '/' }}" href="{{URL::to('mua-ban-can-ho')}}">Mua Bán Căn Hộ</a></li>
                                <li><a class="{{ request()->is('tuyen-dung*') ? 'active' : '/' }}" href="{{URL::asset('trang/ky-gui')}}">Ký Gởi Dự Án</a></li>
                                <li><a class="{{ request()->is('tuyen-dung*') ? 'active' : '/' }}" href="{{URL::asset('trang/gioi-thieu')}}">Giới Thiệu</a></li>
                                <li><a class="{{ request()->is('tuyen-dung*') ? 'active' : '/' }}" href="{{URL::asset('trang/lien-he')}}">Liên Hệ</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{--<div id="menu-bottom">--}}
        {{--<div class="container">--}}
            {{--<ul class="main-menu">--}}
                {{--<li class="li-normal"><a href="{{URL::to('/')}}">Trang Chủ</a></li>--}}
                {{--<li class="li-normal"><a href="{{URL::to('/trang/gioi-thieu')}}">Giới Thiệu</a></li>--}}
                {{--<li class="li-has-item-down"><a href="">Dự Án</a>--}}
                    {{--<ul class="sub-menu">--}}
                        {{--@foreach($listFrontEndInfo['products'] as $key=>$data)--}}
                        {{--<li class="li-normal"><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="li-normal"><a href="{{URL::to('/trang/ky-gui')}}">Ký Gửi Dự Án</a></li>--}}
                {{--<li class="li-normal"><a href="{{URL::to('/trang/lien-he')}}">Liên Hệ</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--<div class="col-md-7 text-right justify-content-center p-0 align-self-center">--}}
    {{--<ul>--}}
        {{--<li><i class="fas pr-2 fa-envelope text-primary"></i><span--}}
                    {{--class="inf">{{$dataConfig['config-email']}}</span>--}}
        {{--<li><i class="fas pr-2 fa-phone text-primary"></i><span class="inf">{{$dataConfig['config-phone']}}</span></li>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}


