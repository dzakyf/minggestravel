@extends('layout/main')

@section('css')
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> <!--2/3/2020-->
<style>
#demo{
	height:100%;
	position:relative;
	overflow: hidden
}

.green{
	background-color:/**/;
}

	.thumb{
		margin-bottom: 30px;
	}

	.page-top{
		margin-top:85px;
	}

img.zoom{
	width:100%;
	height:200px;
	border-radius:5px;
	object-fit:cover;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
}

.transition{
	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
	-o-transform: scale(1.2);
	transform: scale(1.2);
}

.modal-header{
	border-bottom: none;
}

.modal-title{
	color: #000;
}

.modal-footer{
	display:none;
}
</style>

@endsection

@section('content')

<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Galeri</h2>
					<div class="page_link">
						<a href="{{(url('/'))}}">Home</a>
						<a href="{{url('/galeri')}}">Galeri</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->


	<!--================ Start Recent Event Area =================-->
	<section class="recent_event section_gap_custom">
	
				<div class="container ">
					<div class="row">		
                        @foreach($galeri as $galeris)	
						<div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4">
							<a href="{{URL::asset($galeris->gambar)}}" title="{{$galeris->judul}}" class="fancybox" rel="ligthbox">
								<img  src="{{URL::asset($galeris->gambar)}}" style="width:262px;height:196px;" class="zoom img-fluid "  alt="">
							   
							</a>
						</div>
						@endforeach
				   </div>
                   {{$galeri->links()}}
				</div>
			</div>
		</div>
	</section>

	
	<!--================ End Recent Event Area =================-->

    @endsection

    @section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> <!---2/3/2020-->
    <script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        
        $(".zoom").hover(function(){
            
            $(this).addClass('transition');
        }, function(){
            
            $(this).removeClass('transition');
        });
    });
    </script>
    @endsection