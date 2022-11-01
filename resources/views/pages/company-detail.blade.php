{{-- @php
dd($company)
@endphp --}}
@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs
@endsection

@section('content')
<section class="page-company-detail mt-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="row sticky-top justify-content-between align-items-center py-3 header">
          <div class="col-9 col-lg-10">
            <div class="d-flex align-items-center gap-3">
              <img src="{{ Storage::url($company->photo) }}"
                class="d-inline-block rounded-1" alt="Traveloka">
              <h1>{{ $company->name }}</h1>
            </div>
          </div>
          <div class="col-3 col-lg-2">
            <button class="btn btn-block btn-primary fw-semibold w-100">
              Follow
            </button>
          </div>
        </div>
        <div class="row mt-4 company-description">
          <div class="col-12">
            <h2 class="mb-2">Tentang Perusahaan</h2>
            <div class="about">
              {!! $company->description !!}
            </div>
            <div class="row mt-3">
              <div class="col-6 col-md-3">
                <div class="box p-3 mr-2 mb-4">
                  <div class="subtitle mb-2">Lokasi</div>
                  <div class="sub">{{ $company->province->name }}</div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="box p-3 mr-2 mb-4">
                  <div class="subtitle mb-2">Industri</div>
                  <div class="sub">{{ $company->industry->name }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="height: 100vh;"></div>
      </div>
    </div>
  </div>
</section>
@endsection
