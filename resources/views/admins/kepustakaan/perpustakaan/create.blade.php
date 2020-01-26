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
            <h1>Tambah Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/kepustakaan/perpustakaan') }}">Perpustakaan</a></li>
              <li class="breadcrumb-item active">Tambah Perpustakaan</li>
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
            <h3 class="card-title">Form Tambah Perpustakaan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/kepustakaan/perpustakaan') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <?php
                      $id_perpustakaan_last = DB::table('perpustakaan')->select('id_perpustakaan')->latest('id_perpustakaan')->first();
                      if($id_perpustakaan_last){
                        $id_perpustakaan_lastplus1 = $id_perpustakaan_last->id_perpustakaan + 1;
                      }else{
                        $id_perpustakaan_lastplus1 = 1;
                      }
                    ?>
                    <label for="id_perpustakaan">Id Perpustakaan</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_perpustakaan" id="id_perpustakaan" value="{{$id_perpustakaan_lastplus1}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" style="width: 100%;" name="judul" id="judul" placeholder="Masukkan Judul" value="{{old('judul')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('judul')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                      
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" style="width: 100%;" name="pengarang" id="pengarang" placeholder="Masukkan Pengarang" value="{{old('pengarang')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('pengarang')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="edisi">Edisi</label>
                    <input type="text" class="form-control @error('edisi') is-invalid @enderror" style="width: 100%;" name="edisi" id="edisi" placeholder="Masukkan Edisi" value="{{old('edisi')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('edisi')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" style="width: 100%;" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="{{old('tahun_terbit')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('tahun_terbit')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jumlah_halaman">Jumlah Halaman</label>
                    <input type="text" class="form-control @error('jumlah_halaman') is-invalid @enderror" style="width: 100%;" name="jumlah_halaman" id="jumlah_halaman" placeholder="Masukkan Jumlah Halaman" value="{{old('jumlah_halaman')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('jumlah_halaman')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" style="width: 100%;" name="kategori" id="kategori" placeholder="Masukkan Kategori" value="{{old('kategori')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('kategori')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-12">
                  <div class="form-group">
                      <label for="resensi">Resensi</label>
                      <textarea name="resensi" id="resensi" class="textarea form-control @error('resensi') is-invalid @enderror" placeholder="Masukkan Resensi" value="{{old('resensi')}}"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('resensi')}}</textarea>
                      <!-- munculin pesan error jika salah -->
                      @error('resensi')
                            <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="cover" class="d-block">Upload Cover</label>
                      <input type="file" class="form-control-file @error('cover') is-invalid @enderror" name="cover" id="cover">
                      @error('cover')
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