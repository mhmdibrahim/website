<section id="our-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">{{$sections['our team']->title}}</h2>
                <p>{{$sections['our team']->description}}</p>
            </div>
        </div>
        <div id="team-carousel" class="carousel slide" data-interval="false">
            <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            <div class="carousel-inner team-members">
                @foreach($team_socials as $key=>$chunck)
                <div class="row item @if($key==0) active @endif">
                    @foreach($chunck as $member)
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="/images/our-team/{{$member->img}}" alt="team member" />
                            <h4>{{$member->name}}</h4>
                            <h5>{{$member->position}}</h5>
                            <p>{{$member->description}}</p>
                            <div class="socials">
                                @foreach($member->social_medias as $media)
                                <a href="#"><i class="fa {{$media->link}}"></i></a>
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end of div col-3 !-->
                    @endforeach
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="/images/our-team/member2.jpg" alt="team member" />--}}
                            {{--<h4>Alekjandra Jony</h4>--}}
                            {{--<h5>Creative Designer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}

                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="images/our-team/member3.jpg" alt="team member" />--}}
                            {{--<h4>Paul Johnson</h4>--}}
                            {{--<h5>Skilled Programmer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}

                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="images/our-team/member4.jpg" alt="team member" />--}}
                            {{--<h4>John Richerds</h4>--}}
                            {{--<h5>Marketing Officer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}


                </div><!-- end of div active row !-->
                @endforeach

                {{--<div class="row item">--}}
                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="/images/our-team/member1.jpg" alt="team member" />--}}
                            {{--<h4>William Hurt</h4>--}}
                            {{--<h5>Sr. Web Developer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}

                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="/images/our-team/member3.jpg" alt="team member" />--}}
                            {{--<h4>Paul Johnson</h4>--}}
                            {{--<h5>Skilled Programmer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}

                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="/images/our-team/member2.jpg" alt="team member" />--}}
                            {{--<h4>Alekjandra Jony</h4>--}}
                            {{--<h5>Creative Designer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- end of div col-3 !-->--}}

                    {{--<div class="col-sm-6 col-md-3">--}}
                        {{--<div class="single-member">--}}
                            {{--<img src="/images/our-team/member4.jpg" alt="team member" />--}}
                            {{--<h4>John Richerds</h4>--}}
                            {{--<h5>Marketing Officer</h5>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>--}}
                            {{--<div class="socials">--}}
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div> <!-- end of div col-3 !-->--}}
                {{--</div><!-- end of div row item !-->--}}
            </div>
        </div>
    </div>
</section>
