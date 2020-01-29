@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('profile-menu-open', 'menu-open')
@section('classsidebarprofile', 'active')
@section('classsidebarkompetensisdm', 'active')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kompetensi SDM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/profile') }}">Kompetensi SDM dan Artikel</a></li>
              <li class="breadcrumb-item active">Edit Kompetensi SDM</li>
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
            <h3 class="card-title">Form Edit Kompetensi SDM</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/profile/kompetensisdm') }}/{{$kompetensi_sdm->id_kompetensi_sdm}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="judul">Judul artikel</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" style="width: 100%;" name="judul" id="judul" placeholder="Masukkan Judul" value="{{$kompetensi_sdm->judul}}">
                    <!-- munculin pesan error jika salah -->
                    @error('judul')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
               
                  <!-- /.form-group -->
                </div>

               <div class="col-md-12">
                  <div class="form-group">
                      <label for="kompetensi_sdm">Kompetensi SDM</label>
                      <textarea name="kompetensi_sdm" id="kompetensi_sdm" class="textarea form-control @error('kompetensi_sdm') is-invalid @enderror" placeholder="Masukkan Kompetensi SDM Event" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$kompetensi_sdm->kompetensi_sdm}}
                      </textarea>
                      <!-- munculin pesan error jika salah -->
                      @error('kompetensi_sdm')
                            <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.col -->
                
                
                
                <div class="col-12 text-center">
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
          </form>
          <!-- /form -->
        </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @section('script')
    <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
  @endsection