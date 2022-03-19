@extends('layouts.main')
@section('container')

<h2>Selamat Datang <br>
  Kembali di <span class="text-warning">Trivelin</span></h2>

  <div class="col-8 ms-5">
  <h2 class="mt-5 ms-5">Login</h2>

  <form>
    <div class="ms-5 mt-4">
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
    </div>
    
    <button type="submit" class="btn text-white fw-bold btn-warning">Login</button>
  
  </form>
  <p class="mt-3">Belum memiliki akun ?<a class="text-decoration-none text-warning fw-bold" href="/admin/register"> Register</a></p>
</div>
</div>

    
@endsection