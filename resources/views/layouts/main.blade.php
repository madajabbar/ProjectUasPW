<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Alibi</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="{{asset('view/css/bootstrap.min.css')}}">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{asset('view/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('view/css/owl.theme.css')}}">

    <!--  Slider -->
    <link rel="stylesheet" href="{{asset('view/css/jquery.kenburnsy.css')}}">

    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('view/css/animate.css')}}">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="{{asset('view/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('view/css/iconmoon.css')}}">
    <link rel="stylesheet" href="{{asset('view/css/et-line.css')}}">
    <link rel="stylesheet" href="{{asset('view/css/ionicons.css')}}">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="{{asset('view/css/magnific-popup.css')}}">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="{{asset('view/css/tabs.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('view/css/tabstyles.css')}}" />

    <!-- Loader Style -->
    <link rel="stylesheet" href="{{asset('view/css/loader-1.css')}}">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="{{asset('view/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('view/css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="{{asset('view/favicon.ico')}}">

    <!-- Modernizer & Respond js -->
    <script src="{{asset('view/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>

    <!-- Preloader -->
    <div class="cover"></div>

    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('view/img/logo.png')}}" alt="Logo">
                </a>
            </div>

            <!-- Menu Hamburger (Default) -->
            <button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>

            <div class="menu-wrap" style="background-image: url({{asset('view/img/nav_bg.jpg')}})">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
                        <div class="search-wrap js-ui-search">
                            <input class="js-ui-text" type="text" placeholder="Search Here...">
                            <span class="eks js-ui-close"></span>
                        </div>
                    </div>
                    <nav class="menu">
                        <div class="menu-list">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">Home</a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="/blog">Blog</a>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="hidden-xs">
                        <div class="menu-social-media">
                            <ul>
                               <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                               <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                               <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                               <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                               <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                        </div>

                        <div class="menu-information">
                            <ul>
                                <li><span>T:</span> 089512301910</li>
                                <li><span>E:</span><a href="#"> madajabbar22@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Menu Hamburger (Default) -->
        </div>
    </div>
    @yield('content')


    <div class="container margin-top">
        <div class="main-title">
            <h1>OUR WORK</h1>
            <hr>
            <h6>Laborious to obtain some advantage from it</h6>
        </div>
        <div class="portfolio-wrapper">
            <button class="nav">
                <span class="icon-container">
                    <span class="line line01"></span>
                    <span class="line line02"></span>
                    <span class="line line03"></span>
                    <span class="line line04"></span>
                </span>
            </button>
            <div class="works-filter">
                <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
                <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
                <a href="javascript:void(0)" class="filter" data-filter="web">Web Design</a>
                <a href="javascript:void(0)" class="filter" data-filter="graphic">Graphic Design</a>
            </div>
            <div class="js-masonry">
                <div class="row" id="work-grid">
                    <!-- Begin of Thumbs Portfolio -->
                    @foreach ($article as $a)
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="https://picsum.photos/id/{{$loop->iteration}}/370/400" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">250</span>
                                </a>
                                <div class="details">
                                    <span class="title">{{$a->title}}</span>
                                        @foreach ($a->tags as $t)
                                            <span class="info">{{$t->tag}}</span>
                                        @endforeach
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="/blog/{{$a->id}}"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="load-more">
                <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="newsletter">
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-left">
                        <div class="newsletter-left-inner">
                            <h1>STAY INFORMED <br> WITH OUR <b>ARTICLE</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-right" style="background: url({{asset('view/img/newsletter-bg.jpg')}})">
                        <div class="newsletter-right-inner">
                            <form>
                                <input type="text" name="newsletter" placeholder="ENTER YOUR EMAIL">
                                <input type="submit" value="SUBSCRIBE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer margin-top">
        <div class="container">
            <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <h4>O.A.K THEME</h4>
                                    <address>City 35 AM <br>Street 1395 p.n <br>your Country</address>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                               <h4>CONTACT INFO</h4>
                                <p>
                                    T:003 124 115 <br>
                                    E:info@mail.com <br>
                                    W:www.website.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                            <ul class="social-media">
                                <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                                <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                                <li><a href="#"><i class="iconmoon-flickr2"></i></a></li>
                                <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                                <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                                <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                            <span class="copyright-mark">&copy; 2015 OAK, ALL RIGHTS RESERVED</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

    <script src="{{asset('view/js/vendor/jquery-1.11.2.min.js')}}"></script>
    <script data-pace-options='{ "ajax": false }' src="{{asset('view/js/vendor/pace.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/classie.js')}}"></script>
    <script src="{{asset('view/js/vendor/jquery.velocity.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/jquery.kenburnsy.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/textslide.js')}}"></script>
    <script src="{{asset('view/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/tabs.js')}}"></script>
    <script src="{{asset('view/js/ef-slider.js')}}"></script>
    <script src="{{asset('view/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/jquery.social-buttons.min.js')}}"></script>
    <script src="{{asset('view/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('view/js/main.js')}}"></script>
    <script src="{{asset('view/js/ajax.js')}}"></script>
</body>
</html>
