<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png" />
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />

    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    @yield('css')
</head>

<body>


    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!-- Curser Pointer -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!-- ==================== Start Navbar ==================== -->
    @include('dashboard.layouts.navbar')
    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Slider ==================== -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('container')
            <!-- ==================== Start Footer ==================== -->
            @include('dashboard.layouts.footer')
        </div>
    </div>

    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->
    <div id="progress" class="progress hide">
        <div id="progress-value"></div>
    </div>
    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->
    <!-- ==================== End Footer ==================== -->

    <script src="assets/js/gsap.min.js"></script>

    <script src="assets/js/ScrollSmoother.min.js"></script>

    <script src="assets/js/ScrollToPlugin.min.js"></script>

    <script src="assets/js/ScrollTrigger.min.js"></script>

    <script src="assets/js/aos.js"></script>

    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="venobox/venobox.js"></script>

    <script src="venobox/venobox.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/jquery.scrollUp.js"></script>

    <script src="assets/js/appear.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>

    <script src="assets/js/theme.js"></script>

    <script src="assets/js/my.js"></script>
    @yield('js')
</body>

</html>
