<!doctype html>
<html lang="zxx">
    <head>
		<!--=== Required meta tags ===-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--=== CSS Link ===--> 
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/meanmenu.css">
		<link rel="stylesheet" href="../css/owl.theme.default.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/icofont.min.css">
		<link rel="stylesheet" href="../css/font-awesome-pro.css">
		<link rel="stylesheet" href="../css/scrollcue.css">
		<link rel="stylesheet" href="../css/magnific-popup.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../images/favicon.png">

		<title>Digivolve Solutions</title>
    </head>

    <body class="digital-agency-body">
		<!--=== Start Preloader Area ===-->
		<div class="preloader">
            <div class="content">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
		<!--=== End Preloader Area ===-->

		<!--=== Start Navbar Area ===-->
		@section('navService','active')
		<div class="navbar-area style-three">
			<!--=== Start Main Navbar Section ===-->
			<div class="main-nav">
				<div class="container mw-1680">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.html">
							<img src="../images/black-logo.svg" alt="black-logo">
						</a> 
						
						<div class="collapse navbar-collapse for-mobile-menu" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto">
								<li class="nav-item">
								<a href="/index" class="nav-link @yield('navHome')" >
										Home             
									</a>
									<li class="nav-item">

									<li class="nav-item">
									<a href="/about" class="nav-link @yield('navAbout')">
										About Us             
									</a>
									<li class="nav-item">
									<a href="/services" class="nav-link @yield('navService')">
										Services             
									</a>
									<li class="nav-item">
									<a href="/contact" class="nav-link @yield('navContact')">
										Contact Us             
									</a>
									<li class="nav-item">
									<a href="/portfolio" class="nav-link @yield('navPortfolio')">
										Portofolio            
									</a>
									<li class="nav-item">
									<a href="/blog" class="nav-link @yield('navBlog')">
										Blog            
									</a>
								</li>
								</li>
								
							</ul>

							<div class="nav-right-options d-flex align-items-center">
								<ul class="social-link ps-0 mb-0 list-unstyled">
									<li>
										<a href="https://facebook.com/" target="_blank">
											<i class="fa-brands fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="fa-brands fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://instagram.com/" target="_blank">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="fa-brands fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
								<!-- <button class="menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
									<i class="fa-regular fa-bars"></i>
								</button> -->
							</div>
						</div>
					</nav>
				</div>
			</div>
			<!--=== End Main Navbar Section ===-->
			
			<!--=== Start Mobile Navbar Section ===-->
			<div class="mobile-nav">
				<div class="container">
					<div class="mobile-menu">
						<div class="logo">
							<a href="index.html">
								<img src="../images/white-logo.svg" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--=== End Mobile Navbar Section ===-->
		</div>
		<!--=== Start Contact Us Area ===-->
		<!-- <div class="offcanvas offcanvas-end contact-offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasRightLabel">Contact Us</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<form>
					<div class="form-group mb-4">
						<input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group mb-4">
						<input type="text" class="form-control" placeholder="Last Name">
					</div> -->
					<!-- <div class="form-group mb-4">
						<input type="email" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group mb-4">
						<input type="number" class="form-control" placeholder="Enter Phone No">
					</div>
					<div class="form-group mb-4">
						<input type="text" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group mb-4">
						<textarea class="form-control" placeholder="Your Messages" cols="30" rows="5"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="main-btn style-three">
							Submit
						</button> -->
					<!-- </div>
				</form>
			</div>
		</div> -->
		<!--=== End Navbar Area ===-->

		<!--=== Start Page Banner Area ===-->
		<div class="page-banner-area bg-black bg-img" data-background="./../images/banner-bg-shape.png">
			<div class="container mw-1680">
				<div class="page-banner-content">
					<h2>Services</h2>
					<ul class="ps-0 mb-0 list-unstyled justify-content-center page-breadcrumb d-flex flex-wrap gap-4">
						<li>
							<a href="/home">Home</a>
						</li>
						<li>
							<span class="active">Services</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--=== End Page Banner Area ===-->

		<!--=== Start Services Area ===-->
		<div class="services-area pt-100 pb-75 ">
			<div class="container">

				<div class="row justify-content-center">
					@foreach($services as $service)
					<div class="col-xl-3 col-sm-6">
						<div class="services-single-item style-two">
							<div class="icon">
								<img src="../images/{{$service->image}}">
							</div>
							<h3>
								<a>{{$service->title}}</a>
							</h3>
							<p>{{$service->description}}</p>
							<ul class="ps-0 mb-0 list-unstyled">
								<li>{{$service->label}}</li>
								<li>{{$service->label1}}</li>
								<li>{{$service->label2}}</li>
							</ul>
						</div>
					</div>
					@endforeach

					<!-- <div class="col-xl-3 col-sm-6">
						<div class="services-single-item style-two style-three">
							<div class="icon">
								<img src="../images/{{$service->image}}" alt="services-icon">
							</div>
							<h3>
								<a href="/service-detail">{{$service->title}}</a>
							</h3>
							<p>{{$service->description}}</p>
							<ul class="ps-0 mb-0 list-unstyled">
								<li>{{$service->label}}</li>
								<li>{{$service->label1}}</li>
								<li>{{$service->label2}}</li>
							</ul> 
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="services-single-item style-two style-three">
							<div class="icon">
								<img src="../images/{{$service->image}}" alt="services-icon">
							</div>
							<h3>
								<a href="/service-detail">{{$service->title}}</a>
							</h3>
							<p>{{$service->description}}</p>
							<ul class="ps-0 mb-0 list-unstyled">
								<li>{{$service->label}}</li>
								<li>{{$service->label1}}</li>
								<li>{{$service->label2}}</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="services-single-item style-two style-three">
							<div class="icon">
								<img src="../images/{{$service->image}}" alt="services-icon">
							</div>
							<h3>
								<a href="/service-detail">{{$service->title}}</a>
							</h3>
							<p>{{$service->description}}</p>
							<ul class="ps-0 mb-0 list-unstyled">
								<li>{{$service->label}}</li>
								<li>{{$service->label1}}</li>
								<li>{{$service->label2}}</li>
							</ul>
						</div>
					</div>  -->
				</div>
			</div>
		</div>
		<!--=== End Services Area ===-->


		<!--=== Start Contact Us Area ===-->
		
								
						
		<!--=== End Contact Us Area ===-->

		<!--=== Start Footer Area ===-->
		<div class="footer-area-three bg-color-f6f5f3">
			<div class="container">
				<div class="row align-items-center" data-cues="slideInUp">
					<div class="col-lg-4 col-sm-6">
						<div class="footer-single-item-three">
							<h2>Let’s Work Together</h2>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="footer-single-item-three">
							<ul class="ps-0 mb-0 list-unstyled social-link">
								<li>
									<a href="https://www.facebook.com/" target="_blank">FACEBOOK</a>
								</li>
								<li>
									<a href="https://www.facebook.com/" target="_blank">TWITTER</a>
								</li>
								<li>
									<a href="https://www.facebook.com/" target="_blank">LINKEDIN</a>
								</li>
								<li>
									<a href="https://www.facebook.com/" target="_blank">INSTAGRAM</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="footer-single-item-three">
							<p>We are digital agency that helps businesses develop immersive and engaging user experiences</p>
							<a href="mailto:@anggirizkiramadani31@gmail.com" class="main-btn style-three">
								LET'S TALK WITH US
							</a>
						</div>
					</div>
				</div>
				<p class="copyright">Copyright, <span>Company Profile</span> All Rights Reserved</p>
			</div>
		</div>	
		<!-- End Footer Area -->

		<div class="back-to-top text-center">
			<i class="fas fa-arrow-up"></i>
		</div>

        <!--=== JS Link ===-->
        <script src="../js/jquery.min.js"></script> 
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery.meanmenu.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
        <script src="../js/scrollcue.js"></script>
        <script src="../js/magnific-popup.min.js"></script>
		<script src="../js/counterup.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
		<script src="../js/mixitup.min.js"></script>
        <script src="../js/smoothscroll.min.js"></script>
		<script src="../js/custom.js"></script>
    </body>
</html>