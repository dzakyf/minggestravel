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
            <h1>Detail Kategori Pelayanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/layanandantarif') }}">Layanan dan Tarif</a></li>
              <li class="breadcrumb-item active">Detail Kategori Pelayanan</li>
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
            <h3 class="card-title">Detail Jenis Pelayanan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            
              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Id kategori pelayanan</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->id_kategori}}</p>
              </div>
              <!-- /.col -->
             
              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Kategori Pelayanan</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->nama}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Jenis Pelayanan</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->namas}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Harga Jasa Sarana</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->jasa_sarana}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Harga Jasa Pelayanan</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->jasa_pelayanan}}</p> 
              </div>
              <!-- /.col -->

              <!-- nama_event -->
              <div class="col-md-3">
                <p class="card-title">Harga Total</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->total}}</p> 
              </div>
              <!-- /.col -->
              
              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$query[0]->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $query[0]->id_kategori }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/layanandantarif/kategoripelayanan')}}/{{ $query[0]->id_kategori }}" method="post" class="d-inline">
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
    <script src="{{URL::asset('extadmin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
    $(function () {
        // Summernote
        $('.textarea1').summernote("disable")
        $('.textarea2').summernote("disable")
    })
    </script>
  @endsection
