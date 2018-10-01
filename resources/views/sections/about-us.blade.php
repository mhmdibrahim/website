<section id="about-us">
    <div class="container">
        <div class="text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">{{$sections['about us']->title}}</h2>
                <p>{{$sections['about us']->description}}</p>
            </div>
        </div>
        <div class="about-us">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{$sections['about us']->title}}</h3>
                    <ul class="nav nav-tabs">
                        @foreach($all_with_us as $key=>$with_us)
                        <li @if($key==0) class= "active" @endif><a href="#{{$with_us->title}}" data-toggle="tab"><i class="fa {{$with_us->icon}}"></i> {{$with_us->title}}</a></li>
                        {{--<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>--}}
                        {{--<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li>--}}
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach($all_with_us as $key=>$with_us)
                        <div class="tab-pane fade @if($key==0) in active @endif" id="{{$with_us->title}}">
                            <div class="media">
                                <img class="pull-left media-object" src="/images/about-us/{{$with_us->img}}" alt="about us">
                                <div class="media-body">
                                    <p>{{$with_us->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{--<div class="tab-pane fade" id="mission">--}}
                            {{--<div class="media">--}}
                                {{--<img class="pull-left media-object" src="/images/about-us/mission.jpg" alt="Mission">--}}
                                {{--<div class="media-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="tab-pane fade" id="community">--}}
                            {{--<div class="media">--}}
                                {{--<img class="pull-left media-object" src="/images/about-us/community.jpg" alt="Community">--}}
                                {{--<div class="media-body">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>Our Skills</h3>
                    @foreach($skills as $skill)
                    <div class="skill-bar">
                        <div class="skillbar clearfix " data-percent="{{$skill->skill_value}}%">
                            <div class="skillbar-title">
                                <span>{{$skill->name}}</span>
                            </div>
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent">{{$skill->skill_value}}%</div>
                        </div> <!-- End Skill Bar -->
                        @endforeach
                        {{--<div class="skillbar clearfix" data-percent="85%">--}}
                            {{--<div class="skillbar-title"><span>UI Design</span></div>--}}
                            {{--<div class="skillbar-bar"></div>--}}
                            {{--<div class="skill-bar-percent">85%</div>--}}
                        {{--</div> <!-- End Skill Bar -->--}}
                        {{--<div class="skillbar clearfix " data-percent="70%">--}}
                            {{--<div class="skillbar-title"><span>jQuery</span></div>--}}
                            {{--<div class="skillbar-bar"></div>--}}
                            {{--<div class="skill-bar-percent">70%</div>--}}
                        {{--</div> <!-- End Skill Bar -->--}}
                        {{--<div class="skillbar clearfix " data-percent="60%">--}}
                            {{--<div class="skillbar-title"><span>PHP</span></div>--}}
                            {{--<div class="skillbar-bar"></div>--}}
                            {{--<div class="skill-bar-percent">60%</div>--}}
                        {{--</div> <!-- End Skill Bar -->--}}
                        {{--<div class="skillbar clearfix " data-percent="75%">--}}
                            {{--<div class="skillbar-title"><span>Wordpress</span></div>--}}
                            {{--<div class="skillbar-bar"></div>--}}
                            {{--<div class="skill-bar-percent">75%</div>--}}
                        </div> <!-- End Skill Bar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
