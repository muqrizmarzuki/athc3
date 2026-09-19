@extends('layouts.finclix')

@section('content')

<div class="page-wrapper">



	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

	<!-- Main Header-->
	<header class="main-header header-style-one header-5">
		<!-- Header Lower -->
		<div class="header-lower header-lower5 show-header-section">
			<!-- Main box -->
			<div class="main-box">				
				<!--Nav Box-->
				<div class="nav-outer">
					<div class="logo-box">
						<div class="logo"><a href="{{ route('home') }}"><img src="{{ asset("assets/images/Primary-Logo-Trimmed.png") }}" alt="AHTC Logo" title="AHTC Logo" style="height: 48px; width: auto; object-fit: contain;"></a></div>
					</div>
					<nav class="nav main-menu">
						<ul class="navigation onepage-nav">
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="#contacts">Contact</a></li>
						</ul>
					</nav>
					<!-- Main Menu End-->
					<div class="outer-box">
						<a href="https://wa.me/60192680787?text=Hi%2C%20I%27d%20like%20to%20book%20an%20appointment%20with%20AHTC." target="_blank" rel="noopener" class="theme-btn btn-style-one">Book Appointment
							<svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.2344 0.65918C12.5717 0.880077 12.5265 0.895283 12.5234 0.896484V0.898438C12.5237 0.89923 12.524 0.900235 12.5244 0.901367C12.5252 0.903689 12.5271 0.906438 12.5283 0.910156C12.531 0.917882 12.5344 0.928976 12.5391 0.942383C12.5485 0.969439 12.5622 1.00832 12.5801 1.05664C12.6157 1.15312 12.6681 1.28979 12.7373 1.45703C12.8757 1.79155 13.0836 2.25237 13.3604 2.75977C13.9039 3.75621 14.7581 5.0148 15.9531 5.81152C16.151 5.94347 16.3529 6.06407 16.5537 6.17871H-0.000976562V7.67871H16.5537C16.3529 7.79335 16.151 7.91395 15.9531 8.0459C14.7581 8.84262 13.9039 10.1012 13.3604 11.0977C13.0836 11.6051 12.8757 12.0659 12.7373 12.4004C12.6681 12.5676 12.6157 12.7043 12.5801 12.8008C12.5622 12.8491 12.5485 12.888 12.5391 12.915C12.5344 12.9284 12.531 12.9395 12.5283 12.9473C12.5271 12.951 12.5252 12.9537 12.5244 12.9561C12.524 12.9572 12.5237 12.9582 12.5234 12.959V12.9609C12.5265 12.9621 12.5717 12.9773 13.2344 13.1982L13.9463 13.4355L13.9473 13.4316C13.9487 13.4275 13.9517 13.4208 13.9551 13.4111C13.9619 13.3916 13.9725 13.3604 13.9873 13.3203C14.017 13.24 14.0628 13.1215 14.124 12.9736C14.2468 12.6768 14.4311 12.2659 14.6768 11.8154C15.1781 10.8963 15.8906 9.89035 16.7852 9.29395C17.7474 8.65244 18.8043 8.24367 19.6328 7.99512C20.0443 7.87169 20.3931 7.79002 20.6367 7.73926C20.7584 7.71391 20.854 7.69645 20.917 7.68555C20.9483 7.68014 20.9717 7.67614 20.9863 7.67383C20.9936 7.67268 20.9991 7.67231 21.002 7.67188L21.0039 7.6709L20.9512 6.92871L21.0039 6.18652L21.002 6.18555C20.9991 6.18511 20.9936 6.18474 20.9863 6.18359C20.9717 6.18128 20.9483 6.17728 20.917 6.17188C20.854 6.16097 20.7584 6.14352 20.6367 6.11816C20.3931 6.0674 20.0443 5.98573 19.6328 5.8623C18.8043 5.61375 17.7474 5.20498 16.7852 4.56348C15.8906 3.96707 15.1781 2.96111 14.6768 2.04199C14.4311 1.59155 14.2468 1.18058 14.124 0.883789C14.0628 0.73595 14.017 0.617398 13.9873 0.537109C13.9725 0.496987 13.9619 0.465833 13.9551 0.446289C13.9517 0.436659 13.9487 0.429921 13.9473 0.425781L13.9463 0.421875L13.2344 0.65918Z" fill="white"/>
							</svg>
						</a>
						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Lower -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset("assets/images/Primary-Logo-Trimmed.png") }}" alt="AHTC Logo"></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one">
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<i class="icon lnr-icon-phone-handset"></i>
							<span class="title">Call Now</span>
							<a href="tel:+92880098670">+92 (8800) - 98670</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-envelope1"></span>
							<span class="title">Send Email</span>
							<a href="mailto:info@finclix.com">info@finclix.com</a>
						</div>
					</li>
					<li>
						<!-- Contact Info Box -->
						<div class="contact-info-box">
							<span class="icon lnr-icon-clock"></span>
							<span class="title">Send Email</span>
							Mon - Sat 8:00 - 6:30, Sunday - CLOSED
						</div>
					</li>
				</ul>


				<ul class="social-links">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div><!-- End Mobile Menu -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="{{ route('home') }}"><img src="{{ asset("assets/images/Primary-Logo-Trimmed.png") }}" alt="AHTC Logo"></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
	</header>
	<!--End Main Header -->

	<!-- Hero Section Start -->
	<section class="hero-section hero-5 parallaxie bg-cover" id="home" style="background-image: url('{{ asset("finclix/images/home-5/hero/hero-image.jpg") }}');">
		<div class="banner-outer">
			<div class="hero-content">
				<div class="star">
					<i class="icon fa-solid fa-star"></i>
					<i class="icon fa-solid fa-star"></i>
					<i class="icon fa-solid fa-star"></i>
					<i class="icon fa-solid fa-star"></i>
					<i class="icon fa-solid fa-star"></i>
					<span class="star-title">Trusted by 50+ Partner Institutions</span>
				</div>
				<h1 class="banner-title wow fadeInUp" data-wow-delay=".2s">Elevating Institutional <br> Excellence in Islamic <br> Finance &amp; Advisory</h1>
			</div>
			<div class="hero-box-items">
				<div class="content-box wow fadeInUp" data-wow-delay=".3s">
					<p>+6019-268 0787</p>
					<p>Give Us a Call</p>
				</div>
				<div class="content-box wow fadeInUp" data-wow-delay=".5s">
					<p>enquiry@alhijrahtraining.com</p>
					<p>Email Us</p>
				</div>
				<div class="content-box wow fadeInUp" data-wow-delay=".8s">
					<p>Jalan Putra Mahkota 7/8C</p>
					<p>Putra Heights, Subang Jaya, Selangor</p>
				</div>
			</div>
		</div>				
	</section>

	<!-- Featured Section Start -->
	<section class="feature-section pt-120 pb-90 fix">
		<div class="auto-container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="feature-block-one">
						<div class="inner-box">
							<div class="feature-icon">
								<i class="svg-icon flaticon-business-054-graph"></i>
							</div>
							<div class="content-box">
								<h4 class="feature-title"><a href="#service">Islamic Banking &amp; Sukuk Structuring</a></h4>
								<p class="feature-text">Technical training in Murabahah, Ijarah, Musharakah, and Mudarabah contract structures</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="feature-block-one active">
						<div class="inner-box">
							<div class="feature-icon">
								<i class="svg-icon flaticon-business-048-coin"></i>
							</div>
							<div class="content-box">
								<h4 class="feature-title"><a href="#service">Shariah Governance &amp; Risk Audit</a></h4>
								<p class="feature-text">Compliance and audit frameworks aligned with Bank Negara Malaysia guidelines</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="feature-block-one">
						<div class="inner-box">
							<div class="feature-icon">
								<i class="svg-icon flaticon-business-024-configure"></i>
							</div>
							<div class="content-box">
								<h4 class="feature-title"><a href="#service">Value-Based Intermediation (VBI)</a></h4>
								<p class="feature-text">Bridging Shariah-compliant frameworks with practical, ethical financial strategy</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="feature-block-one">
						<div class="inner-box">
							<div class="feature-icon">
								<i class="svg-icon flaticon-business-060-graph"></i>
							</div>
							<div class="content-box">
								<h4 class="feature-title"><a href="#service">Board &amp; Executive Development</a></h4>
								<p class="feature-text">Leadership programs building governance capability at board and C-suite level</p>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<!-- About Section Three Start -->
	<section class="about-section-three fix pb-120" id="about">
		<div class="auto-container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6">
					<div class="content-colmun">
						<div class="content-box">
							<div class="sec-title">
								<h6 class="sub-title wow fadeInUp">
									<span class="triangle triangle1"></span>
									<span class="triangle triangle2"></span>
									Who We Are
								</h6>
								<h2 class="wow fadeInUp" data-wow-delay=".2s">Elevating Institutional Standards in Islamic Financial Ecosystems</h2>
								<div class="text">Al-Hijrah Training &amp; Consultancy (AHTC) is a premier specialist advisory firm. We work alongside Islamic banks, financial institutions, and corporate entities to sharpen technical competencies, enforce Shariah compliance, and foster sustainable organizational evolution.</div>
							</div>
							<div class="feature-box">
								<div class="shape-image"><img src="{{ asset("finclix/images/home-5/about/about-shape-image.png") }}" alt="shape"></div>
								<div class="feature-title">Specialist Advisory &amp; Learning</div>
								<ul class="feature-list">
									<li>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 0.75C9.77497 0.75 7.59989 1.4098 5.74984 2.64597C3.89979 3.88213 2.45785 5.63914 1.60636 7.69481C0.754874 9.75048 0.532087 12.0125 0.966171 14.1948C1.40025 16.3771 2.47171 18.3816 4.04505 19.955C5.61839 21.5283 7.62295 22.5997 9.80524 23.0338C11.9875 23.4679 14.2495 23.2451 16.3052 22.3936C18.3609 21.5422 20.1179 20.1002 21.354 18.2502C22.5902 16.4001 23.25 14.225 23.25 12C23.246 9.01753 22.0595 6.15836 19.9506 4.04943C17.8416 1.94051 14.9825 0.753969 12 0.75ZM18.2859 8.91094L11.2547 15.9422C11.1683 16.0298 11.0654 16.0993 10.952 16.1468C10.8385 16.1943 10.7168 16.2187 10.5938 16.2187C10.4708 16.2187 10.349 16.1943 10.2355 16.1468C10.1221 16.0993 10.0192 16.0298 9.93282 15.9422L6.65157 12.6609C6.47628 12.4856 6.3778 12.2479 6.3778 12C6.3778 11.7521 6.47628 11.5144 6.65157 11.3391C6.82686 11.1638 7.06461 11.0653 7.31251 11.0653C7.5604 11.0653 7.79815 11.1638 7.97344 11.3391L10.5938 13.9547L16.9641 7.58906C17.1394 7.41377 17.3771 7.31529 17.625 7.31529C17.8729 7.31529 18.1107 7.41377 18.2859 7.58906C18.4612 7.76435 18.5597 8.0021 18.5597 8.25C18.5597 8.4979 18.4612 8.73565 18.2859 8.91094Z" fill="url(#paint0_linear_about_1)"/>
											<path d="M18.2851 8.91107L11.2538 15.9423C11.1675 16.0299 11.0646 16.0995 10.9511 16.1469C10.8377 16.1944 10.7159 16.2189 10.5929 16.2189C10.4699 16.2189 10.3481 16.1944 10.2347 16.1469C10.1212 16.0995 10.0183 16.0299 9.93197 15.9423L6.65072 12.6611C6.47543 12.4858 6.37695 12.248 6.37695 12.0001C6.37695 11.7522 6.47543 11.5145 6.65072 11.3392C6.82601 11.1639 7.06376 11.0654 7.31166 11.0654C7.55956 11.0654 7.79731 11.1639 7.9726 11.3392L10.5929 13.9548L16.9632 7.5892C17.1385 7.41391 17.3763 7.31543 17.6242 7.31543C17.8721 7.31543 18.1098 7.41391 18.2851 7.5892C18.4604 7.76449 18.5589 8.00224 18.5589 8.25014C18.5589 8.49804 18.4604 8.73578 18.2851 8.91107Z" fill="white"/>
											<defs>
											<linearGradient id="paint0_linear_about_1" x1="0.75" y1="11.75" x2="23.25" y2="11.75" gradientUnits="userSpaceOnUse">
											<stop stop-color="#28AFAC"/>
											<stop offset="1" stop-color="#056251"/>
											</linearGradient>
											</defs>
										</svg>
										Islamic Banking Operations
									</li>
									<li>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 0.75C9.77497 0.75 7.59989 1.4098 5.74984 2.64597C3.89979 3.88213 2.45785 5.63914 1.60636 7.69481C0.754874 9.75048 0.532087 12.0125 0.966171 14.1948C1.40025 16.3771 2.47171 18.3816 4.04505 19.955C5.61839 21.5283 7.62295 22.5997 9.80524 23.0338C11.9875 23.4679 14.2495 23.2451 16.3052 22.3936C18.3609 21.5422 20.1179 20.1002 21.354 18.2502C22.5902 16.4001 23.25 14.225 23.25 12C23.246 9.01753 22.0595 6.15836 19.9506 4.04943C17.8416 1.94051 14.9825 0.753969 12 0.75ZM18.2859 8.91094L11.2547 15.9422C11.1683 16.0298 11.0654 16.0993 10.952 16.1468C10.8385 16.1943 10.7168 16.2187 10.5938 16.2187C10.4708 16.2187 10.349 16.1943 10.2355 16.1468C10.1221 16.0993 10.0192 16.0298 9.93282 15.9422L6.65157 12.6609C6.47628 12.4856 6.3778 12.2479 6.3778 12C6.3778 11.7521 6.47628 11.5144 6.65157 11.3391C6.82686 11.1638 7.06461 11.0653 7.31251 11.0653C7.5604 11.0653 7.79815 11.1638 7.97344 11.3391L10.5938 13.9547L16.9641 7.58906C17.1394 7.41377 17.3771 7.31529 17.625 7.31529C17.8729 7.31529 18.1107 7.41377 18.2859 7.58906C18.4612 7.76435 18.5597 8.0021 18.5597 8.25C18.5597 8.4979 18.4612 8.73565 18.2859 8.91094Z" fill="url(#paint0_linear_about_2)"/>
											<path d="M18.2851 8.91107L11.2538 15.9423C11.1675 16.0299 11.0646 16.0995 10.9511 16.1469C10.8377 16.1944 10.7159 16.2189 10.5929 16.2189C10.4699 16.2189 10.3481 16.1944 10.2347 16.1469C10.1212 16.0995 10.0183 16.0299 9.93197 15.9423L6.65072 12.6611C6.47543 12.4858 6.37695 12.248 6.37695 12.0001C6.37695 11.7522 6.47543 11.5145 6.65072 11.3392C6.82601 11.1639 7.06376 11.0654 7.31166 11.0654C7.55956 11.0654 7.79731 11.1639 7.9726 11.3392L10.5929 13.9548L16.9632 7.5892C17.1385 7.41391 17.3763 7.31543 17.6242 7.31543C17.8721 7.31543 18.1098 7.41391 18.2851 7.5892C18.4604 7.76449 18.5589 8.00224 18.5589 8.25014C18.5589 8.49804 18.4604 8.73578 18.2851 8.91107Z" fill="white"/>
											<defs>
											<linearGradient id="paint0_linear_about_2" x1="0.75" y1="11.75" x2="23.25" y2="11.75" gradientUnits="userSpaceOnUse">
											<stop stop-color="#28AFAC"/>
											<stop offset="1" stop-color="#056251"/>
											</linearGradient>
											</defs>
										</svg>
										Shariah GRC &amp; Audit
									</li>
									<li>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 0.75C9.77497 0.75 7.59989 1.4098 5.74984 2.64597C3.89979 3.88213 2.45785 5.63914 1.60636 7.69481C0.754874 9.75048 0.532087 12.0125 0.966171 14.1948C1.40025 16.3771 2.47171 18.3816 4.04505 19.955C5.61839 21.5283 7.62295 22.5997 9.80524 23.0338C11.9875 23.4679 14.2495 23.2451 16.3052 22.3936C18.3609 21.5422 20.1179 20.1002 21.354 18.2502C22.5902 16.4001 23.25 14.225 23.25 12C23.246 9.01753 22.0595 6.15836 19.9506 4.04943C17.8416 1.94051 14.9825 0.753969 12 0.75ZM18.2859 8.91094L11.2547 15.9422C11.1683 16.0298 11.0654 16.0993 10.952 16.1468C10.8385 16.1943 10.7168 16.2187 10.5938 16.2187C10.4708 16.2187 10.349 16.1943 10.2355 16.1468C10.1221 16.0993 10.0192 16.0298 9.93282 15.9422L6.65157 12.6609C6.47628 12.4856 6.3778 12.2479 6.3778 12C6.3778 11.7521 6.47628 11.5144 6.65157 11.3391C6.82686 11.1638 7.06461 11.0653 7.31251 11.0653C7.5604 11.0653 7.79815 11.1638 7.97344 11.3391L10.5938 13.9547L16.9641 7.58906C17.1394 7.41377 17.3771 7.31529 17.625 7.31529C17.8729 7.31529 18.1107 7.41377 18.2859 7.58906C18.4612 7.76435 18.5597 8.0021 18.5597 8.25C18.5597 8.4979 18.4612 8.73565 18.2859 8.91094Z" fill="url(#paint0_linear_about_3)"/>
											<path d="M18.2851 8.91107L11.2538 15.9423C11.1675 16.0299 11.0646 16.0995 10.9511 16.1469C10.8377 16.1944 10.7159 16.2189 10.5929 16.2189C10.4699 16.2189 10.3481 16.1944 10.2347 16.1469C10.1212 16.0995 10.0183 16.0299 9.93197 15.9423L6.65072 12.6611C6.47543 12.4858 6.37695 12.248 6.37695 12.0001C6.37695 11.7522 6.47543 11.5145 6.65072 11.3392C6.82601 11.1639 7.06376 11.0654 7.31166 11.0654C7.55956 11.0654 7.79731 11.1639 7.9726 11.3392L10.5929 13.9548L16.9632 7.5892C17.1385 7.41391 17.3763 7.31543 17.6242 7.31543C17.8721 7.31543 18.1098 7.41391 18.2851 7.5892C18.4604 7.76449 18.5589 8.00224 18.5589 8.25014C18.5589 8.49804 18.4604 8.73578 18.2851 8.91107Z" fill="white"/>
											<defs>
											<linearGradient id="paint0_linear_about_3" x1="0.75" y1="11.75" x2="23.25" y2="11.75" gradientUnits="userSpaceOnUse">
											<stop stop-color="#28AFAC"/>
											<stop offset="1" stop-color="#056251"/>
											</linearGradient>
											</defs>
										</svg>
										Executive Leadership Development
									</li>
									<li>
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 0.75C9.77497 0.75 7.59989 1.4098 5.74984 2.64597C3.89979 3.88213 2.45785 5.63914 1.60636 7.69481C0.754874 9.75048 0.532087 12.0125 0.966171 14.1948C1.40025 16.3771 2.47171 18.3816 4.04505 19.955C5.61839 21.5283 7.62295 22.5997 9.80524 23.0338C11.9875 23.4679 14.2495 23.2451 16.3052 22.3936C18.3609 21.5422 20.1179 20.1002 21.354 18.2502C22.5902 16.4001 23.25 14.225 23.25 12C23.246 9.01753 22.0595 6.15836 19.9506 4.04943C17.8416 1.94051 14.9825 0.753969 12 0.75ZM18.2859 8.91094L11.2547 15.9422C11.1683 16.0298 11.0654 16.0993 10.952 16.1468C10.8385 16.1943 10.7168 16.2187 10.5938 16.2187C10.4708 16.2187 10.349 16.1943 10.2355 16.1468C10.1221 16.0993 10.0192 16.0298 9.93282 15.9422L6.65157 12.6609C6.47628 12.4856 6.3778 12.2479 6.3778 12C6.3778 11.7521 6.47628 11.5144 6.65157 11.3391C6.82686 11.1638 7.06461 11.0653 7.31251 11.0653C7.5604 11.0653 7.79815 11.1638 7.97344 11.3391L10.5938 13.9547L16.9641 7.58906C17.1394 7.41377 17.3771 7.31529 17.625 7.31529C17.8729 7.31529 18.1107 7.41377 18.2859 7.58906C18.4612 7.76435 18.5597 8.0021 18.5597 8.25C18.5597 8.4979 18.4612 8.73565 18.2859 8.91094Z" fill="url(#paint0_linear_about_4)"/>
											<path d="M18.2851 8.91107L11.2538 15.9423C11.1675 16.0299 11.0646 16.0995 10.9511 16.1469C10.8377 16.1944 10.7159 16.2189 10.5929 16.2189C10.4699 16.2189 10.3481 16.1944 10.2347 16.1469C10.1212 16.0995 10.0183 16.0299 9.93197 15.9423L6.65072 12.6611C6.47543 12.4858 6.37695 12.248 6.37695 12.0001C6.37695 11.7522 6.47543 11.5145 6.65072 11.3392C6.82601 11.1639 7.06376 11.0654 7.31166 11.0654C7.55956 11.0654 7.79731 11.1639 7.9726 11.3392L10.5929 13.9548L16.9632 7.5892C17.1385 7.41391 17.3763 7.31543 17.6242 7.31543C17.8721 7.31543 18.1098 7.41391 18.2851 7.5892C18.4604 7.76449 18.5589 8.00224 18.5589 8.25014C18.5589 8.49804 18.4604 8.73578 18.2851 8.91107Z" fill="white"/>
											<defs>
											<linearGradient id="paint0_linear_about_4" x1="0.75" y1="11.75" x2="23.25" y2="11.75" gradientUnits="userSpaceOnUse">
											<stop stop-color="#28AFAC"/>
											<stop offset="1" stop-color="#056251"/>
											</linearGradient>
											</defs>
										</svg>
										Value-Based Intermediation (VBI)
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image-colmun">
						<div class="image-box">
							<div class="about-image">
								<img src="{{ asset("finclix/images/home-5/about/about-image.jpg") }}" alt="img">
							</div>
							<div class="count-box">
								<div class="counter"><span class="count-text" data-speed="3000" data-stop="50">0</span>+</div>
								<div class="counter-title">Partner Institutions</div>
								<div class="counter-btn">Quick solutions</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Horizontal accordion area start here -->
    <section class="hzAccordion-area pt-120 pb-120" id="service">
      <div class="outer-box">
        <div class="container-fluid">
          <div class="sec-title center mb-60">
            <h6 class="sub-title light wow fadeInUp">
              <span class="triangle triangle1"></span>
              <span class="triangle triangle2"></span>
              Service area
            </h6>
            <h2 class="title light wow fadeInUp" data-wow-delay=".2s">Comprehensive Learning &amp; Strategic <br>Advisory Services</h2>
          </div>
          <div class="hzAccordion__wrp">
            <div class="hzAccordion__item active wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
              <div class="head">
                <h3 class="head-title">
                  <span class="title">Islamic Banking Operations &amp; Contracts</span>
                  <span class="number">01</span>
                </h3>
              </div>
              <div class="content">
                <div class="wrp">
                  <div class="content-wrp">
                    <p class="text">Technical mastery covering Murabahah, Ijarah, Musharakah, Mudarabah, and asset-liability management.</p>
                    <a class="arry-btn" href="#contact"><i class="fa-thin fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="hzAccordion__item wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
              <div class="head">
                <h3 class="head-title">
                  <span class="title">Shariah Governance, Risk &amp; Audit</span>
                  <span class="number">02</span>
                </h3>
              </div>
              <div class="content">
                <div class="wrp">
                  <div class="content-wrp">
                    <p class="text">Frameworks for Shariah compliance, risk mitigation, and Bank Negara Malaysia regulatory alignment.</p>
                    <a class="arry-btn" href="#contact"><i class="fa-thin fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="hzAccordion__item wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
              <div class="head">
                <h3 class="head-title">
                  <span class="title">Sukuk &amp; Capital Markets Advisory</span>
                  <span class="number">03</span>
                </h3>
              </div>
              <div class="content">
                <div class="wrp">
                  <div class="content-wrp">
                    <p class="text">Specialized talent development and consultancy in Sukuk structuring, green Sukuk, and Islamic equity markets.</p>
                    <a class="arry-btn" href="#contact"><i class="fa-thin fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="hzAccordion__item last-child wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
              <div class="head">
                <h3 class="head-title">
                  <span class="title">Value-Based Intermediation (VBI) Integration</span>
                  <span class="number">04</span>
                </h3>
              </div>
              <div class="content">
                <div class="wrp">
                  <div class="content-wrp">
                    <p class="text">Embedding sustainability, ESG, and ethical Islamic financial principles into institutional strategy.</p>
                    <a class="arry-btn" href="#contact"><i class="fa-thin fa-arrow-up-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Horizontal accordion area end here -->

	<!-- Why Choose Us Section Start -->
	<section class="why-choose-section fix section-bg-2">
		<div class="shape-1 bounce-y"><img src="{{ asset("finclix/images/home-5/shape/shape-image-1.png") }}" alt=""></div>
		<div class="auto-container">
			<div class="why-choose-us-wrapper">
				<div class="row g-4 align-items-center">
					<div class="col-xl-5">
						<div class="why-choose-us-image-1">
							<img src="{{ asset("finclix/images/home-1/choose-us/choose-us.jpg") }}" alt="img" class="wow img-custom-anim-left">
							<div class="icon-box-items">
								
								<div class="icon">
									<i class="flaticon-finance-award-svgrepo-com-1"></i>
								</div>
								<h3>
									Over Two Decades
									Advising Islamic
									Financial Institutions
								</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-7">
						<div class="why-choose-us-content-1">
							<div class="sec-title mb-0">
								<h6 class="sub-title light">
									<span class="triangle triangle1"></span>
									<span class="triangle triangle2"></span>
									Why Choose Us
								</h6>
								<h2 class="title light wow fadeInUp" data-wow-delay=".2s">A Partner Who Understands Shariah-Compliant Finance</h2>
							</div>
							<ul class="nav">
								<li class="nav-item wow fadeInUp" data-wow-delay=".2s">
									<a href="#Mission" data-bs-toggle="tab" class="nav-link active">
										Our Mission
									</a>
								</li>
								<li class="nav-item wow fadeInUp" data-wow-delay=".4s">
									<a href="#Vision" data-bs-toggle="tab" class="nav-link">
										Our Vision
									</a>
								</li>
								<li class="nav-item wow fadeInUp" data-wow-delay=".6s">
									<a href="#Philosophy" data-bs-toggle="tab" class="nav-link">
										Our Philosophy
									</a>
								</li>
								<li class="nav-item wow fadeInUp" data-wow-delay=".8s">
									<a href="#TrackRecord" data-bs-toggle="tab" class="nav-link">
										Track Record
									</a>
								</li>
							</ul>
							<div class="tab-content light">
								<div id="Mission" class="tab-pane fade show active">
									<div class="why-choose-list wow fadeInUp" data-wow-delay=".3s">
										<h3>Our Mission</h3>
										<p>
											We help Islamic financial institutions apply Shariah principles correctly
											in daily operations, not just in policy documents.
										</p>
									</div>
									<div class="why-choose-list-items">
										<ul class="why-list wow fadeInUp" data-wow-delay=".5s">
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Hands-on training, not just theory
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Direct answers to compliance questions
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Support that continues after the workshop
											</li>
										</ul>
										<div class="choose-us-progressbar wow fadeInUp" data-wow-delay=".5s">
											<div class="progress-container">
												<div class="circular-progress" id="progress1">
												<span class="progress-value" id="value1">0%</span>
												</div>
												<div class="text">Client Satisfaction</div>
											</div>
											<div class="progress-container">
												<div class="circular-progress" id="progress2">
												<span class="progress-value" id="value2">0%</span>
												</div>
												<div class="text">Program Completion</div>
											</div>
										</div>
									</div>
								</div>
								<div id="Vision" class="tab-pane fade">
									<div class="why-choose-list">
										<h3>Our Vision</h3>
										<p>
											A banking sector where Shariah governance is built into daily practice,
											not treated as a separate compliance step.
										</p>
									</div>
									<div class="why-choose-list-items">
										<ul class="why-list">
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Stronger Shariah committees
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Better-prepared risk and audit teams
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Consistent standards across institutions
											</li>
										</ul>
										<div class="choose-us-progressbar">
											<div class="progress-container">
												<div class="circular-progress" id="progress3">
												<span class="progress-value" id="value3">0%</span>
												</div>
												<div class="text">Client Satisfaction</div>
											</div>
											<div class="progress-container">
												<div class="circular-progress" id="progress4">
												<span class="progress-value" id="value4">0%</span>
												</div>
												<div class="text">Program Completion</div>
											</div>
										</div>
									</div>
								</div>
								<div id="Philosophy" class="tab-pane fade">
									<div class="why-choose-list">
										<h3>Our Philosophy</h3>
										<p>
											Compliance only works when the people applying it understand the
											reasoning behind it. We teach the why, not just the checklist.
										</p>
									</div>
									<div class="why-choose-list-items">
										<ul class="why-list">
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Practitioner-led sessions
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Real case studies from the industry
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												Content updated with BNM policy changes
											</li>
										</ul>
										<div class="choose-us-progressbar">
											<div class="progress-container">
												<div class="circular-progress" id="progress5">
												<span class="progress-value" id="value5">0%</span>
												</div>
												<div class="text">Client Satisfaction</div>
											</div>
											<div class="progress-container">
												<div class="circular-progress" id="progress6">
												<span class="progress-value" id="value6">0%</span>
												</div>
												<div class="text">Program Completion</div>
											</div>
										</div>
									</div>
								</div>
								<div id="TrackRecord" class="tab-pane fade">
									<div class="why-choose-list">
										<h3>Track Record</h3>
										<p>
											Over two decades advising Islamic banks and training their teams
											across Malaysia.
										</p>
									</div>
									<div class="why-choose-list-items">
										<ul class="why-list">
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												20+ years in the industry
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												50+ partner institutions
											</li>
											<li>
												<span class="icon">
													<img src="{{ asset("finclix/images/home-1/about/check.svg") }}" alt="img">
												</span>
												100+ programs delivered
											</li>
										</ul>
										<div class="choose-us-progressbar">
											<div class="progress-container">
												<div class="circular-progress" id="progress7">
												<span class="progress-value" id="value7">0%</span>
												</div>
												<div class="text">Client Satisfaction</div>
											</div>
											<div class="progress-container">
												<div class="circular-progress" id="progress8">
												<span class="progress-value" id="value8">0%</span>
												</div>
												<div class="text">Program Completion</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Counter Section Start -->
	<section class="counter-section theme-color-bg">
		<div class="auto-container">
			<div class="counter-wrapper2 section-padding">
				<div class="counter-block-one wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="icon-box">
						<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_496_508)">
							<path d="M52.5003 20.8641V5.625C52.5003 5.10656 52.0812 4.6875 51.5628 4.6875H42.1878C41.6694 4.6875 41.2503 5.10656 41.2503 5.625V10.7381L30.6284 1.17844C30.4559 1.02375 30.2328 0.9375 30.0012 0.9375C29.6403 0.9375 29.6403 0.9375 15.3106 13.8347L1.24812 26.4909C1.05687 26.6625 0.945306 26.9053 0.937806 27.1631C0.931243 27.42 1.03062 27.6684 1.21249 27.8503L4.02499 30.6628C4.37562 31.0134 4.94187 31.0313 5.31031 30.7003L7.50031 28.7541V58.125C7.50031 58.6434 7.91937 59.0625 8.43781 59.0625H51.5628C52.0812 59.0625 52.5003 58.6434 52.5003 58.125V28.7541L54.6903 30.7003C54.8675 30.8588 55.0906 30.9375 55.3128 30.9375C55.5537 30.9375 55.7937 30.8447 55.9756 30.6628L58.7881 27.8503C58.97 27.6684 59.0694 27.42 59.0628 27.1631C59.0553 26.9062 58.9437 26.6634 58.7525 26.4909L52.5003 20.8641ZM43.1253 6.5625H50.6253V19.1766L43.1253 12.4266V6.5625ZM9.37531 49.2084L16.7975 43.4353L20.2944 46.9322L11.7472 57.1875H9.37531V49.2084ZM25.8922 28.3162C24.6087 27.0328 23.0066 26.0897 21.26 25.59L18.1241 24.6938C17.9412 24.6413 17.8128 24.4725 17.8128 24.2812C17.8128 24.1181 17.9037 23.9719 18.05 23.8988C18.6528 23.5969 19.3278 23.4375 20.0019 23.4375H20.0066C22.8003 23.4403 25.5425 23.9391 28.1628 24.9216C30.2806 25.7156 32.1669 26.9297 33.7681 28.5309L36.5628 31.3256V33.3619C36.5628 34.4672 36.9931 35.5059 37.775 36.2878C38.3872 36.9 39.1587 37.2872 39.9941 37.4306L36.4944 40.9303C36.3509 40.095 35.9628 39.3234 35.3516 38.7113C34.5687 37.9303 33.53 37.5 32.4247 37.5C30.6106 37.5 28.9062 38.2059 27.6237 39.4884L27.1878 39.9244L23.8259 36.5625L25.9325 34.4559C26.7425 33.6459 27.1878 32.5697 27.1869 31.3838C27.1869 30.2409 26.7416 29.1656 25.8922 28.3162ZM42.1878 37.8881L44.6122 40.3125L39.3753 45.5494L36.9509 43.125L42.1878 37.8881ZM24.9247 40.3125L20.6253 44.6119L19.1384 43.125L23.4378 38.8256L24.9247 40.3125ZM50.6253 57.1875H14.1894L22.2837 47.4759C22.5941 47.1037 22.5697 46.5553 22.2256 46.2122L21.9509 45.9375L26.2503 41.6381L26.525 41.9128C26.8916 42.2794 27.4841 42.2794 27.8506 41.9128L28.9494 40.8141C29.8775 39.8859 31.1122 39.375 32.4247 39.375C33.0294 39.375 33.5975 39.6103 34.025 40.0378C34.4525 40.4653 34.6878 41.0344 34.6878 41.6381V43.125C34.6878 43.3744 34.7862 43.6125 34.9625 43.7878L38.7125 47.5378C38.8953 47.7206 39.1353 47.8125 39.3753 47.8125C39.6153 47.8125 39.8553 47.7206 40.0381 47.5378L46.6006 40.9753C46.9672 40.6087 46.9672 40.0163 46.6006 39.6497L42.8506 35.8997C42.6753 35.7234 42.4372 35.625 42.1878 35.625H40.7009C40.0962 35.625 39.5281 35.3897 39.1006 34.9622C38.6731 34.5347 38.4378 33.9656 38.4378 33.3619V30.9375C38.4378 30.6881 38.3394 30.45 38.1631 30.2747L35.0937 27.2053C33.3022 25.4137 31.1919 24.0553 28.8172 23.1637C25.9906 22.1044 23.0281 21.5653 20.0084 21.5625C20.0066 21.5625 20.0037 21.5625 20.0019 21.5625C19.0391 21.5625 18.0734 21.7903 17.2128 22.2206C16.4262 22.6125 15.9378 23.4028 15.9378 24.2812C15.9378 25.3041 16.6241 26.2144 17.6084 26.4966L20.7444 27.3928C22.1853 27.8044 23.5072 28.5825 24.6069 29.6812C25.0616 30.1359 25.3119 30.7406 25.3119 31.4259C25.3128 32.0691 25.0616 32.6738 24.6069 33.1284L21.8375 35.8978C21.4709 36.2644 21.4709 36.8569 21.8375 37.2234L22.1122 37.5L17.8128 41.7994L17.5381 41.5247C17.2034 41.19 16.6719 41.1562 16.2997 41.4478L9.37531 46.8328V27.0872L30.0003 8.75438L50.6253 27.0872V57.1875ZM55.2753 28.7119L30.6228 6.79969C30.4456 6.64125 30.2225 6.5625 30.0003 6.5625C29.7781 6.5625 29.555 6.64125 29.3778 6.79969L4.72531 28.7119L3.23656 27.2231C7.23031 23.6297 26.2944 6.47156 30.0012 3.13687L56.7641 27.2231L55.2753 28.7119Z" fill="url(#paint0_linear_496_508)"/>
							</g>
							<defs>
							<linearGradient id="paint0_linear_496_508" x1="0.9375" y1="29.3542" x2="59.0631" y2="29.3542" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<clipPath id="clip0_496_508">
							<rect width="60" height="60" fill="white"/>
							</clipPath>
							</defs>
						</svg>
					</div>
					<div class="count-box">
						<div class="counter">
							<span class="count-text" data-speed="3000" data-stop="100">0</span>
						</div>
						<div class="counter-title">Programs Delivered</div>
					</div>
				</div>
				<div class="counter-block-one wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="icon-box">
						<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M47.1713 19.2273C46.8549 19.2273 46.6089 19.0867 46.4331 18.8407C46.1871 18.454 46.2925 17.9268 46.6792 17.6807C48.0852 16.802 48.8584 15.853 48.8936 15.0797C48.9639 14.5525 48.5773 14.1658 48.5773 14.1658C48.2258 13.8846 48.1906 13.2871 48.507 12.9356C48.8233 12.6192 49.3857 12.5489 49.7372 12.9004C49.8426 13.0059 50.7565 13.8143 50.6159 15.2203C50.5105 16.5911 49.4911 17.9268 47.5931 19.1219C47.4525 19.1922 47.3119 19.2273 47.1713 19.2273Z" fill="url(#paint0_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M40.2811 24.8161C40.2459 24.8161 40.1756 24.8161 40.1405 24.8161C39.6484 24.8161 39.332 24.4295 39.332 23.9374C39.332 23.4805 39.7187 23.0587 40.1756 23.129C44.3232 23.2344 46.3268 18.1026 46.3268 18.0675C46.4674 17.6105 46.9946 17.3645 47.4515 17.5754C47.8733 17.716 48.1194 18.2432 47.9436 18.7002C47.8382 18.9462 45.5535 24.8161 40.2811 24.8161Z" fill="url(#paint1_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M39.5079 24.8861C37.6099 24.8861 35.993 24.2534 34.7276 22.988C31.283 19.5785 31.3884 12.6893 31.529 10.6506C31.529 10.6155 31.529 10.5452 31.529 10.51C31.5642 10.3343 31.6345 10.1585 31.6696 10.0882C32.6538 6.71387 35.6064 1.12512 40.6679 1.26572C41.3006 1.19542 45.2724 0.879073 47.9438 3.58558C50.0176 5.72969 50.7557 9.13918 50.0176 13.6734C49.9473 14.1655 49.5255 14.4467 49.0686 14.4116C48.5765 14.3061 48.2601 13.9195 48.3304 13.4274C48.9631 9.38522 48.4359 6.50297 46.7136 4.78065C44.464 2.49594 40.8788 2.91774 40.8085 2.91774C40.7733 2.91774 40.7382 2.91774 40.6679 2.91774C37.1881 2.77714 34.4113 6.74902 33.2865 10.5452C33.2162 10.6506 33.2162 10.7561 33.1811 10.8615C32.9702 14.6576 33.5677 19.4731 35.9227 21.7578C36.9772 22.8474 38.348 23.2692 40.0352 23.1286C40.5273 23.0583 40.9139 23.4098 40.9842 23.9019C41.0194 24.394 40.6679 24.7807 40.1758 24.8158C40 24.8158 39.754 24.8861 39.5079 24.8861Z" fill="url(#paint2_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M49.1395 14.3766L43.9373 14.2711C43.4453 14.2711 43.1289 13.8845 43.1289 13.3924C43.1289 12.9003 43.5155 12.5488 44.0076 12.5488L49.2097 12.6543C49.7018 12.6543 50.0182 13.0409 50.0182 13.533C50.0182 13.9548 49.6315 14.3766 49.1395 14.3766Z" fill="url(#paint3_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M44.6758 14.2714C44.3243 14.2714 44.0432 14.0605 43.9026 13.7793C43.762 13.5332 40.6688 7.38207 32.8305 11.0376C32.4087 11.2485 31.9166 11.0376 31.7057 10.6158C31.53 10.1589 31.7057 9.70193 32.1627 9.49104C41.5475 5.09736 45.4491 12.9357 45.4843 13.006C45.6952 13.4278 45.4843 13.9199 45.0976 14.1308C44.9219 14.2714 44.8164 14.2714 44.6758 14.2714Z" fill="url(#paint4_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M43.9372 14.2713H38.2781C38.0672 14.2713 37.8563 14.1659 37.7157 14.0253C36.8722 13.1817 34.3063 11.143 32.3379 11.5296C31.4943 11.7405 30.7913 12.4084 30.2641 13.6386C30.0532 14.0604 29.5611 14.2713 29.1393 14.0604C28.7175 13.8847 28.5066 13.3926 28.7175 12.9356C29.4205 11.143 30.5453 10.1237 32.0215 9.84248C34.728 9.28009 37.7157 11.7405 38.6296 12.549H43.9372C44.4293 12.549 44.8159 12.9356 44.8159 13.4277C44.8159 13.9198 44.4293 14.2713 43.9372 14.2713Z" fill="url(#paint5_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M56.0988 51.4585C52.6894 51.4585 45.5892 46.6781 44.7807 46.1158C44.3941 45.8697 44.2887 45.3425 44.5347 44.9207C44.7807 44.534 45.308 44.4637 45.6946 44.7098C47.6981 46.0455 53.2869 49.5252 55.8177 49.701C56.1691 49.1738 57.1533 46.9945 57.9969 37.7854C58.3133 34.868 58.3133 34.868 55.888 33.2159C55.5716 33.005 55.2553 32.759 54.8335 32.5129C50.967 29.947 45.308 26.9593 45.2728 26.9242C44.8159 26.7133 44.6753 26.1861 44.9213 25.7643C45.0971 25.3073 45.6595 25.1667 46.0813 25.4128C46.1164 25.4479 51.8809 28.4356 55.9231 31.1421C56.3097 31.3882 56.6612 31.6342 56.9424 31.8451C59.8247 33.7783 60.2113 34.165 59.8598 37.9611C58.7351 50.0525 57.3642 50.9312 56.8018 51.3179C56.6612 51.4233 56.5206 51.4585 56.3449 51.4585C56.2043 51.4585 56.1691 51.4585 56.0988 51.4585Z" fill="url(#paint6_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M42.4953 58.7699C41.6868 58.7699 40.8784 58.6293 40.1403 58.2778C35.4654 56.7664 28.0137 54.5168 26.1157 54.5168C26.0805 54.5168 26.0805 54.5168 26.0102 54.5168C20.9487 55.0089 17.5392 54.3762 15.852 52.689C14.7273 51.5643 14.8327 50.334 14.8327 50.2286C14.8679 49.8068 15.2194 49.4553 15.6411 49.4553H25.0612C25.5181 49.4553 25.9399 49.8419 25.9399 50.334C25.9399 50.8261 25.5181 51.2128 25.0612 51.2128H16.7659C16.8714 51.3182 16.9768 51.4588 17.0471 51.5994C17.8556 52.3375 19.9997 53.4623 25.8345 52.9351H25.8696C28.4004 52.7945 39.4021 56.3446 40.6675 56.7664C40.7378 56.7664 40.7378 56.7664 40.773 56.8015C42.1789 57.4342 43.831 57.2585 44.8503 56.2743C44.9206 56.2391 51.7747 49.7716 52.6535 49.2093C53.0401 48.9632 53.5673 49.139 53.8134 49.5256C54.0594 49.9122 53.9188 50.4395 53.5322 50.6855C53.0049 51.037 48.7167 55.0089 46.0454 57.5045C45.0963 58.3129 43.831 58.7699 42.4953 58.7699Z" fill="url(#paint7_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M37.5053 38.5237C37.4701 38.5237 37.4701 38.5237 37.435 38.5237C37.0835 38.4534 36.8023 38.2073 36.6968 37.891L34.9394 31.3884C34.9394 31.3532 34.9394 31.3181 34.9394 31.2478L34.4824 27.311C34.4824 27.1704 34.4824 27.0298 34.5527 26.9244L35.9938 23.0579C36.1344 22.6362 36.6968 22.3901 37.1186 22.601C37.5756 22.7416 37.8216 23.2688 37.6107 23.6906L36.2047 27.3462L36.6265 31.0017L37.8568 35.4305L40.1063 31.4938C40.1063 31.4938 40.1063 31.4938 40.1063 31.4586C40.1415 31.3884 40.1415 31.3532 40.1766 31.3181L44.8163 26.1862L43.7619 22.4956C43.5861 22.0386 43.9025 21.5817 44.3242 21.4059C44.7812 21.2653 45.2733 21.5817 45.4139 22.0035L46.609 26.1511C46.7144 26.4323 46.609 26.7135 46.4332 26.9595L42.2504 31.5992L45.6599 33.3567L49.0694 27.9437C49.3155 27.5571 49.8427 27.4165 50.2293 27.6977C50.616 27.9437 50.7566 28.471 50.4754 28.8576L46.5738 34.9033C46.3278 35.2899 45.8357 35.3954 45.449 35.1845L41.1257 32.9701L38.2434 38.0316C38.1028 38.3128 37.8216 38.5237 37.5053 38.5237Z" fill="url(#paint8_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M32.196 35.15C32.1257 35.15 32.0202 35.15 31.9148 35.1149C31.6336 35.0095 31.4227 34.7634 31.3173 34.4822L30.2979 28.9638C30.1925 28.5771 30.4385 28.1553 30.8252 27.9796L35.0431 26.433C35.4649 26.2924 35.957 26.4682 36.1327 26.9251C36.3436 27.3469 36.0976 27.839 35.6758 28.0499L32.1608 29.3504L32.8287 32.6544L35.2891 30.5103C35.6055 30.2291 36.1327 30.2291 36.4842 30.6158C36.8006 30.9673 36.8006 31.4945 36.3788 31.846L32.8287 34.9392C32.5826 35.0446 32.4069 35.15 32.196 35.15Z" fill="url(#paint9_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1318 51.1777H21.8981C20.5624 51.1777 19.5431 50.0881 19.5431 48.8227C19.5431 47.5573 20.6327 46.5029 21.8981 46.5029L26.3621 46.6786H26.4675L41.3006 49.1742C41.8981 49.2797 43.6556 48.5064 46.8542 38.9106L47.0651 38.3131C47.2057 37.8913 47.6977 37.6452 48.1195 37.7858C48.5765 37.9264 48.8225 38.4185 48.6819 38.8403L48.471 39.4378C46.3621 45.6593 44.0422 51.3535 41.0194 50.8614L26.2566 48.4009L21.8981 48.19C21.5466 48.19 21.2654 48.5064 21.2654 48.8227C21.2654 49.2094 21.5466 49.4554 21.8981 49.4554H25.1318C25.6239 49.4554 26.0106 49.8421 26.0106 50.3341C26.0106 50.8262 25.6239 51.1777 25.1318 51.1777Z" fill="url(#paint10_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7118 51.1782H2.35502C1.05449 51.1782 0.0351562 50.1589 0.0351562 48.8232V31.0025C0.0351562 29.7371 1.08964 28.6826 2.35502 28.6826H24.0773C25.3779 28.6826 26.3972 29.7019 26.3972 31.0025V47.4875C26.3972 47.9445 26.0106 48.3311 25.5536 48.3311C25.0615 48.3311 24.6749 47.9445 24.6749 47.4875V31.0025C24.6749 30.6861 24.3585 30.3698 24.0422 30.3698H2.31987C1.96837 30.3698 1.68718 30.6861 1.68718 31.0025V48.8232C1.68718 49.1747 1.96837 49.4559 2.31987 49.4559H15.6415C16.1336 49.4559 16.5202 49.8425 16.5202 50.3346C16.5202 50.8267 16.2039 51.1782 15.7118 51.1782Z" fill="url(#paint11_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7117 51.1782C15.2196 51.1782 14.833 50.7916 14.833 50.2995V29.5614C14.833 29.0693 15.2196 28.6826 15.7117 28.6826C16.2038 28.6826 16.5905 29.0693 16.5905 29.5614V50.3346C16.5202 50.8267 16.2038 51.1782 15.7117 51.1782ZM10.6854 51.1782C10.1933 51.1782 9.80664 50.7916 9.80664 50.2995V29.5614C9.80664 29.0693 10.1933 28.6826 10.6854 28.6826C11.1775 28.6826 11.5641 29.0693 11.5641 29.5614V50.3346C11.5641 50.8267 11.1775 51.1782 10.6854 51.1782Z" fill="url(#paint12_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M25.5541 33.111C25.2377 33.111 24.9917 32.9704 24.816 32.7244C24.5699 32.3377 24.6754 31.7753 25.062 31.5644C27.6279 29.807 30.6507 28.0846 30.6859 28.0846C31.0725 27.8386 31.6349 27.9792 31.881 28.4361C32.127 28.8228 31.9513 29.35 31.5295 29.5961C31.4943 29.5961 28.5418 31.3184 26.011 33.0056C25.8704 33.0407 25.7298 33.111 25.5541 33.111Z" fill="url(#paint13_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M36.9435 41.9331C36.4514 41.9331 36.0647 41.4761 36.0999 41.0544L36.135 40.1756C36.135 39.6835 36.592 39.332 37.0138 39.332C37.5059 39.332 37.8573 39.789 37.8573 40.2108L37.8222 41.0895C37.7519 41.5816 37.4356 41.9331 36.9435 41.9331Z" fill="url(#paint14_linear_496_465)"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M36.5552 45.5192H36.4849C35.9928 45.484 35.6765 45.0974 35.7116 44.6053L35.7468 43.7266C35.8171 43.2345 36.2037 42.883 36.6958 42.9533C37.1879 42.9884 37.5043 43.3751 37.4691 43.8672L37.434 44.7459C37.3285 45.1677 36.977 45.5192 36.5552 45.5192Z" fill="url(#paint15_linear_496_465)"/>
							<defs>
							<linearGradient id="paint0_linear_496_465" x1="46.3008" y1="15.8738" x2="50.6306" y2="15.8738" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint1_linear_496_465" x1="39.332" y1="21.0763" x2="48.001" y2="21.0763" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint2_linear_496_465" x1="31.4768" y1="12.789" x2="50.2966" y2="12.789" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint3_linear_496_465" x1="43.1289" y1="13.4424" x2="50.0182" y2="13.4424" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint4_linear_496_465" x1="31.6387" y1="11.1449" x2="45.5677" y2="11.1449" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint5_linear_496_465" x1="28.6348" y1="11.9654" x2="44.8159" y2="11.9654" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint6_linear_496_465" x1="44.4023" y1="38.085" x2="59.9682" y2="38.085" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint7_linear_496_465" x1="14.8301" y1="53.8253" x2="53.9358" y2="53.8253" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint8_linear_496_465" x1="34.4824" y1="29.7573" x2="50.6233" y2="29.7573" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint9_linear_496_465" x1="30.2734" y1="30.6705" x2="36.7097" y2="30.6705" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint10_linear_496_465" x1="19.5431" y1="44.3127" x2="48.7214" y2="44.3127" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint11_linear_496_465" x1="0.0351562" y1="39.6805" x2="26.3972" y2="39.6805" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint12_linear_496_465" x1="9.80664" y1="39.6805" x2="16.5905" y2="39.6805" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint13_linear_496_465" x1="24.6836" y1="30.4807" x2="31.9934" y2="30.4807" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint14_linear_496_465" x1="36.0977" y1="40.6037" x2="37.8573" y2="40.6037" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint15_linear_496_465" x1="35.709" y1="44.2032" x2="37.4718" y2="44.2032" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							</defs>
						</svg>
					</div>
					<div class="count-box">
						<div class="counter">
							<span class="count-text" data-speed="3000" data-stop="50">0</span>+
						</div>
						<div class="counter-title">Partner Institutions</div>
					</div>
				</div>
				<div class="counter-block-one wow bounceInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="icon-box">
						<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_496_455)">
							<path d="M60 13.5484C60 6.07742 53.9226 0 46.4516 0H13.5484C6.07742 0 0 6.07742 0 13.5484C0 21.0194 6.07742 27.0968 13.5484 27.0968H16.2077C12.6484 30.6997 10.6452 35.5103 10.6452 40.6452C10.6452 51.3174 19.3277 60 30 60C40.6723 60 49.3548 51.3174 49.3548 40.6452C49.3548 35.5103 47.3516 30.6997 43.7923 27.0968H46.4516C53.9226 27.0968 60 21.0194 60 13.5484ZM38.7097 55.7071C36.1442 57.1974 33.1742 58.0645 30 58.0645C26.8258 58.0645 23.8558 57.1974 21.2903 55.7071V53.2258C21.2903 48.4239 25.1971 44.5161 30 44.5161C34.8029 44.5161 38.7097 48.4239 38.7097 53.2258V55.7071ZM47.4194 40.6452C47.4194 46.2397 44.7571 51.2129 40.6452 54.4026V53.2258C40.6452 47.3564 35.8694 42.5806 30 42.5806C24.1306 42.5806 19.3548 47.3564 19.3548 53.2258V54.4026C15.2429 51.2129 12.5806 46.2397 12.5806 40.6452C12.5806 35.3468 14.9506 30.4297 19.0887 27.0968H24.5381C22.56 28.6945 21.2903 31.1361 21.2903 33.871C21.2903 38.6729 25.1971 42.5806 30 42.5806C34.8029 42.5806 38.7097 38.6729 38.7097 33.871C38.7097 31.1361 37.44 28.6945 35.4619 27.0968H40.9113C45.0494 30.4297 47.4194 35.3468 47.4194 40.6452ZM30 27.0968C33.7345 27.0968 36.7742 30.1355 36.7742 33.871C36.7742 37.6064 33.7345 40.6452 30 40.6452C26.2655 40.6452 23.2258 37.6064 23.2258 33.871C23.2258 30.1355 26.2655 27.0968 30 27.0968ZM13.5484 25.1613C7.14484 25.1613 1.93548 19.9519 1.93548 13.5484C1.93548 7.14484 7.14484 1.93548 13.5484 1.93548H46.4516C52.8552 1.93548 58.0645 7.14484 58.0645 13.5484C58.0645 19.9519 52.8552 25.1613 46.4516 25.1613H13.5484Z" fill="url(#paint0_linear_496_455)"/>
							<path d="M47.4194 18.1306L52.8059 20.9631L51.7772 14.9641L56.1368 10.7157L50.1126 9.84088L47.4194 4.38281L44.7262 9.84088L38.7097 10.7147L32.6933 9.84088L30.0001 4.38281L27.3068 9.84088L21.2904 10.7147L15.2739 9.84088L12.5807 4.38281L9.88748 9.84088L3.86328 10.7157L8.22296 14.9641L7.19425 20.9631L12.5807 18.1306L17.9672 20.9631L16.9384 14.9641L21.2904 10.7235L25.6423 14.9651L24.6136 20.9641L30.0001 18.1306L35.3865 20.9631L34.3578 14.9641L38.7097 10.7235L43.0617 14.9651L42.033 20.9641L47.4194 18.1306ZM14.8588 14.2886L15.3968 17.4251L12.5807 15.9444L9.76457 17.4251L10.3026 14.2886L8.0236 12.0677L11.1726 11.6099L12.5807 8.75701L13.9888 11.6099L17.1378 12.0677L14.8588 14.2886ZM32.2791 14.2886L32.8172 17.4251L30.0001 15.9444L27.1839 17.4251L27.722 14.2886L25.443 12.0677L28.592 11.6099L30.0001 8.75701L31.4081 11.6099L34.5572 12.0677L32.2791 14.2886ZM42.8633 12.0677L46.0113 11.6099L47.4194 8.75701L48.8275 11.6099L51.9765 12.0677L49.6984 14.2886L50.2365 17.4251L47.4194 15.9444L44.6033 17.4251L45.1413 14.2886L42.8633 12.0677Z" fill="url(#paint1_linear_496_455)"/>
							</g>
							<defs>
							<linearGradient id="paint0_linear_496_455" x1="-1.44652e-07" y1="29.3333" x2="60" y2="29.3333" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<linearGradient id="paint1_linear_496_455" x1="3.86328" y1="12.4892" x2="56.1368" y2="12.4892" gradientUnits="userSpaceOnUse">
							<stop stop-color="#28AFAC"/>
							<stop offset="1" stop-color="#056251"/>
							</linearGradient>
							<clipPath id="clip0_496_455">
							<rect width="60" height="60" fill="white"/>
							</clipPath>
							</defs>
						</svg>
					</div>
					<div class="count-box">
						<div class="counter">
							<span class="count-text" data-speed="3000" data-stop="20">0</span>+
						</div>
						<div class="counter-title">Years Of Experience</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact area start here -->
	<section class="contact-four-area mt-120 pb-120 bg-cover" id="contacts" style="background-image: url('{{ asset("finclix/images/home-5/contact/contact-bg.jpg") }}');">
		<div class="auto-container">
			<div class="contact-four__wrp">
				<div class="contact-form">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="contact-four__form">
								<div class="sec-title">
									<h6 class="sub-title wow fadeInUp">
										<span class="triangle triangle1"></span>
										<span class="triangle triangle2"></span>
										Contact Us
									</h6>
									<h2 class="title wow fadeInUp" data-wow-delay=".3s">We’re here to help</h2>
									<div class="text wow fadeInUp" data-wow-delay=".3s">Have a question about our training programs or need Shariah advisory support? We're here to help.</div>
								</div>
								<form id="contactForm" action="#0" onsubmit="return false;">
									<input type="text" name="name" id="name" placeholder="Name*">
									<input type="email" name="email" id="email" placeholder="Email Address">
									<textarea name="message" id="message" placeholder="Message"></textarea>
									<div class="contact-send-options">
										<button class="theme-btn btn-style-one rounded-0" type="button" id="sendWhatsappBtn" data-splitting data-text="Send via WhatsApp">Send via WhatsApp</button>
										<button class="theme-btn btn-style-one rounded-0" type="button" id="sendEmailBtn" data-splitting data-text="Send via Email">Send via Email</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-four__image imageLeftToRight wow">
								<img src="{{ asset("finclix/images/home-5/contact/contact-image.jpg") }}" alt="image">
							<div class="content">
								<h3 class="title wow splt-txt" data-splitting>A specialist advisory firm trusted by Islamic financial institutions</h3>
								<div class="info">
									<div>
										<h5 class="text-white">Al-Hijrah Training &amp; Consultancy</h5>
										<span class="text-white">Specialist Advisory &amp; Learning</span>
									</div>
									<img class="logo" src="{{ asset("assets/images/Primary-Logo-Trimmed.png") }}" alt="logo">
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>                    
				<h5 class="contact-four__brand-text">Trusted by 50+ Partner Institutions Across Malaysia.</h5>
			</div>
		</div>
	</section>
	<!-- Contact area end here -->

	<!-- Footer Section Start -->
	<footer class="footer-section-1 fix footer-bg bg-cover" style="background-image: url('{{ asset("finclix/images/home-1/footer-shape.png") }}');">
		<span class="circle-shape"></span>
		<span class="circle-shape-2"></span>
		<div class="auto-container">
			<div class="footer-widget-wrapper">
				<div class="row justify-content-between">
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
						<div class="footer-widget-items mt-30">
							<div class="widget-title mb-25">
								<a href="{{ route('home') }}" class="footer-logo">
									<img src="{{ asset("assets/images/Primary-Logo-Trimmed.png") }}" alt="AHTC Logo">
								</a>
							</div>
							<div class="footer-content">
								<p>
									Specialist advisory and training for Islamic banking and financial
									institutions across Malaysia.
								</p>
								<div class="social-icon">
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
						<div class="footer-widget-items mt-30">
							<div class="widget-title mb-25">
								<h3 class="font-size-24 text-white font-weight-500">Company</h3>
							</div>
							<ul class="user-links">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="#about">About us</a></li>
								<li><a href="#service">Services</a></li>
								<li><a href="#contacts">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
						<div class="footer-widget-items mt-30">
							<div class="widget-title mb-25">
								<h3 class="font-size-24 text-white font-weight-500">Contact Us</h3>
							</div>
							<ul class="contact-list">
                    <li>
                      <i class="lnr-icon-phone-handset"></i>
                      <p><a href="tel:+60192680787">+6019-268 0787</a></p>
                    </li>
                    <li>
                       <i class="lnr-icon-envelope"></i>
                      <p><a href="mailto:admin@alhijrahtraining.com">admin@alhijrahtraining.com</a></p>
                    </li>
                    <li>
                      <i class="lnr-icon-map-marker"></i>
                      <p>Putra Heights, Subang Jaya, Selangor</p>
                    </li>
                  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<p class="wow fadeInUp" data-wow-delay=".3s">Copyright © {{ date('Y') }} Al-Hijrah Training &amp; Consultancy (AHTC). All Rights Reserved</p>
			</div>
		</div>
	</footer>

</div><!-- End Page Wrapper -->

<script>
(function () {
    var form = document.getElementById('contactForm');
    if (!form) {
        return;
    }

    function getValues() {
        return {
            name: document.getElementById('name').value.trim(),
            email: document.getElementById('email').value.trim(),
            message: document.getElementById('message').value.trim(),
        };
    }

    function validate(values) {
        if (!values.name) {
            alert('Please enter your name.');
            return false;
        }
        return true;
    }

    var whatsappBtn = document.getElementById('sendWhatsappBtn');
    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', function () {
            var v = getValues();
            if (!validate(v)) {
                return;
            }
            var text = [
                'Hi, I would like to get in touch with AHTC.',
                'Name: ' + v.name,
                'Email: ' + (v.email || '-'),
                'Message: ' + (v.message || '-'),
            ].join('\n');
            window.open('https://wa.me/60192680787?text=' + encodeURIComponent(text), '_blank', 'noopener');
        });
    }

    var emailBtn = document.getElementById('sendEmailBtn');
    if (emailBtn) {
        emailBtn.addEventListener('click', function () {
            var v = getValues();
            if (!validate(v)) {
                return;
            }
            var subject = 'Enquiry from ' + v.name;
            var body = [
                'Name: ' + v.name,
                'Email: ' + (v.email || '-'),
                '',
                'Message:',
                v.message || '-',
            ].join('\n');
            window.location.href = 'mailto:admin@alhijrahtraining.com'
                + '?subject=' + encodeURIComponent(subject)
                + '&body=' + encodeURIComponent(body);
        });
    }
})();
</script>
@endsection
