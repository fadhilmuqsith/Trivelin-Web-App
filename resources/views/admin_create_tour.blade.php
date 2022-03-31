@extends('layouts.adminviews')

@section('container_admin')
<div class="container-fluid">


</div>

<div class="row px-4 d-flex justify-content-evenly">
    <div class="col-12">
        <div style="width: 90%; float:left;">
            <h3>Tambahkan Tour !</h3>
        </div>
        <div style="width: 10%; float:right;">
            <a role="button" class="btn btn-default py-2" href="{{ route('tour.index') }}" style="background-color: white; color:#ffc107; ">Kembali</a>
        </div>
        <div class="card card-frame" style="clear: both;">
            <div class="card-body">

                <form method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Tour</label>
                        <input type="text" placeholder="Nama tour" class="form-control @error('title')is-invalid @enderror" name="title" value="{{ old('title') }}" id="title" required>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi Paket Tour</label>
                        <textarea style="height: auto;" placeholder="Deskripsi" class="form-control" name="description" value="{{ old('description') }}" id="description" rows="7" required></textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Detail Route Travel</label>
                        @error('travel_route')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <textarea name="travel_route" id="travel_route" class="form-control" required>{{ old('travel_route') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Renacana Perjalanan</label>
                        @error('itinary')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <textarea name="itinary" id="itinary" class="form-control" required>{{ old('Itinary') }}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga Mulai</label>
                        <input type="text" placeholder="Harga" class="form-control" name="price" value="{{ old('price') }}" id="price" required>
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Detail Harga</label>
                        @error('travel_route')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <textarea name="price_detail" id="price_detail" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto thumbnail</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input type="file" placeholder="Nama tour" class="form-control" name="image" id="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn text-white fw-bold btn-warning">Tambahkan</button>

                </form>
            </div>
        </div>
    </div>

</div>
</div>



</div>

<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }


    var rupiah = document.getElementById('price');
    rupiah.addEventListener('keyup', function(e) {
        rupiah.value = formatRupiah(this.value, 'RP. ')
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

@endsection