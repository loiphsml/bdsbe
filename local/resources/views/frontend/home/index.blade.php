@extends('frontend.master')
@section('title')
    SÀI GÒN REAL 365
@stop
@section('description')
    SÀI GÒN REAL 365
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                @include('frontend.common.slider2')
            </div>
            {{--<div class="col-md-5 area-right">--}}
            {{--@include('frontend.home.h_search')--}}
            {{--</div>--}}
        </div>
    </div>
@stop
@section('container')
    {{--@include('frontend.home.h_product')--}}
    @include('frontend.home.h_1')
    @include('frontend.home.h_2')
    {{--@include('frontend.home.h_3')--}}
    @include('frontend.home.h_loicontact')
    @include('frontend.common.map')
    {{--@include('frontend.home.h_contact')--}}
@stop

@section('jv-scripts')
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

        $(function () {
            var count = 0;
            $('.owl-h2').each(function () {
                $(this).attr('id', 'owl-demo' + count);
                $('#owl-demo' + count).owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    pagination: true,
                    loop: true,
                    nav: false,
                    dots: true,
                    singleItem: true,
                    // autoPlay: 2000,
                    autoHeight: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true
                        }
                    }
                });


                count++;
            });
        });


        $(document).ready(function () {

            $('#owl-project').owlCarousel({
                loop: true,
                margin: 10,
                nav:false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var owl = $('#owl-project');
            // owl.owlCarousel();
// Go to the next item
            $('.btn_next').click(function() {
                owl.trigger('next.owl.carousel');
            })
// Go to the previous item
            $('.btn_pre').click(function() {
                owl.trigger('prev.owl.carousel', [300]);
            })

        });
    </script>
@stop