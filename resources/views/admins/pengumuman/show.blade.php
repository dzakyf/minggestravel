@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('classsidebarpengumuman', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/pengumuman') }}">Pengumuman</a></li>
              <li class="breadcrumb-item active">Detail Pengumuman</li>
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
            <h3 class="card-title">Detail Pengumuman</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Id Pengumuman</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$pengumuman->id_pengumuman}}</p>
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Judul</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$pengumuman->judul}}</p> 
              </div>
              <!-- /.col -->

              <!-- Pengumuman -->
              <div class="col-md-3">
                <p class="card-title">Isi Pengumuman</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="pengumuman" id="pengumuman" class="textarea1" placeholder="Masukkan pengumuman" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$pengumuman->pengumuman}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Gambar -->
              <div class="col-md-3">
                <p class="card-title">Gambar</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->


              <div class="col-md-9"> 
                  @if($pengumuman->gambar)
                    <img src="{{URL::asset($pengumuman->gambar)}}" style='width: 50%; vertical-align: middle'; /> 
                    <p class="card-text"></p> 
                  @endif
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$pengumuman->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$pengumuman->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $pengumuman->id_pengumuman }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/pengumuman')}}/{{ $pengumuman->id_pengumuman }}" method="post" class="d-inline">
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
