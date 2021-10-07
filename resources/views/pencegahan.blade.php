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

  <div class="site-section">
    <div class="container">
      <div class="row mb-5 text-black">
        <div class="col-lg-6 mx-auto text-center">
          <span class="subheading">Apa yang kamu butuhkan</span>
          <h2 class="mb-4 section-heading">Cara Melindungi Diri Sendiri dan Keluarga</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="row mt-5 pt-5">
            <div class="col-lg-6 do ">
              <h3>Anda seharusnya melakukan</h3>
              <ul class="list-unstyled check">
                <li>Tetap di rumah</li>
                <li>Pakai masker</li>
                <li>Gunakan Pembersih</li>
                <li>Desinfeksi rumah Anda</li>
                <li>Cuci tangan</li>
                <li>Sering mengasingkan diri</li>
              </ul>
            </div>
            <div class="col-lg-6 dont ">
              <h3>Anda harus menghindari</h3>
              <ul class="list-unstyled cross">
                <li>Hindari orang yang terinfeksi</li>
                <li>Hindari binatang</li>
                <li>Hindari berjabat tangan</li>
                <li>Hindari permukaan yang terinfeksi</li>
                <li>Jangan sentuh wajahmu</li>
                <li>Hindari tetesan</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="{{url('assets/img/protect.png')}}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row text-black mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Lebih Banyak Pencegahan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="media-v1 bg-1">
            <div class="icon-wrap">
              <span class="flaticon-stay-at-home"></span>
            </div>
            <div class="body text-dark">
                <h3>Berdiam diri atau tinggal di Rumah</h3>
                <p>perintah untuk membatasi pergerakan masyarakat untuk menekan atau memitigasi epidemi.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="media-v1 bg-1">
            <div class="icon-wrap">
              <span class="flaticon-patient"></span>
            </div>
            <div class="body text-black">
                <h3>Memakai Masker</h3>
                <p>perintah untuk menggunakan masker ketika keluar rumah.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="media-v1 bg-1">
            <div class="icon-wrap">
              <span class="flaticon-social-distancing"></span>
            </div>
            <div class="body text-black">
                <h3>Jaga Jarak Sosial</h3>
                <p>perintah untuk menjaga jarak ketika berkumpul atau berkerumun.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="media-v1 bg-1">
            <div class="icon-wrap">
              <span class="flaticon-hand-washing"></span>
            </div>
            <div class="body text-black">
                <h3>Mencuci Tangan</h3>
                <p>perintah untuk menjaga kebersihan dengan mencuci tangan dengan hand sanitizer.</p>
            </div>
          </div>
        </div>



      </div>
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
