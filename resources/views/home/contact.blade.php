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

		<title>Company Profile</title>
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
		@section('navContact','active')
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
					</div>
					<div class="form-group mb-4">
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
						</button>
					</div> -->
				<!-- </form>
			</div>
		</div> -->
		<!--=== End Navbar Area ===-->

		<!--=== Start Page Banner Area ===-->
		<div class="page-banner-area bg-black bg-img" data-background="./assets/images/banner-bg-shape.png">
			<div class="container mw-1680">
				<div class="page-banner-content">
					<h2>Contact Us</h2>
					<ul class="ps-0 mb-0 list-unstyled justify-content-center page-breadcrumb d-flex flex-wrap gap-4">
						<li>
							<a href="/home">Home</a>
						</li>
						<li>
							<span class="active">Contact Us</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--=== End Page Banner Area ===-->
	
		<!--=== Start Contact Us Area ===-->
		<div class="contact-us-main-area ptb-100">
			<div class="container">
				<div class="contact-us-main-form">
					<h3>Sent A Message</h3>

					<div class="row">
						<div class="col-lg-8 col-xl-9">
							<form>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<input type="text" class="form-control" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<input type="text" class="form-control" placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<input type="email" class="form-control" placeholder="Your Email">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group mb-4">
											<input type="text" class="form-control" placeholder="Subject">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group mb-4">
											<textarea class="form-control" placeholder="Write your message here..." cols="30" rows="5"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group mb-4">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													Save my name, email, and website in this browser for the next time I comment.
												</label>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group mb-0">
											<button class="main-btn" type="submit">Send A Message</button>
										</div>
									</div>
								</div>
							</form>
						</div>

						<div class="col-lg-4 col-xl-3">
							<div class="contact-info">
								<h3>Temukan kami disini !</h3>
								<ul class="ps-0 mb-0 list-unstyled info-list">
									<li>
										<span>Alamat:</span>
										{{$contact->alamat}}
									</li>
									<li>
										<span>Phone:</span>
										<a href="tel:+62813......">{{$contact->phone}}</a>
									</li>
									<li>
										<span>Mail:</span>
										<a href="mailto:@digivolvesolutions.id">{{$contact->mail}}</a>
									</li>
									<li>
										<span>Website:</span>
										<a href="mailto:https://digivolvesolutions.id/">{{$contact->website}}</a>
									</li>
								</ul>
								<h3>Opening Hours:</h3>
								<p>{{$contact->opening}}</p>

								<div class="social-link d-flex">
									<span>Social Media:</span>
									<div class="d-flex gap-3">
										<a href="https://www.facebook.com/" target="_blank">
											<i class="fa-brands fa-facebook-f"></i>
										</a>
										<a href="https://www.twitter.com/" target="_blank">
											<i class="fa-brands fa-twitter"></i>
										</a>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="fa-brands fa-instagram"></i>
										</a>
										<a href="https://www.pinterest.com/" target="_blank">
											<i class="fa-brands fa-pinterest-p"></i>
										</a>
										<a href="https://www.linkedin.com/" target="_blank">
											<i class="fa-brands fa-linkedin-in"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--=== End Contact Us Area ===-->

		<!--=== Start Map Area ===-->
		<div class="map-area pb-100">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29733962.5709096!2d111.88697805211767!3d-24.532740314506096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1711220009595!5m2!1sen!2sbd" style="width: 100%; height: 600px; border: 0; display: block;"></iframe>
			</div>
		</div>
		<!--=== End Map Area ===-->

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
		