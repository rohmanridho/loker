@extends('layouts.app')

@section('title', 'Detail Lowongan Pekerjaan '. $job->name .' | Needed')

@section('content')
<section class="page-job-detail mt-3 mt-md-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row sticky-top justify-content-between align-items-center py-2 header">
                    <div class="col-12 col-lg-10">
                        <h1 class="fw-bold">{{ $job->name }}</h1>
                        <a href="{{ route('company-detail', $job->company->slug) }}" class="text-secondary">{{
                            $job->company->name }} - {{ $job->company->province->name }}</a>
                    </div>
                    <div class="col-lg-2 d-none d-md-block">
                        <form></form>
                        @auth
                        @if ($job->company->users_id !== Auth::user()->id)
                        @if ($applyCount == 0)
                        <form action="{{ route('apply-job', $job->id) }}" method="POST" class="mb-2">
                            @csrf
                            <button type="submit" class="btn btn-block btn-primary">Apply</button>
                        </form>
                        @else
                        <a href="{{ route('apply') }}" class="btn btn-block btn-primary mb-2">Reviewed</a>
                        @endif
                        @endif
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
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-block btn-primary mb-2">Apply</a>
                        <a class="btn btn-block btn-outline-success fw-semibold w-100"
                            href="{{ route('login') }}">Save</a>
                        @endguest
                    </div>
                </div>

                <hr style="background-color: #555">

                <div class="row mt-4 job-details">
                    <div class="col-12">
                        <h2 class="mb-3">Detail Pekerjaan</h2>
                        <div>
                            <h3><i class="bi bi-cash"></i> &nbsp; <span> &nbsp;</span>Gaji</h3>
                            <i class="bi bi-cash"></i><span> &nbsp; </span><span> &nbsp;</span>
                            <p>IDR {{ number_format($job->salary) }}</p>
                        </div>
                        <div>
                            <h3><i class="bi bi-briefcase-fill"></i> &nbsp; <span> &nbsp;</span>Tipe Pekerjaan</h3>
                            <i class="bi bi-briefcase-fill"></i><span> &nbsp; </span>
                            <span> &nbsp;</span>
                            <p>{{ $job->type }}</p>
                        </div>
                        <div>
                            <h3><i class="bi bi-clock-fill"></i> &nbsp; <span> &nbsp;</span>Jadwal</h3>
                            <i class="bi bi-clock-fill"></i><span> &nbsp; </span>
                            <span> &nbsp;</span>
                            <p>{{ $job->schedule }}</p>
                        </div>
                    </div>
                </div>

                <hr style="background-color: #555">

                <div class="row mt-4 job-description">
                    <div class="col-12">
                        <h2 class="mb-3 fs-5 fw-bold">Deskripsi</h2>
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

                <hr style="background-color: #555">

                <div class="row">
                    <h2 class="fs-5 fw-bold">Tentang Perusahaan</h2>
                    <div class="">
                        {!! $job->company->description !!}
                    </div>
                </div>

                <hr class="d-block d-md-none" style="background-color: #555">

                <div class="row d-block d-md-none sticky-bottom mb-2" style="bottom: 10px">
                    <div class="col-12">
                        <form></form>
                        @auth
                        @if ($job->company->users_id !== Auth::user()->id)
                        @if ($applyCount == 0)
                        <form action="{{ route('apply-job', $job->id) }}" method="POST" class="mb-2">
                            @csrf
                            <button type="submit" class="btn btn-block btn-primary py-2">Lamar Pekerjaan</button>
                        </form>
                        @else
                        <a href="{{ route('apply') }}" class="btn btn-block btn-primary mb-2">Melamar Pekerjaan</a>
                        @endif
                        @endif

                        @else
                        <a href="{{ route('login') }}" class="btn btn-block btn-primary py-2 fw-bold">Lamar
                            Pekerjaan</a>
                        @endauth
                    </div>
                </div>
                <div class="row d-block d-md-none">
                    <div class="col-12">
                        @auth
                        @if ($saveCount == 0)
                        <form action="{{ route('save-job', $job->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-success btn-block fw-light w-100 py-2">
                                Simpan
                            </button>
                        </form>
                        @else
                        <form action="{{ route('save-destroy', $save->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-success btn-block fw-light w-100 py-2">
                                Tersimpan
                            </button>
                        </form>
                        @endif
                        @else
                        <a class="btn btn-block btn-outline-success fw-semibold w-100 py-2"
                            href="{{ route('login') }}">Simpan</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection