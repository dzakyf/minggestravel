@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('kontakdanpesan-menu-open', 'menu-open')
@section('classsidebarkontakdanpesan', 'active')
@section('classsidebarkontak', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/kontakdanpesan/kontak') }}">Kontak</a></li>
              <li class="breadcrumb-item active">Tambah Kontak</li>
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
            <h3 class="card-title">Form Tambah Kontak</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/kontakdanpesan/kontak') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" style="width: 100%;" name="alamat" id="alamat" placeholder="Masukkan Alamat" value="{{old('alamat')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('alamat')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="telepon" class="form-control @error('telepon') is-invalid @enderror" style="width: 100%;" name="telepon" id="telepon" placeholder="Masukkan Telepon" value="{{old('telepon')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('telepon')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="fax" class="form-control @error('fax') is-invalid @enderror" style="width: 100%;" name="fax" id="fax" placeholder="Masukkan Fax" value="{{old('fax')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('fax')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" style="width: 100%;" name="email" id="email" placeholder="Masukkan Email" value="{{old('email')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('email')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-12">
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