<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="html 5 template">
	<meta name="author" content>
    <title>Search Results for {{$search}}| Homex</title>
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- ARCHIVES CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/lightcase.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages">
	<!-- START SECTION HEADINGS -->
	<!-- START SECTION HEADINGS -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-info hidden-sm-down">
                    <div class="call-header">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+919702310212"><font style="color:white">+91 9702310212</font></a></p>
                    </div>
                    <div class="address-header">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> C/20,156,RSC-4, Malad(West)</p>
                    </div>
                    <div class="mail-header">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:dqureshiumargmail.com"><font style="color:white">TCET Students</font></a></p>
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
                                    <a class="dropdown-item" href="submit-property/{{$property->id}}">Property Details</a>
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
                                <a class="dropdown-item" href="submit-property/{{$property->id}}">Property Details</a>
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

	<section class="headings">
		<div class="text-heading text-center">
			<div class="container">
				<h1>All Properties</h1>
				<h2><a href="/">Home </a> &nbsp;/&nbsp; All Properties</h2>
			</div>
		</div>
	</section>
	<!-- END SECTION HEADINGS -->

	<!-- START SECTION PROPERTIES LISTING -->
	<section class="properties-list featured portfolio blog">
		<div class="container">
			<!-- Block heading Start-->
			<div class="block-heading">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-2">
						<h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                                </span>
                            <span class="hidden-sm-down">Search Results for {{$search}}</span>
                            </h4>
					</div>
					<div class="col-lg-6 col-md-7 col-10 cod-pad">
						{{-- <div class="sorting-options">
							<select class="sorting">
								<option>Price: High to low</option>
								<option>Price: Low to high</option>
								<option>Sells: High to low</option>
								<option>Sells: Low to high</option>
							</select>
							<a href="properties-full-list.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
							<a href="properties-full-grid.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
						</div> --}}
					</div>
				</div>
            </div>
			<!-- Block heading end -->
			<div id="properties" class="row featured portfolio-items">
                @if($yes == false)
                    {{$message}}
                @else
                @foreach($properties as $property)
                @if($property->verify == 1)
				<div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
					<div class="project-single">
						<div class="project-inner project-head">
							<div class="project-bottom">
								<h4><a href="submit-property/{{$property->id}}">View Property</a><span class="category">Real Estate</span></h4>
							</div>
							<div class="button-effect">
                                <a href="submit-property/{{$property->id}}" class="btn"><i class="fa fa-link"></i></a>
                                <?php
                                    $images = explode("|",$property->filename);
                                ?>
								{{-- <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a> --}}
								<a class="img-poppu btn" href="{{ asset('storage') }}/image/{{ $images[0] }}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
							</div>
							<div class="homes">
								<!-- homes img -->
								<a href="submit-property/{{$property->id}}" class="homes-img">
									@if($property->featured == 1) <div class="homes-tag button alt featured">Featured</div> @endif
									@if($property->status == "For Rent") <div class="homes-tag button sale rent">For Rent</div> @else <div class="homes-tag button alt sale">For Sale</div>@endif
                                    @if($property->status == "Family Home")<div class="homes-price">Family Home</div> @else <div class="homes-price">Apartment</div>@endif
                                    <img src="{{ asset('storage') }}/image/{{ $images[0] }}" alt="home-1" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- homes content -->
						<div class="homes-content">
							<!-- homes address -->
							<h3>{{$property->location}}</h3>
							<p class="homes-address mb-3">
								<a href="submit-property/{{$property->id}}">
									<i class="fa fa-map-marker"></i><span>{{$property->address}}</span>
								</a>
							</p>
							<!-- homes List -->
							<ul class="homes-list clearfix">
								<li>
									<i class="fa fa-bed" aria-hidden="true"></i>
									<span>{{$property->beds}} Bedrooms</span>
								</li>
								<li>
									<i class="fa fa-bath" aria-hidden="true"></i>
									<span>{{$property->baths}} Bathrooms</span>
								</li>
								<li>
									<i class="fa fa-object-group" aria-hidden="true"></i>
									<span>{{$property->sqft}} sq ft</span>
								</li>
								{{-- <li>
									<i class="fas fa-warehouse" aria-hidden="true"></i>
									<span>2 Garages</span>
								</li> --}}
							</ul>
							<!-- Price -->
							<div class="price-properties">
								<h3 class="title mt-3">
                                <a href="submit-property/{{$property->id}}">&#8377; {{$property->price}}</a>
                                </h3>
                                <?php
                                    $tmp = \App\User::find($property->userid);
                                ?>
								<div class="compare">
									<a href="tel:{{$tmp->phone}}" title="Call">
										<i class="fas fa-phone"></i>
									</a>
                                    <a href="mailto:{{$tmp->email}}" title="Email">
										<i class="fas fa-envelope"></i>
									</a>
									{{-- <a href="#" title="Favorites">
										<i class="fa fa-heart-o"></i>
									</a> --}}
								</div>
							</div>
							<div class="footer">
								<a href="agent-details.html">
									<i class="fa fa-user"></i> {{$tmp->name}}
								</a>
								<span>
                                {{-- <i class="fa fa-calendar"></i> 2 months ago --}}
                            </span>
							</div>
						</div>
					</div>
                </div>
                @endif
                @endforeach
                @endif
			</div>
			{{-- <nav aria-label="..." class="pt-3">
				<ul class="pagination">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav> --}}
		</div>
	</section>
	<!-- END SECTION PROPERTIES LISTING -->

	<!-- START SECTION NEWSLETTER 
	<section class="subscribe">
		<div class="realhome_subscribe">
			<div class="realhome container">
				<h2>Subscribe for Our Newsletter</h2>
				<div class="row align-center">
					<div class="col-lg-6 col-md-6">
						<form class="realhome_form_subscribe mailchimp form-inline" method="post">
							<input type="email" id="subscribeEmail" name="EMAIL" class="form_email" placeholder="Enter Your Email">
							<button type="submit" value="Subscribe">Submit</button>
							<label for="subscribeEmail" class="error"></label>
							<p class="subscription-success"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- END SECTION NEWSLETTER -->

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
	<script src="js/jquery.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script src="js/lightcase.js"></script>
	<script src="js/light.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/popup.js"></script>
	<script src="js/ajaxchimp.min.js"></script>
	<script src="js/newsletter.js"></script>
	<script src="js/inner.js"></script>
    <script src="js/color-switcher.js"></script>
</body>

</html>
