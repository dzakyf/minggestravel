@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('profile-menu-open', 'menu-open')
@section('classsidebarprofile', 'active')
@section('classsidebarvisidanmisi', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Visi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/profile/visidanmisi') }}">Visi</a></li>
              <li class="breadcrumb-item active">Detail Visi</li>
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
            <h3 class="card-title">Detail Visi</h3>

           
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">




              <!-- Visi -->
              <div class="col-md-3">
                <p class="card-title">Visi</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea name="visi" id="visi" class="textarea2" placeholder="Masukkan visi" value=""
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$visi->visi}}</textarea>
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$visi->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$visi->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $visi->id_visi }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/profile/visidanmisi/visi')}}/{{ $visi->id_visi }}" method="post" class="d-inline">
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
