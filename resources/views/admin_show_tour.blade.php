@extends('layouts.adminviews')

@section('container_admin')

<div class="row px-4 d-flex justify-content-evenly">
    <div class="col-12">
        <div style="width: 90%; float:left;">
            <h3>Detail Paket</h3>
        </div>
        <div style="width: 10%; float:right;">
            <a role="button" class="btn btn-default py-2" href="{{ route('tour.index') }}" style="background-color: white; color:#ffc107; ">Kembali</a>
        </div>
        <div class="card card-frame" style="clear: both;">
            <!-- Card image -->
            <div class="card-header p-4 mx-3 mt-3 position-relative z-index-1">
                <p class="card-title h4 d-block text-darker">#{{ $tour->title }}</p>
                <img class="border-radius-lg w-100" src="{{ asset('storage/' . $tour->image)}}">
            </div>
            <div class="card-body">
                <h4 class="card-title">Deskripsi tour</h4>
                <p class="card-text mb-4">{{ $tour->description }}</p>
                <div class="border-radius-lg" style="background-color:#ffc107; padding:10px">
                    <h5 class="card-title">Harga Mulai: {{ $tour->price }}</h5>
                </div>

                <!-- Tabs navs -->
                <ul class="nav nav-tabs nav-fill mb-3 my-3" id="ex1" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link active my-2" style="padding: 15px 5px;" id="ex2-tab-1" data-bs-toggle="tab" href="#ex2-tabs-1" role="button" aria-controls="ex2-tabs-1" aria-selected="true">Tempat Wisata</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link my-2 " style="padding: 15px 5px;" id="ex2-tab-2" data-bs-toggle="tab" href="#ex2-tabs-2" role="button" aria-controls="ex2-tabs-2" aria-selected="false">Detail Harga</a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="btn nav-link my-2" style="padding: 15px 5px;" id="ex2-tab-3" data-bs-toggle="tab" href="#ex2-tabs-3" role="button" aria-controls="ex2-tabs-3" aria-selected="false">Itinary</a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                    <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                        <h4>Tujuan Paket #{{ $tour->title }}</h4><br>{!! html_entity_decode(nl2br(e($tour->travel_route))) !!}
                    </div>
                    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                        <h4>Harga Paket #{{ $tour->title }}</h4><br>{!! html_entity_decode(nl2br(e($tour->price_detail))) !!}
                    </div>
                    <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                        <h4>Tujuan Paket #{{ $tour->title }}</h4><br>{!! html_entity_decode(nl2br(e($tour->itinary))) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>



</div>



@endsection