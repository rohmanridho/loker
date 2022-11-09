@extends('layouts.app')

@section('title', 'Job Search')

@section('content')
<section class="container mt-5">
    <div class="row">
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
        <div class="col-12">
            <h3 class="fw-bold mb-2">List Job</h3>
            <ul class="">
                @forelse ($jobs as $job)
                <li class="fw-semibold">{{ $job->name }}</li>
                @empty
                tolol
                @endforelse
            </ul>
        </div>
    </div>
</section>

@endsection