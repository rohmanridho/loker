@extends('layouts.admin')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
         <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">This is JobStreet Administrator panel</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">124</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">$999</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">8232</div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
@endsection

@push('addon-style')
<style>
     .card .dashboard-card-title {
  font-size: 16px;
  line-height: 24px;
  color: #c5c5c5;
}
.card .dashboard-card-subtitle {
  font-weight: 600;
  font-size: 32px;
  line-height: 48px;
  color: #0c0d36;
}
</style>
 
@endpush
