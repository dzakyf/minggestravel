@extends('layout.admin')

@section('css') 
@endsection

@section('classsidebarlayananaduan', 'active')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Layanan Aduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/layananaduan') }}">Layanan Aduan</a></li>
              <li class="breadcrumb-item active">Detail Layanan Aduan</li>
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
            <h3 class="card-title">Detail Layanan Aduan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Nama</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->nama}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Email</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->email}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">No. Telepon</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->telepon}}</p> 
              </div>
              <!-- /.col -->

              <!-- Alamat -->
              <div class="col-md-3">
                <p class="card-title">Alamat</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea disabled name="alamat" id="alamat" class="textarea1" placeholder="Masukkan alamat" value=""
                            style="width: 100%; color: black; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$layananaduan->alamat}}</textarea>
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Topik</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->pesan}}</p> 
              </div>
              <!-- /.col -->

              <!-- Pesan -->
              <div class="col-md-3">
                <p class="card-title">Pesan</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-12">
                <textarea disabled name="pesan" id="pesan" class="textarea2" placeholder="Masukkan Pesan" value=""
                            style="width: 100%; color: black; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$layananaduan->pesan}}</textarea>
              </div>
              <!-- /.col -->

              <div class="col-md-3">
              <p class="card-title">Jawaban</p><p class="text-right">:</p>  
              </div>
              <div class="col-md-12">
                <form method="post" action="{{ url('/admin/layananaduan') }}/{{$layananaduan->id_layananaduan}}" >     
                @method('patch')           
                @csrf
                <?php 
                  $disabled='';
                  if($layananaduan->status == 'on')
                  $disabled='disabled';
                ?>
                  <div class="form-group">
                    <textarea <?=$disabled?> name="jawaban" id="jawaban" class="textarea3 form-control @error('jawaban') is-invalid @enderror" placeholder="Masukkan jawaban" 
                            style="width: 100%; color: black; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$layananaduan->jawaban}}</textarea>
                    <!-- munculin pesan error jika salah -->
                    @error('jawaban')
                      <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                  </div>
                  <!-- /.form group -->
                  @if($layananaduan->status == 'off')
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Balas">
                  </div>
                  <!-- /.form-group -->
                  @else
                  <div class="form-group">
                    <a href="{{ $layananaduan->id_layananaduan }}/edit" class="btn btn-primary">Edit</a>
                  </div>
                  @endif
                </form>
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$layananaduan->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <form action="{{ url('/admin/layananaduan')}}/{{ $layananaduan->id_layananaduan }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              </div>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
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
