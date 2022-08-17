<?php
include('koneksi.php');

$plans_paket = mysqli_query($db1, 'SELECT * FROM plans_paket');
$plans_paket1 = mysqli_query($db1, 'SELECT * FROM plans_paket');
$users = mysqli_query($db1, 'SELECT * FROM users');
$users1 = mysqli_query($db1, 'SELECT * FROM users');
$transaksi = mysqli_query($db2, 'SELECT * FROM pos_transaksi');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="POS Free, POS, Kasir">
	<meta name="description" content="Kasir Termurah">
	<meta name="google-site-verification" content="4XGtLaf8lOW8c0dqtEyYPrGoXKCB1HyvGe2vIMVK_Mw" />
	<meta property="og:site_name" content="Piepaid">
	<meta property="og:url" content="https://piepaid.id/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Piepaid Catat Lengkap Transaksimu">
	<meta name='og:image' content='images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1E78FF">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1E78FF">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1E78FF">
	<title>Piepaid Official</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/logo/logo.png">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<section>
			<div id="preloader">
				<div id="ctn-preloader" class="ctn-preloader">
					<div class="animation-preloader">
						<div class="icon"><img src="images/logo/logo.png" alt="" class="m-auto d-block" width="38"></div>
						<div class="txt-loading mt-2">
							<span data-text-preloader="P" class="letters-loading">
								P
							</span>
							<span data-text-preloader="I" class="letters-loading">
								I
							</span>
							<span data-text-preloader="E" class="letters-loading">
								E
							</span>
							<span data-text-preloader="P" class="letters-loading">
								P
							</span>
							<span data-text-preloader="A" class="letters-loading">
								A
							</span>
							<span data-text-preloader="D" class="letters-loading">
								D
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- 
			=============================================
				Search
			============================================== 
			-->
		<div class="offcanvas offcanvas-top theme-search-form bg-three justify-content-center" tabindex="-1" id="offcanvasTop">
			<button type="button" class="close-btn tran3s" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
			<div class="form-wrapper">
				<form action="#">
					<input type="text" placeholder="Search Keyword....">
				</form>
			</div> <!-- /.form-wrapper -->
		</div>


		<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
		<header class="theme-main-menu sticky-menu theme-menu-one">
			<div class="inner-content">
				<div class="d-flex align-items-center justify-content-between">
					<div class="logo order-lg-0"><a href="/" class="d-block"><img src="images/logo/logo.png" alt="" width="50"></a></div>

					<div class="right-widget d-flex align-items-center ms-auto ms-lg-0 order-lg-3">
						<button class="menu-search-btn tran3s" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-search"></i></button>
						<a href="https://backoffice.piepaid.id/" class="req-demo-btn tran3s d-none d-lg-block">Mencoba Gratis</a>
					</div> <!-- /.right-widget -->

					<nav class="navbar navbar-expand-lg order-lg-2">
						<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="d-block d-lg-none">
									<div class="logo"><a href="index.html"><img src="images/logo/logo.png" alt="" width="130"></a></div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/" role="button">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Apps</a>
									<ul class="dropdown-menu">
										<li><a href="https://backoffice.piepaid.id/" class="dropdown-item"><span>Backoffice</span></a></li>
										<li><a href="https://pos.piepaid.id/" class="dropdown-item"><span>POS (Point Of Sales)</span></a></li>
										<li><a href="https://stock.piepaid.id/" class="dropdown-item"><span>Stock Keeper</span></a></li>
										<li><a href="https://opname.piepaid.id/" class="dropdown-item"><span>Opname</span></a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
										integration</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Payment</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>Midtrans</span></a></li>
											</ul>
										</li>
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Printer</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>Rawbt</span></a></li>
											</ul>
										</li>
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Pajak</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>Pajak.io</span></a></li>
											</ul>
										</li>
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Ojek Online</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>Grab</span></a></li>
												<li><a href="/" class="dropdown-item"><span>Gojek</span></a></li>
												<li><a href="/" class="dropdown-item"><span>Maxim</span></a></li>
											</ul>
										</li>
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Kurir</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>JNE</span></a></li>
												<li><a href="/" class="dropdown-item"><span>JNT</span></a></li>
											</ul>
										</li>
										<li class="dropdown-submenu dropdown">
											<a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Marketpleace</span></a>
											<ul class="dropdown-menu">
												<li><a href="/" class="dropdown-item"><span>Shoope</span></a></li>
												<li><a href="/" class="dropdown-item"><span>Tokopedia</span></a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/" role="button">Price</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">FAQs</a>
									<ul class="dropdown-menu">
										<li><a href="/" class="dropdown-item"><span>Berlangganan</span></a></li>
										<li><a href="/" class="dropdown-item"><span>Oprasikan Backoffice</span></a></li>
										<li><a href="/" class="dropdown-item"><span>Oprasikan POS</span></a></li>
										<li><a href="/" class="dropdown-item"><span>Setting Printer</span></a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/" role="button">Contact</a>
								</li>
							</ul>
							<!-- Mobile Content -->
							<div class="mobile-content d-block d-lg-none">
								<div class="d-flex flex-column align-items-center justify-content-center mt-70">
									<a href="https://backoffice.piepaid.id/" class="req-demo-btn tran3s">Mencoba Gratis</a>
								</div>
							</div> <!-- /.mobile-content -->
						</div>
					</nav>
				</div>
			</div> <!-- /.inner-content -->
		</header> <!-- /.theme-main-menu -->



		<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
		<div class="hero-banner-one">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-7">
						<a href="/" class="slogan"><strong>Offer</strong> Mulai dari 50k/bulan. <i class="fas fa-chevron-right"></i></a>
						<h1 class="hero-heading"> WebApp Kasir Terbaik <?= date('Y') ?></h1>
						<p class="text-lg mb-60 lg-mb-40">Lebih Cepat, Mudah, dan Praktis</p>
						<ul class="style-none button-group d-lg-flex align-items-center">
							<li class="me-4"><a href="https://backoffice.piepaid.id/" class="btn-one ripple-btn">Coba Sekarang</a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="illustration-holder">
				<img src="images/assets/ils_01.svg" alt="" class="main-illustration ms-auto">
				<!-- <img src="images/assets/bg_01.png" alt="" class="shapes bg-shape"> -->
				<img src="images/assets/ils_01_1.svg" alt="" class="shapes shape-one">
				<img src="images/assets/ils_01_2.svg" alt="" class="shapes shape-two">
				<img src="images/assets/ils_01_3.svg" alt="" class="shapes shape-three">
				<img src="images/assets/ils_01_4.svg" alt="" class="shapes shape-four">
				<img src="images/assets/ils_01_5.svg" alt="" class="shapes shape-five">
				<img src="images/assets/ils_01_6.svg" alt="" class="shapes shape-six">
				<img src="images/assets/ils_01_7.svg" alt="" class="shapes shape-seven">
				<div class="card-one shapes">
					<div class="icon"><i class="bi bi-check-lg"></i></div>
					<h6>Backoffice <br>Management</h6>
				</div> <!-- /.card-one -->
				<div class="card-two shapes">
					<div class="icon"><i class="bi bi-check-lg"></i></div>
					<h6>POS (Point Of Sales)</h6>
				</div> <!-- /.card-two -->
			</div> <!-- /.illustration-holder -->
		</div> <!-- /.hero-banner-one -->





		<!-- 
			=============================================
				Feature Section One
			============================================== 
			-->
		<div class="fancy-feature-one position-relative mt-225 xl-mt-200 lg-mt-150">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4">
						<div class="title-style-one">
							<div class="sc-title">Info</div>
							<h2 class="main-title">Web Apps</h2>
						</div> <!-- /.title-style-one -->
						<p class="sub-heading mt-25 mb-50 md-mb-20">Semua Web Apps Kami Yang Bisa Anda Gunakan</p>
						<div class="btn-three">Lebih Lengkap. <a href="/">Click Ini <i class="fas fa-chevron-right"></i></a></div>
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="slider-wrapper">
				<div class="service_slider_one">
					<div class="item">
						<div class="block-style-one text-center">
							<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="images/icon/icon_02.svg" alt="" class="m-auto"></div>
							<h5 class="mb-40">Backoffice</h5>
							<a href="/" class="btn-two">Lebih Lengkap <i class="fas fa-chevron-right"></i></a>
						</div> <!-- /.block-style-one -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="block-style-one text-center">
							<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="images/icon/icon_03.svg" alt="" class="m-auto"></div>
							<h5 class="mb-40">Point Of Sales</h5>
							<a href="/" class="btn-two">Lebih Lengkap <i class="fas fa-chevron-right"></i></a>
						</div> <!-- /.block-style-one -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="block-style-one text-center">
							<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="images/icon/icon_04.svg" alt="" class="m-auto"></div>
							<h5 class="mb-40">Stock Keeper</h5>
							<a href="/" class="btn-two">Lebih Lengkap <i class="fas fa-chevron-right"></i></a>
						</div> <!-- /.block-style-one -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="block-style-one text-center">
							<div class="icon d-flex align-items-end justify-content-center mb-50 lg-mb-30"><img src="images/icon/icon_03.svg" alt="" class="m-auto"></div>
							<h5 class="mb-40">Opname</h5>
							<a href="/" class="btn-two">Lebih Lengkap <i class="fas fa-chevron-right"></i></a>
						</div> <!-- /.block-style-one -->
					</div> <!-- /.item -->
				</div>
			</div> <!-- /.slider-wrapper -->
		</div> <!-- /.fancy-feature-one -->



		<!-- 
			=============================================
				Feature Section Two
			============================================== 
			-->
		<div class="fancy-feature-two position-relative mt-200 lg-mt-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 col-md-7 ms-auto">
						<div class="block-style-two" data-aos="fade-left">
							<div class="title-style-one">
								<div class="sc-title">Info</div>
								<h2 class="main-title">Apakah Keunggulannya?</h2>
							</div> <!-- /.title-style-one -->
							<p class="pt-10 pb-20 lg-pb-10">Semua Transaksi Lebih Mudah. Murah Dan Terbaik Diindonesia.</p>
							<ul class="style-none list-item">
								<li>Realtime Report.</li>
								<li>Print Struk Instan.</li>
								<li>Support Resep & HPP.</li>
								<li>Shift Kasir.</li>
								<li>Masih Banyak Lagi.</li>
							</ul>
						</div> <!-- /.block-style-two -->
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="illustration-holder sm-mt-20">
				<img src="images/assets/ils_02.svg" alt="" class="main-illustration w-100">
				<img src="images/assets/ils_02_1.svg" alt="" class="shapes shape-one">
				<img src="images/assets/ils_02_1.svg" alt="" class="shapes shape-two">
				<img src="images/assets/ils_02_1.svg" alt="" class="shapes shape-three">
				<img src="images/assets/ils_02_2.svg" alt="" class="shapes shape-four" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="1500">
				<img src="images/assets/ils_02_2.svg" alt="" class="shapes shape-five" data-aos="fade-down" data-aos-anchor=".fancy-feature-two" data-aos-delay="200" data-aos-duration="1500">
				<img src="images/assets/ils_02_3.svg" alt="" class="shapes shape-six" data-aos="fade-down" data-aos-anchor=".fancy-feature-two" data-aos-delay="100" data-aos-duration="1500">
				<img src="images/assets/ils_02_4.svg" alt="" class="shapes shape-seven" data-aos="fade-up" data-aos-anchor=".fancy-feature-two" data-aos-delay="250" data-aos-duration="1500">
			</div> <!-- /.illustration-holder -->
		</div> <!-- /.fancy-feature-two -->




		<!--
			=====================================================
				Counter Section One
			=====================================================
			-->
		<div class="counter-section-one mt-150 md-mt-80">
			<div class="container">
				<div class="inner-container">
					<div class="row justify-content-center">
						<div class="col-md-4 col-sm-6" data-aos="fade-up">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count"><span class="counter">1</span> Tahun</div>
								<p>Pengujian Pengembangan<br> di 4 Restoran Bengkulu</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count"><span class="counter"><?= count($users->fetch_all()) ?></span> User</div>
								<p>Telah Bergabung <br>Bersama Kami</p>
							</div> <!-- /.counter-block-one -->
						</div>
						<div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
							<div class="counter-block-one text-center mb-20">
								<div class="main-count"><span class="counter"><?php
																				$jtran = count($transaksi->fetch_all());
																				if ($jtran > 999) {
																					echo substr($jtran, 0, -3);
																				}
																				?></span>k Bill</div>
								<p>Transaksi <br> Oleh Pengguna Kami</p>
							</div> <!-- /.counter-block-one -->
						</div>
					</div>
				</div> <!-- /.inner-container -->
			</div>
		</div> <!-- /.counter-section-one -->



		<!-- 
			=============================================
				Feature Section Three
			============================================== 
			-->===========
		-->
		<div class="fancy-feature-three position-relative">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6">
						<div class="block-style-two pe-xxl-5" data-aos="fade-right">
							<div class="title-style-one">
								<div class="sc-title">Promise</div>
								<h2 class="main-title">Join Bersama Kami, Dijamin Tidak Rugi.</h2>
							</div> <!-- /.title-style-one -->
							<p class="pt-20 pb-30 lg-pb-10">Tim Developer Kami Telah Turun Lapangan Langsung Selama 1 Tahun, Untuk Menyesuaikan Kebutuhan Anda Dan Nikmati Update Fitur Bekelanjutan</p>
							<ul class="style-none button-group d-lg-flex align-items-center">
								<li class="me-4"><a href="https://backoffice.piepaid.id/" class="btn-one ripple-btn">Gabung</a></li>
							</ul>
						</div> <!-- /.block-style-two -->
					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 ms-auto text-end">
						<div class="illustration-holder position-relative d-inline-block sm-mt-50">
							<img src="images/assets/ils_03.svg" alt="" class="main-illustration w-100">
							<img src="images/assets/ils_03_1.svg" alt="" class="shapes shape-one">
							<img src="images/assets/ils_03_2.svg" alt="" class="shapes shape-two">
							<img src="images/assets/ils_03_2.svg" alt="" class="shapes shape-three">
							<img src="images/assets/ils_03_4.svg" alt="" class="shapes shape-four">
							<img src="images/assets/ils_03_3.svg" alt="" class="shapes shape-five" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
							<img src="images/assets/ils_03_3.svg" alt="" class="shapes shape-six" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500">
						</div> <!-- /.illustration-holder -->
					</div>
				</div>
			</div> <!-- /.container -->
			<div class="mt-100 lg-mt-70">
				<div class="container">
					<div class="row justify-content-center gx-xxl-5">
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up">
							<div class="block-style-three mb-25">
								<div class="numb">1</div>
								<h6>Signup.</h6>
								<p>Daftarkan diri dengan hanya email anda.</p>
							</div> <!-- /.block-style-three -->
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="150">
							<div class="block-style-three mb-25">
								<div class="numb">2</div>
								<h6>Buat Plans.</h6>
								<p>Nikmati Plans Trial Gratis Hingga 1 Bulan.</p>
							</div> <!-- /.block-style-three -->
						</div>
						<div class="col-lg-4 col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
							<div class="block-style-three mb-25">
								<div class="numb">3</div>
								<h6>Diskon Untuk Pelanggan.</h6>
								<p>Nikmati Diskon Untuk Pelanggan Pertama.</p>
							</div> <!-- /.block-style-three -->
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.fancy-feature-three -->


		<!--
			=====================================================
				Portfolio Gallery One
			=====================================================
			-->
		<div class="portfolio-gallery-one mt-150 lg-mt-110" data-aos="fade-up">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-7 col-sm-8">
						<div class="title-style-one text-center text-sm-start xs-pb-20">
							<h2 class="main-title">Pengguna Kami.</h2>
						</div> <!-- /.title-style-one -->
					</div>
					<div class="col-xl-6 col-lg-7 col-md-5 col-sm-4 ms-auto d-flex justify-content-center justify-content-sm-end">
						<ul class="slider-arrows slick-arrow-one d-flex style-none">
							<li class="prev_p1 slick-arrow ripple-btn"><i class="bi bi-arrow-left"></i></li>
							<li class="next_p1 slick-arrow ripple-btn"><i class="bi bi-arrow-right"></i></li>
						</ul>
					</div>
				</div>

				<div class="slider-wrapper">
					<div class="portfolio_slider_one">
						<div class="item">
							<div class="portfolio-block-one">
								<div class="img-meta"><img src="images/gallery/img_01.jpg" alt="" class="w-100"></div>
								<a href="/" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Steak, Cafe</span>
									<span class="pj-name">Warung Steak Bengkulu</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_01.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> <!-- /.portfolio-block-one -->
						</div> <!-- /.item -->

						<div class="item">
							<div class="portfolio-block-one">
								<div class="img-meta"><img src="images/gallery/img_02.jpg" alt="" class="w-100"></div>
								<a href="/" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Japan Food</span>
									<span class="pj-name">Japan Kitchin</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_02.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> <!-- /.portfolio-block-one -->
						</div> <!-- /.item -->

						<div class="item">
							<div class="portfolio-block-one">
								<div class="img-meta"><img src="images/gallery/img_03.jpg" alt="" class="w-100"></div>
								<a href="/" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Cafe, Dessert</span>
									<span class="pj-name">Snack On Child</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_03.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> <!-- /.portfolio-block-one -->
						</div> <!-- /.item -->

						<div class="item">
							<div class="portfolio-block-one">
								<div class="img-meta"><img src="images/gallery/img_04.jpg" alt="" class="w-100"></div>
								<a href="/" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Tembikar Food</span>
									<span class="pj-name">Ayam Coek Bengkulu</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_04.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> <!-- /.portfolio-block-one -->
						</div> <!-- /.item -->

						<div class="item">
							<div class="portfolio-block-one">
								<div class="img-meta"><img src="images/gallery/img_05.jpg" alt="" class="w-100"></div>
								<a href="/" class="title tran3s d-flex flex-column justify-content-center align-items-center">
									<span class="tag">Ramen, Japan Food</span>
									<span class="pj-name">Ramen Shoba</span>
								</a>
								<div class="hover-state tran3s"><a class="fancybox tran3s" data-fancybox="" title="Click for large view" href="images/gallery/img_05.jpg" tabindex="0"><i class="bi bi-plus"></i></a></div>
							</div> <!-- /.portfolio-block-one -->
						</div> <!-- /.item -->
					</div>
				</div> <!-- /.slider-wrapper -->
			</div>
		</div> <!-- /.portfolio-gallery-one -->



		<!--
			=====================================================
				Pricing Section One
			=====================================================
			-->
		<div class="pricing-section-one mt-150 lg-mt-110">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-xxl-7 col-xl-8 col-lg-7 col-md-9 m-auto">
						<div class="title-style-one text-center">
							<h2 class="main-title">Harga Plans Kami Termurah Dikelasnya</h2>
						</div> <!-- /.title-style-one -->
					</div>
				</div>

				<ul class="nav nav-tabs justify-content-center pricing-nav-one" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab">Monthly</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" data-bs-toggle="tab" data-bs-target="#year" type="button" role="tab">Yearly</button>
					</li>
				</ul>
			</div> <!-- /.container -->

			<div class="pricing-table-area-one" data-aos="fade-up" data-aos-delay="100">
				<div class="container">
					<div class="tab-content">
						<div class="tab-pane active show" id="month">
							<div class="row gx-xxl-5">

								<?php

								while ($value = mysqli_fetch_array($plans_paket)) {
									$harga = substr($value['harga'], 0, -3);

									if ($value['waktu_satuan'] == 'Days') {
										$waktusatuan = $value['waktu'] . ' Hari';
									} else {
										$waktusatuan = '30 Hari';
									}
								?>
									<div class="col-md-3">
										<div class="pr-table-wrapper active md-mb-30">
											<div class="pack-name"><?= $value['nama'] ?></div>
											<div class="pack-details"><?= $value['info'] ?> <br><span> <?= $waktusatuan  ?></span></div>
											<div class="top-banner d-sm-flex justify-content-center align-items-center">
												<div class="price" style="font-size: 30px;"><sup style="font-size: 10px;">Rp. </sup><?= $harga ? $harga : 0 ?>k</div>
												<div>
													<span>/<?= $waktusatuan   ?></span>
												</div>
												<br>
											</div> <!-- /.top-banner -->
											<ul class="pr-feature style-none">
												<?php
												$fitur = json_decode($value['ket'], true);
												foreach ($fitur as $v) {
												?>
													<li><?= $v ?></li>
												<?php
												} ?>
											</ul>
											<?php if ($value['status'] == 1) { ?>
												<a href="https://backoffice.piepaid.id/" class="trial-button"> <span>Pilih Plans <i class="fas fa-chevron-right"></i></span> </a>
											<?php } ?>
										</div> <!-- /.pr-table-wrapper -->
									</div>
								<?php
								} ?>
							</div>
						</div>

						<div class="tab-pane" id="year">
							<div class="row gx-xxl-5">

								<?php
								while ($value = mysqli_fetch_array($plans_paket1)) {
									$wkt = 12;
									if ($value['id'] != 1) {
										if ($value['disc']) {
											$disc = json_decode($value['disc'], true);
											if ($disc['waktu'] >= $wkt) {
												$jdis = $disc['disc'];
												$disc = substr((($value['harga'] * $wkt) - ((($value['harga'] * $wkt)) * $disc['disc']) / 100), 0, -3);
											} else {
												$jdis = null;
											}
										} else {
											$disc = '';
											$jdis = null;
										}
										$harga = substr($value['harga'] * $wkt, 0, -3);

										if ($value['waktu_satuan'] == 'Days') {
											$waktusatuan =  '1 Tahun' . $disc;
										} else {
											$waktusatuan = '1 Tahun';
										}
								?>
										<div class="col-md-4">
											<div class="pr-table-wrapper md-mb-30">
												<div class="pack-name"><?= $value['nama'] ?></div><br>
												<div class="pack-details"><?= $value['info'] ?> <br><span> <?= $waktusatuan  ?></span></div>
												<div class="top-banner d-sm-flex justify-content-center align-items-center">
													<div class="price" style="font-size: 35px;"><sup style="font-size: 10px;">Rp. </sup><small style="text-decoration: line-through;font-size: 20px;"><?= $harga ? $harga : 0 ?>k </small> <sup style="font-size: 10px;"> &nbsp;<?= $jdis ? '-' . $jdis . '%' : '' ?> </sup><br><sup style="font-size: 10px;">Rp. </sup><?= $disc ?>k
													</div>
													<div>
														<span>/<?= $waktusatuan   ?></span>
													</div>
													<br>
												</div> <!-- /.top-banner -->
												<ul class="pr-feature style-none">
													<?php
													$fitur = json_decode($value['ket'], true);
													foreach ($fitur as $v) {
													?>
														<li><?= $v ?></li>
													<?php
													} ?>
												</ul>
												<?php if ($value['status'] == 1) { ?>
													<a href="https://backoffice.piepaid.id/" class="trial-button"> <span>Pilih Plans <i class="fas fa-chevron-right"></i></span> </a>
												<?php } ?>
											</div> <!-- /.pr-table-wrapper -->
										</div>
								<?php
									}
								} ?>
							</div>
						</div>
					</div> <!-- /.tab-content -->

				</div>
			</div> <!-- /.pricing-table-area-one -->
		</div><!-- /.pricing-section-one -->





		<!--
			=====================================================
				Partner Section One
			=====================================================
			-->
		<div class="partner-section-one">
			<div class="container">
				<div class="title-style-one text-center" data-aos="fade-up">
					<div class="sc-title">Info</div>
					<h2 class="main-title md">Integration </h2>
				</div> <!-- /.title-style-one -->

				<div class="row">
					<div class="col-xxl-11 m-auto">
						<ul class="style-none text-center mt-40 lg-mt-10">
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/midtrans.png" width="70px" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/rawbt.png" width="70px" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-8.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-9.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-10.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="100"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-11.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="200"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-12.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="300"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-13.png" alt=""></a></li>
							<li class="partner-logo-block-one d-inline-block" data-aos="fade-up" data-aos-delay="400"><a href="#" class="d-flex align-items-center justify-content-center"><img src="images/logo/Plogo-14.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.partner-section-one -->






		<!--
			=====================================================
				Address Section One
			=====================================================
			-->
		<div class="address-section-one pt-130 lg-pt-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-7 col-md-9 m-auto">
						<div class="title-style-one text-center mb-50" data-aos="fade-up">
							<div class="sc-title">Masih Pakai Transaksi Manual?</div>
							<h2 class="main-title">Gabung Bersama Kami, Rasakan Sendiri Kemudahannya</h2>
						</div> <!-- /.title-style-one -->
						<div class="text-center" data-aos="fade-up" data-aos-delay="150"><a href="/" class="btn-four ripple-btn">Mulai <i class="fas fa-chevron-right"></i></a></div>
					</div>
				</div>

				<div class="inner-content" data-aos="fade-up" data-aos-delay="100">
					<div class="row g-0">
						<div class="col-md-6 d-flex">
							<div class="address-block-one d-flex border-right">
								<div class="icon"><img src="images/icon/icon_06.svg" alt=""></div>
								<div class="text-meta">
									<h4 class="title">Our Address</h4>
									<p>Rawa Makmur <br>Kota Bengkulu</p>
								</div> <!-- /.text-meta -->
							</div> <!-- /.address-block-one -->
						</div>
						<div class="col-md-6 d-flex">
							<div class="address-block-one d-flex">
								<div class="icon"><img src="images/icon/icon_07.svg" alt=""></div>
								<div class="text-meta">
									<h4 class="title">Contact Info</h4>
									<p>Hubungi Kami <br><a href="#">085369957606</a></p>
								</div> <!-- /.text-meta -->
							</div> <!-- /.address-block-one -->
						</div>
					</div>
				</div>
			</div>
			<!-- <img src="images/assets/bg_05.svg" alt="" class="shapes shape-one"> -->
			<img src="images/shape/shape_01.svg" alt="" class="shapes shape-two">
			<img src="images/shape/shape_02.svg" alt="" class="shapes shape-three">
			<img src="images/shape/shape_02.svg" alt="" class="shapes shape-four">
			<img src="images/shape/shape_03.svg" alt="" class="shapes shape-five">
		</div> <!-- /.address-section-one -->



		<!--
			=====================================================
				Footer
			=====================================================
			-->
		<div class="footer-style-one theme-basic-footer">
			<div class="container">
				<div class="inner-wrapper">
					<div class="row">
						<div class="col-lg-3 footer-intro mb-40">
							<div class="logo"><a href="/"><img src="images/logo/logo.png" alt="" width="130"></a></div>
							<p>Piepaid Corporation <?= date('Y') ?>.</p>
							<ul class="d-flex social-icon style-none">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 mb-30">
							<h5 class="footer-title">Apps</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="">Backoffice</a></li>
								<li><a href="">POS (Point Of Sales)</a></li>
								<li><a href="">Stock Keeper</a></li>
								<li><a href="">Opname</a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-6 mb-30">
							<h5 class="footer-title">Legal</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="">Terms of use</a></li>
								<li><a href="">Terms & conditions</a></li>
								<li><a href="">Privacy policy</a></li>
								<li><a href="">Cookie policy</a></li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-4 col-md-6 mb-30">
							<div class="newsletter ps-xl-5">
								<h5 class="footer-title">Subscribe </h5>
								<p>Sudah <span><?= count($users1->fetch_all()) ?></span> Orang Gabung, Tinggal Anda</p>
								<form action="#">
									<input type="email" placeholder="Enter your email">
									<button>Sign Up</button>
								</form>
								<div class="info">We only send interesting and relevant emails.</div>
							</div> <!-- /.newsletter -->
						</div>
					</div>

					<div class="bottom-footer">
						<div class="d-lg-flex justify-content-between align-items-center">
							<ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
								<li><a href="">Privacy &amp; Terms.</a></li>
								<li><a href="">FAQ</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
							<p class="copyright text-center order-lg-0 pb-15">Copyright @<?= date('Y') ?>.</p>
						</div>
					</div>
				</div> <!-- /.inner-wrapper -->
			</div>
		</div> <!-- /.footer-style-one -->


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- Slick Slider -->
		<script src="vendor/slick/slick.min.js"></script>
		<!-- js Counter -->
		<script src="vendor/jquery.counterup.min.js"></script>
		<script src="vendor/jquery.waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>

		<style>
			body {
				background-color: #1c152a;
			}

			.navbar-collapse {
				background-color: #17131f;
			}

			.ctn-preloader {
				background-color: #1c152a;
			}

			.theme-main-menu.sticky-menu.fixed {
				background-color: #2f2a3b;
			}

			.navbar-toggler {
				background-color: #ffd7008a;
			}

			.navbar .dropdown-toggle::after {
				background: unset;
			}

			.hero-banner-one .illustration-holder .bg-shape {
				top: 0;
			}

			body .btn-one {
				background-color: #ffd7008a;
			}

			.block-style-one {
				background-color: #ffd7008a;
			}

			.counter-section-one .inner-container {
				background-color: #9c8300;
			}

			.fancy-feature-three {
				background-color: #1c152a;
			}

			.block-style-three {
				background-color: #9c8300;
			}

			.block-style-three .numb {
				background-color: #1c152a;
			}

			.pricing-section-one {
				background-color: #1c152a;
				padding-top: 50px;
			}

			.pricing-table-area-one .pr-table-wrapper {
				background-color: #9c8300
			}

			.pricing-table-area-one .top-banner .price {
				color: #1c152a
			}

			.pricing-table-area-one:before {
				background: url('images/assets/bg_04.svg') no-repeat center;
			}

			.portfolio-block-one .title {
				background-color: #9c8300;
			}

			.portfolio-block-one:before {
				background: linear-gradient(180deg, rgba(24, 52, 123, 0) 0%, rgba(48, 46, 160, 0.08) 56.67%, #1c152a 100%);
			}

			.address-section-one .inner-content {
				background-color: #ffd7008a;
			}

			/* .footer-style-one {
				background: url('images/assets/bg_04.svg') no-repeat center;

			} */
		</style>
	</div> <!-- /.main-page-wrapper -->
</body>

</html>