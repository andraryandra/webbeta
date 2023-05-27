<!doctype html>
<html class="no-js" lang="en">

<head>
    {{-- @include('layouts.head') --}}

    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Batari Belajar Tari Tradisi</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.webp" type="image/webp">


    <!-- CSS
============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/default.css">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!--====== Main Style CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <!--====== Header Start ======-->
    @include('layouts.components.header')
    <!--====== Header Ends ======-->

    <!--====== Slider Start ======-->
    @include('layouts.components.home')
    <!--====== Slider Ends ======-->

    <div class="">
        @yield('welcome')
    </div>

    <!--====== Footer Start ======-->
    @include('layouts.components.footer')
    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== All Plugins js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>


    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>


</body>

</html>
