@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('classsidebarlayananaduan', 'active')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Layanan Aduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Layanan Aduan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Detail Layanan Aduan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Nama</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->nama}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Email</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->email}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">No. Telepon</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->telepon}}</p> 
              </div>
              <!-- /.col -->

              <!-- Alamat -->
              <div class="col-md-3">
                <p class="card-title">Alamat</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="alamat" id="alamat" class="textarea2" placeholder="Masukkan alamat" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$layananaduan->alamat}}</textarea>
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Topik</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->pesan}}</p> 
              </div>
              <!-- /.col -->

              <!-- Pesan -->
              <div class="col-md-3">
                <p class="card-title">Pesan</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="pesan" id="pesan" class="textarea2" placeholder="Masukkan Pesan" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$layananaduan->pesan}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $layananaduan->id_layananaduan }}/edit" class="btn btn-primary">Edit</a>
              </div>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

  @section('script')
  <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea1').summernote("disable")
        $('.textarea2').summernote("disable")
    })
  </script>
  @endsection
