@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('classsidebarberitadanartikel', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/beritadanartikel') }}">Artikel dan Artikel</a></li>
              <li class="breadcrumb-item active">Detail Artikel</li>
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
            <h3 class="card-title">Detail Artikel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Id Artikel</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$artikel->id_artikel}}</p>
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Judul</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$artikel->judul}}</p> 
              </div>
              <!-- /.col -->

              <!-- Deskripsi Singkat -->
              <div class="col-md-3">
                <p class="card-title">Deskripsi Singkat</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="deskripsi" id="deskripsi" class="textarea1" placeholder="Masukkan Deskripsi Singkat artikel" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$artikel->deskripsi}}</textarea>
              </div>
              <!-- /.col -->

              <!-- artikel -->
              <div class="col-md-3">
                <p class="card-title">Artikel</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="artikel" id="artikel" class="textarea2" placeholder="Masukkan artikel" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$artikel->artikel}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Gambar -->
              <div class="col-md-3">
                <p class="card-title">Gambar</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9"> 
                <img src="{{URL::asset($artikel->gambar)}}" style='width: 50%; vertical-align: middle'; /> 
                <p class="card-text"></p> 
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$artikel->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$artikel->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $artikel->id_artikel }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/beritadanartikel/artikel')}}/{{ $artikel->id_artikel }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
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
