@extends('layout/main')

@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Pengumuman</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{url('/pengumuman')}}">Pengumuman</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

		<!-- pengumuman start -->
        <section class="donation_details ">
		<div class="container">
			<div class="row mb-5 mt-5">
				@foreach($pengumuman as $pengumumans)
				<div class="list-group col-lg-12">
					<a href="{{('/pengumuman')}}/{{$pengumumans->id_pengumuman}}" class="list-group-item list-group-item-action flex-column align-items-start ">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">{{$pengumumans->judul}}</h5>
						<small class="text-right">{{date('d M Y', strtotime($pengumumans->updated_at))}}</small>
					</div>
					</a>
				</div>
				@endforeach
                {{$pengumuman->links()}}
			</div>
		</div>
	</section>
	<!-- pengumuman end -->
	<!--================ Start Clients Logo Area =================-->

@endsection

