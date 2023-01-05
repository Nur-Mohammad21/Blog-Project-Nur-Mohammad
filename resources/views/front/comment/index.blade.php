@extends('front.master')
@section('title')
    Home | Comments
@endsection
@section('body')
    div class="blogs margin-40px-top">
    <!--  start comment-->
    <div class="comments-area">
        <div class="margin-50px-bottom sm-margin-30px-bottom">
            <h3 class="font-size28 sm-font-size26 xs-font-size24">Comments</h3>
        </div>
        <div class="comment-box">
            <div class="author-thumb">
                <img src="img/blog/01.png" alt="" class="rounded-circle width-85 xs-width-100" />
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
                <img src="img/blog/02.png" alt="" class="rounded-circle width-85 xs-width-100" />
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
                <img src="img/blog/03.png" alt="" class="rounded-circle width-85 xs-width-100" />
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
@endsection
