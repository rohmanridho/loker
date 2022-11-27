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
                            <div class="form-group mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" id="address" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ $user->address }}">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fcity">Kota</label>
                                <input type="text" id="fcity" name="city"
                                    class="form-control @error('city') is-invalid @enderror" value="{{ $user->city }}">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fzipcode">Kode Pos</label>
                                <input type="text" id="fzipcode" name="zip_code"
                                    class="form-control @error('zip_code') is-invalid @enderror"
                                    value="{{ $user->zip_code }}">
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="fphonenumber">No HP</label>
                                <input type="text" id="fphonenumber" name="phone_number"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ $user->phone_number }}">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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