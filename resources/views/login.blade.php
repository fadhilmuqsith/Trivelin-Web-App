@extends('layouts.main')
@section('container')


<h2 class="mb-4">Selamat Datang <br>
  Kembali di <span class="text-warning">Trivelin</span></h2>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}!</strong> Silahkan Login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

@if (session('failure'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('failure') }}!</strong> Pastikan Email/Password Anda Benar
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

<div class="col-8 ms-5">
  <h2 class="mt-2 ms-5">Login</h2>

  <form method="POST" action="/admin/login">
    @csrf
    <div class="ms-5 mt-4">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" placeholder="Email" name="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" placeholder="Password" class="form-control" name="password" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
      </div>

      <button type="submit" class="btn text-white fw-bold btn-warning">Login</button>

  </form>
  <p class="mt-3">Belum memiliki akun ?<a class="text-decoration-none text-warning fw-bold" href="/admin/register"> Register</a></p>
</div>
</div>


@endsection