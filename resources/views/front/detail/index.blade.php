@extends('front.master')
@section('title')
    Home | Details
@endsection
@section('body')

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start blog Section -->
        <section>
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-11">
                        <!-- start content  -->
                        <img src="{{ asset($mysection->image) }}" class="margin-30px-bottom" alt="..." width="100%" height="50%"/>
                        <span class="text-extra-dark-gray font-size14"><span class="font-weight-600">By:</span> <a href="#" class="border-bottom">{{ $mysection->create }}</a> <span class="font-weight-600">, at </span> <a href="#" class="border-bottom"> {{ date('M,d,Y',strtotime($mysection->created_at)) }}</a></span>
                        <h5 class="margin-15px-top font-weight-600 font-size32 sm-font-size28 xs-font-size24 line-height-40 xs-line-height-30">{{ $mysection->title }}</h5>
                        <p>{{ $mysection->long_description }}</p>


                        <div class="border-top padding-20px-top margin-20px-bottom">
                            <div class="d-flex align-items-center justify-content-center">
                                <label class="font-weight-bold mr-3 mb-0">Share this article:</label>
                                <ul class="social-links mb-0">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- end content -->

                        <div class="blogs margin-40px-top">
                            <!--  start comment-->
                            <div class="comments-area">
                                <div class="margin-50px-bottom sm-margin-30px-bottom">
                                    <h3 class="font-size28 sm-font-size26 xs-font-size24">Comments</h3>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/') }}front/img/blog/01.png" alt="" class="rounded-circle width-85 xs-width-100" />
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Alex Joyrina</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/') }}front/img/blog/02.png" alt="" class="rounded-circle width-85 xs-width-100" />
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Jama Karleny</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="author-thumb">
                                        <img src="{{ asset('/') }}front/img/blog/03.png" alt="" class="rounded-circle width-85 xs-width-100" />
                                    </div>
                                    <div class="comment-info">
                                        <h6><a href="javascript:void(0);">Ivonne Drennen</a></h6>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="reply">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end comment-->

                            <!--  start form-->
                            <div class="comment-form">
                                <div class="margin-30px-bottom">
                                    <h3 class="font-size28 xs-font-size22">Post a Comment</h3>
                                </div>
                                <form action="#!" id="comment-form" method="post">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="butn"><span>Send Message</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--  end form-->
                        </div>

                    </div>
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
