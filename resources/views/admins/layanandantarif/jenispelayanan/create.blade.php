@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('classsidebarlayanandantarif', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Event</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/layanandantarif') }}">Layanan dan Tarif</a></li>
              <li class="breadcrumb-item active">Tambah Jenis Pelayanan</li>
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
            <h3 class="card-title">Form Tambah Jenis Pelayanan</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/layanandantarif/jenispelayanan') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <?php
                      $id_pelayanan_last = DB::table('jenis_pelayanan')->select('id_pelayanan')->latest('id_pelayanan')->first();
                      if($id_pelayanan_last){
                        $id_pelayanan_lastplus1 = $id_pelayanan_last->id_pelayanan + 1;
                      }else{
                        $id_pelayanan_lastplus1 = 1;
                      }
                    ?>
                    <label for="id_pelayanan">Id Jenis Pelayanan</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_pelayanan" id="id_pelayanan" value="{{$id_pelayanan_lastplus1}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama">Jenis Pelayanan</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" style="width: 100%;" name="nama" id="nama" placeholder="Masukkan Jenis Pelayanan" value="{{old('nama')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('nama')
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
    <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
  @endsection