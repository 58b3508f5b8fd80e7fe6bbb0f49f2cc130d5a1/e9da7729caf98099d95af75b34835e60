@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-colpatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Home') - GreenWhite Developers</title>

    <!-- Favicon -->
    <link href="ico/favion.ico" rel="shortcut icon" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{asset($public.'/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset($public.'/css/style-green.css')}}" rel="stylesheet">
    <style>
        .wrap-sticky nav.navbar.bootsnav.sticked {
            background: rgba(23, 27, 33, 0.875);
        }

        .app-showcase img {
            background: #ffffff;
            height: 260px;
        }

        #contact {
            padding: 0px;
            background-image: url('{{asset($public.'/jpg/downloadapp-bg.jpg')}}');
            z-index: 2;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        #mapContact {
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <!-- PREALOADER -->


    <!-- HOME SECTION-->
    <section id="home" class="home">
        <div class="home-bg-overlay"></div>
        <header class="wrap-sticky">

            <!-- Section content -->
            <div class="container">
                <!-- Nav -->
                <nav class="navbar navbar-default navbar-sticky navbar-scrollspy bootsnav theme-menu"
                     data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                    <div class="container">

                        <!-- Nav header -->
                        <div class="navbar-header">
                            <!-- Mobile Menu icon -->
                            <button type="button" class="navbar-toggle animated zoomIn" data-toggle="collapse"
                                    data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                            <!-- Logo -->
                            <a class="navbar-brand" href="#brand"><img src="{{asset($public.'/png/logo.png')}}"
                                                                       class="logo"
                                                                       alt="logo.png')}}" style="height:3rem;"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right single-page">
                                <li class="active scroll"><a href="#home">Home</a></li>
                                <li class="scroll"><a href="#about">About</a></li>
                                <li class="scroll"><a href="#tools">Tools</a></li>
                                <li class="scroll"><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Section banner image -->
            <div class="container" id="banner-setting">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-xs-12">

                        <!-- Banner text -->
                        <div class="col-md-8 col-xs-12" id="banner-text">
                            <!-- Banner Heading -->
                            <h3 class="large-title txt-color wow fadeInDown" data-wow-duration="1s">Green<span
                                        class="txt-white">White</span> Developers</h3>
                            <!-- Banner Tagline -->
                            <h4 class="txt-white wow fadeInDown" data-wow-duration="2s">We proffer <strong
                                        class="txt-color">Innovation</strong> and <strong
                                        class="txt-color">Solution</strong></h4>
                            <p class="txt-white wow fadeInDown" data-wow-duration="2s">{{--We specialize in design and
                                development of Software and Hardware driven systems for
                                individuals, companies, organizations and government.<br>--}}Some see the glass as
                                empty,
                                others hope it'll be full again. But at <strong class="txt-color">Green</strong><strong>White</strong>
                                we'll
                                give
                                you back a full glass. We're the right folks to trust with your project.</p>
                        </div>

                        <!-- Apps image gallery inside iPhone -->
                        <div class="col-md-4 col-xs-12">
                            <div id="home-iphone-carousel" class="carousel vertical slide" data-ride="carousel">
                                <!-- iPhone image placement -->
                                <div class="carousel-inner">
                                    <div class="item active"><img src="{{asset($public.'/png/screen1.png')}}"></div>
                                    <div class="item"><img src="{{asset($public.'/png/screen2.png')}}"></div>
                                    <div class="item"><img src="{{asset($public.'/png/screen3.png')}}"></div>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators indicator-iphone-gallery">
                                    <li data-target="#home-iphone-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#home-iphone-carousel" data-slide-to="1"></li>
                                    <li data-target="#home-iphone-carousel" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <!-- SCROLL TO ABOUT SECTION-->
    <section id="scrollToAbout">
        <!-- Section content -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center"><a href="#about" class="scrollToAbout"><span
                                class="fa fa-angle-down"></span></a></div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION-->
    <section id="about">

        <!-- Section title -->
        <div class="container">
            <div class="section-title">
                <h3>About</h3>
                <h5>A unique breed of developers</h5>
            </div>
        </div>

        <!-- Section content -->
        <div class="container" style="padding-bottom: 10rem;">
            <div class="row">

                <!-- Left Content -->
                <div class="col-md-4 col-xs-12">
                    <div class="about-text mb30 wow fadeInDown">
                        <h3 class="medium-title"><i class="icon fa fa-angellist"></i>Who we are?</h3>
                        <p>We are a team of experts
                            developing solutions through information technology to problems that have been
                            identified as a challenge for individuals, companies, organizations and government.
                            We specialize in design and development of Software and Hardware driven systems for
                            individuals, companies, organizations and government.</p>
                    </div>
                    <div class="content-list wow fadeInUp">
                        <h3 class="medium-title"><i class="icon fa fa-smile-o"></i>Why choose us?</h3>
                        <p>We are a the folks you call when you have a problem that needs an IT Solution. Our team of
                            proficient and innovative experts and developers provide actual solutions for our clients by
                            the means of Information Technology.</p>
                    </div>
                </div>

                <!-- Middle Image -->
                <div class="col-md-4 col-xs-12 text-center about-img"><img src="{{asset($public.'/png/about-img.png')}}"
                                                                           class="wow fadeIn"
                                                                           data-wow-duration="2s"
                                                                           alt="about-img.png')}}">
                </div>

                <!-- Right Content -->
                <div class="col-md-4 col-xs-12 bottom-align-text">
                    <div class="about-text mb30 wow fadeInLeft">
                        <h3 class="medium-title"><i class="icon fa fa-anchor"></i>Mission</h3>
                        <p>To provide actual, innovative, and lasting IT solutions for our clients, that'll ensure
                            efficient System Analysis and Design in projects.</p>
                    </div>
                    <div class="content-list wow fadeInRight">
                        <h3 class="medium-title"><i class="icon fa fa-eye"></i>Vision</h3>
                        <p>To provide excellent IT solutions utilized by a large community of users around the
                            globe.</p>
                    </div>
                </div>
            </div>
        </div>

    {{--<!-- FACT COUNTER SECTION -->
    <div class="container">
        <div class="counter-box">

            <!-- Awards -->
            <div class="col-md-4 col-xs-12">
                <div class="counter-content border">
                    <div class="wow fadeInUp" data-wow-duration="1.3s"><i class="icon fa fa-trophy"></i>
                        <h4 class="small-title fact-timer">45,000</h4>
                        <h3 class="medium-title">Awards</h3>
                    </div>
                </div>
            </div>

            <!-- Downloads -->
            <div class="col-md-4 col-xs-12">
                <div class="counter-content border">
                    <div class="wow fadeInUp" data-wow-duration="1.3s"><i class="icon fa fa-download"></i>
                        <h4 class="small-title fact-timer">45,000</h4>
                        <h3 class="medium-title">Downloads</h3>
                    </div>
                </div>
            </div>

            <!-- Version -->
            <div class="col-md-4 col-xs-12">
                <div class="counter-content">
                    <div class="wow fadeInUp" data-wow-duration="1.3s"><i class="icon fa fa-tree"></i>
                        <h4 class="small-title fact-timer">2.1</h4>
                        <h3 class="medium-title">Version</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
    <!-- DOWNLOAD FREE APP SECTION-->
        <section id="downloadapp">
            <div class="bg-overlay"></div>
            <div class="container">
                <!-- Section content -->
                <div class="section-text dark-title">
                    <div class="contentarea">
                        <h3 class="highlight-title">Want to start a <span class="txt-color">Project?</span></h3>
                        <h5>Guess you should contact us right away </h5>
                    </div>
                    <a class="btn hvr-bounce-to-right wow fadeIn" href="#contact"><i
                                class="icon fa fa-mobile-phone"></i> Contact GreenWhite
                    </a>
                </div>
            </div>
        </section>

        <!-- APPS SECTION-->
        <section id="tools">

            <!-- Section title -->
            <div class="container">
                <div class="section-title">
                    <h3>Our Working Tools</h3>
                    <h5>We integrate a variety of tools to provide the best solution for our clients.</h5>
                </div>
            </div>

            <!-- Section content -->
            <div class="container">
                <div class="row">
                    <!-- Apps carousel -->
                    <div id="app-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <!-- Apps showcase / First Carousel -->

                            <div class="item active">
                                <div class="col-md-4">

                                    <!-- Apps display 1 -->
                                {{--<div class="app-showcase">
                                    <!-- Hover effects -->
                                    <div class="hover-style">
                                        <div class="border-box">
                                            <!-- Text-->
                                            <div class="hover-content"><span class="rate">2.7</span>
                                                <div class="content">
                                                    <h3>.NET ASP</h3>
                                                    <h5>.NET Web Programming</h5>
                                                    <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                   href="{{asset($public.'/png/asp-net.jpg')}}"><i
                                                                    class="icon fa fa-plus"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <img src="{{asset($public.'/png/asp_net.png')}}" alt="asp.net"/></div>--}}
                                <!-- Apps display 2 -->
                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">3.5</span>
                                                    <div class="content">
                                                        <h3>PHP/MySQL</h3>
                                                        <h5>Web Programmin/Database Storage</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/php_mysql.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/php_mysql.png')}}" alt="php_mysql"/></div>
                                </div>
                                <div class="col-md-4">

                                    <!-- Apps display 3 -->
                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">4.1</span>
                                                    <div class="content">
                                                        <h3>Laravel</h3>
                                                        <h5>PHP Web Programming Framework</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/laravel.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/laravel.png')}}" alt="laravel"/></div>
                                </div>
                                <div class="col-md-4">

                                    <!-- Apps display 4 -->

                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">3.7</span>
                                                    <div class="content">
                                                        <h3>Java SE</h3>
                                                        <h5>Application Programming Language</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/java.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/java.png')}}" alt="java"/></div>
                                    <!-- Apps display 5 -->
                                    {{--<div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">4.5</span>
                                                    <div class="content">
                                                        <h3>Ruby</h3>
                                                        <h5>Web Programming Language</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/ruby.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/ruby.png')}}" alt="ruby"/></div>--}}
                                </div>
                            </div>

                            <!-- Apps showcase / Second Carousel  -->
                            <div class="item">
                                <div class="col-md-4">
                                    <!-- Apps display 6 -->

                                {{-- <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">4.5</span>
                                                    <div class="content">
                                                        <h3>Matlab</h3>
                                                        <h5>Mathematical analysis</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/matlab.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/matlab.png')}}" alt="app1.jpg')}}"/></div>--}}

                                <!-- Apps display 7 -->
                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">5.0</span>
                                                    <div class="content">
                                                        <h3>Python/Django</h3>
                                                        <h5>Programming, Data Analysis framework</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/python-django.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/python-django.png')}}" alt="app7.jpg')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Apps display 8 -->
                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">4.1</span>
                                                    <div class="content">
                                                        <h3>Phonegap</h3>
                                                        <h5>Andoroid/iOS App Development</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/phonegap.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/phonegap.png')}}" alt="app8.jpg')}}"/></div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Apps display 9 -->
                                {{--<div class="app-showcase">
                                    <!-- Hover effects -->
                                    <div class="hover-style">
                                        <div class="border-box">
                                            <!-- Text-->
                                            <div class="hover-content"><span class="rate">3.2</span>
                                                <div class="content">
                                                    <h3>ReactJS</h3>
                                                    <h5>Javascript Framework</h5>
                                                    <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                   href="{{asset($public.'/png/reactjs.png')}}"><i
                                                                    class="icon fa fa-plus"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <img src="{{asset($public.'/png/reactjs.png')}}" alt="app9.jpg')}}"/></div>--}}
                                <!-- Apps display 10 -->
                                    <div class="app-showcase">
                                        <!-- Hover effects -->
                                        <div class="hover-style">
                                            <div class="border-box">
                                                <!-- Text-->
                                                <div class="hover-content"><span class="rate">4.2</span>
                                                    <div class="content">
                                                        <h3>Vue JS</h3>
                                                        <h5>Javascript Framework</h5>
                                                        <div class="showcase-links"><a class="popup-img hvr-pulse"
                                                                                       href="{{asset($public.'/png/vue.png')}}"><i
                                                                        class="icon fa fa-plus"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <img src="{{asset($public.'/png/vue.png')}}" alt="vue.png')}}"/></div>
                                </div>
                            </div>
                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-appshowcase">
                            <li data-target="#app-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#app-carousel" data-slide-to="1"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

    {{--
            <!-- VIDEO SECTION-->
            <section id="video">
                <div class="bg-overlay"></div>
                <div class="container">
                    <!-- Section title -->
                    <div class="section-text dark-title">
                        <div class="contentarea">
                            <h3>If you really want to know, <span class="txt-color">Look in the video</span></h3>
                        </div>
                        <div class="contentarea"><a class="video-popup hvr-pulse play-icon"
                                                    href="https://vimeo.com/76979871"><i
                                        class="icon fa fa-play"></i></a></div>
                        <button class="btn hvr-bounce-to-right wow fadeIn" data-toggle="modal" data-target="#SignUp"><i
                                    class="icon fa fa-user"></i>Sign up for more videos
                        </button>
                    </div>
                </div>
            </section>

            <!-- FEATURES SECTION-->
            <section id="features">

                <!-- Section title -->
                <div class="container">
                    <div class="section-title">
                        <h3>Features</h3>
                        <h5>Praesent elementum, elit molestie suscipit vehicula</h5>
                    </div>
                </div>

                <!-- Section content -->
                <div class="container feature-content">

                    <!-- Tab list  -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a class="hvr-bounce-to-right" data-toggle="tab" href="#tab-games">Games</a></li>
                        <li><a class="hvr-bounce-to-right" data-toggle="tab" href="#tab-technology">Technology</a></li>
                        <li><a class="hvr-bounce-to-right" data-toggle="tab" href="#tab-musicvideo">Music &amp; Videos</a>
                        </li>
                        <li><a class="hvr-bounce-to-right" data-toggle="tab" href="#tab-internet">Internet</a></li>
                        <li><a class="hvr-bounce-to-right" data-toggle="tab" href="#tab-business">Business</a></li>
                    </ul>

                    <!-- Tabs content -->
                    <div class="tab-content">

                        <!-- Tab 1 Games tab content -->
                        <div id="tab-games" class="tab-pane in active">

                            <!-- Left text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 wow animated fadeInLeft" data-wow-duration=".6s">
                                    <!-- Text 1 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">1</span></div>
                                            <!-- Title -->
                                            <div class="title">Search</div>
                                        </h3>
                                        <p>Nullam varius sit amet felis at condimentum. In sed imperdiet est, et aliquet
                                            urna.
                                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam hendrerit
                                            suscipit justo ut dapibus.</p>
                                    </div>

                                    <!-- Text 2 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">2</span></div>
                                            <!-- Title -->
                                            <div class="title">Share</div>
                                        </h3>
                                        <p>Vestibulum nec purus vel nisl lobortis facilisis non consectetur est.</p>
                                    </div>

                                    <!-- Text 3 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">3</span></div>
                                            <!-- Title -->
                                            <div class="title">Send</div>
                                        </h3>
                                        <p>Curabitur ornare aliquam ante id tristique. Maecenas cursus fringilla diam, at
                                            rhoncus augue varius ut.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-4"><img src="{{asset($public.'/png/tab1.png')}}" alt="tab1.png')}}" class="wow animated zoomIn"
                                                       data-wow-duration="1.2s"></div>

                            <!-- Right text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 wow animated fadeInRight" data-wow-duration=".6s">
                                    <!-- Text 4 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">4</span></div>
                                            <!-- Title -->
                                            <div class="title">Crop</div>
                                        </h3>
                                        <p>Nunc vitae nibh mattis eros gravida volutpat finibus non nisi.</p>
                                    </div>

                                    <!-- Text 5 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">5</span></div>
                                            <!-- Title -->
                                            <div class="title">Save</div>
                                        </h3>
                                        <p>Ut venenatis nibh vitae metus bibendum viverra. Suspendisse feugiat, lorem
                                            elementum
                                            tristique molestie.</p>
                                    </div>

                                    <!-- Text 6 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">6</span></div>
                                            <!-- Title -->
                                            <div class="title">Backup</div>
                                        </h3>
                                        <p>Aliquam hendrerit suscipit justo ut dapibus. Ut egestas tristique tortor, vel
                                            tristique tellus. Nulla sagittis est in diam auctor aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 Technology tab content -->
                        <div id="tab-technology" class="tab-pane">

                            <!-- Left text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInLeft" data-delay=".6s" data-wow-duration=".6s">
                                    <!-- Text 1 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">1</span></div>
                                            <!-- Title -->
                                            <div class="title">Search</div>
                                        </h3>
                                        <p>Nullam varius sit amet felis at condimentum. In sed imperdiet est, et aliquet
                                            urna.
                                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam hendrerit
                                            suscipit justo ut dapibus.</p>
                                    </div>

                                    <!-- Text 2 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">2</span></div>
                                            <!-- Title -->
                                            <div class="title">Share</div>
                                        </h3>
                                        <p>Vestibulum nec purus vel nisl lobortis facilisis non consectetur est.</p>
                                    </div>

                                    <!-- Text 3 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">3</span></div>
                                            <!-- Title -->
                                            <div class="title">Send</div>
                                        </h3>
                                        <p>Curabitur ornare aliquam ante id tristique. Maecenas cursus fringilla diam, at
                                            rhoncus augue varius ut.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-4"><img src="{{asset($public.'/png/tab2.png')}}" alt="tab2.png')}}" class="animated zoomIn"></div>

                            <!-- Right text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInRight">
                                    <!-- Text 4 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">4</span></div>
                                            <!-- Title -->
                                            <div class="title">Crop</div>
                                        </h3>
                                        <p>Nunc vitae nibh mattis eros gravida volutpat finibus non nisi.</p>
                                    </div>

                                    <!-- Text 5 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">5</span></div>
                                            <!-- Title -->
                                            <div class="title">Save</div>
                                        </h3>
                                        <p>Ut venenatis nibh vitae metus bibendum viverra. Suspendisse feugiat, lorem
                                            elementum
                                            tristique molestie.</p>
                                    </div>

                                    <!-- Text 6 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">6</span></div>
                                            <!-- Title -->
                                            <div class="title">Backup</div>
                                        </h3>
                                        <p>Aliquam hendrerit suscipit justo ut dapibus. Ut egestas tristique tortor, vel
                                            tristique tellus. Nulla sagittis est in diam auctor aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 Music & Videos tab content -->
                        <div id="tab-musicvideo" class="tab-pane">

                            <!-- Left text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInLeft" data-delay=".6s" data-wow-duration=".6s">
                                    <!-- Text 1 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">1</span></div>
                                            <!-- Title -->
                                            <div class="title">Search</div>
                                        </h3>
                                        <p>Nullam varius sit amet felis at condimentum. In sed imperdiet est, et aliquet
                                            urna.
                                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam hendrerit
                                            suscipit justo ut dapibus.</p>
                                    </div>

                                    <!-- Text 2 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">2</span></div>
                                            <!-- Title -->
                                            <div class="title">Share</div>
                                        </h3>
                                        <p>Vestibulum nec purus vel nisl lobortis facilisis non consectetur est.</p>
                                    </div>

                                    <!-- Text 3 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">3</span></div>
                                            <!-- Title -->
                                            <div class="title">Send</div>
                                        </h3>
                                        <p>Curabitur ornare aliquam ante id tristique. Maecenas cursus fringilla diam, at
                                            rhoncus augue varius ut.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-4"><img src="{{asset($public.'/png/tab3.png')}}" alt="tab3.png')}}" class="animated zoomIn"></div>

                            <!-- Right text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInRight">
                                    <!-- Text 4 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">4</span></div>
                                            <!-- Title -->
                                            <div class="title">Crop</div>
                                        </h3>
                                        <p>Nunc vitae nibh mattis eros gravida volutpat finibus non nisi.</p>
                                    </div>

                                    <!-- Text 5 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">5</span></div>
                                            <!-- Title -->
                                            <div class="title">Save</div>
                                        </h3>
                                        <p>Ut venenatis nibh vitae metus bibendum viverra. Suspendisse feugiat, lorem
                                            elementum
                                            tristique molestie.</p>
                                    </div>

                                    <!-- Text 6 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">6</span></div>
                                            <!-- Title -->
                                            <div class="title">Backup</div>
                                        </h3>
                                        <p>Aliquam hendrerit suscipit justo ut dapibus. Ut egestas tristique tortor, vel
                                            tristique tellus. Nulla sagittis est in diam auctor aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4 Internet tab content -->
                        <div id="tab-internet" class="tab-pane">

                            <!-- Left text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInLeft" data-delay=".6s" data-wow-duration=".6s">
                                    <!-- Text 1 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">1</span></div>
                                            <!-- Title -->
                                            <div class="title">Search</div>
                                        </h3>
                                        <p>Nullam varius sit amet felis at condimentum. In sed imperdiet est, et aliquet
                                            urna.
                                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam hendrerit
                                            suscipit justo ut dapibus.</p>
                                    </div>

                                    <!-- Text 2 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">2</span></div>
                                            <!-- Title -->
                                            <div class="title">Share</div>
                                        </h3>
                                        <p>Vestibulum nec purus vel nisl lobortis facilisis non consectetur est.</p>
                                    </div>

                                    <!-- Text 3 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">3</span></div>
                                            <!-- Title -->
                                            <div class="title">Send</div>
                                        </h3>
                                        <p>Curabitur ornare aliquam ante id tristique. Maecenas cursus fringilla diam, at
                                            rhoncus augue varius ut.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-4"><img src="{{asset($public.'/png/tab4.png')}}" alt="tab4.png')}}" class="animated zoomIn"></div>

                            <!-- Right text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInRight">
                                    <!-- Text 4 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">4</span></div>
                                            <!-- Title -->
                                            <div class="title">Crop</div>
                                        </h3>
                                        <p>Nunc vitae nibh mattis eros gravida volutpat finibus non nisi.</p>
                                    </div>

                                    <!-- Text 5 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">5</span></div>
                                            <!-- Title -->
                                            <div class="title">Save</div>
                                        </h3>
                                        <p>Ut venenatis nibh vitae metus bibendum viverra. Suspendisse feugiat, lorem
                                            elementum
                                            tristique molestie.</p>
                                    </div>

                                    <!-- Text 6 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">6</span></div>
                                            <!-- Title -->
                                            <div class="title">Backup</div>
                                        </h3>
                                        <p>Aliquam hendrerit suscipit justo ut dapibus. Ut egestas tristique tortor, vel
                                            tristique tellus. Nulla sagittis est in diam auctor aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 5 Business tab content -->
                        <div id="tab-business" class="tab-pane">

                            <!-- Left text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInLeft" data-delay=".6s" data-wow-duration=".6s">
                                    <!-- Text 1 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">1</span></div>
                                            <!-- Title -->
                                            <div class="title">Search</div>
                                        </h3>
                                        <p>Nullam varius sit amet felis at condimentum. In sed imperdiet est, et aliquet
                                            urna.
                                            Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam hendrerit
                                            suscipit justo ut dapibus.</p>
                                    </div>

                                    <!-- Text 2 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">2</span></div>
                                            <!-- Title -->
                                            <div class="title">Share</div>
                                        </h3>
                                        <p>Vestibulum nec purus vel nisl lobortis facilisis non consectetur est.</p>
                                    </div>

                                    <!-- Text 3 -->
                                    <div class="features-text-left text-right">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">3</span></div>
                                            <!-- Title -->
                                            <div class="title">Send</div>
                                        </h3>
                                        <p>Curabitur ornare aliquam ante id tristique. Maecenas cursus fringilla diam, at
                                            rhoncus augue varius ut.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-4"><img src="{{asset($public.'/png/tab5.png')}}" alt="tab5.png')}}" class="animated zoomIn"></div>

                            <!-- Right text -->
                            <div class="col-md-4">
                                <div class="feature-mt100 animated fadeInRight">
                                    <!-- Text 4 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">4</span></div>
                                            <!-- Title -->
                                            <div class="title">Crop</div>
                                        </h3>
                                        <p>Nunc vitae nibh mattis eros gravida volutpat finibus non nisi.</p>
                                    </div>

                                    <!-- Text 5 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">5</span></div>
                                            <!-- Title -->
                                            <div class="title">Save</div>
                                        </h3>
                                        <p>Ut venenatis nibh vitae metus bibendum viverra. Suspendisse feugiat, lorem
                                            elementum
                                            tristique molestie.</p>
                                    </div>

                                    <!-- Text 6 -->
                                    <div class="features-text-right text-left">
                                        <h3>
                                            <!-- Number -->
                                            <div class="number"><span class="line"></span><span class="text">6</span></div>
                                            <!-- Title -->
                                            <div class="title">Backup</div>
                                        </h3>
                                        <p>Aliquam hendrerit suscipit justo ut dapibus. Ut egestas tristique tortor, vel
                                            tristique tellus. Nulla sagittis est in diam auctor aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    --}}

    {{--<!-- REVIEWS SECTION-->
    <section id="reviews">
        <div class="bg-overlay"></div>
        <!-- Section title -->
        <div class="container">
            <div class="section-title dark-title">
                <h3>Testimonials</h3>
                <h5>Cras posuere tortor venenatis, rhoncus ipsum sed, elementum tellus</h5>
            </div>
        </div>
        <!-- Section Content -->
        <div class="container">

            <!-- Review carousel -->
            <div id="review-carousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <ul class="reviewsetup">

                        <!-- Review box 1 -->
                        <li class="item active">
                            <div class="reviewbox">
                                <!-- User photo -->
                                <div class="col-md-3 col-sm-9 img">
                                    <div><img src="{{asset($public.'/jpg/1-2.jpg')}}" alt="1.jpg')}}"/></div>
                                </div>
                                <!-- Review text -->
                                <div class="col-md-9 col-sm-9 content">
                                    <h5 class="fa rate"><span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span></h5>
                                    <h3 class="title">John austin</h3>
                                    <p class="text">Cras varius hendrerit velit, at sollicitudin turpis euismod ac.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos
                                        himenaeos. </p>
                                </div>
                            </div>
                        </li>

                        <!-- Review box 2 -->
                        <li class="item">
                            <div class="reviewbox">
                                <!-- User photo -->
                                <div class="col-md-3 col-sm-9 img">
                                    <div><img src="{{asset($public.'/jpg/2-2.jpg')}}" alt="2.jpg')}}"/></div>
                                </div>
                                <div class="col-md-9 col-sm-9 content">
                                    <h5 class=" fa rate"><span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                                class="fa fa-star-half"></span> <span class="fa fa-star-o"></span>
                                    </h5>
                                    <h3 class="title">Rina roy</h3>
                                    <p class="text">Fusce vestibulum est enim, at auctor orci volutpat eget. Cras
                                        dignissim iaculis congue.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Review box 3 -->
                        <li class="item">
                            <div class="reviewbox">
                                <!-- User photo -->
                                <div class="col-md-3 col-sm-9 img">
                                    <div><img src="{{asset($public.'/jpg/3-2.jpg')}}" alt="3.jpg')}}"/></div>
                                </div>
                                <!-- Review text -->
                                <div class="col-md-9 col-sm-9 content">
                                    <h5 class=" fa rate"><span class="fa fa-star"></span> <span
                                                class="fa fa-star"></span> <span class="fa fa-star"></span> <span
                                                class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></h5>
                                    <h3 class="title">Mark travis</h3>
                                    <p class="text">Duis metus purus, congue at orci nec, mattis ornare arcu. Aenean
                                        nulla mauris, elementum semper vehicula eu, vestibulum ut nibh. Interdum et
                                        malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada
                                        fames ac
                                        ante ipsum primis in faucibus. Aenean egestas dui eget aliquet
                                        ultricies. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Left and right controls -->
                <div class="container">
                    <div class="review-controls">
                        <!-- Arrow previous -->
                        <a id="prev-review" class="btn-small hvr-bounce-to-right" href="#review-carousel"
                           data-slide="prev"> <span class="fa fa-angle-left"></span></a>
                        <!-- Arrow next -->
                        <a id="next-review" class="btn-small hvr-bounce-to-right" href="#review-carousel"
                           data-slide="next"> <span class="fa fa-angle-right"></span> </a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICE SECTION-->
    <section id="price">
        <!-- Custom plans -->
        <div class="container price-section ">
            <div class="col align-self-center">
                <div class="col-md-10 col-sm-offset-1">
                    <h2 class="font-black mt100">We offer custom plans</h2>
                    <p class="font24 mt30">In cursus arcu dolor, id consequat nulla fermentum quis. Nam tempor
                        cursus
                        nisi, id laoreet arcu sagittis id. Aliquam vitae feugiat metus. </p>
                    <button class="btn-white hvr-bounce-to-right wow fadeIn mt30"><i
                                class="icon fa fa-angellist"></i>Create
                        my plan
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAMS SECTION-->
    <section id="teams">
        <div class="container">
            <!-- Section title -->
            <div class="section-title dark-title">
                <h3>Teams</h3>
                <h5>Suspendisse turpis lectus, posuere quis dolor sit amet</h5>
            </div>
        </div>

        <!-- Section Content -->
        <div class="row">

            <!-- Teams carousel -->
            <div id="team-carousel" class="carousel slide" data-ride="carousel">
                <!-- Arrow next -->
                <div class="container text-right"><a id="next-team" class="btn-small hvr-bounce-to-right"
                                                     href="#team-carousel" data-slide="next"> <span
                                class="fa fa-angle-right"></span> </a></div>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <ul class="teamsetup">

                        <!-- 1 -->
                        <li class="item teamscol">

                            <!-- Team display 1 -->
                            <div class="teams">
                                <!-- Hover effects -->
                                <div class="hover-style">
                                    <div class="border-box">
                                        <!-- Text-->
                                        <div class="hover-content">
                                            <div class="content">
                                                <h3>Simmy garewal</h3>
                                                <h5>Developer</h5>
                                                <div class="team-social-links"><a class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-facebook-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-twitter-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-google-plus-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-linkedin-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-instagram"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img src="{{asset($public.'/jpg/image1.jpg')}}" alt="team1.jpg')}}"/></div>
                        </li>

                        <!-- 2 -->
                        <li class="item teamscol">
                            <!-- Team display 2 -->
                            <div class="teams">
                                <!-- Hover effects -->
                                <div class="hover-style">
                                    <div class="border-box">
                                        <!-- Text-->
                                        <div class="hover-content">
                                            <div class="content">
                                                <h3>John hosting</h3>
                                                <h5>Executive</h5>
                                                <div class="team-social-links"><a class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-facebook-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-twitter-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-google-plus-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-linkedin-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-instagram"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img src="{{asset($public.'/jpg/image2.jpg')}}" alt="team1.jpg')}}"/></div>
                        </li>

                        <!-- 3 -->
                        <li class="item teamscol active">
                            <!-- Team display 3 -->
                            <div class="teams">
                                <!-- Hover effects -->
                                <div class="hover-style">
                                    <div class="border-box">
                                        <!-- Text-->
                                        <div class="hover-content">
                                            <div class="content">
                                                <h3>Alin jinlen</h3>
                                                <h5>CEO</h5>
                                                <div class="team-social-links"><a class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-facebook-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-twitter-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-google-plus-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-linkedin-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-instagram"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img src="{{asset($public.'/jpg/image3.jpg')}}" alt="team3.jpg')}}"/></div>
                        </li>

                        <!-- 4 -->
                        <li class="item teamscol">

                            <!-- Team display 4 -->
                            <div class="teams">
                                <!-- Hover effects -->
                                <div class="hover-style">
                                    <div class="border-box">
                                        <!-- Text-->
                                        <div class="hover-content">
                                            <div class="content">
                                                <h3>Laura dutta</h3>
                                                <h5>Director</h5>
                                                <div class="team-social-links"><a class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-facebook-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-twitter-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-google-plus-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-linkedin-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-instagram"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img src="{{asset($public.'/jpg/image4.jpg')}}" alt="team4.jpg')}}"/></div>
                        </li>

                        <!-- 5 -->
                        <li class="item teamscol">
                            <!-- Team display 5 -->
                            <div class="teams">
                                <!-- Hover effects -->
                                <div class="hover-style">
                                    <div class="border-box">
                                        <!-- Text-->
                                        <div class="hover-content">
                                            <div class="content">
                                                <h3>Hense corey</h3>
                                                <h5>Photograhper</h5>
                                                <div class="team-social-links"><a class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-facebook-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-twitter-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-google-plus-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-linkedin-square"></i></a> <a
                                                            class="hvr-pulse" href="#"><i
                                                                class="icon fa fa-instagram"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img src="{{asset($public.'/jpg/image5.jpg')}}" alt="team5.jpg')}}"/></div>
                        </li>
                    </ul>
                </div>
                <!-- Arrow previous -->

                <div class="container"><a id="prev-team" class="btn-small hvr-bounce-to-right" href="#team-carousel"
                                          data-slide="prev"> <span class="fa fa-angle-left"></span></a></div>
            </div>
        </div>
    </section>
--}}
    {{--
            <!-- BLOGS SECTION-->
            <section id="blogs">
                <div class="container">
                    <!-- Section title -->
                    <div class="section-title">
                        <h3>Blogs</h3>
                        <h5>Morbi ultrices elit nunc, sit amet vestibulum leo eleifend eget</h5>
                    </div>
                </div>
                <!-- Section Content -->
                <div class="container">
                    <div class="row">
                        <!-- Video gallery post -->
                        <div class="blog">
                            <div class="col-md-6">
                                <div class="blog-image">
                                    <div class="image-overlay">
                                        <div class="blog-image-content"><a
                                                    class="btn hvr-bounce-to-right wow fadeIn play-button video-popup"
                                                    href="https://www.youtube.com/watch?v=cBNBnpmyGM0"><i
                                                        class="fa fa-play"></i></a></div>
                                    </div>
                                    <img src="{{asset($public.'/jpg/1-3.jpg')}}"/></div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-text">
                                    <h3>Video gallery post</h3>
                                    <p class="postedby">Posted by: admin</p>
                                    <p>Aliquam dictum dignissim auctor. Proin vitae dolor ut ex tincidunt cursus id vel sem.
                                        Fusce commodo, ipsum sit amet rutrum varius, ligula ligula lacinia enim, in
                                        vestibulum
                                        neque quam eget lorem. Aliquam semper lacinia dui non aliquet. Cras ex dui, pretium
                                        nec
                                        lobortis ac, sollicitudin a metus. Pellentesque tempus congue tellus, a tristique
                                        nisl
                                        varius vel. Nunc sit amet semper turpis. Aliquam pharetra blandit ultrices. </p>
                                    <a href="#" class="link"><i class="fa fa-angle-double-right"></i> Readmore</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <!-- Image gallery post -->
                        <div class="col-md-4 col-xs-12">
                            <div class="blog">
                                <div class="blog-image-gallery">

                                    <!-- Blog carousel -->
                                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner ">
                                            <div class="item active"><img src="{{asset($public.'/jpg/1-4.jpg')}}"/></div>
                                            <div class="item"><img src="{{asset($public.'/jpg/2-3.jpg')}}"/></div>
                                            <div class="item"><img src="{{asset($public.'/jpg/3-3.jpg')}}"/></div>
                                        </div>
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators carousel-indicators-blog">
                                            <li data-target="#blog-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#blog-carousel" data-slide-to="1"></li>
                                            <li data-target="#blog-carousel" data-slide-to="2"></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <h3>Image gallery post</h3>
                                    <p class="postedby">Posted by: admin</p>
                                    <p>Pellentesque tempus congue tellus, a tristique nisl varius vel. Nunc sit amet semper
                                        turpis. Aliquam pharetra blandit ultrices. </p>
                                    <a href="#" class="link"><i class="fa fa-angle-double-right"></i> Readmore</a></div>
                            </div>
                        </div>

                        <!-- Single image post -->
                        <div class="col-md-4 col-xs-12">
                            <div class="blog">
                                <div class="blog-image"><img src="{{asset($public.'/jpg/3-4.jpg')}}"/></div>
                                <div class="blog-text">
                                    <h3>Single image post</h3>
                                    <p class="postedby">Posted by: admin</p>
                                    <p>Pellentesque tempus congue tellus, a tristique nisl varius vel. Nunc sit amet semper
                                        turpis. Aliquam pharetra blandit ultrices. </p>
                                    <a href="#" class="link"><i class="fa fa-angle-double-right"></i> Readmore</a></div>
                            </div>
                        </div>

                        <!-- Audio sound post -->
                        <div class="col-md-4 col-xs-12">
                            <div class="blog">
                                <div class="blog-image">
                                    <div class="image-overlay">
                                        <div class="blog-image-content"><a
                                                    class="video-popup btn-white1 hvr-bounce-to-right wow fadeIn audio-play-button"
                                                    href="https://vimeo.com/76979871"><i class="fa fa-play"></i></a>
                                            <h3 class="txt-white">Audio blogs</h3>
                                        </div>
                                    </div>
                                    <img src="{{asset($public.'/jpg/4-green.jpg')}}"/></div>
                                <div class="blog-text">
                                    <h3>Audio sound post</h3>
                                    <p class="postedby">Posted by: admin</p>
                                    <p>Pellentesque tempus congue tellus, a tristique nisl varius vel. Nunc sit amet semper
                                        turpis. Aliquam pharetra blandit ultrices. </p>
                                    <a href="#" class="link"><i class="fa fa-angle-double-right"></i> Readmore</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SUBSCRIBE SECTION-->
            <section id="subscribe">
                <div class="container">
                    <!-- Section title -->
                    <div class="section-title dark-title">
                        <h3>Subscribe</h3>
                        <h5>Subscribe to our newsletter to get the latest update in your inbox.</h5>
                    </div>
                    <div class="col-md-12">
                        <form action="#" class="subscribe-box">
                            <div class="input-group">
                                <input type="email" class="textbox" placeholder="email@yourwebsite.com" required>
                                <span class="input-group-btn">
                <button class="btn btn-green hvr-bounce-to-right wow fadeIn" type="submit"><i class="icon fa fa-user"></i>Subscribe</button>
                </span></div>
                        </form>
                    </div>
                </div>
            </section>
    --}}

    <!-- CONTACT SECTION-->
        <section id="contact">
            <div style="background: rgba(255,255,255,0.85); padding:150px 0;">
                <div class="container">
                    <!-- Section title -->
                    <div class="section-title">
                        <h3>Contact</h3>
                        <h5>Call us, send us a message, or locate us.</h5>
                    </div>
                </div>
                <!-- Section Content -->
                <div class="container">
                    <div class="col-md-4 col-xs-12 wow fadeInRight">
                        <ul class="contact-list">
                            <li><i class="icon fa fa-envelope"></i>contact@greenwhitedev.com.ng</li>
                            <li><i class="icon fa fa-phone-square"></i>+234 703 860 6396</li>
                            <li><i class="icon fa fa-map"></i>Ibom Plaza Uyo, Akwaibom State.</li>
                        </ul>
                    </div>
                    <div class="col-md-8 col-xs-12 contact-form wow fadeInDown">
                        <div class="row">
                            <form id="contact-form" method="post">
                                @csrf
                                <div class="input-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <input name="name" type="text" class="textbox" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input name="email" type="text" class="textbox" placeholder="Email" required>
                                    </div>
                                    <div class="col-sm-12 mt30 col-xs-12">
                                        <input name="subject" type="text" class="textbox" placeholder="Subject"
                                               required>
                                    </div>
                                    <div class="col-sm-12 mt30 col-xs-12">
                                        <textarea name="message" class="textbox" placeholder="Message"
                                                  required></textarea>
                                    </div>
                                    <div class="col-sm-12 mt30 col-xs-12"> <span class="input-group-btn">
                <button class="btn btn-green hvr-bounce-to-right wow fadeIn" name="submit" id="submitButton"
                        type="submit"><i id="submitEmail"
                            class="icon fa fa-send"></i>Submit</button>
                </span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAP -->
            <div class="row">
                <div id="mapContact"></div>
            </div>
        </section>
        <!-- FOOTER -->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="footer-social">
                            <h3 class="font-black">Follow us</h3>
                            <ul class="footer-socials">
                                <li>
                                    <div class="social"><a href="#"
                                                           class="btn btn-small hvr-bounce-to-right wow fadeIn fb"><i
                                                    class="fa fa-facebook"></i></a></div>
                                </li>
                                <li>
                                    <div class="social"><a href="#"
                                                           class="btn btn-small hvr-bounce-to-right wow fadeIn twit"><i
                                                    class="fa fa-twitter"></i></a></div>
                                </li>
                                <li>
                                    <div class="social"><a href="#"
                                                           class="btn btn-small hvr-bounce-to-right wow fadeIn goog"><i
                                                    class="fa fa-google-plus"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 copyrights">
                        <h4>Copyrights © {{date('Y')}} GreenWhite Solutions, all rights reserved. <span
                                    class="txt-color">Created by Victor Ndu</span></h4>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToTop" style="display: inline;"><span class="fa fa-angle-up"></span></a>

        <!-- Sign up Popup -->
        <div class="modal fade" id="SignUp" role="dialog">
            <div class="modal-dialog">

                <!-- Title-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title txt-color mb30">Sign up</h4>

                        <!-- Form -->
                        <form>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="name" type="text" class="form-control" name="name"
                                       placeholder="Enter your full name">
                            </div>
                            <div class="input-group"><span class="input-group-addon"><i
                                            class="fa fa-envelope"></i></span>
                                <input id="email" type="text" class="form-control" name="email"
                                       placeholder="Your email id">
                            </div>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                <input id="mobilenumber" type="text" class="form-control" name="msg"
                                       placeholder="Enter mobile number">
                            </div>
                            <div class="input-group"><span class="input-group-addon"><i
                                            class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password">
                            </div>
                            <div class="input-group">
                                <button class="btn btn-green hvr-bounce-to-right" type="submit"><i
                                            class="icon fa fa-send"></i>Create Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset($public.'/js/jquery.js')}}"></script>
<script src="{{asset($public.'/js/jquery-ui.min.js')}}"></script>

<!-- Include all colpiled plugins (below), or include individual files as needed -->
<script src="{{asset($public.'/js/bootstrap.min.js')}}"></script>
<script src="{{asset($public.'/js/bootsnav.js')}}"></script>
<script src="{{asset($public.'/js/jquery-smoothscroll-min.js')}}"></script>
<script src="{{asset($public.'/js/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset($public.'/js/jquery.counterup.js')}}"></script>
<script src="{{asset($public.'/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset($public.'/js/wow.min.js')}}"></script>
<script src="{{asset($public.'/js/form-contact.js')}}"></script>
<!-- Google Map Javascript Codes -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBRKOaBhqAsTuyCTzB1ODUiNm2eABFwI_Q"></script>

<!-- Custom Javascript -->
<script src="{{asset($public.'/js/custom.js')}}"></script>
<script>

</script>
</body>
</html>