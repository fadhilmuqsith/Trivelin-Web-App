@extends('layouts.adminviews')

@section('container_admin')
<div class="container-fluid">

  <a role="button" class="btn btn-default py-2" href="{{ route('tour.create') }}" style="background-color: white; color:#ffc107">+ Tambah Tour</a>
</div>

<div class="card-group">

  @if(count($tours) < 1) <div class="empty col-12">
    <div class="card card-frame">
      <div class="card-body mx-auto d-block">
        <img src="https://img.freepik.com/free-vector/no-data-concept-illustration_114360-2506.jpg?t=st=1648550631~exp=1648551231~hmac=66c96aa3cc623c633ac8988f41acd68f47c0e1024e4df222571999e376852280&w=740" class="img-fluid border-radius-lg" width="450px" alt="Responsive image">
        <h3 style="text-align: center;" class="mb-4"><span class="text-warning">Opss...!</span><br>
          Paket tour belum ada</h3>
      </div>
    </div>
</div>
@else



<div class="row px-4 d-flex justify-content-evenly">
  @foreach ($tours as $tour)

  <div class="card col-3 mt-3">
    <div class="card-header p-0 mx-0 mt-3 position-relative z-index-1">
      <a href="javascript:;" class="d-block">
        @if($tour->image)
        <img src="{{ asset('storage/' . $tour->image)}}" class="img-fluid border-radius-lg">
        @else
        <img src="https://images.unsplash.com/photo-1582414004129-a955c6087f5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBhcmFkaXNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid border-radius-lg">
        @endif

      </a>
    </div>

    <div class="card-body pt-2" style="padding:0.2rem">
      <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{ $tour->price }}</span>
      <a href="javascript:;" class="card-title h5 d-block text-darker fs-6">
        {{ $tour->title }}
      </a>
      <p class="card-description mb-4 text-xs">
        {{ $tour->description }}
      </p>
      <div class="author d-flex justify-content-end">
        <a role="button" class="btn bg-gradient-info px-3 py-2" href="{{ route('tour.edit',$tour->id) }}">Edit</a>
        <form action="{{ route('tour.destroy',$tour->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn bg-gradient-danger px-2 py-2 ms-2" onclick="return confirm('Apakah Anda yakin ingin menghapus tour ini?')">Hapus</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach

</div>

@endif

</div>



@endsection