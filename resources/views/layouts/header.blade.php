<!doctype html>
<html lang="en">
<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/main/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/main/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/main/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/main/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/main/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/main/fonts/flaticon-covid/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
  @yield('style')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  {{-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> --}}


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.sidebar')


    @yield('content')

    @include('layouts.footer')