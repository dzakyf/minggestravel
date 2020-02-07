@extends('layout.admin')

@section('css')
@endsection

@section('classsidebarbanner', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Banner Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/banner') }}">Banner Landing Page</a></li>
              <li class="breadcrumb-item active">Tambah Banner Landing Page</li>
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
            <h3 class="card-title">Form Tambah Banner Landing Page</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/banner') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">Nama Banner</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" style="width: 100%;" name="nama" id="nama" placeholder="Masukkan nama banner" value="{{old('nama')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('nama')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="banner" class="d-block">Upload Banner</label>
                      <input type="file" class="form-control-file @error('banner') is-invalid @enderror" name="banner" id="banner">
                      @error('banner')
                        <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
               
                <div class="col-12 text-center">
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Tambah">
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
  @endsection

  @section('script')
  @endsection