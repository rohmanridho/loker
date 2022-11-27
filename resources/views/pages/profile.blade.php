@extends('layouts.app')

@section('title', 'Profile | Needed')

@section('content')
<section class="page-profile mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <div class="row mb-4">
                    <div class="col-12 justify-content-sm-between align-items-center d-flex gap-3 gap-sm-0">
                        <div class="order-2 order-sm-1">
                            <div class="name">{{ Auth::user()->name }}</div>
                            <div class="text-secondary" style="font-size: 14px;">Menyimpan <span class="fw-bold">{{
                                    $saves }}</span> lowongan
                                pekerjaan</div>
                        </div>
                        <img src="@if (Auth::user()->avatar)
                            {{ Storage::url(Auth::user()->avatar) }}
                        @else
                            {{ asset('image/dummy-avatar.jpg') }}
                        @endif" alt="" class="profile-picture rounded-circle order-1 order-sm-2">
                    </div>
                </div>

                <div class="row mb-3 contact-information">
                    <div class="col-12">
                        <div class="info">
                            <div class="email mb-1 mb-sm-2">
                                <i class="bi bi-envelope-fill"></i> <span>&nbsp;</span>
                                {{ Auth::user()->email }}
                            </div>
                            <div class="phone-number mb-1 mb-sm-2">
                                <i class="bi bi-telephone-fill"></i> <span>&nbsp;</span>
                                @if (Auth::user()->phone_number)
                                {{ Auth::user()->phone_number }}
                                @else
                                <a href="{{ route('contact-settings') }}" class="">belum diisi</a>
                                @endif
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt-fill"></i> <span>&nbsp;</span>
                                @if (Auth::user()->city)
                                {{ Auth::user()->city }}
                                @else
                                <a href="{{ route('contact-settings') }}" class="">belum diisi</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-1 fs-5 fw-semibold" style="color: #555;">Resume</h2>
                    @if (Auth::user()->resume != NULL)
                    <form action="{{ route('resume.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="resume" class="d-none" onchange="form.submit()" id="resume-edit">
                        <button type="button" class="d-inline-block" id="edit"
                            onclick="document.getElementById('resume-edit').click()">
                            <i class="bi bi-pencil-square" title="Ganti Resume"></i>
                        </button>
                    </form>
                    @endif
                </div>

                <div class="col-12">
                    @if (Auth::user()->resume == NULL)
                    <div class="">
                        <form action="{{ route('resume.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="resume" class="d-none" onchange="form.submit()" id="resume-create">
                            <button type="button" class="btn btn-primary btn-block fw-bold"
                                onclick="document.getElementById('resume-create').click()">
                                Upload Resume
                            </button>
                        </form>
                    </div>
                    @else
                    <div class="">
                        <a href="{{ Storage::url(Auth::user()->resume) }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary">Lihat Resume</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div style="height: 23vh"></div>
    </div>
</section>
@endsection

@push('addon-style')
<style>
    .name {
        font-size: 1.875rem;
        line-height: 1.5;
        font-weight: 700;
        color: #555;
    }

    .profile-picture {
        width: 80px;
        height: 80px;
        object-fit: cover;
    }

    .contact-information .info {
        padding: .9rem 1.25rem 1rem 1.35rem;
        background-color: #1e3a9b10;
        border-radius: 8px;
    }

    .contact-information .info .email,
    .contact-information .info .phone-number,
    .contact-information .info .location {
        font-size: 15px;
        color: #555;
    }

    .contact-information .info i {
        font-size: 14px;
        color: #555;
    }

    @media (max-width: 576px) {
        .name {
            font-size: 1.5rem;
        }

        .profile-picture {
            width: 70px;
            height: 70px;
        }

        .contact-information .info {
            padding: .785rem 1.125rem 1rem 1.15rem;
        }
    }

    #edit {
        background-color: transparent;
        border: none;
    }

    #edit i {
        font-size: 20px;
    }
</style>
@endpush

@push('addon-script')
@if (Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}", {"iconClass": 'toast-success'});
</script>
@endif
@endpush