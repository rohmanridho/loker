@extends('layouts.setting')

@section('title', 'Account settings')

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
                        <div class="col-12 col-md-4 order-md-2 mb-3">
                            <form action="">
                                <label class="d-block">Profile picture</label>
                                <input type="file" class="d-none" id="profile-picture">
                                <div class="profile-picture-edit">
                                    <img src="http://placeimg.com/150/150/people" alt=""
                                        class="profile-picture rounded-circle">
                                    <button type="button" class="btn btn-block button-edit"
                                        onclick="document.getElementById('profile-picture').click()"><i
                                            class="bi bi-pencil-fill"></i>
                                        &nbsp;
                                        Edit
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-7 order-md-1">
                            <form action="">
                                <div class="form-group mb-2">
                                    <label for="fusername">Username</label>
                                    <input type="text" id="fusername" class="form-control" value="sooyaaa">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="femail">Email</label>
                                    <input type="email" id="femail" class="form-control" value="queenjisoo@gmail.com">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fpassword">Password</label>
                                    <input type="password" id="fpassword" class="form-control" value="sooyaaa">
                                </div>
                                <button class="btn btn-primary fw-semibold">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
