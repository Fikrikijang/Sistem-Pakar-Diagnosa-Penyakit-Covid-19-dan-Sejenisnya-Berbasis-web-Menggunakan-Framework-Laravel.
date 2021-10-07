@extends('layouts.header')

@section('content')


  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto text-center text-lg-left">
          <span class="d-block subheading"></span>
          <h1 class="heading mb-3 text-danger">Stay Safe. Stay Home.</h1>
          <p class="mb-5">Mari sama-sama bangun kepedulian, tetap stay at home and stay healthy.Saat ini Bumi sedang dirundung duka, korban-korban berjatuhan, perekonomian masyarakat melemah, tenaga medis berjibaku menjadi garda terdepan akibat pandemi Covid 19 yang tak kunjung usai Menjadi manusia artinya mengerti bahwa dirinya adalah manusia, mengerti tentang manusia lain dan bisa memanusiakan manusia. We are human BEINGS,not DOINGS! Mari sama-sama bangun kepedulian, tetap stay at home and stay healthy.!</p>
          <p class="mb-4"><a href="#kasus" class="btn btn-primary">Next Read</a></p>



        </div>
        <div class="col-lg-6">
          <figure class="illustration">
            <img src="{{url('assets/img/illustration.png')}}" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </div>


  <!-- MAIN -->

  <div id="kasus" class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">STATISTIK CORONAVIRUS</h2>
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




  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-protection"></span>
          </div>
          <div>
            <h3>Perlindungan</h3>
            <span class="d-block">Makan-makan sehat dan rajin berolahraga.</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-patient"></span>
          </div>
          <div>
            <h3>Pencegahan</h3>
            <span class="d-block">Memakai masker ketika keluar.</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-hand-sanitizer"></span>
          </div>
          <div>
            <h3>Perawatan</h3>
            <span class="d-block">Mencuci tangan dengan hand sanitizer.</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-virus"></span>
          </div>
          <div>
            <h3>Gejala</h3>
            <span class="d-block">Jika merasa kurang sehat, segera datangi rumah sakit terdekat.</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Berita Terbaru</h2>
        </div>
      </div>

      <div class="row">
        @foreach($posts as $artikel)
        <div class="col-lg-4">
          <div class="post-entry">
            <a href="#" class="thumb">
              <span class="date">{{$artikel->created_at->diffForHumans()}}</span>
              <img src="{{ asset( $artikel->gambar) }}" width="300px" alt="Image" class="img-fluid">
            </a>
            <div class="post-meta text-center text-dark">
              <a href="">
                <span class="icon-user"></span>
                <span>{{  $artikel->users->name }}</span>
              </a>
            </div>
            <h3><a href="#">{{$artikel->judul}}</a></h3>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">

          <div class="row">
            <div class="col-6 col-lg-6 mt-lg-5">
              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-stay-at-home"></span>
                </div>
                <div class="body">
                  <h3>Berdiam diri atau tinggal di Rumah</h3>
                  <p>perintah untuk membatasi pergerakan masyarakat untuk menekan atau memitigasi epidemi.</p>
                </div>
              </div>

              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-patient"></span>
                </div>
                <div class="body">
                  <h3>Memakai Masker</h3>
                  <p>perintah untuk menggunakan masker ketika keluar rumah.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-6">
              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-social-distancing"></span>
                </div>
                <div class="body">
                  <h3>Jaga Jarak Sosial</h3>
                  <p>perintah untuk menjaga jarak ketika berkumpul atau berkerumun.</p>
                </div>
              </div>

              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-hand-washing"></span>
                </div>
                <div class="body">
                  <h3>Mencuci Tangan</h3>
                  <p>perintah untuk menjaga kebersihan dengan mencuci tangan dengan hand sanitizer.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="section-heading mb-4">Bagaimana Mencegah Virus Corona?</h2>
          <p>Lindungi diri Anda dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh otoritas kesehatan setempat.</p>
          
          <p class="mb-4">Untuk mencegah penyebaran COVID-19:</p>

          <ul class="list-check list-unstyled mb-5">
            <li>Cuci tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan alkohol.</li>
            <li>Selalu jaga jarak aman dengan orang yang batuk atau bersin.</li>
            <li>Kenakan masker jika pembatasan fisik tidak dimungkinkan.</li>
            <li>Jangan sentuh mata, hidung, atau mulut Anda.</li>
            <li>Saat batuk atau bersin, tutup mulut dan hidung Anda dengan lengan atau tisu.</li>
            <li>Jangan keluar rumah jika merasa tidak enak badan.</li>
            <li>Jika demam, batuk, atau kesulitan bernapas, segera cari bantuan medis.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection