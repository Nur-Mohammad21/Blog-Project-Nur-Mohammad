@extends('front.master')
@section('title')
    Home |Contact
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3 class="text-center">Contact With Us</h3>
                        <hr/>
                        <p>House # 202/C, Road # 01 ,Middle Badda, Dhaka-1212</p>
                        <p>Phone one: 01518457309  </p>
                        <p>Phone Two: 01720254621</p>
                        <p>Contact Email: mdassist@gmail.com </p>
                        <p>Contact Email: info@mdassist.com</p>
                        <p>Fax No: 123456</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3 class="text-center">Give Your Message</h3>
                        <hr/>
                        <form action="" method="">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Your Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="message"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" name="btn" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14604.876492933485!2d90.4246227!3d23.7752102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbd4af932deced3b!2sMDassist%20Bangladesh%2FMDassist%20INC.%2C%20USA!5e0!3m2!1sen!2sbd!4v1655266647511!5m2!1sen!2sbd"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
