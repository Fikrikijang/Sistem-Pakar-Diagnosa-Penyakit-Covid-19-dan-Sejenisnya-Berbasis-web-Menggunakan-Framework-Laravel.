@extends('layouts.header')

@section('content')

  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          <span class="d-block subheading"></span>
          <h1 class="heading mb-3">KONSULTASI</h1>
          <p class="mb-5">Hasil diagnosa penyakit yang anda rasakan!</p>
        </div>
        
      </div>
    </div>
  </div>


  <!-- MAIN -->

  <div class="site-section">
    <div class="container">
        <div class="card">
            <h5 class="card-header bg-success text-dark">Hasil Diagnosa</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label><strong>Data Diagnosa :</strong></label>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">Nama</div>
                                <div class="col-md-9">: {{ $diagnosa->pasien->nama }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">Telepon</div>
                                <div class="col-md-9">: {{ $diagnosa->pasien->telp }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">Email</div>
                                <div class="col-md-9">: {{ $diagnosa->pasien->email }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">Lokasi Pertanian</div>
                                <div class="col-md-9">: {{ $diagnosa->pasien->lokasi }}</div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label><strong>Gejala yang nampak pada diri anda :</strong></label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ol>
                        @foreach ($diagnosa->pasien->gejala as $gejala)
                            <li>{{ $gejala->name }}</li>
                        @endforeach
                        </ol>
                        <hr>    
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label><strong>Hasil Diagnosa :</strong></label>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Kemungkinan besar anda terkena penyakit {{ $diagnosa->penyakit->nama }}.</strong></p>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Persentase :</label>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $diagnosa->persentase }}%</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Definisi :</label>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $diagnosa->penyakit->definis or 'Belum ada penjelasan lengkap mengenai penyakit ini.' }}</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Penyebab :</label>
                                </div>
                                <div class="col-md-9">
                                    <p>{{ $diagnosa->penyakit->penyebab }}</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <a href="{{ url('/') }}" class="btn btn-primary pull-right">Selesai <i class="fa fa-fw fa-sign-out"></i></a>
                                    </p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
  </div>

@endsection