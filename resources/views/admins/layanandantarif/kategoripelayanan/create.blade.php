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
            <h1>Tambah Kategori Pelayanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/layanandantarif') }}">Layanan dan Tarif</a></li>
              <li class="breadcrumb-item active">Tambah Kategori Pelayanan</li>
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
            <h3 class="card-title">Form Tambah Kategori Pelayanan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/layanandantarif/kategoripelayanan') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="row">
                

                <?php
                    $query = DB::table('jenis_pelayanan')->get();
                ?>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jenispelayanan">Jenis Pelayanan</label>
                    <select class="form-control @error('jenispelayanan') is-invalid @enderror" id="jenispelayanan" name="jenispelayanan" required>
                        <option value="" disabled selected>Jenis Pelayanan</option>
                        @foreach($query as $key)
                        <option value="{{$key->id_pelayanan}}">{{$key->nama}}</option>
                        @endforeach
                    </select>
                    @error('jenispelayanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                      
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="kategoripelayanan">Kategori Pelayanan</label>
                    <input type="text" class="form-control @error('kategoripelayanan') is-invalid @enderror" style="width: 100%;" name="kategoripelayanan" id="kategoripelayanan" placeholder="Masukkan Kategori Pelayanan" value="{{old('kategoripelayanan')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('kategoripelayanan')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="jasa_sarana">Harga Jasa Sarana (HJS)</label>
                    <input type="text" class="form-control @error('jasa_sarana') is-invalid @enderror" style="width: 100%;" name="jasa_sarana" id="jasa_sarana" placeholder="Masukkan Harga Jasa Sarana" value="{{old('jasa_sarana')}}" onkeyup="sum();">
                    <!-- munculin pesan error jika salah -->
                    @error('jasa_sarana')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="jasa_pelayanan">Harga Jasa Layanan (HJL)</label>
                    <input type="text" class="form-control @error('jasa_pelayanan') is-invalid @enderror" style="width: 100%;" name="jasa_pelayanan" id="jasa_pelayanan" placeholder="Masukkan Harga Jasa Layanan" value="{{old('jasa_pelayanan')}}" onkeyup="sum();">
                    <!-- munculin pesan error jika salah -->
                    @error('jasa_pelayanan')
                            <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="total">Harga Total (HJS + HJL)</label>
                    <input type="text" class="form-control @error('total') is-invalid @enderror" style="width: 100%;" disabled="disabled" name="total" id="total" placeholder="Masukkan Harga Total" value="{{old('total')}}">
                    <!-- munculin pesan error jika salah -->
                    @error('total')
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
  <script>
    function sum() {
          var txtFirstNumberValue = document.getElementById('jasa_sarana').value;
          var txtSecondNumberValue = document.getElementById('jasa_pelayanan').value;
          var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
          if (!isNaN(result)) {
            document.getElementById('total').value = result;
          }
    }
  </script>
  @endsection