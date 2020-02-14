@extends('layout/main')
@section('classnavitemkepustkaan', 'active')
@section('content')

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Download berkas</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Home</a>
						<a href="{{('/download')}}">Download</a>
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
					<h1>File Download</h1><br>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col" colspan="2">File</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($download as $downloads)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td colspan="2">{{ $downloads->nama_file }}</td>
                        <td ><a href="{{URL::asset($downloads->file)}}" class="btn btn-outline-success">Download</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    {{$download->links()}}
                    </div>
                    
                </div>

           
            </div>
        </div>
    </section>

	<!--================ End Recent Event Area =================-->

	