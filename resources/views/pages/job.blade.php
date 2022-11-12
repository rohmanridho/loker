@extends('layouts.app')

@section('title', 'Job Search')

@section('content')
<section class="page-job mt-5">
    <div class="container">
        <form action="{{ route('job-search') }}" method="GET">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-12 col-md-7">
                    <div class="form-group job-search">
                        <i class="bi bi-search job-serach-icon"></i>
                        <input type="search" name="search" class="form-control" placeholder="Cari Pekerjaan" value="@php if(!empty($_REQUEST)) {
echo $_REQUEST['search'];} @endphp">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 offset-1 mb-2">
                <div class=""><span class="fw-semibold">{{ $job_count }}</span> lowongan pekerjaan tersedia</div>
            </div>
            @forelse ($jobs as $job)
            <div class="col-10 offset-1 mb-4">
                <div class="border rounded">
                    <div class="row">
                        <div class="col-2">
                            <div class="px-4 pt-3">
                                <img src="{{ Storage::url($job->company->photo) }}" class=" rounded"
                                    style="width: 84px; height: 84px;object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="py-2 pr-2">
                                <a href="{{ route('job-detail', $job->id) }}" class="fw-bold fs-4 d-block job-name ">{{
                                    $job->name
                                    }}</a>
                                <a href="{{ route('company-detail', $job->company->id) }}"
                                    class="fw-semibold text-secondary d-block company-name ">{{ $job->company->name
                                    }}</a>
                                <div class="" style="font-size: 13px">{{ $job->company->province->name }}</div>
                                <div class="" style="font-size: 13px">{{ $job->type }}</div>
                                <div class="" style="font-size: 13px">IDR {{ number_format($job->salary) }}</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="border-start h-100">
                                <div class="p-4">
                                    <button class="btn btn-primary btn-block">Apply</button>
                                    @auth
                                    <form action="{{ route('job-save', $job->id) }}" method="POST" class="mt-1">
                                        @csrf
                                        <button type="submit" class="btn btn-block">Save</button>
                                    </form>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-block">Save</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            tolol
            @endforelse
        </div>
    </div>
</section>

@endsection

@push('addon-style')
<style>
    a.job-name {
        color: #333;
        text-decoration: none;
        transition: 0.3;
    }

    a.job-name:hover {
        color: #444;
    }

    a.company-name {
        text-decoration: none;
    }

    a.company-name:hover {
        text-decoration: underline
    }
</style>
@endpush

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
        /* color: currentColor; */
        color: #aaa;
    }

    .form-control {
        font-size: 14px;
    }

    .form-control:focus {
        box-shadow: 0 5px 10px #1e3a9b10;
    }
</style>
@endpush
