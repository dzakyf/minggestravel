@extends('layout.admin')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('profile-menu-open', 'menu-open')
@section('classsidebarprofile', 'active')
@section('classsidebarsejarah', 'active')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sejarah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Sejarah</li>
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
          <a href="{{ url('/admin/profile/sejarah/create') }}">
                <button class="btn btn-primary" type="button">Tambah Sejarah</button>
          </a>
        </div>

        

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sejarah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Sejarah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sejarah as $sejarah)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td><?php echo $sejarah ->sejarah ?></td>
                  <td>
                    <a class="badge badge-info" href="{{url('/admin/profile/sejarah/')}}/{{$sejarah->id_sejarah}}">
                      detail
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Sejarah</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table/
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