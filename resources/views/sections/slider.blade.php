<section id="home">
    <div class="home-pattern"></div>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $index => $slider)
            <li data-target="#main-carousel" data-slide-to="{{$index}}" @if($index == 0) class="active" @endif></li>
            @endforeach
        </ol><!--/.carousel-indicators-->
        <div class="carousel-inner">
            @foreach($sliders as $index => $slider)
            <div class="item @if($index == 0) active @endif" style="background-image: url(images/slider/{{$slider->img}})">
                <div class="carousel-caption">
                    <div>
                        <h2 class="heading animated bounceInDown">{{$slider->title}}</h2>
                        <p class="animated bounceInUp">{{$slider->description}}</p>
                        <a class="btn btn-default slider-btn animated fadeIn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.carousel-inner-->

        <a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i
                class="fa fa-angle-left"></i></a>
        <a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i
                class="fa fa-angle-right"></i></a>
    </div>

</section><!--/#home-->
