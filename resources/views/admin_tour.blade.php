@extends('layouts.adminviews')

@section('container_admin')
 <div class="row">
  <div class="card col-3">
    <div class="card-header p-0 mx-0 mt-3 position-relative z-index-1">
      <a href="javascript:;" class="d-block">
        <img src="http://127.0.0.1:8000/assets/img/carousel-1.jpg" class="img-fluid border-radius-lg">
      </a>
    </div>
  
    <div class="card-body pt-2" style="padding:0.2rem">
      <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Paket 3 Hari</span>
      <a href="javascript:;" class="card-title h5 d-block text-darker fs-6">
        Perjalanan Toraja Trip
      </a>
      <p class="card-description mb-4 text-xs">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, quia.
      </p>
      <div class="author d-flex justify-content-end">
        <button type="button" class="btn bg-gradient-info px-3 py-2">Edit</button>
        <button type="button" class="btn bg-gradient-danger px-2 py-2 ms-2">Hapus</button>
      </div>
    </div>
  </div>

  

</div>

 

@endsection