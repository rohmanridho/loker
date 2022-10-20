@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
        <div class="profile">
    <div class="container">
        <div class="row d-flex justify-content-center title">
            <div class="col-md-6 col-12">
                <div class="account d-flex justify-content-between align-items-center mb-4">
                    <div>
                    <h2>Akbar zaqi Fiktarizaen</h2>
                    <h6>@akbarzaqi_</h6>
                    </div>
                    <div class="gambar">
                        <img src="/images/icon-user.png" alt="">
                    </div>
                </div>
              <a href="{{ route('update-profile') }}" class="card edit-profile text-decoration-none">
                <div class="card-body">
                    <div class="email"> 
                    <div class="account-name"><i class="bi bi-envelope-fill" style="padding-right: 6px;"></i> zakiakbar143@gmail.com</div>
                </div>
                <div class="phone d-flex justify-content-between align-items-center">
                    <div class="phone_number"><i class="bi bi-telephone-fill"  style="padding-right: 6px;"></i> 0895363163250</div>
                    <div><i class="bi bi-chevron-right" style="color: black;"></i></div>
                </div>
                <div class="location">
                    <div class="user-location"><i class="bi bi-geo-alt-fill"  style="padding-right: 6px;"></i> Jetis Rt21, Patalan, Jetis, Bantul</div>
                </div>
                </div>
              </a>
              <div class="upload">
                <div class="title">
                    <h4>Resume</h4>
                    <div class="tombol">
                            <input
                              type="file"
                              id="file"
                              style="display: none"
                              multiple
                            />
                            <button
                              class="btn btn-primary btn-block mt-3 font-weight-bold"
                              onclick="thisFileUploud()"
                            >
                              Upload resume
                            </button>
                          </div>
                          <div class="subtitle ">By continuing, you agree to create a public resume and agree
                                                to receiving job opportunities from employers.</div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
    
@endsection
@push('addon-script')
     <script>
      function thisFileUploud() {
        document.getElementById("file").click();
      }
    </script>
@endpush
