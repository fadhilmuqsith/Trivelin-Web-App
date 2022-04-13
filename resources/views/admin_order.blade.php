@extends('layouts.adminviews')

@section('container_admin')

  <div class="row">
    @include('sweetalert::alert')
    <div class="col-12">
      <div class="ms-md-auto pe-md-3 col-4 d-flex mb-3">
        <form method="get" action="/admin/order">
          <div class="input-group">
              <input type="text" name="search" class="form-control col-4" placeholder="Cari kode atau email.." value="{{ request('search') }}">
              <button type="submit" style="background-color: white; color:#ffc107" class="btn btn-outline-white mb-0">Cari</button> 
          </div>
        </form>
      </div>
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Riwayat Pemesanan</h6>
        </div>
        @if(count($orders) < 1) <div class="empty col-12">
          <div class="card card-frame">
            <div class="card-body mx-auto d-block">
              <img src="http://127.0.0.1:8000/assets/img/notfound.png" class="img-fluid border-radius-lg d-flex " style="margin: auto" width="250px" alt="Responsive image">
              <h3 style="text-align: center;" class="mb-4"><span class="text-warning">Opss...!</span><br>
                Riwayat Pemesanan Belum ada !</h3>
            </div>
          </div>
      </div>
      @else
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Booking</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pilihan Paket</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Telepon</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Pemesanan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Perjalanan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Diubah pada</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $key => $order)
                <tr>
                  <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">{{ $key+1 }}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->booking_code }}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->tour->title }}</p></td>
                  <td><p class="align-middle text-center text-xs font-weight-bold mb-0">{{ $order->quantity }}</p></td>
                  <td class="align-middle text-center text-sm">
                    @if ($order->status == true)
                      <span class="badge badge-sm bg-gradient-success">Lunas</span>
                    @else
                      @if (date("d-M-Y", strtotime($order->created_at)) >= date("d-M-Y"))
                      <span class="badge badge-sm bg-gradient-warning">Menunggu<br>Pembayaran</span>
                      @else
                      <span class="badge badge-sm bg-gradient-danger">Dibatalkan</span>
                      @endif
                      
                    @endif
                    
                    
                  </td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->name}}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->email}}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->phone_number}}</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($order->created_at))}}</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($order->tour_date))}}</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($order->updated_at))}}</p></td>
                  
                  <td class="align-middle">
                    <button type="button" class="btn btn-link text-dark px-3 mb-0 modalShow" data-bs-toggle="modal" data-bs-target="#confirmModal" data-order="{{ $order }}">
                      <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
                    </button>
                  </td>
                </tr>

                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="d-flex justify-content-end mt-4 me-3">
          {{ $orders->links() }}
        </div>
        @endif
        
        
      </div>

      
      <!-- Modal -->
          <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pemesanan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Header</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Kode Booking</p></td>
                        <td><p class="kode_booking text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Pilihan Paket</p></td>
                        <td><p class="pilihan_paket text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Status</p></td>
                        <td><p class="status text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Nama</p></td>
                        <td><p class="nama text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Email</p></td>
                        <td><p class="email text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Tanggal Pemesanan</p></td>
                        <td><p class="order_date text-xs font-weight-bold mb-0"></p></td>
                      </tr>
                      <tr>
                        <td><p class="text-xs font-weight-bold mb-0">Tanggal Perjalanan</p></td>
                        <td><p class="tour_date text-xs font-weight-bold mb-0"></p></td>
                      </tr> 
                                   
                      
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <form class='formUpdate' action="/admin/order" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="id" name="id"/>
                    <input type="hidden" class="status" name="status" value="false"/>
                    <button type="submit" class="btn bg-gradient-danger">Batalkan</button>
                  </form>
                  
                  <form class='formUpdate' action="/admin/order" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="id" name="id"/>
                    <input type="hidden" class="status" name="status" value="true"/>
                    <button type="submit" class="btn bg-gradient-info">Konfirmasi</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>

 
  

    
@endsection