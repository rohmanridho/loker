@extends('layouts.employer')

@section('title', 'Employer Dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Employer Dashboard</h2>
      <p class="dashboard-subtitle">This is an employer dashboard</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Perusahaan</div>
              <div class="dashboard-card-subtitle">{{ $companies }}</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Lowongan Pekerjaan</div>
              <div class="dashboard-card-subtitle">{{ $jobs }}</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Pelamar Pekerjaan</div>
              <div class="dashboard-card-subtitle">{{ $applies }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('style')
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
