<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{URL::asset('extdinkes/img/favicon.png')}}" type="image/png">
	<title>Balai Labkes & Kalibrasi</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/vendors/jquery-ui/jquery-ui.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('extdinkes/css/responsive.css')}}">
</head>

<div >
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img width="85%" height="100%" src="{{URL::asset('extdinkes/img/logo.png')}}" alt="">
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
												<a class="nav-link" href="{{url('/sejarah')}}">Sejarah</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{url('/visidanmisi')}}">Visi dan Misi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{url('/strukturorganisasi')}}">Struktur Organisasi</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{url('/upayakesehatan')}}">Upaya Kesehatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{url('/kompetensisdm')}}">Kopetensi SDM</a>
											</li>
										</ul>
									</li>
									<li class="nav-item submenu dropdown">


										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan </a>
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
									
									<li class="nav-item">
										<a class="nav-link" href="#">Tarif</a>
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
										<a class="nav-link" href="#">Berita</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Artikel</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Kontak</a>
									</li>
									<!--<li class="nav-item">
										<a class="main_btn" href="#">Log in</a>
									</li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

    @yield('content')

	<!--================ Start Footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">KONTAK KAMI</h6>
						<p>
							<!--Alamat: Jalan Ngadinegaran MJ III No.62, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143<br>-->
							Balai laboratorium Kesehatan dan Kalibrasi<br> 
							Alamat: Ngadinegaran MJ III/62 Yogyakarta 55143<br>
							Telp. (0274) 378187, Fax. (0274) 381582<br>
							Email: labkes@gmail.com

							<p>
						</p>
					</div>
				</div>

				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">LINK</h6>
							<!--Alamat: Jalan Ngadinegaran MJ III No.62, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143<br>-->
							<ul class="list-unstyled"> 
								<p>JOGJAPROV</p>
								<li><a href="http://lapor.jogjaprov.go.id">http://lapor.jogjaprov.go.id</a></li>
								<p>JAMKESOS</p>
								<li><a href="http://jamkesos.jogjaprov.go.id/">http://jamkesos.jogjaprov.go.id/</a></li>
								<p>BPJS</p>
								<li><a href="http://bpjs-kesehatan.go.id/">http://bpjs-kesehatan.go.id/</a></li>
								<p>DINKES</p>
								<li><a href="http://dinkes.jogjaprov.go.id/">http://dinkes.jogjaprov.go.id/</a></li>
				            </ul> 
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">KUNJUNGAN</h6>
						<p>Kunjungan Hari ini : 342 </p>
						<p>Kunjungan Bulan ini : 3023</p>
						<p>Total kunjungan : 6021</p>
						
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">

					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">FOLLOW KAMI</h6>
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

			<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">NEWSLETTER</h6>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Masukkan e-mail Anda " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
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
			</div>



		<div class="row">
				<div class="col-lg-12">
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright (c) 2020. All rights reserved  by <a>Balai Labkes & Kalibrasi Yogyakarta</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area  =================-->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{URL::asset('extdinkes/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('extdinkes/js/popper.js')}}"></script>
	<script src="{{URL::asset('extdinkes/js/bootstrap.min.js')}}"></script>
	<!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script> -->
	<script src="{{URL::asset('extdinkes/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<!-- <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script> -->
	<script src="{{URL::asset('extdinkes/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{URL::asset('extdinkes/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('extdinkes/js/jquery.ajaxchimp.min.js')}}"></script>
	<!-- <script src="vendors/counter-up/jquery.waypoints.min.js"></script> -->
	<!-- <script src="vendors/flipclock/timer.js"></script> -->
	<!-- <script src="vendors/counter-up/jquery.counterup.js"></script> -->
	<script src="{{URL::asset('extdinkes/js/mail-script.js')}}"></script>
	<script src="{{URL::asset('extdinkes/js/custom.js')}}"></script>

	</div>
</body class="background">


</html>