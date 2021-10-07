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
                <h3 class="card-title">Daftar Data Gejala</h3>
                <div class="text-right">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"> Tambah Data</i>
                  </button>
                </div>
              </div>
              @if (session('status'))
                <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> {{ session('status') }}
                </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode Gejala</th>
                    <th>Keterangan Gejala</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($gejala as $result => $hasil)
                    <tr class="odd">
                        <td>G-{{ $hasil->id }}</td>
                        <td>{{ $hasil->name }}</td>
                        <td>
                            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
                <div class="row">
                  <div class="col-lg-12"></div>
                  <div class="col-lg-12 text-right">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      <ul class="pagination">
                          {{-- {{ $gejala->links() }} --}}
                      </ul>
                    </div> 
                  </div>
                </div>
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
<!-- Modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Gejala</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('gejala.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Deskripsikan gejala penyakit dengan kalimat yang singkat...</label>
            <div class="input-group">
              <input type="text" name="gejala" class="form-control">
              <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
                </span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->