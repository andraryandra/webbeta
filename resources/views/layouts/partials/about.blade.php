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

    <section id="about" class="about">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="/assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h1>Profil Kami Batari</h1>
                    <p>
                        Batari merupakan singkatan dari Belajar Tari Tradisi, Batari adalah platform belajar kesenian tari
                        tradisi yang dikembangkan untuk membantu
                        para pelaku seni maupun calon pelaku seni dalam melestarikan kesenian tradisi di era globalisasi.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                            nulla pariatur.</li>
                    </ul>
                    <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
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



