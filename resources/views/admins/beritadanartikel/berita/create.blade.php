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
            <h1>Tambah Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/beritadanartikel') }}">Berita dan Artikel</a></li>
              <li class="breadcrumb-item active">Tambah Berita</li>
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
            <h3 class="card-title">Form Tambah Berita</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/beritadanartikel/berita') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <?php
                      $id_berita_last = DB::table('berita')->select('id_berita')->latest('id_berita')->first();
                      if($id_berita_last){
                        $id_berita_lastplus1 = $id_berita_last->id_berita + 1;
                      }else{
                        $id_berita_lastplus1 = 1;
                      }
                    ?>
                    <label for="id_berita">id_berita</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_berita" id="id_berita" value="{{$id_berita_lastplus1}}">
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

                <div class="col-md-12">

                <label for="deskripsi">Deskripsi Singkat Berita</label>
                  <div class="form-group">
                      <textarea name="deskripsi" id="deskripsi" class="textarea form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi Singkat Event" value="{{old('deskripsi')}}"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('deskripsi')}}</textarea>
                      <!-- munculin pesan error jika salah -->
                      @error('deskripsi')
                            <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.col -->

                <div class="col-md-12">
                  <div class="form-group">
                      <label for="berita">Berita</label>
                      <textarea name="berita" id="berita" class="textarea form-control @error('berita') is-invalid @enderror" placeholder="Masukkan Berita" value="{{old('berita')}}"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('berita')}}</textarea>
                      <!-- munculin pesan error jika salah -->
                      @error('berita')
                            <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="gambar" class="d-block">Upload Gambar</label>
                      <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                      @error('gambar')
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