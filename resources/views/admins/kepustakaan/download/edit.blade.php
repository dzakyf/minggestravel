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
            <h1>Edit Download</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/kepustakaan/download') }}">Download</a></li>
              <li class="breadcrumb-item active">Edit Download</li>
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
            <h3 class="card-title">Form Edit Download</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/kepustakaan/download') }}/{{$download->id_download}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_download">Id Download</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_download" id="id_download" value="{{$download->id_download}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_file">Nama File</label>
                    <input type="text" class="form-control @error('nama_file') is-invalid @enderror" style="width: 100%;" name="nama_file" id="nama_file" placeholder="Masukkan Nama File" value="{{$download->nama_file}}">
                    <!-- munculin pesan error jika salah -->
                    @error('nama_file')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="file">Upload File (klik browse jika ingin mengganti file)</label>
                        <input type="file" class="mb-2 form-control-file @error('file') is-invalid @enderror" name="file" id="file"> <img src="{{$download->file}}" class="d-flex justify-content-center" style="width: 50%"/>
                        @error('file')
                          <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                  <!-- /.form-group -->
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