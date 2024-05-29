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
		@section('navHome','active')
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
		<!-- === Start Contact Us Area ===-->
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
					</div>
				</form>
			</div>
		</div> -->
		<!--=== End Contact Us Area === -->

		<!--=== Start Banner Area ===-->
		<div class="banner-area-three position-relative">
			<div class="container mw-1680">
				<div class="banner-content-three" data-cues="slideInUp" data-group="images">
					<h1>Digivolve</h1>
					<h1 class="agency">Solutions</h1>
					<div class="agency-info">
						<p>Hi 👋. Digivolve Solutions, Driving Growth Through Tech Since 2015, Innovating Solutions.</p>
						<div class="d-flex align-items-center map-info">
							<div class="flex-shrink-0">
								<div class="map-icon">
									<img src="../images/map.svg" alt="map">
								</div>
							</div>
							<div class="flex-grow-1 ms-3">
							  	<h4>AGENCY OF THIS YEAR WORLDWIDE</h4>
							</div>
						</div>
					</div>
					<a href="/services" class="banner-btn">
						<span>
							Explore Our Services
							<i class="fa-solid fa-arrow-up-right"></i>
						</span>
					</a>
				</div>
			</div>

			<img src="../images/banner.png" class="banner-img-three" alt="banner-img">
			<img src="../images/shape-4.png" class="shape shape-4" alt="shape">

			<a href="#about-us" class="scroll-btn">
				<i class="fa-sharp fa-light fa-arrow-down"></i>
			</a>
		</div>
		<!--=== End Banner Area ===-->
		
		<!--=== Start Services Area ===-->
		<div class="services-area-three pt-100 mt-5">
			<div class="container">
				<div class="section-title style-three" data-cues="slideInUp">
					<h2>What We Can Do for Our Clients</h2>
				</div>

				<div class="row justify-content-center" data-cues="slideInUp">
				@foreach($services as $service)
					<div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/{{$service->image}}" alt="services-icon" width="80" height="80">
							<h3>
								<a href="/services">{{$service->title}}</a>
							</h3>
							<p>{{$service->description}}</p>
							<a href="/services" class="read-more">VIEW DETAILS</a>
						</div>
					</div>
					@endforeach
					<!-- <div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/design-systems-svgrepo-com.svg" alt="services-icon" width="80" height="80">
							<h3>
								<a href="service-details.html">Desain User Experience (UX) dan User Interface (UI)</a>
							</h3>
							<p>Fokus pada pembuatan pengalaman pengguna yang intuitif dan antarmuka yang menarik untuk meningkatkan keterlibatan pengguna.</p>
							<a href="service-details.html" class="read-more">VIEW DETAILS</a>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/data-svgrepo-com.svg" alt="services-icon"width="80" height="80">
							<h3>
								<a href="service-details.html">Analisis Data dan Kecerdasan Buatan (AI)</a>
							</h3>
							<p>Mengumpulkan, menganalisis, dan menginterpretasi data untuk memberikan wawasan berharga kepada klien </p>
							<a href="service-details.html" class="read-more">VIEW DETAILS</a>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/digital-marketing-1-svgrepo-com.svg" alt="services-icon" width="80" height="80">
							<h3>
								<a href="service-details.html">Pemasaran Digital</a>
							</h3>
							<p>Meliputi strategi pemasaran online, SEO (Search Engine Optimization), periklanan digital, dan manajemen media sosial untuk meningkatkan visibilitas merek</p>
							<a href="service-details.html" class="read-more">VIEW DETAILS</a>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/video-svgrepo-com.svg" alt="services-icon"width="80" height="80">
							<h3>
								<a href="service-details.html">Pengembangan Konten</a>
							</h3>
							<p>Mencakup pembuatan konten yang relevan dan berkualitas untuk platform online, termasuk tulisan blog, video, infografis, dan konten sosial media.</p>
							<a href="service-details.html" class="read-more">VIEW DETAILS</a>
						</div>
					</div> -->
					<!-- <div class="col-xl-4 col-md-6">
						<div class="services-single-item-three">
							<img src="../images/ironclad-security-svgrepo-com.svg" alt="services-icon" width="80" height="80">
							<h3>
								<a href="service-details.html">Keamanan Cyber</a>
							</h3>
							<p>Fokus pada perlindungan sistem dan data dari ancaman keamanan siber, melalui penerapan praktik keamanan terbaik, identifikasi kerentanan, dan tanggapan cepat</p>
							<a href="service-details.html" class="read-more">VIEW DETAILS</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!--=== End Services Area ===-->

		<!--=== Start Who We Are Area ===-->
		<div id="about-us" class="who-we-are-area pt-75 pb-100 bg-color-f6f5f3">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-lg-6" data-cues="slideInUp">
						<div class="who-we-are-img-two">
							<img src="../images/202109172217-main.jpg" alt="who-we-are-img">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content-two" data-cues="slideInUp">
							<h2>Strength Perusahaan</h2>
							<p>Digivolve Solutions agensi digital terbaik saat ini yang menghadirkan berbagai solusi digital</p>

							<div class="all-skill-bar">
								<div class="skill-bar" data-percentage="85%">
									<h4 class="progress-title-holder">
										<span class="progress-title">Development</span>
										<span class="progress-number-wrapper">
											<span class="progress-number-mark">
												<span class="percent"></span>
												<span class="down-arrow"></span>
											</span>
										</span>
									</h4>
		
									<div class="progress-content-outter">
										<div class="progress-content"></div>
									</div>
								</div>
		
								<div class="skill-bar" data-percentage="65%">
									<h4 class="progress-title-holder clearfix">
										<span class="progress-title">Advertising</span>
										<span class="progress-number-wrapper">
											<span class="progress-number-mark">
												<span class="percent"></span>
												<span class="down-arrow"></span>
											</span>
										</span>
									</h4>
		
									<div class="progress-content-outter">
										<div class="progress-content"></div>
									</div>
								</div>
		
								<div class="skill-bar" data-percentage="90%">
									<h4 class="progress-title-holder clearfix">
										<span class="progress-title">Marketing</span>
										<span class="progress-number-wrapper">
											<span class="progress-number-mark">
												<span class="percent"></span>
												<span class="down-arrow"></span>
											</span>
										</span>
									</h4>
		
									<div class="progress-content-outter">
										<div class="progress-content"></div>
									</div>
								</div> 

								<div class="skill-bar" data-percentage="75%">
									<h4 class="progress-title-holder clearfix">
										<span class="progress-title">Branding</span>
										<span class="progress-number-wrapper">
											<span class="progress-number-mark">
												<span class="percent"></span>
												<span class="down-arrow"></span>
											</span>
										</span>
									</h4>
		
									<div class="progress-content-outter">
										<div class="progress-content"></div>
									</div>
								</div> 
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Who We Are Area ===-->

		<!-- Start marquee Us Area -->
		<div class="marquee-area-three">
			<div class="container-fluid ptb-100">
				<div class="marquee-wrapper">
					<div class="marquee" data-cues="slideInUp">
						<h1>Digivolve</h1>
						<h1 class="block">Solutions</h1>
						<h1>Digivolve</h1>
						<h1>Digivolve</h1>
						<h1 class="block">Solutions</h1>
						<h1>Digivolve</h1>
					</div>
				</div>
			</div>

			<div class="recent-cases-area ptb-100">
			<div class="container">
				<div class="row">
				@foreach($portfolios as $portofolio)
					<div class="col-lg-4 col-md-6">
						<div class="recent-cases-single-item style-two mb-4">
							<a href="/portfolio" class="tag">{{$portofolio->namabidang}}</a>
							<h3>
								<a href="/portfolio">{{$portofolio->title}}</a>
							</h3>
							<a href="/portfolio" class="cases-img">
								<img src="../images/{{$portofolio->image}}" alt="cases">
							</a>
							<p>{{$portofolio->description}}</p>
						</div>
					</div>
					@endforeach
					<!-- <div class="col-lg-6 mt-100">
						<div class="case-study-single-item-three">
							<a href="cases-study-details.html" class="d-block case-study-img">
								<img src="../images/blog5.png" alt="case-study">
							</a>
							<ul class="ps-0 list-unstyled d-flex flex-wrap gap-3 tags">
								<li>
									<a href="case-study.html">Branding</a>
								</li>
								<li>
									<a href="case-study.html">Development</a>
								</li>
								<li>
									<a href="case-study.html">Marketing</a>
								</li>
							</ul>
							<h3>
								<a href="cases-study-details.html">Collaborating with influential individuals or personalities on social media,</a>
							</h3>
							<a href="cases-study-details.html" class="circle-btn d-inline-block text-decoration-none d-flex align-items-center">
								<span>Learn More</span>
								<i class="fa-solid fa-arrow-up-right"></i>
							</a>
						</div>
						<div class="case-study-single-item-three">
							<a href="cases-study-details.html" class="d-block case-study-img">
								<img src="../images/blog3.png" alt="case-study">
							</a>
							<ul class="ps-0 list-unstyled d-flex flex-wrap gap-3 tags">
								<li>
									<a href="case-study.html">Branding</a>
								</li>
								<li>
									<a href="case-study.html">Development</a>
								</li>
								<li>
									<a href="case-study.html">Marketing</a>
								</li>
							</ul>
							<h3>
								<a href="cases-study-details.html">Running targeted paid advertisements on social media platforms to reach specific,</a>
							</h3>
							<a href="cases-study-details.html" class="circle-btn d-inline-block text-decoration-none d-flex align-items-center">
								<span>Learn More</span>
								<i class="fa-solid fa-arrow-up-right"></i>
							</a>
						</div>
					</div>-->
				</div>
			</div>
		</div>
		<!--=== End Team Area ===-->

		<!-- Start Testimonials Area -->
		<div class="testimonials-area-three pb-100 bg-color-f6f5f3 overflow-hidden">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-lg-8">
						<div class="section-title ms-0 text-start" data-cues="slideInUp">
							<h2>Testimonials</h2>
						</div>

						<div class="testimonial-slide-two owl-carousel owl-theme">
						@foreach($testimonials as $testimonial)
							<div class="testimonials-single-item-two style-three">
								<p>{{$testimonial->description}}</p>
								<div class="d-flex align-items-center info">
								<div class="flex-shrink-0">
										  <img src="../../images/{{$testimonial->image}}" class="rounded-circle" alt="testimonial">
									</div>
									<div class="flex-grow-1 ms-3">
										  <h3>{{$testimonial->name}}</h3>
										<span>{{$testimonial->job}}</span>
									</div>
								</div>
							</div>
							<!-- <div class="testimonials-single-item-two style-three">
								<ul class="ps-0 list-unstyled d-flex gap-2 review">
									<li>
										<i class="fa-solid fa-star"></i>
									</li>
									<li>
										<i class="fa-solid fa-star"></i>
									</li>
									<li>
										<i class="fa-solid fa-star"></i>
									</li>
									<li>
										<i class="fa-solid fa-star"></i>
									</li>
									<li>
										<i class="fa-solid fa-star"></i>
									</li>
								</ul>
								<p>Whether it's enhancing market visibility, improving operational efficiency, or implementing cutting-edge technologies, our agency offers a wide spectrum of services. From strategic consulting & digital transformation to marketing strategies & financial advisory...</p>
	
								<div class="d-flex align-items-center info">
									<div class="flex-shrink-0">
										  <img src="../images/testimonial-3.png" class="rounded-circle" alt="testimonial">
									</div>
									<div class="flex-grow-1 ms-3">
										  <h3>Mutiara Maharani</h3>
										<span>CEO of </span>
									</div>
								</div>
							</div> -->
							@endforeach
						</div>
					</div>
	
					<div class="col-lg-4">
						<div class="testimonial-img-three mt-4 mt-lg-0">
							<img src="../../images/testiaaja.png" alt="testimonial">
						</div>
					</div>
				</div>
			</div>
		</div>


		<br>
		<div class="section-title style-two mw-500" data-cues="slideInUp">
					<h2>Our Media Partner</h2>
			<div class="container">
				<div class="row justify-content-center">
				@foreach($partners as $partner)
					<div class="col-xl-3 col-md-6">
						<div class="team-single-item style-two">
							<img src="../../images/{{$partner->image}}" alt="team"  height="150" width="150">
						</div>		
					</div>
				@endforeach
				</div>
			</div>
		</div>

					
	</div>
</div>
</div>
		<!-- Start marquee Us Area -->

			<div class="faq-area">
			<div class="container">
				<div class="accordion accordion-content" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<span class="d-sm-flex align-items-center">
									<span class="flex-shrink-0">
										<span class="count">01</span>
									</span>
									<span class="flex-grow-1 mt-3 mt-sm-0">
										<span>Apa itu Transformasi Digital dan Bagaimana Dampaknya Terhadap Bisnis Saya?</span>
									</span>
								</span>
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Transformasi digital adalah proses pengintegrasian teknologi digital ke dalam semua aspek bisnis, menghasilkan perubahan mendasar pada cara operasi dan penyampaian nilai kepada pelanggan. Dampaknya terhadap bisnis Anda termasuk peningkatan efisiensi, peningkatan aksesibilitas data, peningkatan kepuasan pelanggan, dan potensi pertumbuhan yang lebih besar dengan memanfaatkan data dan teknologi yang lebih baik.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<span class="d-sm-flex align-items-center">
									<span class="flex-shrink-0">
										<span class="count">02</span>
									</span>
									<span class="flex-grow-1 mt-3 mt-sm-0">
										<span>Bagaimana Cara Memilih Layanan Digital yang Tepat untuk Perusahaan Saya?</span>
									</span>
								</span>
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Memilih layanan digital yang tepat untuk perusahaan Anda bergantung pada beberapa faktor, termasuk tujuan bisnis spesifik, sumber daya yang tersedia, dan tantangan industri yang Anda hadapi. Kami merekomendasikan untuk melakukan konsultasi awal dengan tim ahli kami untuk mendiskusikan kebutuhan dan tujuan Anda, sehingga kami dapat menyarankan solusi yang paling sesuai dan efektif untuk bisnis Anda.</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<!-- Start Footer Area -->
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