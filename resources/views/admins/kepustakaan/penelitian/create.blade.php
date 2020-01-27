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
            <h1>Tambah Penelitian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/kepustakaan/penelitian') }}">Penelitian</a></li>
              <li class="breadcrumb-item active">Tambah Penelitian</li>
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
            <h3 class="card-title">Form Tambah Penelitian</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/kepustakaan/penelitian') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <?php
                      $id_penelitian_last = DB::table('penelitian')->select('id_penelitian')->latest('id_penelitian')->first();
                      if($id_penelitian_last){
                        $id_penelitian_lastplus1 = $id_penelitian_last->id_penelitian + 1;
                      }else{
                        $id_penelitian_lastplus1 = 1;
                      }
                    ?>
                    <label for="id_penelitian">Id Penelitian</label>
                    <input type="text" class="form-control" style="width: 100%;" disabled="disabled" name="id_penelitian" id="id_penelitian" value="{{$id_penelitian_lastplus1}}">
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
                    <label for="peneliti">peneliti</label>
                    <input type="text" class="form-control @error('peneliti') is-invalid @enderror" style="width: 100%;" name="peneliti" id="peneliti" placeholder="Masukkan Peneliti" value="{{old('peneliti')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('peneliti')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Penelitian</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control @error('tanggal') is-invalid @enderror" style="width: 50%;" name="tanggal" id="datemask" placeholder="Masukkan Tanggal Penelitian" value="{{old('tanggal')}}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                        <!-- /.input group -->
                        <!-- munculin pesan error jika salah -->
                        @error('tanggal')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.col -->

                <div class="col-md-12">
                  <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" class="textarea form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan Deskripsi" value="{{old('deskripsi')}}"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('deskripsi')}}</textarea>
                      <!-- munculin pesan error jika salah -->
                      @error('deskripsi')
                            <div class="invalid-feedback"> {{ $message }} </div>
                      @enderror
                  </div>
                  <!-- /.form group -->
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

    <!-- InputMask -->
    <script src="{{URL::asset('extadmin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{URL::asset('extadmin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script>
        $(function () {
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        })
    </script>
  @endsection