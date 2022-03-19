@extends('layouts.adminviews')

@section('container_admin')
<div class="container-fluid">
  
<button type="button" class="btn btn-outline-dark py-2">+ Tambah Tour</button>
</div>

 <div class="row px-4 d-flex justify-content-evenly">
   @foreach ($tours as $tour)
   <div class="card col-3 mt-3">
    <div class="card-header p-0 mx-0 mt-3 position-relative z-index-1">
      <a href="javascript:;" class="d-block">
        <img src="{{ $tour->image }}" class="img-fluid border-radius-lg">
      </a>
    </div>
  
    <div class="card-body pt-2" style="padding:0.2rem">
      <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Paket {{ $tour->travel_type }} Hari</span>
      <a href="javascript:;" class="card-title h5 d-block text-darker fs-6">
        {{ $tour->title }}
      </a>
      <p class="card-description mb-4 text-xs">
        {{ $tour->description }}
      </p>
      <div class="author d-flex justify-content-end">
        <button type="button" class="btn bg-gradient-info px-3 py-2">Edit</button>
        <button type="button" class="btn bg-gradient-danger px-2 py-2 ms-2">Hapus</button>
      </div>
    </div>
  </div>
   @endforeach
 
  

</div>

 

@endsection