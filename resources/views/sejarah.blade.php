@extends('layout/main')
@section('classnavitemprofil', 'active')
@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Sejarah</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{url('/sejarah')}}">Sejarah</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Start About Us Section =================-->
	<section class="about_us section_gap">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
                <h1>Sejarah</h1>
					<div class="bottom_para">
                            @foreach($sejarah as $sejarah)
							<div class="col-lg-12 mb-5">
								<img class="img-fluid" src="{{$sejarah->gambar}}" style="width: 50%" alt="">
                        	</div>
                            <?php
								echo $sejarah->sejarah;
                            ?>
                            @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->
@endsection