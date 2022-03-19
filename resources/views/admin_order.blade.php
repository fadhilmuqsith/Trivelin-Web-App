@extends('layouts.adminviews')

@section('container_admin')

  <div class="row">
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
                <tr>
                  <td class="align-middle text-center"><p class="text-xs font-weight-bold mb-0">1</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">QX25PR</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">Paket 1 Hari Perjalanan Ke Toraja</p></td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Lunas</span>
                  </td>
                  <td><p class="text-xs font-weight-bold mb-0">John Doe</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">john@creative-tim.com</p></td>
                  <td><p class="text-xs font-weight-bold mb-0">0823464859</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">23/04/18</p></td>
                  <td class="align-middle text-center" ><p class="text-xs font-weight-bold mb-0">23/04/18</p></td>
                  
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  

    
@endsection