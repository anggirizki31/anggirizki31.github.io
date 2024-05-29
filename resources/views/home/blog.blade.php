<!doctype html>
<html lang="zxx">
    <head>
		<!--=== Required meta tags ===-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
		@section('navBlog','active')
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
							<a href="/home">
								<img src="../images/white-logo.svg" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--=== End Mobile Navbar Section ===-->
		</div>
		<!--=== Start Contact Us Area ===-->
		<div class="offcanvas offcanvas-end contact-offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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
					</div>
				</form>
			</div>
		</div>
		<!--=== End Navbar Area ===-->
		<!--=== Start Page Banner Area ===-->
		<div class="page-banner-area bg-black bg-img" data-background="./../images/banner-bg-shape.png">
			<div class="container mw-1680">
				<div class="page-banner-content">
					<h2>Blog</h2>
					<ul class="ps-0 mb-0 list-unstyled justify-content-center page-breadcrumb d-flex flex-wrap gap-4">
						<li>
							<a href="/home">Home</a>
						</li>
						<li>
							<span class="active">Blog</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--=== End Page Banner Area ===-->
		<!-- Start Blog Area -->
		@section('navBlog','active')
		<div class="blog-area ptb-100">
			<div class="container">
				<div class="row align-items-center justify-content-center">
				@foreach($blogs as $blog)
					<div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="{{ route('blogs.show', $blog->id) }}" class="d-block blog-img">
								<img src="../images/{{$blog->image}}" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>{{$blog->tanggal_upload}}</span>
								</li>
							</ul>
							<h3>
								<a href="{{ route('blogs.show', $blog->id) }}">{{$blog->title}}</a>
							</h3>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
					<!-- <div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="/single" class="d-block blog-img">
								<img src="../images/blog2.png" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>Desember 10, 2023</span>
								</li>
								<li>17 Minutes Read</li>
							</ul>
							<h3>
								<a href="/single">Mengapa Transformasi Digital Penting untuk Pertumbuhan Jangka Panjang</a>
							</h3>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="/single" class="d-block blog-img">
								<img src="../images/blog4.png" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>Januari 31, 2024</span>
								</li>
								<li>3 Minutes Read</li>
							</ul>
							<h3>
								<a href="/single">Tren Teknologi Terbaru yang Akan Mengubah Wajah Industri di 2024</a>
							</h3>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="/single-blog" class="d-block blog-img">
								<img src="../images/blog5.png" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>Februari 14, 2024</span>
								</li>
								<li>10 Minutes Read</li>
							</ul>
							<h3>
								<a href="/single-blog">Cara Menggunakan Data Besar untuk Meningkatkan Pengalaman Pelanggan</a>
							</h3>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="/single-blog" class="d-block blog-img">
								<img src="../images/blog6.png" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>Maret 23, 2024</span>
								</li>
								<li>7 Minutes Read</li>
							</ul>
							<h3>
								<a href="/single-blog">Dari Otomatisasi sampai Kepuasan Pelanggan</a>
							</h3>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="blog-single-item style-two">
							<a href="/single-blog" class="d-block blog-img">
								<img src="../images/blog1_development marketing.png" alt="blog">
							</a>
							<ul class="ps-0 list-unstyled date">
								<li>
									<span>April 12, 2024</span>
								</li>
								<li>12 Minutes Read</li>
							</ul>
							<h3>
								<a href="/single-blog">Kiat Sukses untuk Startup Digital di Era Kompetitif Saat Ini</a>
							</h3>
						</div>
					</div> -->
					<div class="col-md-12">
						<div class="pagination">

							<a href="/blog" class="next page-count hover-style">
								<div class="inner-border">
									<i class="fas fa-arrow-left"></i>
								</div>
							</a>
							
							<a href="/blog" class="page-count current hover-style" aria-current="page">
								<div class="inner-border">1</div>
							</a>
							<a href="/blog" class="page-count hover-style">
								<div class="inner-border">2</div>
							</a>
							<a href="/blog" class="page-count hover-style">
								<div class="inner-border">3</div>
							</a>
							<a href="/blog" class="page-count hover-style">
								<div class="inner-border">4</div>
							</a>
							
							<a href="/blog" class="next page-count hover-style">
								<div class="inner-border">
									<i class="fas fa-arrow-right"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<!-- End Blog Area -->	

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