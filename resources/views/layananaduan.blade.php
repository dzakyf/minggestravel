@extends('layout/main')

@section('css')
<link rel="stylesheet" href="{{URL::asset('extadmin/dist/css/adminlte.css')}}">
@endsection
@section('classnavitemlayananaduan', 'active')
@section('content')
<!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Layanan aduan</h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="#">Layanan aduan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="card contact_area p_120">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_info">
                       <form class="row contact_form" action="{{url('/layananaduan')}}" method="post" id="contactForm" novalidate="novalidate">
                       @csrf
                        <div class="col-md-10">
                            <h3>Form Layanan Pengaduan</h3> 
                            @if (session('status'))
                                <div class="col-12 mb-2 alert alert-success d-block">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama" maxlength="30" value="{{old('nama')}}">
                                @error('nama')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{old('email')}}">
                                @error('email')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="telepon" rows="1" placeholder="Masukkan nomor telepon" value="{{old('telepon')}}"> 
                                 @error('telepon')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                 <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="1" col="50" placeholder="Masukkan alamat">{{old('alamat')}}</textarea>
                                 @error('alamat')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control @error('topik') is-invalid @enderror" name="topik" id="topik" rows="1" placeholder="Masukkan topik" value="{{old('topik')}}">
                                 @error('topik')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                 <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="pesan" rows="1" placeholder="Masukkan kritik dan/atau saran">{{old('pesan')}}</textarea>
                                 @error('pesan')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <div class="captcha">
                                    <span>{!! captcha_img('flat') !!}</span>
                                    <button type="button" class="btn btn-success" id="refresh"><i class="fa fa-refresh"></i></button>
                                </div><br>

                                <div class="form-group">
                                    <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" placeholder="Masukkan kode captcha" name="captcha">
                                    @error('captcha')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 text-right">
                            <button type="submit" value="submit" class="btn btn-success">Kirim</button>
                        </div><br>
                    </form> 
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="layananaduan">

                    <form class="row contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12">
                            <h3>Daftar Aduan </h3> 
                            <div class="row">
                                <div class="col-12">
                                    @foreach($layananaduan->slice(0,3) as $layananaduan)
                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="{{URL::asset('extdinkes/img/usericon.jpg')}}" alt="">
                                            <span class="username">
                                            <a href="{{url('/layananaduan/detail')}}/{{$layananaduan->id_layananaduan}}">{{$layananaduan->topik}}</a>
                                            </span>
                                            <span class="description">{{$layananaduan->nama}} - {{date('d M Y | h:i', strtotime($layananaduan->created_at))}}</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p class="col-lg-12 crop-text-3">
                                            <?php echo $layananaduan->topik ?>
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                             </div>
                        </div>
                        <div class="col-md-12 text-right">
                        </div><br>
                    </form>                
                    <a href="{{url('/layananaduan/daftaraduan')}}" class="btn btn-primary">Lihat Lainnya</a>
                  </div>
                  <!-- layananaduan -->
						
                </div>
            </div>
        </div>
    </section>

    <!--================Contact Area =================-->

@endsection

@section('js')
<script type="text/javascript">
$('#refresh').click(function(){
  $.ajax({
     type:'GET',
     url:'refreshcaptcha',
     success:function(data){
        $(".captcha span").html(data.captcha);
     }
  });
});
</script>
@endsection