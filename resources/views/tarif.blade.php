@extends('layout/main')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL::asset('extadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Tarif</h2>
					<div class="page_link">
						<a href="{{url('/')}}">Beranda</a>
						<a href="{{('/tarif')}}">Tarif</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->


	<!--================ Start Recent Event Area =================-->
	<section class="event_details section_gap">
		<div class="container">
			<div class="row">

				<div class="col-12">
			<div class="card">
			  <div class="card-header">
				<h3 class="card-title">Daftar Tarif Layanan</h3>
			  </div>
			  <!-- /.card-header -->
			  <div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
				  <thead>
				  <tr>
					<th>No.</th>
					<th>Jenis pelayanan</th>
					<th>Kategori pelayanan</th>
					<th>Total</th>
				  </tr>
				  </thead>
				  <tbody>
				  @foreach($query as $query)
				  <tr>
					<th scope="row">{{ $loop->iteration }}</th>
					<td>{{$query->namas}}</td>
					<td>{{$query->nama}}</td>
					<td>{{$query->total}}</td>
				  </tr>
				  @endforeach
				  </tbody>
				  <tfoot>
				  <tr>
					<th>No.</th>
					<th>Jenis pelayanan</th>
					<th>Kategori pelayanan</th>
					<th>Total</th>
				  </tr>
				  </tfoot>
				</table>
			  </div>
			  <!-- /.card-body -->
			</div>
			<!-- /.card -->
		  </div>
			</div>
		</div>
</section>

	<!--================ End Recent Event Area =================-->
@endsection

@section('js')
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
@endsection