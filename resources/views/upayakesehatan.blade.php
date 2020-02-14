@extends('layout/main')
@section('classnavitemprofil', 'active')
@section('content')
<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Upaya Kesehatan</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{('/upayakesehatan')}}">Upaya Kesehatan</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->


	<!--================ Start Recent Event Area =================-->
	<section class="recent_event section_gap_custom">
		<div class="container">
			<div class="row">
				@foreach($upaya_kesehatan as $upayakesehatans)
					<div class="col-lg-6">
						<div class="single_event">
							<div class="row">
								<div class="col-lg-6 col-md-5">
									<figure>
										<img class="img-fluid w-100" src="{{URL::asset($upayakesehatans->gambar)}}" style="width:263px;height:220px;" alt="">
										<div class="img-overlay"></div>
									</figure>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="content_wrapper">
										<p class="date_time">{{date('d M Y', strtotime($upayakesehatans->updated_at))}}</p>
										<h4 class="title">
											<a href="event-details.html">{{$upayakesehatans->judul}}</a>
										</h4>
										<?php
											echo "$upayakesehatans->deskripsi";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row text-center mt-2">
				{{$upaya_kesehatan->links()}}
			</div>
		</div>
	</section>
	<!--================ End Recent Event Area =================-->
@endsection