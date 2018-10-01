<section id="clients" class="parallax-section">
    <div class="container">
        <div class="clients-wrapper">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">{{$sections['clients']->title}}</h2>
                    <p>{{$sections['clients']->description}}</p>
                </div>
            </div>
            <div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($clients as $key=>$client)
                    <li data-target="#clients-carousel" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
                    {{--<li data-target="#clients-carousel" data-slide-to="1"></li>--}}
                    {{--<li data-target="#clients-carousel" data-slide-to="2"></li>--}}
                    @endforeach
                </ol> <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($clients as $key=>$client)
                    <div class="item @if($key==0) active @endif">
                        <div class="single-client">
                            <div class="media">
                                <img class="pull-left" src="/images/clients/{{$client->img}}" alt="">
                                <div class="media-body">
                                    <blockquote><p>{{$client->description}}</p><small>{{$client->name}}</small><a href="">{{$client->link}}</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="item">--}}
                        {{--<div class="single-client">--}}
                            {{--<div class="media">--}}
                                {{--<img class="pull-left" src="/images/clients/client3.jpg" alt="">--}}
                                {{--<div class="media-body">--}}
                                    {{--<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<div class="single-client">--}}
                            {{--<div class="media">--}}
                                {{--<img class="pull-left" src="/images/clients/client2.jpg" alt="">--}}
                                {{--<div class="media-body">--}}
                                    {{--<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
