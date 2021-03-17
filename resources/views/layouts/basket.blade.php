<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IPAM Canteen Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    <div class="notification-section notification-section-padding  notification-img ptb-10">
        <div class="container-fluid">
            <div class="notification-wrapper">
                <div class="notification-pera-graph">
                    <p>Your food can be delivered unto you, wherever you are on campus for free.</p>
                </div>
                <div class="notification-btn-close">
                    <div class="notification-btn">
                        <a href="{{ route('home') }}">Place Order Now</a>
                    </div>
                    <div class="notification-close notification-icon">
                        <button><i class="pe-7s-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom clearfix">
        <div class="container">
            <div class="header-bottom-wrapper">
                <div class="logo-2 ptb-40">
                    <a href="{{route('home')}}">
                        <img src="assets/img/slider/The-usl-logo.png" alt="">
                    </a>
                </div>
                <div class="menu-style-2 book-menu menu-hover">
                    <nav>
                        <div class="header-bottom-wrapper pr-200 pl-200 header-contact-info">
                        </div>
                        <ul>
                            @auth
                            <li>  <h4>Hello, {{ Auth::user()->name }} </h4></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                        <br>
                                        {{ __('Logout') }}
                                    </a>

                                </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endauth

                        </ul>
                    </nav>
                </div>
                <div class="header-cart-2">
                    <a class="icon-cart" href="{{ route('cart.index') }}"><br>
                        <i class="ti-shopping-cart"></i>
                        <span class="shop-count book-count">
                            @auth
                                {{ Cart::session(auth()->id())->getContent()->count() }}
                            @else
                                0
                            @endauth
                        </span>
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">

                            <div class="header-bottom pt-40 pb-30 clearfix">
                                <div class="header-bottom-wrapper pr-200 pl-200 header-contact-info">

                                    <div class="categories-cart same-style">
                                        <div class="same-style-icon">
                                            <a href="{{ route('cart.index') }}"><i class="pe-7s-cart"></i></a>
                                        </div>

                                        <div class="same-style-text">
                                            <a href="{{ route('cart.index') }}"><br>
                                                @auth
                                                    {{ Cart::session(auth()->id())->getContent()->count() }} Item
                                                @else
                                                    0 Item
                                                @endauth

                                            </a>

                                        </div>
                                    </div>

                                    <div class="categories-cart same-style">
                                        <div class="same-style-icon">
                                            <a href="{{ route('login') }}"><i class="pe-7s-users"></i></a>
                                        </div>

                                        <div class="same-style-text">
                                            <a href="{{ route('login') }}"><br>

                                                Account
                                            </a>

                                        </div>

                                    </div>
                                    @auth
                                        <div class="categories-cart same-style">
                                            <div class="same-style-icon">
                                                <a href="#"><i class="pe-7s-delete-user"></i></a>
                                            </div>
                                            <div class="same-style-text">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                                  document.getElementById('logout-form').submit();"> <br>
                                                    {{ __('Logout') }}
                                                </a>
                                            </div>
                                        </div>
                                    @endauth
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }} Log
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>


                                </div>{{-- --}}
                            </div>
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>

                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>

    </header>
    <!-- header end -->

   <!-- product area start -->
   <br>

   @yield('content')


        {{-- @yield('content') --}}



@yield('recent-orders')

        <!-- blog area end -->

        <!-- blog area end -->

        <footer class="footer-area">
            <div class="footer-top-area gray-bg-5 pt-105 pb-65">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-2">IPAM Canteen Management</h3>
                                <div class="footer-info-wrapper">
                                    <div class="footer-address">
                                        <div class="footer-info-icon">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                        <div class="footer-info-content">
                                            <p>AJ Momoh Street Tower Hill

                                        </div>
                                    </div>
                                    <div class="footer-address">
                                        <div class="footer-info-icon">
                                            <i class="ti-headphone-alt"></i>
                                        </div>
                                        <div class="footer-info-content">
                                            <p>+23274773355
                                                <br>+23225773355
                                            </p>
                                        </div>
                                    </div>
                                    <div class="footer-address">
                                        <div class="footer-info-icon">
                                            <i class="ti-email"></i>
                                        </div>
                                        <div class="footer-info-content">
                                            <p><a href="#">info@canteen.ipamusl.com</a>
                                                <br><a href="#">sales@canteen.imapusl.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget mb-40 pl-70">
                                <h3 class="footer-widget-title-2">USeful Links</h3>
                                <div class="footer-widget-content-2">
                                    <ul>
                                        <li><a href="#">USL</a></li>
                                        <li><a href="#">IPAM USL</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        <li><a href="https://sandbox.paypal.com">Paypal Sandbox</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-2">How TO</h3>
                                <div class="footer-widget-content-2">
                                    <ul>
                                        <li><a href="#">How to buy</a></li>
                                        <li><a href="#">Payments</a></li>
                                        <li><a href="#">Mobile Money</a></li>

                                        <li><a href="#">Disclaimer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-40 pl-30">
                                <h3 class="footer-widget-title-2">Find US</h3>
                                <div id="footer-map" class="footer-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom  gray-bg-6 ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-2">
                                <p>
                                    Copyright ©
                                    <a href="https://canteen.ipamusl.com/">Canteen Management</a> 2020 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img">
                                <a href="https://orange.sl"><img style="width: 25%" src="https://download.logo.wine/logo/Orange_Money/Orange_Money-Logo.wine.png" alt=""></a>                             <a href="https://africell.sl"><img style="width: 20%" src="https://www.nightwatchsl.com/wp-content/uploads/2020/04/AFR-600x197.jpg" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>











		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
