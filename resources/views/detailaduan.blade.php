@extends('layout/main')
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
                    <h2>Detail Aduan</h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="#">Detail aduan</a>
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
               <h1>Detail aduan</h1><br>
               <div class="card card-body">
                    <div class="col-12">
                    <div class="post clearfix">
                    <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{URL::asset('extdinkes/img/usericon.jpg')}}" alt="">
                        <span class="username">
                          <a href="#">{{$layananaduan->judul}}</a>
                        </span>
                        <span class="description">{{$layananaduan->nama}} - {{date('d M Y | h:i', strtotime($layananaduan->created_at))}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p class="col-lg-12 crop-text-3">
                        <?php echo $layananaduan->pesan ?>
                      </p>
                    </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                           <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{URL::asset('extdinkes/img/usericon.jpg')}}" alt="">
                        <span class="username">
                          <a href="#">Re: {{$layananaduan->topik}}</a>
                        </span>
                        <span class="description">Administrator - {{date('d M Y | h:i', strtotime($layananaduan->updated_at))}}</span>
                      </div>
                      <!-- /.user-block -->
                      <p class="col-lg-12">
                        <?php echo $layananaduan->jawaban ?>
                      </p>
                    </div>
                    </div> 


                        </div>
                    </div>
                    </div>
                    </div>
                </div>
        </div>
    </section>

    <!--================Contact Area =================-->
    @endsection
    