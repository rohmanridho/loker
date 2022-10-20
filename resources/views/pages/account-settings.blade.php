@extends('layouts.settings')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
         <div class="setting-content mt-3">
           <div class="row d-flex justify-content-center">
             <div class="col-md-9 col-12">
              <div class="title">
                <h3>Account Settings</h3>
                <div class="garis"></div>
              </div>
            </div>
            <div class="col-md-8 col-12">
               <div class="form">
                    <div class="name-user">
                        <div class="name">Name</div>
                        <input type="text" class="form-control rounded-3 pl-2" value="akbar zaqi Fiktarizaen">
                    </div>
                    <div class="username-user">
                        <div class="username">Username</div>
                        <input type="text" class="form-control rounded-3 pl-2" value="akbarzaqi_">
                    </div>
                    <div class="password-user">
                        <div class="password">Password</div>
                        <input type="password" class="form-control rounded-3 mb-3 pl-2" value="12345">
                    </div>
                    <button
                    class="btn btn-primary btn-block font-weight-bold mb-5" style="padding-top: 5px; padding-bottom: 5px;">
                     Save Now
                    </button>
                </div>
              </div>
            </div>
         </div>
@endsection
