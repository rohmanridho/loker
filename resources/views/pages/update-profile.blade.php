@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
        <div class="profile-details">
    <div class="container">
        <div class="row d-flex justify-content-center title">
            <div class="col-md-6 col-12">
                <div class="contact align-items-center mb-4">
                    <div>
                    <a href="{{ route('profile') }}"><i class="bi bi-arrow-left"></i></a>
                    <h3>Contact Information</h3>
                    </div>
                </div>
                <div class="form">
                    <div class="email-user">
                        <div class="email">Email</div>
                        <input type="text" class="form-control rounded-3" value="zakiakbar143@gmail.com">
                    </div>
                    <div class="phone-user">
                        <div class="phone">Phone Number</div>
                        <input type="text" class="form-control rounded-3" value="0895363163250">
                    </div>
                    <div class="address-user">
                        <div class="address">Address</div>
                        <input type="text" class="form-control rounded-3" value="Jetis Rt21, Patalan, Jetis, Bantul">
                    </div>
                    <button
                    class="btn btn-primary btn-block font-weight-bold mb-5">
                     Save Now
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div> 
@endsection
