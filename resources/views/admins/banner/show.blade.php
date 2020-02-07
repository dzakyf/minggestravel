@extends('layout.admin')

@section('css')
@endsection

@section('classsidebarbanner', 'active')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Banner Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/admin/banner') }}">Banner Landing Page</a></li>
              <li class="breadcrumb-item active">Detail Banner Landing Page</li>
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
            <h3 class="card-title">Detail Banner Landing Page</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Id banner</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$banner->id_banner}}</p>
              </div>
              <!-- /.col -->

              <!-- event id : -->
              <div class="col-md-3">
              <p class="card-title">Nama Banner</p> <p class="text-right">:</p> 
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$banner->nama}}</p>
              </div>
              <!-- /.col -->

              <!-- Banner -->
              <div class="col-md-3">
                <p class="card-title">Banner</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9"> 
                <img src="{{URL::asset($banner->banner)}}" style='width: 50%; vertical-align: middle'; /> 
                <p class="card-text"></p> 
              </div>
              <!-- /.col -->

              <!-- Created at -->
              <div class="col-md-3">
                <p class="card-title">created At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$banner->created_at}}</p> 
              </div>
              <!-- /.col -->

              <!-- Updated at -->
              <div class="col-md-3">
                <p class="card-title">Updated At</p><p class="text-right">:</p>  
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <p class="card-text">{{$banner->updated_at}}</p> 
              </div>
              <!-- /.col -->

              <div class="col mb-2 text-center">
                <a href="{{ $banner->id_banner }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ url('/admin/banner')}}/{{ $banner->id_banner }}" method="post" class="d-inline">
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
