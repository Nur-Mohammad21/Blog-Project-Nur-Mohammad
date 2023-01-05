@extends('front.master')
@section('title')
    Home
@endsection
@section('body')
    <!-- start slider section -->
    <section class="no-padding">
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div id="slider" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <ol class="carousel-indicators">
                            @foreach($mySlider as $key=>$slider)
                                <li data-target="#slider" data-slide-to="{{ $loop->iteration }}" class="{{ $key==0 ? 'active': '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-inner">
                                @foreach($mySlider as $key => $slider)
                                    <div class="carousel-item {{ $key == 0 ? 'active': '' }}" style="height:500px">
                                        <img src="{{ asset($slider->image) }}" class="d-block w-100">
                                        <div class="carousel-caption">
                                            <h1 class="text-light display-3">{{ $slider->title }} </h1>
                                            <p> {{ $slider->description }}</p>
                                            <a href="{{ $slider->url }}" class="btn btn-lg btn-outline-light  rounded-0">Details</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <a href="#slider" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#slider" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    <!-- start blog section -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!--  start blog left-->
                <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">
                    @foreach($mysection as $section)
                    <div class="margin-40px-bottom">
                        <img src="{{ asset($section->image) }}" alt="...">
                        <div class="padding-30px-top padding-50px-lr xs-no-padding-lr">
                            <span class="text-extra-dark-gray font-size14"><span class="font-weight-600">By:</span> <a href="#" class="border-bottom">{{ $section->create }}</a> <span class="font-weight-600">,
                                    at </span> <a href="#" class="border-bottom">{{ date('M,d,Y',strtotime($section->created_at)) }}</a></span>
                            <h5 class="margin-15px-top font-weight-600"><a href="standard-post.html" class="text-extra-dark-gray"> {{ $section->title }} </a></h5>
                            <p> {{ $section->short_description }}</p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="{{ route('detail',['id'=>$section->id]) }}" class="btn-blog">Read More</a>
                                </div>
                                <div>
                                    <ul class="social-links no-margin-bottom">
                                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--  end blog left-->

                <!--  start blog right-->
                <div class="col-lg-4 col-md-12">
                    <div class="side-bar padding-30px-left md-no-padding-left">
                        <div class="widget search padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Search</h3>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2"><span class="ti-search"></span></button>
                                </div>
                            </div>
                        </div>

                        <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Categories</h3>
                            </div>
                            <ul class="widget-list no-margin-bottom">
                                @foreach($mycategories as $category)
                                <li>
                                    <a href="#"> {{ $category->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Recent Posts</h3>
                            </div>
                            @foreach($myPost as $post)
                            <div class="media margin-20px-bottom">
                                <img src="{{ asset($post->image) }}" height="50px" width="50px" class="mr-4" alt="" />
                                <div class="media-body">
                                    <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">{{ $post->short_description }}</a></h5>
                                    <span class="font-size14">{{ $post->created_at->diffForHumans() }} </span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Tags</h3>
                            </div>
                            <ul class="tags no-margin-bottom">
                                <li><a href="jvascript:void(0)">Lifestyle</a></li>
                                <li><a href="jvascript:void(0)">Food</a></li>
                                <li><a href="jvascript:void(0)">Kids</a></li>
                                <li><a href="jvascript:void(0)">Fashion</a></li>
                                <li><a href="jvascript:void(0)">Travel</a></li>
                                <li><a href="jvascript:void(0)">DIY</a></li>
                                <li><a href="jvascript:void(0)">Music</a></li>
                                <li><a href="jvascript:void(0)">Crafts</a></li>
                                <li><a href="jvascript:void(0)">Business</a></li>
                                <li><a href="jvascript:void(0)">Career</a></li>
                            </ul>
                        </div>

                        <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Instagram</h3>
                            </div>
                            <ul class="insta-link text-center no-margin-bottom">
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('/') }}front/img/blog/insta-6.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                            <div class="widget-title margin-35px-bottom">
                                <h3>Follow us</h3>
                            </div>
                            <div class="bg-light padding-20px-all">
                                <ul class="social-links no-margin text-center">
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="bg-img text-center padding-30px-all cover-background" data-overlay-dark="5" data-background="{{ asset('/') }}front/img/content/testimonial.jpg">
                                <div class="owl-carousel owl-theme" id="testmonials-carousel">
                                    <div>
                                        <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                        <p class="text-white">Stotam rem aperiam, eaquelim ipsa quae ab illo inventore veritatis et architecto.</p>
                                        <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- John Mariya</h6>
                                    </div>
                                    <div>
                                        <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                        <p class="text-white">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit onsequuntur.</p>
                                        <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- Maria Parker</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--  end blog right-->

            </div>
        </div>
    </section>
    <!-- end blog section -->

    <!-- start portfolio section -->
    <section class="no-padding">
        <div class="container-fluid no-padding">
            <div class="owl-carousel owl-theme" id="portfolio-carousel">
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/1.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/2.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/3.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/4.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/5.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/6.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/7.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="insta-photo">
                    <a href="#">
                        <img src="{{ asset('/') }}front/img/portfolio/8.jpg" alt="" />
                    </a>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->
@endsection
