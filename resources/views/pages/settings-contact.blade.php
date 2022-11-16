@extends('layouts.setting')

@section('title', 'Contact setting')

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
                        <form action="">
                            <div class="form-group mb-2">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" class="form-control" value="Jisoo">
                            </div>
                            <div class="form-group mb-2">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" class="form-control" value="Rabbit">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" value="87819413129">
                            </div>
                            <button class="btn btn-success fw-semibold">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
