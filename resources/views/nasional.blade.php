@extends('layouts.header')
@section('style')
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          <span class="d-block subheading"></span>
          <h1 class="heading mb-3">Data Covid-19 Indonesia</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading text-dark">LAPORAN KASUS CORONA INDONESIA</h2>
            <p>Laporan Jumlah kasus virus corona (covid-19) di indonesia</p>
        </div>
      </div>
      <div class="row"> 
        @foreach ($indonesia as $id)
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $id['positif'] }}</strong>
            <span class="label">POSITIF</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $id['sembuh'] }}</strong>
            <span class="label">SEMBUH</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">{{ $id['meninggal'] }}</strong>
            <span class="label">MENINGGAL</span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading text-dark">Data Table Indonesia</h2>
          <p>Cukup banyak kasus corona terjadi di Indonesia dengan begitu data lengkap dari beberapa provinsi dapat dilihat pada data table dibawah ini:</p>
        </div>
      </div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($provinsi as $p)
            <tr>
                <td>{{ $no++ }}.</td>
                <td>{{ $p['attributes']['Provinsi'] }}</td>
                <td>{{ $p['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $p['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $p['attributes']['Kasus_Meni'] }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>


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

<script type="text/javascript">
  $(document).ready(function() {
      $('.table').DataTable();
  });

  function show(route) {
    $.get(route, function(data) {
      $('#show .modal-body').html(data);
    });
  }

</script>

@endsection
