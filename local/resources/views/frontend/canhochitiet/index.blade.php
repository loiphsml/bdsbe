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
    @include('frontend.common.banner-rent')
@stop
@section('container')
    {{--@include('frontend.home.h_product')--}}
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                @include('frontend.canhochitiet.h_2')
                @include('frontend.canhochitiet.p_2')
                {{--@include('frontend.canhochitiet.p_1')--}}

            </div>

            <div class="col-md-4">
                @include('frontend.canhochitiet.cr_1')
            </div>
            <div class="col-md-12">
                @include('frontend.canhochitiet.p_detail')
            </div>
        </div>

    </div>
    {{--@include('frontend.pr-details.p_4')--}}
    @include('frontend.canhochitiet.h_3')
@stop

@section('jv-scripts')
    <script>

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
                        items: 4
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




            var numItems = $('li.fancyTab').length;


            if (numItems == 12){
                $("li.fancyTab").width('8.3%');
            }
            if (numItems == 11){
                $("li.fancyTab").width('9%');
            }
            if (numItems == 10){
                $("li.fancyTab").width('10%');
            }
            if (numItems == 9){
                $("li.fancyTab").width('11.1%');
            }
            if (numItems == 8){
                $("li.fancyTab").width('12.5%');
            }
            if (numItems == 7){
                $("li.fancyTab").width('14.2%');
            }
            if (numItems == 6){
                $("li.fancyTab").width('16.666666666666667%');
            }
            if (numItems == 5){
                $("li.fancyTab").width('20%');
            }
            if (numItems == 4){
                $("li.fancyTab").width('25%');
            }
            if (numItems == 3){
                $("li.fancyTab").width('33.3%');
            }
            if (numItems == 2){
                $("li.fancyTab").width('50%');
            }




        });

        $(window).load(function() {

            $('.fancyTabs').each(function() {

                var highestBox = 0;
                $('.fancyTab a', this).each(function() {

                    if ($(this).height() > highestBox)
                        highestBox = $(this).height();
                });

                $('.fancyTab a', this).height(highestBox);

            });

        });

    </script>
@stop