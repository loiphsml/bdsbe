{{--Phan slider vaf phafn info bds--}}

<div class="container-fluid p-0 mt-3 mb-5" id="p_detail">
    <div class="container contslider">
        <div class="row">

            <div class="col-md-12">

                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'content-info')" id="defaultOpen">
                        <div class="btn-hover"></div>
                        <i class="fas fa-info pb-3"></i>
                        <p>Thông Tin</p>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'content-position')">
                        <div class="btn-hover"></div>
                        <i class="fas fa-map-marker-alt pb-3"></i>
                        <p>Vị Trí
                        </p>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'content-design')">
                        <div class="btn-hover"></div>
                        <i class="fas fa-crop pb-3"></i>
                        <p>Thiết Kế</p>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'content-utility')">
                        <div class="btn-hover"></div>
                        <i class="fab fa-connectdevelop pb-3"></i>
                        <p>Tiện Ích</p>
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'content-ground')">
                        <div class="btn-hover"></div>
                        <i class="fab fa-forumbee pb-3"></i>
                        <p>Mặt Bằng
                        </p>
                    </button>
                </div>

                <div id="flag-content">

                </div>
                <!-- Tab content -->

                {{--<div id="content-info" class="tabcontent" style="line-height: 1.5">--}}
                    {{--<p>{!! $data['product']->content !!}</p>--}}
                {{--</div>--}}
                {{--<div id="content-position" class="tabcontent" style="line-height: 1.5">--}}
                    {{--<p>{!! $data['product']->p_position !!}</p>--}}
                {{--</div>--}}
                {{--<div id="content-design" class="tabcontent" style="line-height: 1.5">--}}
                    {{--<p>{!! $data['product']->p_design !!}</p>--}}
                {{--</div>--}}
                {{--<div id="content-utility" class="tabcontent" style="line-height: 1.5">--}}
                    {{--<p>{!! $data['product']->p_utility !!}</p>--}}
                {{--</div>--}}
                {{--<div id="content-ground" class="tabcontent" style="line-height: 1.5">--}}
                    {{--<p>{!! $data['product']->p_ground !!}</p>--}}
                {{--</div>--}}

                <div id="content-info" class="tabcontent" style="line-height: 1.5">
                    {{--<p>{!! $data['product']->content !!}</p>--}}
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores consequatur deserunt
                        dolorem eligendi facere laudantium magni minima molestias mollitia odit, optio, possimus quam
                        quasi repellendus similique temporibus tenetur unde.
                    </p>
                </div>
                <div id="content-position" class="tabcontent" style="line-height: 1.5">
                    <p>
                        2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores consequatur deserunt
                        dolorem eligendi facere laudantium magni minima molestias mollitia odit, optio, possimus quam
                        quasi repellendus similique temporibus tenetur unde.
                    </p>
                </div>
                <div id="content-design" class="tabcontent" style="line-height: 1.5">
                    <p>
                        3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores consequatur deserunt
                        dolorem eligendi facere laudantium magni minima molestias mollitia odit, optio, possimus quam
                        quasi repellendus similique temporibus tenetur unde.
                    </p>
                </div>
                <div id="content-utility" class="tabcontent" style="line-height: 1.5">
                    <p>
                        4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores consequatur deserunt
                        dolorem eligendi facere laudantium magni minima molestias mollitia odit, optio, possimus quam
                        quasi repellendus similique temporibus tenetur unde.
                    </p>
                </div>
                <div id="content-ground" class="tabcontent" style="line-height: 1.5">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores consequatur deserunt
                        dolorem eligendi facere laudantium magni minima molestias mollitia odit, optio, possimus quam
                        quasi repellendus similique temporibus tenetur unde.
                    </p>
                </div>



            </div>

        </div>

    </div>
</div>

{{--Phan slider vaf phafn info bds--}}

{{--phan related bds--}}

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
        if ($(window).width() > 300 && $(window).width() < 700) {
            $('html, body').animate({
                scrollTop: $("div#flag-content").offset().top - 50
            }, 1000)
        }
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
{{--End phàn scrip java --}}