@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs
@endsection

@section('content')
<section class="page-home mt-4 mt-lg-5">
    <div class="container">
        <form action=""></form>
        <form action="{{ route('job-search') }}" method="GET">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-12 col-md-8 mb-3">
                    <input type="text" name="search" class="form-control job-search h-100" placeholder="Search Job">
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <button type="submit" class="btn btn-primary fw-medium w-100 button-darkblue">Find jobs</button>
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
                <div class="row justify-content-lg-center">
                    <div class="col-12 col-lg-9">
                        <div class="row">
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
                                            <a href="{{ route('job-detail', $job->slug) }}">{{ $job->name }}</a>
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
                                            5 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="container popular-searches mb-2">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-10 d-flex justify-content-center flex-wrap searches">
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Admin</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Telemarketing</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Accounting</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Quality Control</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Fresh Graduate</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Marketing</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Manager</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;HRD</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;Bank</a>
                        <a href="" class="category"><i class="bi bi-search"></i> &nbsp;IT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-12 text-center">
                <div class="companies-title">Companies</div>
            </div>
        </div>
        <div class="row mb-5 companies">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="" class="d-block wrapper mb-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="content">
                            <div class="w-100 d-flex justify-content-center mb-2">
                                <img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/64x64/e17bdacd93d298b4601d675e7c1b986d"
                                    alt="" class="d-block company-image">
                            </div>
                            <span class="company-name">Gojek Indonesia</span>
                        </div>
                    </div>
                </a>
            </div>
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
