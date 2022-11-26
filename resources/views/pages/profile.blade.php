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
                        </div>
                        <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt=""
                            class="profile-picture rounded-circle order-1 order-sm-2">
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
                                {{ Auth::user()->phone_number }}
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt-fill"></i> <span>&nbsp;</span>
                                {{ Auth::user()->city }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-1 fs-4 fw-semibold" style="color: #555;">Resume</h2>
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
    </div>
    </div>
</section>
{{-- <div class="profile">
    <div class="container">
        <div class="row d-flex justify-content-center title">
            <div class="col-12 col-md-6">
                <div class="account d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2>{{ $user->name }}</h2>
                    </div>
                    <div class="gambar">
                        <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="">
                    </div>
                </div>
                <a href="{{ route('contact-settings') }}" class="card edit-profile text-decoration-none">
                    <div class="card-body">
                        <div class="email">
                            <div class="account-name"><i class="bi bi-envelope-fill" style="padding-right: 6px;"></i> {{
                                $user->email }}</div>
                        </div>
                        <div class="phone d-flex justify-content-between align-items-center">
                            <div class="phone_number"><i class="bi bi-telephone-fill" style="padding-right: 6px;"></i>
                                {{ $user->phone_number }}</div>
                            <div><i class="bi bi-chevron-right" style="color: black;"></i></div>
                        </div>
                        <div class="location">
                            <div class="user-location"><i class="bi bi-geo-alt-fill" style="padding-right: 6px;"></i> {{
                                $user->address }}</div>
                        </div>
                    </div>
                </a>
                <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                    <h2 class="mb-1 fs-4 fw-semibold" style="color: #555;">Resume</h2>
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
    </div>
</div> --}}
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

    #toast-container>.toast-success {
        background-image:
            url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important;
        background-color: #51a351;
        top: 70px;
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