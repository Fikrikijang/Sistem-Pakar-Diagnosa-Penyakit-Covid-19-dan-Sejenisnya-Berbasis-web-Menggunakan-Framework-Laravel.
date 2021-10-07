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
    <div class="row">
        <div class="col-md-12 col-lg-12 list-playlist">
            
                <div class="row">
                    <div class="container">
                        <div class="col-md-11">
                            <div class="row text-black">
                                <div class="col-md-9 mt-3"> 
                                    @foreach($post->tags as $tag)
                                        <h5>{{ $tag->name }} / {{ $post->category->name }}</h5>
                                    @endforeach	
                                </div>
                                <div class="col-md-9 ">
                                    <h2>{{ $post->judul }}</h2>
                                    <div class="">
                                        <h6>
                                            <strong>{{ $post->users->name }}</strong>
                                            {{ $post->created_at }}
                                        </h6>
                                    </div>
                                </div>
                               
                                <div class="col-md-9 ">
                                    <a href="" title="Share on Facebook" target="_blank" class="badge badge-info">
                                        <i class="icon-twitter"></i> Twitter</a>
                                    <a href="" title="Share on Facebook" target="_blank" class="badge badge-primary">
                                        <i class="icon-facebook"></i> Facebook</a>
                                    <a href="" title="Share on Instagram" target="_blank" class="badge badge-danger">
                                        <i class="icon-instagram"></i> Instagram</a>
                                </div>
                            
                                <div class="col-md-9 ">
                                    <div class="row">
                                        <div class="col-md-12 view mt-3">
                                            <img src="{{ asset( $post->gambar ) }}" width="500" height="300" style="display: block; margin: auto;">
                                            <p>{!! $post->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-header text-white" style="background-color: #05056d;">
                                            Artikel Terbaru
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            @foreach ($posts as $result => $hasil)
                                                <a href="{{ route('detail.show', $hasil->id ) }}" class="text-dark"><li class="list-group-item"><i class="icon-newspaper-o"></i> {{ $hasil->judul }}</li></a> 
                                            @endforeach
                                        </ul>
                                      </div>
                                </div>

                            </div>
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
