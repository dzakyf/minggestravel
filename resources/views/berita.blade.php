@extends('layout/main')

@section('classnavitemberita', 'active')
@section('content')
<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Berita</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{('/berita')}}">Berita</a>
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
				@foreach($berita as $beritas)
					<div class="col-lg-6">
						<div class="single_event">
							<div class="row">
								<div class="col-lg-6 col-md-5">
									<figure>
										<img class="img-fluid w-100" src="{{URL::asset($beritas->gambar)}}" style="width:263px;height:220px;" alt="">
										<div class="img-overlay"></div>
									</figure>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="content_wrapper">
										<p class="date_time">{{date('d M Y', strtotime($beritas->updated_at))}}</p>
										<h4 class="title">
											<a href="{{('/berita')}}/{{$beritas->id_berita}}">{{$beritas->judul}}</a>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row text-center mt-2">
				{{$berita->links()}}
			</div>
		</div>
	</section>
	<!--================ End Recent Event Area =================-->
@endsection

