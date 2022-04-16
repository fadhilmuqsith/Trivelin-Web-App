@extends('layouts.homeviews')

@section('container_home')
<div class="container-fluid d-flex justify-content-center">
<h5 class="mt-4 ms-5">Cek Status Pemesanan Anda</h5>
</div>
@include('sweetalert::alert')
<div class="container-fluid justify-content-center">
  

  <form method="POST" action="/cek_booking">
    @csrf
    <div class="mx-5 mt-2">
      <div class="row d-flex bg-white p-4 align-items-end">
        <div class="mb-3 col-4">
          <label for="exampleInputCode" class="form-label">Kode Booking</label>
          <input type="text" placeholder="kode booking" value="{{ old('booking_code') }}" name="booking_code" class="form-control @error('booking_code')is-invalid @enderror" id="exampleInputCode" required>
            @error('booking_code')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3 col-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" placeholder="email" value="{{ old('email') }}"  name="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" required>
            @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3 col-2">
          <button type="submit" class="btn text-white m-1 fw-bold btn-warning">Cek Status</button>
        </div>
        <small class="text-warning">*Pembayaran dilakukan di luar website silahkan hubungi admin melalui email yang anda dapatkan</small>   
      </div>
  </form>
  
</div>

@if ($book)

<div class="container-fluid mx-3 mt-4 mb-5 bg-white rounded" style="overflow: hidden">
  <h5 class="mt-4 ms-5">Detail Pemesanan</h5>
  <div class="row ms-5  d-flex">
    <div class="col-4"><strong>Kode Booking</strong></div>
    <div class="col-4"><strong>{{ $book->booking_code }}</strong></div>
  </div>
  <div class="row ms-5 d-flex">
    <div class="col-4">Nama</div>
    <div class="col-4">{{ $book->name }}</div>
  </div>
  <div class="row ms-5 d-flex">
    <div class="col-4">Email</div>
    <div class="col-4">{{ $book->email }}</div>
  </div>
  <div class="row ms-5 d-flex">
    <div class="col-4">No. Telepon</div>
    <div class="col-4">{{ $book->phone_number }}</div>
  </div>
  <div class="row ms-5 d-flex">
    <div class="col-4">Alamat</div>
    <div class="col-4">{{ $book->address }}</div>
  </div>

  <div class="table-responsive p-0 mt-3 mb-5">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase align-middle text-center text-secondary text-xxs font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase align-middle text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Perjalanan</th>
          <th class="text-uppercase align-middle text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Paket Pilihan</th>
          <th class="text-uppercase align-middle text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tarif</th>
          <th class="text-uppercase align-middle text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
        </tr>
      </thead>
      <tbody>
        <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">#</p></td>
        <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($book->created_at)) }}</p></td>
        <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">{{ $book->tour->title }}</p></td>
        <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">{{ $book->tour->price }}</p></td>
        <td class="align-middle text-center text-sm">
          @if ($book->status == true)
            <span class="badge badge-sm bg-gradient-success">Lunas</span>
          @else
            @if (date("d-M-Y", strtotime($book->tour_date)) >= date("d-M-Y"))
            <span class="badge badge-sm bg-gradient-warning">Menunggu<br>Pembayaran</span>
            @else
            <span class="badge badge-sm bg-gradient-danger">Dibatalkan</span>
            @endif
            
          @endif
        </td>
                  
       
      </tbody>
    </table>
  </div>


  
</div>
  
@endif


@endsection