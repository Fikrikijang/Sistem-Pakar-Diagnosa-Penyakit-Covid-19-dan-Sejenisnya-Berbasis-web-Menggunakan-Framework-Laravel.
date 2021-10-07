<header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-xl-2">
          <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Sistem Pakar<span class="text-primary"></span> </a>
          </div>
        </div>

        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
              <li class="has-children">
                <a href="" class="nav-link">Informasi</a>
                <ul class="dropdown">
                  <li><a href="{{ route('tabelPenyakit') }}" class="nav-link">Daftar Penyakit</a></li>
                  <li><a href="{{ route('tabelGejala') }}" class="nav-link">Daftar Gejala</a></li>
                  <li class="has-children">
                    <a href="#">Info Kasus Covid-19</a>
                    <ul class="dropdown">
                      <li><a href="{{ route('covidNasional') }}">Nasional</a></li>
                      <li><a href="{{ route('covidInternasional') }}">Internasional</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{ route('pasienForm') }}" class="nav-link">Konsultasi</a></li>
              <li><a href="{{ route('artikelBerita') }}" class="nav-link">Berita</a></li>
              <li><a href="{{ route('pencegahan') }}" class="nav-link">Pencegahan</a></li>
            </ul>
          </nav>
        </div>


        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
            class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a>
        </div>

      </div>
    </div>

</header>