@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/beritadanartikel') }}">Berita dan Artikel</a></li>
              <li class="breadcrumb-item active">Detail Berita</li>
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
            <h3 class="card-title">Detail Berita</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Id berita</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$berita->id_berita}}</p>
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Judul</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$berita->judul}}</p> 
              </div>
              <!-- /.col -->

              <!-- Deskripsi Singkat -->
              <div class="col-md-3">
                <p class="card-title">Deskripsi Singkat</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="deskripsi" id="deskripsi" class="textarea1" placeholder="Masukkan Deskripsi Singkat Berita" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$berita->deskripsi}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Berita -->
              <div class="col-md-3">
                <p class="card-title">Berita</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="berita" id="berita" class="textarea2" placeholder="Masukkan Berita" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$berita->berita}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Gambar -->
              <div class="col-md-3">
                <p class="card-title">Gambar</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9"> 
                <img src="{{URL::asset($berita->gambar)}}" style='width: 50%; vertical-align: middle'; /> 
                <p class="card-text"></p> 
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$berita->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$berita->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $berita->id_berita }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/beritadanartikel/berita')}}/{{ $berita->id_berita }}" method="post" class="d-inline">
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
