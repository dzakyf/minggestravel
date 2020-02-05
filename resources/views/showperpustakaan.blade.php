@extends('layout/main')

@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Perpustakaan</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="perpustakaan.html">Perpustakaan</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Start About Us Section =================-->
	<section class="section_gap">
		<div class="container card card-body">
			<div class="row ">
				<div class="col-lg-3">
					<div class="about_img">
						<img class="img-fluid" src="{{URL::asset($perpustakaan->cover)}}" style="width:300px;height:400px;" alt="">
					</div>
				</div>

				<div class=" col-lg-9">
					<div class="content_wrapper">
						<h1>{{($perpustakaan->judul)}} <br><small>By ({{$perpustakaan->pengarang}})</small></h1>
						<span class="text-justify">
						<p>
                        <?php
                            echo "$perpustakaan->resensi";
                        ?>
					    </p>
				        </span>
					</div>
				</div>
			</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
	</div>
		<div class="content_wrapper">
			<div class="row">
				<div class="col-lg-12">
						<h3>(Additional Info)</h3>
					</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Judul</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->judul}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Pengarang</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->pengarang}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Edisi</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->edisi}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Tahun terbit</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->tahun_terbit}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Jumlah halaman</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->jumlah_halaman}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
						<p>Kategori</p>
				</div>
				<div class="col-lg-4">
						<p>: {{$perpustakaan->kategori}}</p>
				</div>
			</div>
			
			</div>
		</div>
			
		</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->
@endsection