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
            <h1>Edit Perpustakaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/kepustakaan/perpustakaan') }}">Perpustakaan</a></li>
              <li class="breadcrumb-item active">Edit Perpustakaan</li>
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
            <h3 class="card-title">Form Edit Perpustakaan</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/kepustakaan/perpustakaan') }}/{{$perpustakaan->id_perpustakaan}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_perpustakaan">Id Perpustakaan</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_perpustakaan" id="id_perpustakaan" value="{{$perpustakaan->id_perpustakaan}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" style="width: 100%;" name="judul" id="judul" placeholder="Masukkan Judul" value="{{$perpustakaan->judul}}">
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
                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" style="width: 100%;" name="pengarang" id="pengarang" placeholder="Masukkan pengarang" value="{{$perpustakaan->pengarang}}">
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
                    <input type="text" class="form-control @error('edisi') is-invalid @enderror" style="width: 100%;" name="edisi" id="edisi" placeholder="Masukkan Edisi" value="{{$perpustakaan->edisi}}">
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
                    <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" style="width: 100%;" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="{{$perpustakaan->tahun_terbit}}">
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
                    <input type="text" class="form-control @error('jumlah_halaman') is-invalid @enderror" style="width: 100%;" name="jumlah_halaman" id="jumlah_halaman" placeholder="Masukkan Jumlah Halaman" value="{{$perpustakaan->jumlah_halaman}}">
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
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" style="width: 100%;" name="kategori" id="kategori" placeholder="Masukkan Kategori" value="{{$perpustakaan->kategori}}">
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
                      <textarea name="resensi" id="resensi" class="textarea form-control @error('resensi') is-invalid @enderror" placeholder="Masukkan Resensi" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$perpustakaan->resensi}}
                      </textarea>
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
                      <label for="cover">Upload Cover (klik browse jika ingin mengganti cover)</label>
                        <input type="file" class="mb-2 form-control-file @error('cover') is-invalid @enderror" name="cover" id="cover"> <img src="{{$perpustakaan->cover}}" class="d-flex justify-content-center" style="width: 50%"/>
                        @error('cover')
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
    <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
  @endsection