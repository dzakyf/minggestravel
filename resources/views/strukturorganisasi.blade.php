@extends('layout/main')
@section('classnavitemprofil', 'active')
@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Struktur Organisasi</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{url('/sejarah')}}">Struktur Organisasi</a>
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

            <h1>Struktur Organisasi</h1>
            </div>
                @foreach($struktur_organisasi as $struktur_organisasi)
                    <div class="col-lg-6">
                        <h5 class="mt-3">Struktur Organisasi</h5>
                        <img src="{{URL::asset($struktur_organisasi->gambar)}}" class="d-block" style='width: 100%; vertical-align: middle'; /> 
                    </div>
                    <div class="col-lg-6">
                        <h5 class="mt-3">Deskripsi</h5>
                        <?php
                            echo "$struktur_organisasi->deskripsi";
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

@endsection