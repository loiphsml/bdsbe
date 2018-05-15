<div class="container">

    <div class="row p-0">
        <!-- Full-width images with number text -->
        @php
            $subImage=explode(';',$data['product']->sub_image);
            $i=1;
        $sum=$i+count($subImage)
        @endphp
        <div class="mySlides">
            <div class="numbertext">{{$i}} / {{$sum}}</div>
            {{ Html::image($data['product']->image,'',array('class'=>'img-one-product')) }}
        </div>
        @php
            $i++;
        @endphp

        @foreach($subImage as $key=>$item)
            <div class="mySlides">
                <div class="numbertext">{{$i}} / {{$sum}}</div>
                {{ Html::image($item,'',array('class'=>'img-one-product')) }}
            </div>
        @php
            $i++;
        @endphp
    @endforeach
    {{--<div class="mySlides">--}}
    {{--<div class="numbertext">3 / 6</div>--}}
    {{--<img src="https://picsum.photos/1920/1200?image=817" alt=""/>--}}
    {{--</div>--}}

    {{--<div class="mySlides">--}}
    {{--<div class="numbertext">4 / 6</div>--}}
    {{--<img src="https://picsum.photos/1920/1200?image=856" alt=""/>--}}
    {{--</div>--}}

    {{--<div class="mySlides">--}}
    {{--<div class="numbertext">5 / 6</div>--}}
    {{--<img src="https://unsplash.it/1920/1200?image=494" alt=""/>--}}
    {{--</div>--}}

    {{--<div class="mySlides">--}}
    {{--<div class="numbertext">6 / 6</div>--}}
    {{--<img src="https://picsum.photos/1920/1200?image=856" alt=""/>--}}


    {{--</div>--}}

    <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->


    </div>


    <div class="row">
        <div class="caption-container p-3" style="width:100%;">
            <p id="caption"></p>
        </div>
    </div>
    <!-- Thumbnail images -->
    <div class="row">
        @php
            $i=1;
        @endphp
        <div class="column">
            {{--{{ Html::image($data['product']->image,'',array('class'=>'demo cursor','style'=>'width:100%','onclick'=>'currentSlide('+$i+')')) }}--}}
            <img class="demo cursor" src="{{URL::to($data['product']->image)}}" style="width:100%"
            onclick="currentSlide(1)" alt="">
        </div>
        @php
            $i++;
        @endphp
        @foreach($subImage as $key=>$item)
            <div class="column">
                {{--{{ Html::image($item,'',array('class'=>'demo cursor','style'=>'width:100%','onclick'=>'currentSlide('+$i+')')) }}--}}
                <img class="demo cursor" src="{{URL::to($item)}}" style="width:100%"
                onclick="currentSlide({{$i}})" alt="">
            </div>
            @php
                $i++;
            @endphp
        @endforeach
        {{--<div class="column">--}}
        {{--<img class="demo cursor" src="https://picsum.photos/1920/1200?image=817" style="width:100%"--}}
        {{--onclick="currentSlide(3)" alt="Mountains and fjords">--}}
        {{--</div>--}}
        {{--<div class="column">--}}
        {{--<img class="demo cursor" src="https://picsum.photos/1920/1200?image=856" style="width:100%"--}}
        {{--onclick="currentSlide(4)" alt="Northern Lights">--}}
        {{--</div>--}}
        {{--<div class="column">--}}
        {{--<img class="demo cursor" src="https://unsplash.it/1920/1200?image=494" style="width:100%"--}}
        {{--onclick="currentSlide(5)" alt="Nature and sunrise">--}}
        {{--</div>--}}
        {{--<div class="column">--}}
        {{--<img class="demo cursor" src="https://picsum.photos/1920/1200?image=856" style="width:100%"--}}
        {{--onclick="currentSlide(6)" alt="Snowy Mountains">--}}
        {{--</div>--}}
    </div>

</div>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>