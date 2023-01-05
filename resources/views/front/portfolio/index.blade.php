@extends('front.master')
@section('title')
    Home | Portfolio
@endsection
@section('body')
    <!-- start portfolio Section -->
    <section>
        <div class="container">

            <div class="row portfolio">
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio1.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Food</span>
                            <h5><a href="single-portfolio.html">Nutrition Chocolate</a></h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio2.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Crafts</span>
                            <h5><a href="single-portfolio.html">Side table mockup</a></h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio3.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Lifestyle</span>
                            <h5><a href="single-portfolio.html">On a keyboard space</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio4.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Fashion</span>
                            <h5><a href="single-portfolio.html">Eau de parfum spray</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio5.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Business</span>
                            <h5><a href="single-portfolio.html">Color sticky notes</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio6.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Fashion</span>
                            <h5><a href="single-portfolio.html">Easy sewing bag</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio7.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Food</span>
                            <h5><a href="single-portfolio.html">A cherry is the fruit</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-block">
                        <div class="portfolio-img">
                            <img src="{{ asset('/') }}front/img/portfolio/portfolio8.jpg" alt="...">
                        </div>
                        <div class="portfolio-details">
                            <span>Crafts</span>
                            <h5><a href="single-portfolio.html">Potted plant leaves</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end portfolio section -->

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
