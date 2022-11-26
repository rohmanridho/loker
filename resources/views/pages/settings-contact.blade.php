@extends('layouts.setting')

@section('title', 'Contact settings | Needed')

@section('content')
<div class="settings-section" id="settings-section">
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12 col-md-10">
                <div class="heading">
                    Contact information
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-7">
                        <form action="{{ route('contact.update') }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="address">Alamat</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="fcity">Kota</label>
                                <input type="text" id="fcity" name="city" class="form-control" value="{{ $user->city }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="fzipcode">Kode Pos</label>
                                <input type="text" id="fzipcode" name="zip_code" class="form-control" value="{{ $user->zip_code }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">No HP</label>
                                <input type="text" id="phone" name="phone_number" class="form-control"
                                    value="{{ $user->phone_number }}">
                            </div>
                            <button type="submit" class="btn btn-primary fw-semibold">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection