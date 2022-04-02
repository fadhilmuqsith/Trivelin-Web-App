@extends('layouts.adminviews')

@section('container_admin')


@include('sweetalert::alert')
<div class="row px-4 d-flex justify-content-evenly">
    <div class="col-9">
        <h3>Ganti Password</h3>
        <div class="card card-frame">

            <div class="card-body">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password Saat ini</label>
                        <input id="password" type="password" class="form-control" name="old">
                        @if ($errors->has('old'))
                        <span class="help-block">
                            <strong>{{ $errors->first('old') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ketik ulang password baru</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn text-white fw-bold btn-warning">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>




</div>





@endsection