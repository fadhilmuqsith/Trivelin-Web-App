@extends('layouts.main')
@section('container')

<h2><span class="text-warning">Trivelin</span></h2>

  <div class="col-8 ms-5">
  <h2 class="mt-3 ms-5">Register</h2>

  <form method="POST" action="/admin/register">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="ms-5">
    
      <div class="row mt-4">
        <div class="mb-3 col-6">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control @error('first_name')is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
          @error('first_name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          
        </div>
        <div class="mb-3 col-6">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control @error('last_name')is-invalid @enderror"  id="last_name" name="last_name" value="{{ old('last_name') }}" required>
          @error('last_name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

      </div>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="exampleInputPassword1" required>
      @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
    </div>
    <div class="mb-3">
    </div>
    
    <button type="submit" class="btn btn-warning fw-bold text-white mt-3">Register</button>
  
  </form>

  <div class="d-flex flex-row mt-1"><p class="mt-2">Sudah memiliki akun ?<a class="text-decoration-none text-warning fw-bold" href="/admin/login"> Login</a></p></div>
  
</div>
</div>

    
@endsection