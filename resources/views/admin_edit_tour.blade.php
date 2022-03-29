@extends('layouts.adminviews')

@section('container_admin')
<!-- <div class="container-fluid">

    <h3>Ganti Password</h3>
</div> -->

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

                <form method="POST" action="{{ route('tour.update',$tour->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama Tour</label>
                        <input type="text" placeholder="Nama tour" class="form-control @error('title')is-invalid @enderror" name="title" value="{{ old('title',$tour->title) }}" id="title" required>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi Foto</label>
                        <input type="text" placeholder="Nama tour" class="form-control" name="description" value="{{ old('description',$tour->description) }}" id="description" required>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi tour</label>
                        @error('travel_route')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <textarea name="travel_route" id="travel_route" class="form-control" rows="4">{{ old('travel_route',$tour->travel_route) }}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga</label>
                        <input type="number" placeholder="Harga" class="form-control" name="price" value="{{ old('price',$tour->price )}}" id="price" required>
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto thumbnail</label>
                        <input type="hidden" name="oldImage" value="{{$tour->image}}">
                        @if($tour->image)
                        <img src="{{asset('storage/'.$tour->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input type="file" placeholder="Nama tour" class="form-control" name="image" id="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn text-white fw-bold btn-warning">Update</button>

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
</script>

@endsection