@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs
@endsection

@section('content')
<section class="page-home mt-4 mt-lg-5">
    <div class="container">
        <form action=""></form>
        <form action="{{ route('search-job') }}" method="GET">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-12 col-md-7">
                    <div class="form-group job-search">
                        <span class="bi bi-search job-serach-icon"></span>
                        <input type="search" name="search" class="form-control"
                            placeholder="Cari perusahaan atau pekerjaan">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <ul class="nav nav-tabs justify-content-center mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">For You</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Popular
                searches</button>
        </li>
    </ul>
    <div class="tab-content pt-4 pb-2" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="container job-feed">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="row mb-2">
                            @foreach ($jobs as $job)
                            <div class="col-6 col-md-3 col-lg-3">
                                <div class="card-box mb-3">
                                    <div class="card-content">
                                        <div class="card-image mb-2">
                                            <a href="">
                                                <img src="{{ Storage::url($job->company->photo) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="job-name">
                                            <a href="{{ route('job-detail', ['company' => $job->company->slug, 'slug' => $job->slug]) }}">{{ $job->name }}</a>
                                        </div>
                                        <div class="company-name mb-2">
                                            <a href="{{ route('company-detail', $job->company->slug) }}">{{
                                                $job->company->name }}</a>
                                        </div>
                                        <div class="company-address mb-2">
                                            <i class="bi bi-geo-alt"></i> {{ $job->company->province->name }}
                                        </div>
                                        <div class="average-salaries mb-3">
                                            IDR {{ number_format($job->salary) }}
                                        </div>
                                        <div class="time">
                                            {{ $job->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <a href="{{ route('search-job') }}"
                            class="btn btn-light btn-block fw-semibold mb-4 looking-for-job">Lihat Lowongan Lebih
                            Banyak</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="container popular-searches mb-2">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-10 d-flex justify-content-center flex-wrap searches">
                        @foreach ($categories as $category)
                        <form action="{{ route('search-job') }}" method="GET" id="search-job" class="d-none">
                            <input type="search" name="search" value="{{ $category->name }}">
                        </form>
                        <a href="/job?search={{ $category->name }}" onclick="event.preventDefault();
                                                     document.getElementById('search-job').submit();"
                            class="category"><i class="bi bi-search"></i>
                            &nbsp;{{ $category->name }}</a>
                        @endforeach
<a href="{{ route('search-job', ['search' => 'jisoo']) }}"
    class="category"><i class="bi bi-search"></i>
    &nbsp;jisoo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="col-12 text-center">
                <div class="fw-bold fs-5">Perusahaan Rekomendasi Kami</div>
                <div class="text-secondary">Perusahaan-perusahaan terbaik ini mencari talenta seperti Anda</div>
            </div>
        </div>
        <div class="row mb-5 companies">
            @foreach ($companies as $company)
            <div class="col-6 col-md-4 col-lg-3">
                <a href="{{ route('company-detail', $company->slug) }}" class="d-block wrapper mb-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="content text-center">
                            <div class="w-100 d-flex justify-content-center mb-2">
                                <img src="{{ Storage::url($company->photo) }}" alt=""
                                    class="d-block rounded company-image">
                            </div>
                            <span class="company-name">{{ $company->name }}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-12 text-center">
                <div class="industries-title">Industries</div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($industries as $industry)
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#" class="d-block industries mb-4">
                    <div style="background-image: url('{{ Storage::url($industry->photo) }}');" class="back-img"></div>
                    <div class="industries-name">{{ $industry->name }}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('addon-style')
<style>
    .job-search .form-control {
        padding-left: 2.375rem;
    }

    .job-search .job-serach-icon {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .form-control {
        font-size: 14px;
    }

    .form-control:focus {
        box-shadow: 0 5px 10px #1e3a9b10;
    }

    .looking-for-job {
        box-shadow: 0 1px 2px #1e3a9b50;
    }
</style>
@endpush