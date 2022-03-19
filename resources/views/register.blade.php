@extends('layouts.main')
@section('container')

<h2><span class="text-warning">Trivelin</span></h2>

  <div class="col-8 ms-5">
  <h2 class="mt-5 ms-5">Register</h2>

  <form>
    <div class="ms-5">
    
      <div class="row mt-4">
        <div class="mb-3 col-6">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="mb-3 col-6">
          <label for="exampleInputEmail1" class="form-label">Last Name</label>
          <input type="email" class="form-control" id="last_name" name="last_name">
        </div>

      </div>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
    </div>
    
    <button type="submit" class="btn btn-warning fw-bold text-white mt-3">Register</button>
  
  </form>

  <div class="d-flex flex-row mt-3"> <a class="text-warning text-decoration-none" href="/admin/login"> Kembali Ke Halaman Login</a>  </div>
  
</div>
</div>

    
@endsection