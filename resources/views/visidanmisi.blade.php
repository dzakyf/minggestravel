@extends('layout/main')

@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Visi dan Misi</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{url('/visidanmisi')}}">Visi dan Misi</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Start About Us Section =================-->
	<section class="about_us section_gap">
		<div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                    <h1>Visi</h1>
                        <div class="bottom_para">
                            <ul> 
                                @foreach($visi as $visi)
                                    <li>
                                        <?php
                                            echo "$visi->visi";
                                        ?>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                    <h1>Misi</h1>
                        <div class="bottom_para">
                            <ol>

                            @foreach($misi as $misi)
                                <li>
                                    <?php
                                        echo "$misi->misi";
                                    ?>
                                </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
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