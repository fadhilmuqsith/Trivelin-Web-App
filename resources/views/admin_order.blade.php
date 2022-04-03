@extends('layouts.adminviews')

@section('container_admin')

  <div class="row">
    @include('sweetalert::alert')
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Riwayat Pemesanan</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Booking</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pilihan Paket</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Telepon</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Pemesanan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Perjalanan</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                  <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">{{ $order->id }}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->booking_code }}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->tour->title }}</p></td>
                  <td class="align-middle text-center text-sm">
                    @if ($order->status == true)
                      <span class="badge badge-sm bg-gradient-success">Lunas</span>
                    @else
                      <span class="badge badge-sm bg-gradient-warning">Menunggu<br>Pembayaran</span>
                    @endif
                    
                    
                  </td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->name}}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->email}}</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $order->phone_number}}</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($order->created_at))}}</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">{{ date("d-M-Y", strtotime($order->tour_date))}}</p></td>
                  
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