@extends('layouts.app')

@section('title', 'Job Detail')

@section('content')
<section class="page-job-detail mt-3 mt-md-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row sticky-top justify-content-between align-items-center py-2 header">
                    <div class="col-9 col-lg-10">
                        <h1>{{ $job->name }}</h1>
                        <a href="{{ route('company-detail', $job->company->slug) }}" class="company">{{
                            $job->company->name }} - {{ $job->company->province->name }}</a>
                    </div>
                    <div class="col-3 col-lg-2">
                        <form></form>
                        @auth
                        @php
                        $isNotOwner = $job->company->users_id !== Auth::user()->id;
                        @endphp
                        @if ($isNotOwner)
                        @if ($applyCount == 0)
                        <form action="{{ route('apply-job', $job->id) }}" method="POST" class="mb-2">
                            @csrf
                            <button type="submit" class="btn btn-block btn-primary">Apply</button>
                        </form>
                        @else
                            @csrf
                            <a href="{{ route('apply') }}" class="btn btn-block btn-primary mb-2">Reviewed</a>
                        @endif
                        @endif
                        @else
                        <a href="{{ route('login') }}" class="btn btn-block btn-primary mb-2">Apply</a>
                        @endauth
                        @auth
                        @if ($saveCount == 0)
                        <form action="{{ route('save-job', $job->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-success btn-block fw-light w-100">
                                Save
                            </button>
                        </form>
                        @else
                        <form action="{{ route('save-destroy', $save->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-success btn-block fw-light w-100">
                                Saved
                            </button>
                        </form>
                        @endif
                        @else
                        <a class="btn btn-block btn-outline-success fw-semibold w-100"
                            href="{{ route('login') }}">Save</a>
                        @endauth
                    </div>
                </div>
                <hr>
                <div class="row mt-4 job-details">
                    <div class="col-12">
                        <h2 class="mb-3">Job details</h2>
                        <div>
                            <h3><i class="bi bi-cash"></i> &nbsp; <span> &nbsp;</span>Salary</h3>
                            <i class="bi bi-cash"></i><span> &nbsp; </span><span> &nbsp;</span>
                            <p>{{ $job->salary }} an hour</p>
                        </div>
                        <div>
                            <h3><i class="bi bi-briefcase-fill"></i> &nbsp; <span> &nbsp;</span>Job type</h3>
                            <i class="bi bi-briefcase-fill"></i><span> &nbsp; </span>
                            <span> &nbsp;</span>
                            <p>{{ $job->type }}</p>
                        </div>
                        <div>
                            <h3><i class="bi bi-clock-fill"></i> &nbsp; <span> &nbsp;</span>Shift & Schedule</h3>
                            <i class="bi bi-clock-fill"></i><span> &nbsp; </span>
                            <span> &nbsp;</span>
                            <p>{{ $job->schedule }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4 job-description">
                    <div class="col-12">
                        <h2 class="mb-3">Full Job Description</h2>
                        <div>
                            {!! $job->description !!}
                        </div>
                        {{-- <div>
                            <h3>Job summery</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum quo recusandae pariatur
                                quasi accusamus dignissimos officiis minima alias doloribus saepe?</p>
                        </div>
                        <div>
                            <h3>Qualification</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum quo recusandae pariatur
                                quasi accusamus dignissimos
                                officiis minima alias doloribus saepe?</p>
                        </div>
                        <div>
                            <h3>Job description:</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum quo recusandae pariatur
                                quasi accusamus dignissimos
                                officiis minima alias doloribus saepe?</p>
                        </div> --}}
                    </div>
                </div>
                <div style="height: 100vh;"></div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection