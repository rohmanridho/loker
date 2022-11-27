@extends('layouts.setting')

@section('title', 'Account settings | '. env('APP_NAME') .' ')

@section('content')
<div class="settings-section" id="settings-section">
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12 col-md-10">
                <div class="heading">
                    Account settings
                </div>
                <hr>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4 order-md-2 mb-3 d-flex justify-content-center">
                        <form action="{{ route('avatar.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label class="d-none d-md-block">Avatar</label>
                            <input type="file" name="avatar" class="d-none" id="avatar" onchange="form.submit()">
                            <div class="profile-picture-edit">
                                <img src="@if (Auth::user()->avatar)
                                    {{ Storage::url(Auth::user()->avatar) }}
                                @else
                                    {{ asset('image/dummy-avatar.jpg') }}
                                @endif" class="profile-picture rounded-circle">
                                <button type="button" class="btn button-edit"
                                    onclick="document.getElementById('avatar').click()"><i
                                        class="bi bi-pencil-fill"></i>
                                    &nbsp;
                                    Ubah
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-7 order-md-1">
                        <form action="{{ route('account.update') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fname">Nama</label>
                                <input type="text" id="fname" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="femail">Email</label>
                                <input type="email" id="femail" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $user->email }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fpassword">Passowrd</label>
                                <input type="password" id="fpassword" name="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="fpassword-confirm">Confirm Password</label>
                                <input type="password" id="fpassword-confirm" name="password_confirmation"
                                    name="password" class="form-control">
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