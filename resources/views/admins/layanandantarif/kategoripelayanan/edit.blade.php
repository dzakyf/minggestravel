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
            <h1>Edit Kaegori Pelayanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/beritadanartikel') }}">Layanan dan Tarif</a></li>
              <li class="breadcrumb-item active">Edit Kategori Pelayanan</li>
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
            <h3 class="card-title">Form Kategori Pelayanan</h3>
          </div>
          <!-- /.card-header -->
          <form method="post" action="{{ url('/admin/layanandantarif/kategoripelayanan') }}/{{$query[0]->id_kategori}}" enctype="multipart/form-data">
          @method('patch')
          @csrf
            <div class="card-body">
              <div class="row">

                <?php
                    $jenis_pelayanan = DB::table('jenis_pelayanan')->get();
                ?>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenispelayanan">Jenis Pelayanan</label>
                        <select class="form-control @error('jenispelayanan') is-invalid @enderror" style="width: 100%;" id="jenispelayanan" name="jenispelayanan">
                            <option value="" disabled selected>Jenis Pelayanan</option>
                            @foreach($jenis_pelayanan as $key)
                                @if($key->id_pelayanan == $query[0]->id_pelayanan)
                                    <option value="{{$key->id_pelayanan}}" selected>{{$key->nama}}</option>
                                @else
                                    <option value="{{$key->id_pelayanan}}">{{$key->nama}}</option>
                                @endif
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
                    <input type="text" class="form-control @error('kategoripelayanan') is-invalid @enderror" style="width: 100%;" name="kategoripelayanan" id="kategoripelayanan" placeholder="Masukkan Kategori Pelayanan" value="{{$query[0]->nama}}">
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
                    <label for="jasa_sarana">Harga Jasa Sarana</label>
                    <input type="text" class="form-control @error('jasa_sarana') is-invalid @enderror" style="width: 100%;" name="jasa_sarana" id="jasa_sarana" placeholder="Masukkan Harga Jasa Sarana" value="{{$query[0]->jasa_sarana}}" onkeyup="sum();">
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
                    <label for="jasa_pelayanan">Harga Jasa Pelayanan</label>
                    <input type="text" class="form-control @error('jasa_pelayanan') is-invalid @enderror" style="width: 100%;" name="jasa_pelayanan" id="jasa_pelayanan" placeholder="Masukkan Harga Jasa Pelayanan" value="{{$query[0]->jasa_pelayanan}}" onkeyup="sum();">
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
                    <label for="total">Harga Total</label>
                    <input type="text" class="form-control @error('total') is-invalid @enderror" disabled="disabled" style="width: 100%;" name="total" id="total" placeholder="Masukkan Harga Total" value="{{$query[0]->total}}">
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