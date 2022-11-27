@extends('layouts.app')

@section('title', 'Detail Perusahaan ' . $company->name . ' | Needed ')

@section('content')
<section class="page-company-detail mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="row sticky-top justify-content-between align-items-center py-3 header">
                    <div class="col-8 col-lg-10">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ Storage::url($company->photo) }}" class="d-inline-block rounded-1"
                                alt="Traveloka">
                            <h1>{{ $company->name }}</h1>
                        </div>
                    </div>
                    <div class="col-4 col-lg-2">
                        <form></form>
                        @auth
                        @php
                        $followed = App\Models\Follow::where([
                        'users_id' => Auth::user()->id,
                        'companies_id' => $company->id
                        ])->count();
                        @endphp
                        @if ($followed == 0)
                        <form action="{{ route('follow', $company->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">
                                Ikuti
                            </button>
                        </form>
                        @else
                        <a href="{{ route('follow.index') }}" class="btn btn-block btn-success">Diikuti</a>
                        @endif
                        @else
                        <a class="btn btn-block btn-primary fw-semibold w-100" href="{{ route('login') }}">Ikuti</a>
                        @endauth
                    </div>
                </div>
                <div class="row mt-4 company-description">
                    <div class="col-12">
                        <h2 class="fs-5 fw-bold mb-2">Tentang Perusahaan</h2>
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
            </div>
        </div>
    </div>
</section>
@endsection