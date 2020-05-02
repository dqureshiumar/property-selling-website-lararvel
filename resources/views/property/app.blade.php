<!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Umar Qureshi has Designed a Property Selling website">
        <meta name="author" content="Umar Qureshi">
        <title>Homex | Property Selling Website</title>
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images') }}/favicon.ico">
        <link rel="stylesheet" href="{{ asset('css') }}/jquery-ui.css">
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('css') }}/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css">
        <!-- Slider Revolution CSS Files -->
        <link rel="stylesheet" href="{{ asset('revolution') }}/css/settings.css">
        <link rel="stylesheet" href="{{ asset('revolution') }}/css/layers.css">
        <link rel="stylesheet" href="{{ asset('revolution') }}/css/navigation.css">
        <!-- ARCHIVES CSS -->
        <link rel="stylesheet" href="{{ asset('css') }}/animate.css">
        <link rel="stylesheet" href="{{ asset('css') }}/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('css') }}/lightcase.css">
        <link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('css') }}/styles.css">
        <link rel="stylesheet" id="color" href="{{ asset('css') }}/default.css">
    </head>

    <body>
        <!-- START SECTION HEADINGS -->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="top-info hidden-sm-down">
                        <div class="call-header">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+919702310212"><font style="color:white">+91 XXXXXXXXX</font></a></p>
                        </div>
                        <div class="address-header">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> By TCET Students</p>
                        </div>
                        <div class="mail-header">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:dqureshiumargmail.com"><font style="color:white">Mail Us</font></a></p>
                        </div>
                    </div>
                    <div class="top-social hidden-sm-down">
                        <div class="login-wrap">
                            @guest
                            <ul class="d-flex">
                                <li><a href="login"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="register"><i class="fa fa-sign-in"></i> Register</a></li>
                            </ul>
                            @endguest
                            @auth
                            <ul class="d-flex">
                                <li style="color:white;">Welcome {{auth()->user()->name}}</li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" style="color:white;">Logout</a></li>
                            </ul>
                            @endauth
                        </div>
                        <div class="social-icons-header">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/dqureshiumar12"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://github.com/dqureshiumar"><i class="fa fa-github" aria-hidden="true" style="color:white"></i></a>
                                <a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/_umar_qureshi_/"><i class="fa fa-instagram" aria-hidden="true" style="color:white"></i></a>
                            </div>
                        </div>
                        {{-- <div class="dropdown">
                            <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                                <img src="images/en.png" alt="lang"> English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                <li><img src="images/fr.png" alt="lang">France</li>
                                <li><img src="images/de.png" alt="lang"> German</li>
                                <li><img src="images/it.png" alt="lang">Italy</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="header-bottom heading sticky-header" id="heading">
                <div class="container">
                    <a href class="logo">
                        <img src="{{ asset('images') }}/logo.svg" alt="realhome">
                    </a>
                    {{-- <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button> --}}
                    <div class="get-quote hidden-lg-down">
                        @auth
                        <a href="submit-property">
                            <p>Submit Property</p>
                        </a>
                        @endauth
                        @guest
                        <a href="login">
                        <p>Login/Register</p>
                        </a>
                        @endguest
                    </div>
                    <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>

                    {{-- <form action="#" id="bloq-search" class="collapse">
                        <div class="bloq-search">
                            <input type="text" placeholder="search...">
                            <input type="submit" value="Search">
                        </div>
                    </form> --}}

                    <nav id="main-menu" class="collapse">
                        <ul>
                            <!-- STAR COLLAPSE MOBILE MENU -->
                            {{--  <li class="hidden-lg-up">
                                 <div class="po">
                                    <a data-toggle="collapse" href="#home" aria-expanded="false">Home</a>
                                </div>
                                <div class="collapse" id="home">
                                    <div class="card card-block">
                                        <a class="dropdown-item" href>Home Map</a>
                                        <a class="dropdown-item" href="index-2.html">Home Image</a>
                                        <a class="dropdown-item" href="index-3.html">Home Video</a>
                                        <a class="dropdown-item" href="index-4.html">Home Slider</a>
                                        <a class="dropdown-item" href="index-5.html">Horizontal Search</a>
                                        <a class="dropdown-item" href="index-6.html">Parallax Image</a>
                                        <a class="dropdown-item" href="index-7.html">Home 3D Video</a>
                                        <a class="dropdown-item" href="index-8.html">Home Full Slider</a>
                                        <a class="dropdown-item" href="index-9.html">Home Map style 2</a>
                                        <a class="dropdown-item" href="index-10.html">Presentation Slider</a>
                                        <a class="dropdown-item" href="index-11.html">Presentation Slider 2</a>
                                        <a class="dropdown-item" href="index-12.html">Home Map style 3</a>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- END COLLAPSE MOBILE MENU -->
                            {{-- <li class="dropdown hidden-md-down">
                                <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Home</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href>Home Map</a>
                                    <a class="dropdown-item" href="index-2.html">Home Image</a>
                                    <a class="dropdown-item" href="index-3.html">Home Video</a>
                                    <a class="dropdown-item" href="index-4.html">Home Slider</a>
                                    <a class="dropdown-item" href="index-5.html">Horizontal Search</a>
                                    <a class="dropdown-item" href="index-6.html">Parallax Image</a>
                                    <a class="dropdown-item" href="index-7.html">Home 3D Video</a>
                                    <a class="dropdown-item" href="index-8.html">Home Full Slider</a>
                                    <a class="dropdown-item" href="index-9.html">Home Map style 2</a>
                                    <a class="dropdown-item" href="index-10.html">Presentation Slider</a>
                                    <a class="dropdown-item" href="index-11.html">Presentation Slider 2</a>
                                    <a class="dropdown-item" href="index-12.html">Home Map style 3</a>
                                </div>
                            </li>
                            <!-- STAR COLLAPSE MOBILE MENU -->
                            <li class="hidden-lg-up">
                                <div class="po">
                                    <a data-toggle="collapse" href="#listing" aria-expanded="false">Properties</a>
                                </div>
                                <div class="collapse" id="listing">
                                    <div class="card card-block">
                                        <a class="dropdown-item" href="properties-full-list.html">Full List</a>
                                        <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                                        <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                                        <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                                        <a class="dropdown-item" href="properties-half-map.html">Half Map</a>
                                        <a class="dropdown-item" href="properties-map.html">Listing With Map</a>
                                        <a class="dropdown-item" href="properties-details.html">Property Details</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END COLLAPSE MOBILE MENU -->
                            <li class="dropdown hidden-md-down">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Properties</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="properties-full-list.html">Full List</a>
                                    <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                                    <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                                    <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                                    <a class="dropdown-item" href="properties-half-map.html">Half Map</a>
                                    <a class="dropdown-item" href="properties-map.html">Listing With Map</a>
                                    <a class="dropdown-item" href="properties-details.html">Property Details</a>
                                </div>
                            </li>
                            <!-- STAR COLLAPSE MOBILE MENU -->
                            <li class="hidden-lg-up">
                                <div class="po">
                                    <a data-toggle="collapse" href="#services" aria-expanded="false">Agents</a>
                                </div>
                                <div class="collapse" id="services">
                                    <div class="card card-block">
                                        <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                                        <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                                        <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END COLLAPSE MOBILE MENU -->
                            <li class="dropdown hidden-md-down">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Agents</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                                    <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                                    <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                                </div>
                            </li>
                            <!-- STAR COLLAPSE MOBILE MENU -->
                            <li class="hidden-lg-up">
                                <div class="po">
                                    <a data-toggle="collapse" href="#about" aria-expanded="false">Pages</a>
                                </div>
                                <div class="collapse" id="about">
                                    <div class="card card-block">
                                        <a class="dropdown-item" href="about.html">About Us</a>
                                        <a class="dropdown-item" href="faq.html">Faq</a>
                                        <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                        <a class="dropdown-item" href="404.html">404</a>
                                        <a class="dropdown-item" href="login.html">Login</a>
                                        <a class="dropdown-item" href="register.html">Register</a>
                                        <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                        <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END COLLAPSE MOBILE MENU -->
                            <li class="dropdown hidden-md-down">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                    <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                                </div>
                            </li>
                            <!-- STAR COLLAPSE MOBILE MENU -->
                            <li class="hidden-lg-up">
                                <div class="po">
                                    <a data-toggle="collapse" href="#blog" aria-expanded="false">Blog</a>
                                </div>
                                <div class="collapse" id="blog">
                                    <div class="card card-block">
                                        <a class="dropdown-item" href="blog.html">Blog Default</a>
                                        <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                        <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END COLLAPSE MOBILE MENU -->
                            <li class="dropdown hidden-md-down">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Blog</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="blog.html">Blog Default</a>
                                    <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                </div>
                            </li> --}}
                            <li><a href="/">Home</a></li>
                            <li><a href="/all-properties">All Properties</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                            @auth
                            <li>
                            <a href="/home">Dashboard</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                           @endauth

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @yield('content')
           <!-- START FOOTER -->
           <footer class="first-footer">
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="netabout">
                                    <a href class="logo">
                                        <img src="{{ asset('images') }}/logo-footer.svg" alt="netcom">
                                    </a>
                                    <p>Sell or Buy Legit Properties using our Property Website.</p>
                                    <a href="about.html" class="btn btn-secondary">Read More...</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="navigation">
                                    <h3>Navigation</h3>
                                    <div class="nav-footer">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="login">Login</a></li>
                                            <li><a href="register">Register</a></li>
                                        </ul>
                                        <ul class="nav-right">
                                            <li><a href="/home">Dashboard</a></li>
                                            <li><a href="{{route('submit-property.index')}}">Submit Property</a></li>
                                            <li><a href="about">About Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="widget">
                                    <h3>Twitter Feeds</h3>
                                    <div class="twitter-widget contuct">
                                        <div class="twitter-area">
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="contactus">
                                    <h3>Contact Us</h3>
                                    <ul>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="in-p">C/20, 156, RSC-4, Mhada</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <a class="in-p" href="tel:+919702310212" style="color:white">+91 9702 310 212</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <a class="in-p" href="mailto:dqureshiumar@gmail.com" style="color:white">&nbsp;dqureshiumar@gmail.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="netsocials">
                                    <li><a href="https://www.facebook.com/dqureshiumar12"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/_umar_qureshi_/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://github.com/dqureshiumar"><i class="fa fa-github" style="bg-color:yellow" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer">
                    <div class="container">
                        <p><script>document.write(new Date().getFullYear())</script> © Copyright - All Rights Reserved.</p>
                        <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By <a href="http://dqureshiumar001.000webhostapp.com"><font style="color:white;">TCET Students</font></a></p>
                    </div>
                </div>
            </footer>
    
            <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
            <!-- END FOOTER -->
    
            <!-- START PRELOADER -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
            <!-- END PRELOADER -->
            <!--Style Switcher===========================================-->
            <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x"></i></a>
                <div class="theme-colours">
                    <p class="font-italic">Choose Colour style</p>
                    <ul>
                        <li>
                            <a href="#." class="blue" id="blue"></a>
                        </li>
                        <li>
                            <a href="#." class="pink" id="pink"></a>
                        </li>
                        <li>
                            <a href="#." class="orange" id="orange"></a>
                        </li>
                        <li>
                            <a href="#." class="purple" id="purple"></a>
                        </li>
                        <li>
                            <a href="#." class="green" id="green"></a>
                        </li>
                        <li>
                            <a href="#." class="red" id="red"></a>
                        </li>
                        <li>
                            <a href="#." class="cyan" id="cyan"></a>
                        </li>
                        <li>
                            <a href="#." class="sky-blue" id="sky-blue"></a>
                        </li>
                        <li>
                            <a href="#." class="gray" id="gray"></a>
                        </li>
                        <li>
                            <a href="#." class="brown" id="brown"></a>
                        </li>
                    </ul>
                </div>
            </div>
    
            <!-- ARCHIVES JS -->
            <script src="{{ asset('js') }}/jquery.min.js"></script>
            <script src="{{ asset('js') }}/jquery-ui.js"></script>
            <script src="{{ asset('js') }}/tether.min.js"></script>
            <script src="{{ asset('js') }}/moment.js"></script>
            <script src="{{ asset('js') }}/transition.min.js"></script>
            <script src="{{ asset('js') }}/bootstrap.min.js"></script>
            <script src="{{ asset('js') }}/fitvids.js"></script>
            <script src="{{ asset('js') }}/jquery.waypoints.min.js"></script>
            <script src="{{ asset('js') }}/jquery.counterup.min.js"></script>
            <script src="{{ asset('js') }}/imagesloaded.pkgd.min.js"></script>
            <script src="{{ asset('js') }}/isotope.pkgd.min.js"></script>
            <script src="{{ asset('js') }}/smooth-scroll.min.js"></script>
            <script src="{{ asset('js') }}/lightcase.js"></script>
            <script src="{{ asset('js') }}/owl.carousel.js"></script>
            <script src="{{ asset('js') }}/jquery.magnific-popup.min.js"></script>
            <script src="{{ asset('js') }}/ajaxchimp.min.js"></script>
            <script src="{{ asset('js') }}/newsletter.js"></script>
            <script src="{{ asset('js') }}/jquery.form.js"></script>
            <script src="{{ asset('js') }}/jquery.validate.min.js"></script>
            <script src="{{ asset('js') }}/forms-2.js"></script>
            <script src="{{ asset('js') }}/color-switcher.js"></script>
    
            <!-- Slider Revolution scripts -->
            <script src="{{ asset('revolution') }}/js/jquery.themepunch.tools.min.js"></script>
            <script src="{{ asset('revolution') }}/js/jquery.themepunch.revolution.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="{{ asset('revolution') }}/js/extensions/revolution.extension.video.min.js"></script>
    
            <script>
                var tpj = jQuery;
                var revapi34;
                if (tpj("#rev_slider_home").revolution === undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_home");
                } else {
                    revapi34 = tpj("#rev_slider_home").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/revolution-slider/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%"
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [600, 550, 500, 450],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
    
            </script>
    
            <!-- MAIN JS -->
            <script src="{{ asset('js') }}/script.js"></script>
    
        </body>
    
        </html>