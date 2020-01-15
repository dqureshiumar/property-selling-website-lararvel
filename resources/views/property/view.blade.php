<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="html 5 template">
	<meta name="author" content>
	<title>Property Details</title>
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images')}}/favicon.ico">
	<link rel="stylesheet" href="{{ asset('css') }}/jquery-ui.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css">
	<!-- LEAFLET MAP -->
	<link rel="stylesheet" href="{{ asset('css') }}/leaflet.css">
	<link rel="stylesheet" href="{{ asset('css') }}/leaflet-gesture-handling.min.css">
	<link rel="stylesheet" href="{{ asset('css') }}/leaflet.markercluster.css">
	<link rel="stylesheet" href="{{ asset('css') }}/leaflet.markercluster.default.css">
	<!-- ARCHIVES CSS -->
	<link rel="stylesheet" href="{{ asset('css') }}/animate.css">
	<link rel="stylesheet" href="{{ asset('css') }}/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('css') }}/lightcase.css">
	<link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('css') }}/styles.css">
	<link rel="stylesheet" id="color" href="{{ asset('css') }}/default.css">
</head>

<body class="inner-pages">
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
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:dqureshiumargmail.com"><font style="color:white">dqureshiumar@gmail.com</font></a></p>
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

	<section class="headings">
		<div class="text-heading text-center">
			<div class="container">
				<h1>Property Details</h1>
				<h2><a href="/home">Home </a> &nbsp;/&nbsp; Property Details</h2>
			</div>
		</div>
	</section>
	<!-- END SECTION HEADINGS -->

	<!-- START SECTION PROPERTIES LISTING -->
	<section class="blog details">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 blog-pots">
					<!-- Block heading Start-->
					<div class="block-heading details">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-2">
								<h4>
                            <span class="heading-icon">
                                <i class="fa fa-map-marker"></i>
                                </span>
                                <span class="hidden-sm-down">{{$property->address}}</span>
                            </h4>
							</div>
							<div class="col-lg-6 col-md-6 col-10 cod-pad">
								<div class="sorting-options">
									<h5><span>Price:</span> Rs{{$property->price}}</h5>
									<h6 class="type"><span>Type:</span> {{$property->status}}</h6>
								</div>
							</div>
						</div>
					</div>
					<!-- Block heading end -->
					<div class="row">
						<div class="col-md-12 mb-4">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								</ol>
								<?php

								$images = explode("|",$property->filename);
								?>
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item active">
										<img class="d-block img-fluid" src="{{ asset('storage') }}/image/{{ $images[0] }}" alt="First slide">
									</div>
									@for ($i = 1; $i < count($images); $i++)
									<div class="carousel-item">
										<img class="d-block img-fluid" src="{{ asset('storage') }}/image/{{ $images[$i] }}" alt="First slide">
									</div>
									@endfor
									{{-- <div class="carousel-item">
										<img class="d-block img-fluid" src="{{ asset('images') }}/slider/home-slider-2.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block img-fluid" src="{{ asset('images') }}/slider/home-slider-3.jpg" alt="Third slide">
									</div>
									<div class="carousel-item">
										<img class="d-block img-fluid" src="{{ asset('images') }}/slider/home-slider-4.jpg" alt="Second slide">
									</div> --}}
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="blog-info details">
								<!-- cars content -->
								<div class="homes-content details-2 mb-5">
									<!-- cars List -->
									<ul class="homes-list clearfix">
										<li>
											<i class="fa fa-bed" aria-hidden="true"></i>
											<span>Beds {{$property->beds}}</span>
										</li>
										<li>
											<i class="fa fa-bath" aria-hidden="true"></i>
											<span>Baths {{$property->beds}}</span>
										</li>
										<li>
											<i class="fa fa-object-group" aria-hidden="true"></i>
											<span>{{$property->sqft}} sq ft</span>
										</li>
										<li>
											<i class="fa fa-car" aria-hidden="true"></i>
											<span>Garages 2</span>
										</li>
										<li>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Kitchen 2</span>
										</li>
										<li>
											<i class="fa fa-clone" aria-hidden="true"></i>
											<span>Balcony 2</span>
										</li>
									</ul>
								</div>
								<h5 class="mb-4">GENERAL INFORMATION</h5>
								<p class="mb-3">This is a property for {{$property->status}} interested people can buy this property by contacting the Person through mail or Phone. This is a Legit property to buy.</p>
								<p class="mb-3">The Property is a {{$property->type}}.</p>
								<p class="mb-3">This property is located at {{$property->location}} and the address of the property is {{$property->address}}. It has @if($property->beds == 1){{$property->beds}} bedroom @else {{$property->beds}} bedrooms @endif and @if($property->baths == 1){{$property->baths}} bathsroom @else {{$property->baths}} bathrooms @endif</p>
							</div>
						</div>
					</div>
					<!-- cars content -->
					<div class="homes-content details mb-5">
						<!-- title -->
						<h5 class="mb-4">Amenities</h5>
						<!-- cars List -->
						<ul class="homes-list clearfix">
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Air Cond</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Balcony</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Internet</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Dishwasher</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Bedding</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Cable TV</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Parking</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Pool</span>
							</li>
							<li>
								<i class="fa fa-check-square" aria-hidden="true"></i>
								<span>Fridge</span>
							</li>
						</ul>
					</div>
					<div class="property-location mb-5">
						<h5>Location</h5>
						<div class="divider-fade"></div>
						<div id="map-contact" class="contact-map"></div>
					</div>
					<!-- START SECTION ASSIGNED AGENTS -->
					{{-- <section class="team assigned">
						<div class="container">
							<h5>Assigned Agents</h5>
							<div class="row team-all">
								<div class="col-lg-4 col-md-6 team-pro hover-effect">
									<div class="team-wrap">
										<div class="team-img">
											<img src="{{ asset('images') }}/team/t-5.jpg" alt>
										</div>
										<div class="team-content">
											<div class="team-info">
												<h3>Andrew Crow</h3>
												<p>Real Estate Agents</p>
												<div class="team-socials">
													<ul>
														<li>
															<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
															<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
															<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
														</li>
													</ul>
												</div>
												<span><a href="agent-details.html">View Profile</a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 team-pro hover-effect">
									<div class="team-wrap">
										<div class="team-img">
											<img src="{{ asset('images') }}/team/t-6.jpg" alt>
										</div>
										<div class="team-content">
											<div class="team-info">
												<h3>Marie Tyler</h3>
												<p>Real Estate Agents</p>
												<div class="team-socials">
													<ul>
														<li>
															<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
															<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
															<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
														</li>
													</ul>
												</div>
												<span><a href="agent-details.html">View Profile</a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 team-pro pb-none pb-on hover-effect">
									<div class="team-wrap">
										<div class="team-img">
											<img src="{{ asset('images') }}/team/t-7.jpg" alt>
										</div>
										<div class="team-content">
											<div class="team-info">
												<h3>Phillip Smith</h3>
												<p>Real Estate Agents</p>
												<div class="team-socials">
													<ul>
														<li>
															<a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
															<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
															<a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
														</li>
													</ul>
												</div>
												<span><a href="agent-details.html">View Profile</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section> --}}
					<!-- END SECTION ASSIGNED AGENTS -->
				</div>
				{{-- <aside class="col-lg-3 col-md-12 car">
					<div class="widget">
						<div class="section-heading">
							<div class="media">
								<div class="media-left">
									<i class="fa fa-home"></i>
								</div>
								<div class="media-body">
									<h5>Search Properties</h5>
									<div class="border"></div>
									<p>Search your Properties</p>
								</div>
							</div>
						</div>
						<!-- Search Fields -->
						<div class="main-search-field">
							<h5 class="title">Filter</h5>
							<form method="GET">
								<div class="at-col-default-mar">
									<select>
										<option value="0" selected>Location</option>
										<option value="1">New York</option>
										<option value="2">Los Angeles</option>
										<option value="3">Chicago</option>
										<option value="4">Philadelphia</option>
										<option value="5">San Francisco</option>
									</select>
								</div>
								<div class="at-col-default-mar">
									<select class="div-toggle" data-target=".my-info-1">
										<option value="0" data-show=".acitveon" selected>Property Status</option>
										<option value="1" data-show=".sale">For Sale</option>
										<option value="2" data-show=".rent">For Rent</option>
										<option value="3" data-show=".rent">Sold</option>
									</select>
								</div>
								<div class="at-col-default-mar">
									<div class="at-col-default-mar">
										<select>
											<option value="0" selected>Property Type</option>
											<option value="1">Family House</option>
											<option value="2">Apartment</option>
											<option value="3">Condo</option>
										</select>
									</div>
								</div>
								<div class="at-col-default-mar">
									<select>
										<option value="0" selected>Beds</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
								<div class="at-col-default-mar">
									<select>
										<option value="0" selected>Baths</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
								<div class="col-lg-12 no-pds">
									<div class="at-col-default-mar">
										<input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
									</div>
								</div>
								<div class="col-lg-12 no-pds my-4">
									<div class="at-col-default-mar">
										<input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
									</div>
								</div>
							</form>
						</div>
						<!-- Price Fields -->
						<div class="main-search-field-2">
							<div class="range-slider">
								<input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
								<div class="slider-range"></div>
							</div>
						</div>
						<div class="col-lg-12 no-pds">
							<div class="at-col-default-mar">
								<button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
							</div>
						</div>
						<div class="recent-post py-5">
							<h5 class="font-weight-bold mb-4">Recent Properties</h5>
							<div class="recent-main">
								<div class="recent-img">
									<a href="blog-details.html"><img src="{{ asset('images') }}/feature-properties/fp-1.jpg" alt></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Family Home</h6></a>
									<p>$230,000</p>
								</div>
							</div>
							<div class="recent-main my-4">
								<div class="recent-img">
									<a href="blog-details.html"><img src="{{ asset('images') }}/feature-properties/fp-2.jpg" alt></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Family Home</h6></a>
									<p>$230,000</p>
								</div>
							</div>
							<div class="recent-main">
								<div class="recent-img">
									<a href="blog-details.html"><img src="{{ asset('images') }}/feature-properties/fp-3.jpg" alt></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Family Home</h6></a>
									<p>$230,000</p>
								</div>
							</div>
						</div>
						<div class="recent-post">
							<h5 class="font-weight-bold mb-4">Popolar Tags</h5>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary">Houses</a></span>
								<span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary">Baths</a></span>
								<span><a href="#" class="btn btn-outline-primary">Beds</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary">Garages</a></span>
								<span><a href="#" class="btn btn-outline-primary">Family</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
								<span><a href="#" class="btn btn-outline-primary">Properties</a></span>
							</div>
							<div class="tags no-mb">
								<span><a href="#" class="btn btn-outline-primary">Location</a></span>
								<span><a href="#" class="btn btn-outline-primary">Price</a></span>
							</div>
						</div>
					</div>
				</aside> --}}
			</div>
		</div>
	</section>
	<!-- END SECTION PROPERTIES LISTING -->

	<!-- START SECTION NEWSLETTER -->
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
	</section>
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
					<p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By <a href="http://dqureshiumar001.000webhostapp.com"><font style="color:white;">Umar Qureshi</font></a></p>
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
	<script src="{{ asset('js') }}/jquery.min.js"></script>
	<script src="{{ asset('js') }}/jquery-ui.js"></script>
	<script src="{{ asset('js') }}/range-slider.js"></script>
	<script src="{{ asset('js') }}/tether.min.js"></script>
	<script src="{{ asset('js') }}/bootstrap.min.js"></script>
	<script src="{{ asset('js') }}/smooth-scroll.min.js"></script>
	<script src="{{ asset('js') }}/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('js') }}/popup.js"></script>
	<script src="{{ asset('js') }}/ajaxchimp.min.js"></script>
	<script src="{{ asset('js') }}/newsletter.js"></script>
	<script src="{{ asset('js') }}/leaflet.js"></script>
	<script src="{{ asset('js') }}/leaflet-gesture-handling.min.js"></script>
	<script src="{{ asset('js') }}/leaflet-providers.js"></script>
	<script src="{{ asset('js') }}/leaflet.markercluster.js"></script>
	<script src="{{ asset('js') }}/map-single.js"></script>
	<script src="{{ asset('js') }}/color-switcher.js"></script>
	<script src="{{ asset('js') }}/inner.js"></script>
</body>

</html>
