@extends('layout/main')

@section('content')
<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Artikel</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{('/upayakesehatan')}}">Artikel</a>
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
				@foreach($artikel as $artikels)
					<div class="col-lg-6">
						<div class="single_event">
							<div class="row">
								<div class="col-lg-6 col-md-5">
									<figure>
										<img class="img-fluid w-100" src="{{URL::asset($artikels->gambar)}}" style="width:263px;height:220px;" alt="">
										<div class="img-overlay"></div>
									</figure>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="content_wrapper">
										<p class="date_time">{{date('d M Y', strtotime($artikels->updated_at))}}</p>
										<h4 class="title">
											<a href="{{('/artikel')}}/{{$artikels->id_artikel}}">{{$artikels->judul}}</a>
										</h4>
										<?php
											echo "$artikels->deskripsi";
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row text-center mt-2">
				{{$artikel->links()}}
			</div>
		</div>
	</section>
	<!--================ End Recent Event Area =================-->
@endsection