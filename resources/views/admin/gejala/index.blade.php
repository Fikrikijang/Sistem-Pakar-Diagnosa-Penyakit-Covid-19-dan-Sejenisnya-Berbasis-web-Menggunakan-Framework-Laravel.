@extends('template_backend.header')
@section('style')
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Gejala</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Data Gejala</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-12">

				<div class="card">
					<div class="card-header">
					  <h3 class="card-title">Daftar Data Penyakit</h3>
					</div>
					@if (session('status'))
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Success!</strong> {{ session('status') }}
						</div>
            		@endif
					<!-- /.card-header -->
					<div class="card-body">
					  <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gejala</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($gejala as $gejala)
                  <tr>
                    <td><input type="checkbox" name="gejala[]" value="{{ $gejala->id }}"></td>
                    <td>
                      <span class="{{ $gejala->id }}">{{ $gejala->name }}</span>
                      <form class="{{ $gejala->id }}" style="display: none" method="post" action="{{ route('gejala.update', $gejala->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="input-group col-md-12">
                              <input type="text" name="gejala" class="form-control" value="{{ $gejala->name }}">
                              <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-pencil-alt"></i></button>
                                </span>
                            </div>
                      </form>
                    </td>
                      <td>
                        <button class="btn btn-primary btn-sm" onclick="$('.{{ $gejala->id }}').toggle();"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="$('form[name={{ $gejala->id }}]').submit();"><i class="fa fa-trash"></i></button>
                        <form name="{{ $gejala->id }}" method="post" action="{{ route('gejala.destroy', $gejala->id) }}">
                          {{ csrf_field() }}
                          {{ method_field('delete') }}
                        </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
					  </table>
					</div>
					<!-- /.card-body -->
				</div>

			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal Tambah -->
<div class="modal fade" id="addGejala">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Tambah Gejala Baru</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <form method="post" action="{{ route('gejala.store') }}">
        {{ csrf_field() }}
        <div class="col-md-12">
          <div class="form-group">
            <label>Deskripsikan gejala penyakit dengan kalimat yang singkat...</label>
            <div class="input-group">
              <input type="text" name="gejala" class="form-control">
              <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
                </span>
            </div>
          </div>
        </div>
		  </form>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('script')
<!-- SweetAlert2 -->
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "info": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>	
{{-- <script>
  $(function () {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
      $('.swalDefaultInfo').click(function () {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function () {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function () {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function () {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
  });
</script> --}}
<script type="text/javascript">
  $(document).ready(function() {
      $('.table').DataTable();
  });

    $(document).ready(function() {
        $('.dataTables_filter input').after('<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addGejala" style="margin-left: 20px"><i class="fa fa-fw fa-plus"></i> Gejala </button>');
    });

</script>
@endsection
