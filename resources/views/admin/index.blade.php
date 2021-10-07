@extends('template_backend.header')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
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
        <i>
          <div class="text-center">
            <h3>Selamat Datang di Aplikasi, 
              @if( Auth::user()->tipe == 1)
                  <b>Admin</b> 
              @else
                  <b>Staf</b> 
              @endif
            .</h3>
          </div>
        </i> 
      <div class="row mt-3">
        @foreach ($indonesia as $id)
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $id['positif'] }}</h3>

              <p>Positif</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $id['sembuh'] }}<sup style="font-size: 20px"></sup></h3>

              <p>Sembuh</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $id['meninggal'] }}</h3>

              <p>Meninggal</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- /.row -->
      

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


@endsection
