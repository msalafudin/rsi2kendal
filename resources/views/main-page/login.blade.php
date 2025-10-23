@section('meta')
    <meta name="keywords" content="RSI 2 Kendal, rsi 2 kendal, rsim2kendal, rsi 2 kendal, rsi muhammadiyah 2 kendal, rsim 2 kendal, rsi 2 patean" />
    <meta name="description" content="RSI 2 Kendal | Kesehatan Anda, Amanah Kami">
    <meta name="author" content="RSI2KENDAL" />
@endsection

@section('css')
    <title>Kesehatan Anda, Amanah Kami - RSI Muhammadiyah 2 Kendal</title>
@endsection

@extends('main-page.layouts.main')

@section('container')
    <div class="breatcome-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome-content text-center">
                        <h1 class="cursor-scale">Login</h1>
                        <ul class="breatcome-item">
                            <li><a class="cursor-scale small" href="index.html"> App </a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End mediic Breatcome Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start mediic Appoinment Section  -->
    <!--==================================================-->
    <div class="appoinment-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mediic-section-title text-center" data-aos="flip-right">
                        <h1 class="cursor-scale">LOGIN</h1>
                    </div>
                </div>
                <div class="mediic-shape-cntr">
                    <img src="assets/images/resource/crcle-bg.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="login-section">
        <div class="container">
            <div class="row appoinment align-items-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" data-aos="zoom-in-left">
                    <div class="mediic-section-title2">
                        <h3>
                            Login to App
                        </h3>
                    </div>
                    <div class="contact-form-box">
                        <form action="/login" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="email" placeholder="Email Anda" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="password" name="password" placeholder="Password Anda" required="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        {{-- <textarea name="massage" id="massage" placeholder="Type Your Message" required=""></textarea> --}}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="submit-button">
                                        <button class="submit-btn cursor-scale small" type="submit">
                                            Login <i class="bi bi-arrow-return-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End mediic Appoinment Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start mediic Subscribe Section -->
    <!--==================================================-->

    <div class="mediic-subscribe mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="subscribe-content" data-aos="fade-up">
                        <div class="subscribe-icon cursor-scale">
                            <img src="assets/images/resource/bag.png" alt="" />
                        </div>
                        <div class="subscribe-title">
                            <h1 class="cursor-scale small">
                                Since 2007 We’re working Medical group more than 1200+
                                Patient
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="mediic-button text-right cursor-scale small" data-aos="fade-down">
                        <a href="contact.html" class="mediic-btn">
                            <span class="mediic-btn__hover"></span>
                            <span class="mediic-btn__hover"></span>
                            <span class="mediic-btn__hover"></span>
                            <span class="mediic-btn__hover"></span>
                            <span class="mediic-btn__hover"></span>
                            <span class="mediic-btn__hover"></span>
                            Contact Us
                            <i class="bi bi-arrow-return-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
