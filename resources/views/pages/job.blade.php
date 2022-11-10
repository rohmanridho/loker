@extends('layouts.app')

@section('title', 'Job Search')

@section('content')
<section class="container mt-5">
    <div class="row mb-5">
        <div class="col-12">
            <form action="{{ route('job-search') }}" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-10">
                        <input type="search" name="search" id="" class="form-control" value="@php if(!empty($_REQUEST)) {
echo $_REQUEST['search'];} @endphp
">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
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
                                class="fw-semibold text-secondary d-block company-name ">{{ $job->company->name }}</a>
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
