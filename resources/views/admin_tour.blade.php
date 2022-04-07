@extends('layouts.adminviews')

@section('container_admin')

<div class="container-fluid">

  <a role="button" class="btn btn-default py-2" href="{{ route('tour.create') }}" style="background-color: white; color:#ffc107">+ Tambah Tour</a>
</div>

<div class="card-group">

  @if(count($tours) < 1) <div class="empty col-12">
    <div class="card card-frame">
      <div class="card-body mx-auto d-block">
        <img src="http://127.0.0.1:8000/assets/img/notfound.png" class="img-fluid border-radius-lg" width="450px" alt="Responsive image">
        <h3 style="text-align: center;" class="mb-4"><span class="text-warning">Opss...!</span><br>
          Paket tour belum ada !</h3>
      </div>
    </div>
</div>
@else





<div class="container">
  @include('sweetalert::alert')
  <div class="row">
    <style>
      .card-img-top {
        width: 100%;
        height: 40vh;
        object-fit: cover;
      }
    </style>
    @foreach ($tours as $tour)
    <!--ADD CLASSES HERE d-flex align-items-stretch-->
    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
      <div class="card">
        @if($tour->image)
        <img src="{{ asset('storage/' . $tour->image)}}" class="card-img-top">
        @else
        <img src="https://images.unsplash.com/photo-1582414004129-a955c6087f5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBhcmFkaXNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top">
        @endif
        <div class="card-body d-flex flex-column">
          <a href="{{ route('tour.show',$tour->id) }}" class="card-title h5 d-block text-darker fs-6">
            {{ $tour->title }}
          </a>
          <!-- <p class="card-text mb-4">{!! html_entity_decode(nl2br(e($tour->travel_route))) !!} </p> -->
          <p class="card-text mb-4" style="   overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical; font-size:14px;color:darkgrey">{{$tour->description}} </p>
          <p class="card-text mb-4 text-darker fs-6">Mulai<br><span style="font-weight: bold; color:#ffc107;font-size:larger">{{ $tour->price }}</span></p>
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
    </div>
    @endforeach
  </div>


</div>


@endif

</div>



@endsection