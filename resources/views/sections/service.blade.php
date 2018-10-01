<section id="services" class="parallax-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">{{$sections['services']->title}}</h2>
                <p>{{$sections['services']->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        @foreach($services as $service)
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa {{$service->icon}}"></i>
                                <h2>{{$service->title}}</h2>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                        @endforeach

                        {{--<div class="col-sm-4">--}}
                            {{--<div class="single-service">--}}
                                {{--<i class="fa fa-laptop"></i>--}}
                                {{--<h2>Web Development</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-4">--}}
                            {{--<div class="single-service">--}}
                                {{--<i class="fa fa-users"></i>--}}
                                {{--<h2>Online Marketing</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
