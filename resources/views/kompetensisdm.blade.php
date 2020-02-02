@extends('layout/main')

@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Kompetensi Sumber Daya Manusia</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{url('/kompetensisdm')}}">Kompetensi SDM</a>
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
            <div class="col-12  ">

            <h1>Kompetensi Sumber Daya Manusia</h1>
            </div>
                @foreach($kompetensi_SDM as $kompetensi_SDM)
                    <div class="col-lg-12">
                        <h5 class="mt-3">{{$kompetensi_SDM->judul}}</h5>
                        <?php
                            echo "$kompetensi_SDM->kompetensi_sdm";
                        ?>
                    </div>
                @endforeach
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
	</div>

	<!--================ Start Clients Logo Area =================-->
	<section class="clients_logo_area section_gap">
		<div class="container">
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="{{URL::asset('extdinkes/img/clients-logo/c-logo-1.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extdinkes/img/clients-logo/c-logo-2.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extdinkes/img/clients-logo/c-logo-3.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extdinkes/img/clients-logo/c-logo-4.png')}}" alt="">
				</div>
				<div class="item">
					<img src="{{URL::asset('extdinkes/img/clients-logo/c-logo-5.png')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================ End Clients Logo Area =================-->

@endsection