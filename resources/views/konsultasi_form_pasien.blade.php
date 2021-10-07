@extends('layouts.header')

@section('content')

  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          <span class="d-block subheading"></span>
          <h1 class="heading mb-3">KONSULTASI</h1>
          <p class="mb-5">Silahkan isi data diri anda dengan benar!</p>
        </div>
        
      </div>
    </div>
  </div>


  <!-- MAIN -->

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-header bg-success text-dark">Form Data Pasien</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('storePasien') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama :</label>
                                    <input type="text" name="nama" class="form-control" required="required" placeholder="Masukkan nama pasien ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telepon :</label>
                                    <input type="number" name="telp" class="form-control" required="required" placeholder="Masukkan nomor telepon ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Masukkan alamat email ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alamat :</label>
                                    <textarea class="form-control" name="lokasi" required="required" placeholder="Masukkan alamat..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p><button type="submit" class="btn btn-primary pull-right">Mulai Konsultasi <i class="fa fa-fw fa-sign-in" aria-hidden="true"></i></button></p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix" style="margin-bottom: 20px;"></div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>

@endsection