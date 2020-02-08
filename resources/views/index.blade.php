@extends('layout/main')

@section('content')

	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<img class="img-fluid" src="{{URL::asset('extdinkes/img/banner/text-img.png')}}" alt="">
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
				@foreach($jenispelayanan as $jenispelayanan)
					<div class="col-lg-4 col-md-6 single_donation_box">
						<a href="{{url('/layanan')}}/{{$jenispelayanan->id_pelayanan}}"><img src="{{URL::asset($jenispelayanan->icon)}}" style="width:67px; height:67px;" alt="icon"></a>
						<h4>Layanan {{$jenispelayanan->nama}}</h4>
						<p>
							Untuk Pelayanan {{$jenispelayanan->nama}}
						</p>
					</div>
				@endforeach
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
					@foreach($beritanz as $beritanz)
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="{{URL::asset($beritanz->gambar)}}" style="width:310px;height:213px" alt="Card image cap">
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
								<h4 class="card-title">{{$beritanz->judul}}</h4>
								<p class="card-text"><?php echo $beritanz->berita ?></p>
								<a href="{{url('/berita')}}/{{$beritanz->id_berita}}" class="main_btn2">Baca Sekarang</a>
							</div>
						</div>
					</div>
					@endforeach

					

					
				</div>
			</div>
		</div>
	</section>

	<!--================ Ens Our Major Cause section =================-->

<section class="donation_details pad_bottom">
		<div class="container">
				<h1><center>Pengumuman</center></h1>
			  	<div class="row">
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/icons/home1.png')}}" alt="">
					<h4>Layanan Patologi</h4>
					<p>
						Untuk Pelayanan Patologi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/icons/home2.png')}}" alt="">
					<h4>Layanan Mikrobiologi</h4>
					<p>
						Untuk Pelayanan Mikrobiologi
					</p>
				</div>
				<div class="col-lg-4 col-md-6 single_donation_box">
					<img src="{{URL::asset('extdinkes/img/icons/home3.png')}}" alt="">
					<h4>Layanan Kimia Kesehatan</h4>
					<p>
						Untuk Layanan Kimia Kesehatan
					</p>
				</div>
				
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start Clients Logo Area =================-->

<div class="card">
  	<div class="card-body">
	  <section class="clients_logo_area ">
		<div class="container">
			<h1><center>Mitra Kami</center></h1>
					<p><center>Untuk meningkatkan pelayanan, kami telah bermitra dengan berbagai instansi baik Negeri maupun Swasta</center></p>
					<br>
			<div class="clients_slider owl-carousel">
				@foreach($mitra as $mitra)
				<div class="item">
					<img src="{{URL::asset($mitra->gambar)}}" style="width:156px; height:71px;" alt="">
				</div>
				@endforeach
			</div>
		</div>
	</section><br><br>
	<section class="clients_logo_area ">
		<div class="container">
			<h1><center>Sertifikat</center></h1>
					<p><center>Untuk meningkatkan pelayanan, kami telah bermitra dengan berbagai instansi baik Negeri maupun Swasta
					</center></p>
					<br>
			<div class="clients_slider owl-carousel">
				@foreach($sertifikat as $sertifikat)
				<div class="item">
					<img src="{{URL::asset($sertifikat->gambar)}}" style="width:156px; height:71px;" alt="">
				</div>
				@endforeach
			</div>
		</div>
	</section>
  </div>
</div>




	<!--================ End Clients Logo Area =================-->


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
@endsection