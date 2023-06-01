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

    <section class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-content">
                        <h4 class="title">Formulir registrasi pendaftaran mitra sanggar</h4>
                        <div class="login-register-form">
                            <form method="POST" action="{{route('mitra.store')}}">
                                @csrf
                                <div class="single-form">
                                    <label>Nama Sanggar</label>
                                    <input type="text">
                                </div>
                                <div class="single-form">
                                    <label>Email address *</label>
                                    <input type="email">
                                </div>
                                <div class="single-form">
                                    <label>Password *</label>
                                    <input type="password">
                                </div>
                                <div class="single-form">
                                    <label>Konfirmasi Password *</label>
                                    <input type="password">
                                </div>
                                <div class="single-form">
                                    <label>Alamat Sanggar</label>
                                    <input type="text">
                                </div>
                                <div class="single-form">
                                    <label>Nomor Wa</label>
                                    <input type="Number">
                                </div>
                                <div class="single-form">
                                    <label>Upload foto tempat sanggar atau dokumentasi kegiatan sanggar</label>
                                    <input type="file">
                                </div>
                                <div class="single-form">
                                    <button type="submit" class="main-btn main-btn-2">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

        <section class="newsletter-area-2">
        <div class="container">
            <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/newsletter-bg-1.webp);">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-title-2 mt-25">
                            <h2 class="title">Subscribe our Newsletter</h2>
                            <span class="line"></span>
                            <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form mt-30">
                            <form action="#">
                                <input type="text" placeholder="Enter your email here">
                                <button class="main-btn main-btn-2">Subscribe now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
