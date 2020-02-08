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

@endsection