@extends('layouts.adminviews')

@section('container_admin')

<div class="row px-4 d-flex justify-content-evenly">
    <div class="col-9">
        <h3>Ganti Password</h3>
        <div class="card card-frame">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Saat ini</label>
                        <input type="password" placeholder="Password saat ini" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Baru</label>
                        <input type="password" placeholder="Password baru" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ketik ulang password baru</label>
                        <input type="password" placeholder="Ketik ulang password baru" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>




</div>



@endsection