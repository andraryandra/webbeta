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

    <section class="top-courses-area">
        <div class="container">
            <div class="courses-bar">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="courses-tab">
                            <ul class="nav">
                                <li><a data-bs-toggle="tab" href="#grid"><i class="fas fa-th-large"></i></a></li>
                                <li><a class="active" data-bs-toggle="tab" href="#list"><i
                                            class="fas fa-list"></i></a></li>
                            </ul>
                            <p>Showing 1 - 16 of 36 results</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="courses-bar-form">
                            <div class="courses-select">
                                <select id="selectbox1">
                                    <option value="0">Newly published</option>
                                    <option value="1">published 01</option>
                                    <option value="2">published 02</option>
                                    <option value="3">published 03</option>
                                    <option value="4">published 04</option>
                                    <option value="5">published 05</option>
                                </select>
                            </div>
                            <div class="courses-search">
                                <input type="text" placeholder="Search courses">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="grid">
                    <div class="courses-wrapper wrapper-2">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-5.webp" width="270"
                                                height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="/detailpartner" class="category">#Science</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Computer Science &
                                                Engineering</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-6.webp" width="270"
                                                height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Technology</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Business
                                                Administration</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-7.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Science</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Social & Digital
                                                Marketing</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-8.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Technology</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Applied
                                                Mathematics</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-9.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Literature</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of English
                                                Literature</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-10.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Business</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Advance
                                                Psychology</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-11.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Marketing</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Film and
                                                Theater</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-12.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Science</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Law and
                                                Creminalism</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-13.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Science</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Applied
                                                Physics</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-14.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Business</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Business
                                                Marketing</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-15.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Science</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Micro
                                                Biology</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 courses-col">
                                <div class="single-courses-2 mt-30">
                                    <div class="courses-image">
                                        <a href="#"><img src="assets/images/courses/courses-16.webp"
                                                width="270" height="170" alt="courses"></a>
                                    </div>
                                    <div class="courses-content">
                                        <a href="#" class="category">#Technology</a>
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Fashion
                                                Design</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="fee">Fee: <span> $540</span></p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="list">
                    <div class="courses-wrapper wrapper-2">
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-1.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Computer Science &
                                                Engineering</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-2.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Business
                                                Administration</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-3.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Social & Digital
                                                Marketing</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-4.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of English
                                                Literature</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-5.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Advance
                                                Psychology</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="assets/images/courses-list/courses-6.webp"
                                            width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <p class="courses-fee">Fee: <span> $540</span></p>

                                    <div class="courses-content-wrapper">
                                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Fashion
                                                Design</a></h4>
                                        <div class="duration-rating">
                                            <div class="duration-fee">
                                                <p class="duration">Duration: <span> 4 year</span></p>
                                                <p class="credit">Credit: 125</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating: </span>
                                                <ul class="star">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="courses-link">
                                            <a class="apply" href="#">Online Apply</a>
                                            <a class="more" href="#">Read more <i
                                                    class="fal fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <ul class="pagination-items text-center">
                <li><a class="active" href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
            </ul>
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
