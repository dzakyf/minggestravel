@extends('layout.admin')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Struktur Organisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('/admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Struktur Organisasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- menampilkan pesan -->
          @if (session('status'))
            <div class="col-12 mb-2 alert alert-success d-block">
                {{ session('status') }}
            </div>
          @endif

        <div class="col mb-2 text-right">
          <a href="{{ url('/admin/profile/strukturorganisasi/create') }}">
                <button class="btn btn-primary" type="button">Tambah Struktur Organisasi</button>
          </a>
        </div>

        

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Struktur Organisasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($struktur_organisasi as $struktur_organisasi)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{$struktur_organisasi ->deskripsi}}</td>
                  <td>
                    <a class="badge badge-info" href="{{url('/admin/profile/strukturorganisasi/')}}/{{$struktur_organisasi->id_struktur_organisasi}}">
                      detail
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Deskripsi</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('script')
<!-- DataTables -->
<script src="{{URL::asset('extadmin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('extadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
  $(function () {
    $("#example3").DataTable();
    $('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection