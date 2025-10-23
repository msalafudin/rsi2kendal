@section('meta')
    <meta name="keywords" content="VIP 1 Visi Trader, vip 1vt, vip satuvisitrader, vip satu visi trader" />
    <meta name="description" content="1 Visi Trader | Forex Trader, Market Reasearch & Strategy Development">
    <meta name="author" content="1VISITRADER" />
@endsection

@section('css')
    <title>Ketersediaan Kamar - RSI Muhammadiyah 2 Kendal</title>
@endsection

@extends('main-page.layouts.main')

@section('container')
    <!--==================================================-->
    <!-- Start mediic Breatcome Section  -->
    <!--==================================================-->

    <div class="breatcome-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome-content text-center">
                        <h1 class="cursor-scale">Kamar</h1>
                        <ul class="breatcome-item">
                         
                            <li>Ketersediaan Kamar</li>
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
    <!-- Start mediic Services Section  -->
    <!--==================================================-->

    <div class="services-section">
        <div class="container">
            <div class="row">
                {{-- @foreach ($kamar as $k)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box upp" data-aos="fade-down">
                        <div class="services-content-2">
                            <div class="service-flex d-flex align-items-center">
                                <div class="services-icon">
                                    <img src="assets/images/resource/srvce-icn-1.png" alt="img" />
                                    <span class="mdy-hover-icon"><img src="assets/images/resource/srvce-icn.png" alt="" /></span>
                                </div>
                                <div class="services-title">
                                    <h3>{{ $k->namaTipe }}</h3>
                                </div>
                            </div>
                            <div class="services-desc">
                                <h1>{{ $k->avail }}</h1>
                                <h1>Tersedia</h1>
                            </div>
                            <div class="srvce-btn cursor-scale small">
                               <p>Total <i class="bi bi-chevron-right"></i> {{ $k->totalBed }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach --}}
                @foreach ($kamar as $k)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box upp" data-aos="fade-down">
                        <div class="services-content-2">
                            <div class="service-flex d-flex align-items-center">
                                <div class="services-icon">
                                    <img src="assets/images/resource/srvce-icn-1.png" alt="img" />
                                    <span class="mdy-hover-icon"><img src="assets/images/resource/srvce-icn.png" alt="" /></span>
                                </div>
                                <div class="services-title">
                                    <h3>{{ $k->namaTipe }}</h3>
                                </div>
                            </div>
                            <div class="services-desc text-center">
                                <h1>{{ $k->tersedia }}</h1>
                                <h1>Tersedia</h1>
                            </div>
                            <div class="srvce-btn cursor-scale small">
                               <p>Total Kamar <i class="bi bi-chevron-right"></i> {{ $k->totalBed }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End mediic Services Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start mediic Subscribe Section -->
    <!--==================================================-->

    <div class="mediic-subscribe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="subscribe-content" data-aos="fade-up">
                        <div class="subscribe-icon cursor-scale">
                            <img src="assets/images/resource/bag.png" alt="" />
                        </div>
                        <div class="subscribe-title">
                            <h1 class="cursor-scale small">
                                Temukan perbedaan layanan kesehatan yang benar-benar memahami kebutuhan Anda
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

    <!--==================================================-->
    <!-- End mediic Subscribe Section -->
    <!--==================================================-->
@endsection

@section('js')
@endsection
