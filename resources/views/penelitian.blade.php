@extends('layout/main')

@section('content')

<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Penelitian</h2>
					<div class="page_link">
						<a href="{{('/')}}">Home</a>
						<a href="{{('/penelitian')}}">Penelitian</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->


	<!--================ Start Recent Event Area =================-->
	<section class="event_details section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<h1>Kumpulan jurnal ilmiah, dan lain-lain.</h1><br>
                        @foreach($penelitian as $penelitians)
						<div class="row">
							<div class="col-lg-9">
								<div class="right_content">
									<h3>{{$penelitians->judul}}</h3>
									<p>By {{$penelitians->peneliti}} | Tgl Penelitian: {{$penelitians->tanggal}}</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-justify">
									<?php
                                    echo "$penelitians->deskripsi";
                                    ?>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
            {{$penelitian->links()}}
		</div>
	</section>
	<!--================ End Recent Event Area =================-->

    @endsection