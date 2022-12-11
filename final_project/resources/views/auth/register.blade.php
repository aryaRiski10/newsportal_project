@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="register-box mt-5" >
      <div class="register-logo">
        <a href="#"><b>REGISTER</b></a>
      </div>
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Nama Lengkap">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            @error('nama')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

            <div class="input-group mb-3"> 
              <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"  placeholder="Alamat Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

            <div class="input-group mb-3">
              <input type="number" id="umur" name="umur" class="form-control @error('umur') is-invalid @enderror" value="{{ old('umur') }}" required autocomplete="umur"  placeholder="Umur">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @error('umur')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

            <div class="input-group mb-3">
              <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" required autocomplete="alamat" placeholder="Alamat"></textarea>
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
              </div>
            </div>
            @error('alamat')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror

            <div class="input-group mb-3">
              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" data-toggle="password" placeholder="Password" required  placeholder="Password">
              <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="bi bi-eye-fill" id="show_eye"></i>
                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                  </span>
              </div>
            </div>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            <div class="input-group mb-3">
              <input type="password" id="password-confirm" name="password_confirmation" class="form-control"  placeholder="Retype password" required autocomplete="new-password">
              <div class="input-group-append">
                  <span class="input-group-text" onclick="password_confirm_show_hide();">
                    <i class="bi bi-eye-fill" id="conf_show_eye"></i>
                    <i class="bi bi-eye-slash-fill d-none" id="conf_hide_eye"></i>
                  </span>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <a href="/login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
  </div>

</div>

@push('script-show-pass')
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        } 
        function password_confirm_show_hide() {
            var x = document.getElementById("password-confirm");
            var show_eye = document.getElementById("conf_show_eye");
            var hide_eye = document.getElementById("conf_hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        } 
    </script>
@endpush
@endsection
