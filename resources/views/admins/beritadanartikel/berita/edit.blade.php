@extends('layout.admin')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('classsidebarberitadanartikel', 'active')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/beritadanartikel') }}">Berita dan Artikel</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
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
            <h3 class="card-title">Form Edit Berita</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/beritadanartikel/berita') }}/{{$berita->id_berita}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_berita">id_berita</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_berita" id="id_berita" value="{{$berita->id_berita}}">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" style="width: 100%;" name="judul" id="judul" placeholder="Masukkan Judul" value="{{$berita->judul}}">
                    <!-- munculin pesan error jika salah -->
                    @error('judul')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-12">
                  <div class="form-group">
                      <label for="deskripsi">Deskripsi Singkat</label>
                      <textarea name="deskripsi" id="deskripsi" class="textarea form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi Singkat Berita" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$berita->deskripsi}}
                      </textarea>
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
                      <textarea name="berita" id="berita" class="textarea form-control @error('berita') is-invalid @enderror" placeholder="Masukkan Berita Event" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$berita->berita}}
                      </textarea>
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
                      <label for="gambar">Upload Gambar (klik browse jika ingin mengganti gambar)</label>
                        <input type="file" class="mb-2 form-control-file @error('gambar') is-invalid @enderror" name="gambar" id="gambar"> <img src="{{$berita->gambar}}" class="d-flex justify-content-center" style="width: 50%"/>
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
    <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
  @endsection