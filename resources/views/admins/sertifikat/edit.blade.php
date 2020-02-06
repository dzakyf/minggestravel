@extends('layout.admin')

@section('css')
@endsection

@section('classsidebarsertifikat', 'active')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Sertifikat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/sertifikat') }}">Sertifikat</a></li>
              <li class="breadcrumb-item active">Edit Sertifikat</li>
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
            <h3 class="card-title">Form Edit Sertifikat</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/sertifikat') }}/{{$sertifikat->id_sertifikat}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_sertifikat">Id Sertifikat</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_sertifikat" id="id_sertifikat" value="{{$sertifikat->id_sertifikat}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">Nama Sertifikat</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" style="width: 100%;" name="nama" id="nama" placeholder="Masukkan nama sertifikat" value="{{$sertifikat->nama}}">
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
                      <label for="gambar">Upload Gambar (klik browse jika ingin mengganti gambar)</label>
                        <input type="file" class="mb-2 form-control-file @error('gambar') is-invalid @enderror" name="gambar" id="gambar"> <img src="{{$sertifikat->gambar}}" class="d-flex justify-content-center" style="width: 50%"/>
                        @error('gambar')
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
  @endsection

  @section('script')
  @endsection