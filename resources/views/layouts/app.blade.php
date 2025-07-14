<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/aroma-master/img/Fevicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aroma-master/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/profusion-1.0.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/profusion-1.0.0/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/profusion-1.0.0/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('assets/profusion-1.0.0/images/fevicon.png') }}" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('assets/profusion-1.0.0/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/profusion-1.0.0/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/profusion-1.0.0/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>

                        <ul class="nav-shop">
                            <li class="nav-item"><button><i class="ti-search"></i></button></li>
                            <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
                            <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
    <main class="site-main">

        @yield('content')
        
    </main>
    <!--================ Start footer Area  =================-->
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no
                                divided deep moved us lan Gathering thing us land years living.
                            </p>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h4>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/gallery/r1.jpg" alt=""></li>
                                <li><img src="img/gallery/r2.jpg" alt=""></li>
                                <li><img src="img/gallery/r3.jpg" alt=""></li>
                                <li><img src="img/gallery/r5.jpg" alt=""></li>
                                <li><img src="img/gallery/r7.jpg" alt=""></li>
                                <li><img src="img/gallery/r8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>123, Main Street, Your City</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +123 456 7890 <br>
                                    +123 456 7890
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    free@infoexample.com <br>
                                    www.infoexample.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <script src="{{ asset('assets/aroma-master/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/skrollr.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/vendors/mail-script.js') }}"></script>
    <script src="{{ asset('assets/aroma-master/js/main.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/custom.js') }}"></script>
    <script src="{{ asset('assets/profusion-1.0.0/js/owl.carousel.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 35,
            nav: true,
            center: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                575: {
                    items: 1,
                    margin: 0
                },
                768: {
                    items: 3,
                    margin: 0
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>