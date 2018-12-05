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
    @include('frontend.duanchitiet.banner-title')
@stop
@section('container')
    {{--@include('frontend.home.h_product')--}}

                @include('frontend.duanchitiet.h_2')
                {{--@include('frontend.duanchitiet.p_2')--}}
                @include('frontend.duanchitiet.p_1')
                @include('frontend.duanchitiet.p_3')


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

        });

    </script>
@stop