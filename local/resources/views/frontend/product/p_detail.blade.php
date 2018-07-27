<div id="p_detail">

    {{--<div class="container">--}}
    {{--<div class="row mt-3">--}}
    {{--<div class="col-md-12 ttnav">--}}
    {{--<ul>--}}
    {{--<li><a href="">HOME</a></li>--}}
    {{--<li><a href="">BDS HA NOI</a></li>--}}
    {{--<li><a href="">NHÀ MẬT TIỀN PHỐ HÀNG BÚN</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="col-md-12 text-center bg-dprimary mt-3" id="p_detail_topinfor">
        New Studio For Rent With 01
        Bedroom In Ham
        Long, Hoan Kiem
    </div>

</div>

{{--Phan slider vaf phafn info bds--}}
<div class="container-fluid mt-3 mb-5">
    <div class="container contslider">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 mb-3">
                    {{--slider--}}


                    <!-- Container for the image gallery -->

                    @include('frontend.product.p_slider')


                    <!-- Container for the image gallery -->
                    </div>

                </div>
            </div>

            <div class="col-md-5">
                {{--phần social và phaafn titlte của bds ìnott--}}
                <div class="row pl-3 pr-3">
                    <table>
                        <tr>
                            <td colspan="2" class="text-center bg-dprimary text-light">{{$data['product']->name}}
                            </td>
                        </tr>
                        {{--<tr>--}}
                        {{--<td>Social Network</td>--}}
                        {{--<td class="text-right fabs">--}}
                        {{--<a href=""><i class="fab fa-facebook-square"></i></a>--}}
                        {{--<a href=""><i class="fab fa-twitter"></i></a>--}}
                        {{--<a href=""><i class="fab fa-google-plus-g"></i></a>--}}
                        {{--<a href=""><i class="fab fa-instagram"></i></a>--}}
                        {{--</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>ID</td>--}}
                        {{--<td class="text-right fabs"><a href="">HNHK0130</a></td>--}}

                        {{--</tr>--}}
                        <tr>
                            <td>Diện Tích</td>
                            <td class="text-right fabs"><a href="">{{$data['product']->area}} m2</a></td>

                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td class="text-right fabs"><a
                                        href="">{{$data['product']->price}} {{$data['product']->unit->name}}</a></td>

                        </tr>
                        <tr>
                            <td>Vị Trí</td>
                            <td class="text-right fabs"><a href="">{{$data['product']->finalLocation}}</a></td>

                        </tr>
                        {{--<tr>--}}
                        {{--<td>Land Area</td>--}}
                        {{--<td class="text-right fabs"><a href="">35m2</a></td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Area usable</td>--}}
                        {{--<td class="text-right fabs"><a href="">35m2</a></td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Location</td>--}}
                        {{--<td class="text-right fabs"><a href="">HOAN KIEM DISTRICT</a></td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Category</td>--}}
                        {{--<td class="text-right fabs"><a href="">STUDIO</a></td>--}}

                        {{--</tr>--}}
                    </table>
                </div>

                <div class="row mt-3 text-left">
                    <div class="col-md-3 justify-content-center align-self-center float-left">
                        {{ Html::image($data['config-img-personal'],'',array('id'=>'p_Detail_img_avatar')) }}
                        {{--<img src="{{$data['config-img-personal']}}" alt="" id="p_Detail_img_avatar"/>--}}
                    </div>
                    <div class="col-md-9">
                        <div class="float-left justify-content-center align-self-center" style="width: 100%">
                            <table class="border border-light" style="width: 100%">
                                <tr class="bg-dprimary text-light">
                                    <td class="text-right">
                                        <i class="fas fa-user-circle"></i>
                                    </td>
                                    <td class="text-left">
                                        {{$data['config-name']}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-envelope-square"></i>
                                    </td>
                                    <td>
                                        {{$data['config-email']}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <i class="fas fa-phone-square"></i>
                                    </td>
                                    <td>
                                        {{$data['config-phone']}}
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                {{-- end phần social và phaafn titlte của bds ìnott--}}
            </div>




            <div class="col-md-12">

                <div class="tab bg-primary">
                    <button class="tablinks" onclick="openCity(event, 'content-info')" id="defaultOpen">Thông Tin
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'content-position')">Vị Trí</button>
                    <button class="tablinks" onclick="openCity(event, 'content-design')">Thiết Kế</button>
                    <button class="tablinks" onclick="openCity(event, 'content-utility')">Tiện Ích</button>
                    <button class="tablinks" onclick="openCity(event, 'content-ground')">Mặt Bằng</button>
                </div>

                <!-- Tab content -->
                <div id="content-info" class="tabcontent" style="line-height: 1.5">
                    <p>{!! $data['product']->content !!}</p>
                </div>
                <div id="content-position" class="tabcontent" style="line-height: 1.5">
                    <p>{!! $data['product']->p_position !!}</p>
                </div>
                <div id="content-design" class="tabcontent" style="line-height: 1.5">
                    <p>{!! $data['product']->p_design !!}</p>
                </div>
                <div id="content-utility" class="tabcontent" style="line-height: 1.5">
                    <p>{!! $data['product']->p_utility !!}</p>
                </div>
                <div id="content-ground" class="tabcontent" style="line-height: 1.5">
                    <p>{!! $data['product']->p_ground !!}</p>
                </div>

                {{--<div id="Paris" class="tabcontent">--}}
                {{--<h2>Email to us for informations--}}
                {{--</h2>--}}
                {{--<p>London is the capital city of England.</p>--}}
                {{--</div>--}}

                {{--<div id="Tokyo" class="tabcontent">--}}
                {{--<h2>Comment connect to facebook--}}
                {{--</h2>--}}
                {{--<p>London is the capital city of England.</p>--}}
                {{--</div>--}}

            </div>


            {{--end slider--}}


        </div>

        <div class="row mt-3">


        </div>
    </div>
</div>

{{--Phan slider vaf phafn info bds--}}

{{--phan related bds--}}

<div class="container product-info">
    <div class="row pl-1">
        <div class="col-md-12 bdslq pl-3 mb-2">
            <div class="bdbdslq">BẤT ĐỘNG SẢN LIÊN QUAN</div>
        </div>
    </div>

    @foreach($data['otherProduct'] as $key=>$item)
        <div class="col-md-12 one-product p-0">
            <div class="row">
                <div class="col-md-5 ">
                    <a href="{{URL::to('danh-muc/'.$item->path)}}">{{ Html::image($item->image,'',array('class'=>'img-one-product')) }}</a>
                </div>
                <div class="col-md-7 info card">
                    <h3><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></h3>
                    <p class="address">{{$item->finalLocation}}</p>
                    <div class="card-body">
                        <span class="description">{{$item->description}}</span>
                    </div>
                    <div class="card-footer">
                        <div class="more-info">
                            <div class="row">
                                <div class="col-md-5">
                                    Diện Tích: {{$item->area}} m2
                                </div>
                                <div class="col-md-7">
                                    Giá:
                                    @if($item->price!==0)
                                        {{$item->price}} {{$item->unit->name}}
                                    @else
                                        Liên Hệ
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{{--end phan related bds--}}

{{--phàn script java--}}

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
{{--End phàn scrip java --}}