@extends('layouts.header')

@section('content')

  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center mx-auto">
          <span class="d-block subheading"></span>
          <h1 class="heading mb-3">KONSULTASI</h1>
          <p class="mb-5">Silahkan pilih gejala yang sedang anda rasakan!</p>
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
                <h5 class="card-header bg-success text-dark">Form Data Gejala</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('diagnosa') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="pasien_id" value="{{ $pasien_id }}">
                        <div class="form-group">
                            <label>Gejala-gejala yang nampak pada tanaman padi anda :</label>
                            <div class="col-md-12">
                                @foreach ($gejala as $gejala)
                                    <div class="checkbox">
                                        <label><input class="check" type="checkbox" name="gejala[]" value="{{ $gejala->id }}">{{ $gejala->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Cek Hasil Diagnonsa <i class="fa fa-fw fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>

@endsection