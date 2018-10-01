<section id="portfolio">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">{{$sections['portfolio']->title}}</h2>
                <p>{{$sections['portfolio']->description}}</p>
            </div>
        </div>
        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            @foreach($portofolio_categories  as $category)
            <li><a class="btn btn-default" href="#" data-filter=".{{mb_strtolower($category->name)}}">{{$category->name}}</a></li>
            {{--<li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>--}}
            {{--<li><a class="btn btn-default" href="#" data-filter=".joomla">Joomla</a></li>--}}
            {{--<li><a class="btn btn-default" href="#" data-filter=".megento">Megento</a></li>--}}
            @endforeach
        </ul><!--/#portfolio-filter-->
        <div class="portfolio-items">
            @foreach($team_projects as $project)
            <div class="col-sm-3 col-xs-12 portfolio-item {{mb_strtolower($project->portfolio_categ->name)}}">
                <div class="view efffect">
                    <div class="portfolio-image">
                        <img src="/images/portfolio/{{$project->image}}" alt=""></div>
                    <div class="mask text-center">
                        <h3>{{$project->title}}</h3>
                        <h4>{{$project->description}}</h4>
                        <a href="#"><i class="fa fa-link"></i></a>
                        <a href="/images/portfolio/{{$project->image}}" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{--<div class="col-sm-3 col-xs-12 portfolio-item jooma">--}}
                {{--<div class="view efffect" >--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/2.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item wordpress">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/3.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item megento">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/4.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item html">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/5.jpg" alt="">--}}
                    {{--</div> <div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item wordpress">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="images/portfolio/6.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item html">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="images/portfolio/7.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item joomla">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/8.jpg" alt=""></div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item html">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/9.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item wordpress">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/10.jpg" alt=""></div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item joomla">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/11.jpg" alt=""></div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3 col-xs-12 portfolio-item megento">--}}
                {{--<div class="view efffect">--}}
                    {{--<div class="portfolio-image">--}}
                        {{--<img src="/images/portfolio/12.jpg" alt=""></div>--}}
                    {{--<div class="mask text-center">--}}
                        {{--<h3>Novel</h3>--}}
                        {{--<h4>Lorem ipsum dolor sit amet consectetur</h4>--}}
                        {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                        {{--<a href="/images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div> <!-- end of div portfolio-items !-->
    </div>
</section>
