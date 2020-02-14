@extends('layout.main')
@section('css')
<link rel="stylesheet" href="{{URL::asset('extadmin/dist/css/adminlte.css')}}">
@endsection
@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Daftar aduan</h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="#">Daftar aduan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="card contact_area p_120">
        <div class="container ">
           <div class="col-12">
               <h1>Daftar aduan</h1><br>
                  <div class="col-12">
                    @foreach($layananaduan as $layananaduans)
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{URL::asset('extdinkes/img/usericon.jpg')}}" alt="">
                        <span class="username">
                          <a href="{{('/layananaduan/detail')}}/{{$layananaduans->id_layananaduan}}">{{$layananaduans->topik}}</a>
                        </span>
                        <span class="description">{{$layananaduans->nama}} - {{date('d M Y | h:i', strtotime($layananaduans->created_at))}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p class="col-lg-12 crop-text-3">
                        <?php echo "$layananaduans->pesan" ?>
                      </p>
                    </div>
                    @endforeach
                  </div>    
                  <div class="row text-center mt-2">
				    {{$layananaduan->links()}}
			      </div>       
            </div>
        </div>
    </section>

    <!--================Contact Area =================-->

@endsection
@section('js')
@endsection