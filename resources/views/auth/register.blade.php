@extends('layouts.app')

@section('content')

<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>REGISTRASI</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Daftarkan keanggotaan baru</p>
  
        <form method="POST" action="{{ route('register') }}">
        @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap ...">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

            <input id="foto" type="hidden" class="form-control @error('foto') is-invalid @enderror" name="foto" value="uploads/users/default.jpg" required autocomplete="foto">
                        
            <input id="tipe" type="hidden" class="form-control @error('tipe') is-invalid @enderror" name="tipe" value="1" required autocomplete="tipe">

          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email ...">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Kata Sandi ...">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ketik ulang kata sandi ...">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                    remember me
                </label>
              </div>
            </div>
          </div>
        
  
            <div class="social-auth-links text-center">
                <button type="submit" class="btn btn-block btn-primary">
                    <b><h5>DAFTAR</h5></b> 
                </button>
    
                <a href="#" class="text-center">Saya sudah memiliki keanggotaan</a>
            </div>
        </form>
      <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

@endsection
