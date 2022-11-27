@extends('layouts.app')

@section('title', 'Temukan Pekerjaan Impianmu | Needed')

@section('content')
<section class="page-job mt-5">
  <div class="container">
    <form action="{{ route('search-job') }}" method="GET">
      <div class="row d-flex justify-content-center mb-4">
        <div class="col-12 col-md-7">
          <div class="form-group job-search">
            <i class="bi bi-search job-serach-icon"></i>
            <input type="search" name="search" class="form-control" placeholder="Cari Pekerjaan"
              value="{{ request('search') }}">
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="container">
    <div class="row">
      @if ($jobs->count() > 0)
      <div class="col-12 col-md-10 offset-0 offset-md-1 mb-2">
        <div class="" style="font-size: 14px"><span class="fw-bold">{{ $jobs->count() }}</span> lowongan
          pekerjaan
          tersedia.</div>
      </div>
      @endif

      @forelse ($jobs as $job)
      <div class="col-12 col-md-10 offset-0 offset-md-1 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-9">
                <div class="d-flex flex-column flex-md-row gap-2 gap-md-4 mb-3 mb-md-0">
                  <div class="">
                    <img src="{{ Storage::url($job->company->photo) }}" class=" rounded"
                      style="width: 84px; height: 84px;object-fit: cover;">
                  </div>
                  <div class="">
                    <a href="{{ route('job-detail', ['company' => $job->company->slug,'slug' => $job->slug]) }}"
                      class="fw-bold fs-5 d-block job-name">{{
                      $job->name
                      }}</a>
                    <a href="{{ route('company-detail', $job->company->slug) }}"
                      class="text-secondary d-block company-name mb-2">{{
                      $job->company->name
                      }}</a>
                    <ul class="mb-0" style="list-style: disc">
                      <li class="" style="font-size: 13px">{{ $job->company->province->name }}
                      </li>
                      <li class="" style="font-size: 13px">{{ $job->type }}</li>
                      <li class="" style="font-size: 13px">IDR {{ number_format($job->salary) }}
                      </li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="col-12 col-md-3">
                <div class="h-100">
                  <div class="d-none d-md-block">
                    @auth
                    @php
                    $isNotOwner = $job->company->users_id !== Auth::user()->id;
                    $applies = App\Models\Apply::where('users_id',
                    Auth::user()->id)->where('jobs_id',
                    $job->id
                    )->count();
                    @endphp
                    @if ($applies == 0)
                    @if ($isNotOwner)
                    <form action="{{ route('apply', $job->id) }}" method="POST" class="mb-2">
                      @csrf
                      <button type="submit" class="btn btn-block btn-primary mb-2">Apply</button>
                    </form>
                    @endif
                    @else
                    <a href="{{ route('apply.index') }}" class="btn btn-block btn-primary mb-2">Applied</a>
                    @endif
                    @else
                    <a href="{{ route('login') }}" class="btn btn-block btn-primary mb-2">Apply</a>
                    @endauth
                    @auth
                    {{-- @php
                    $isNotSave = $job->simpan->users_id == Auth::user()->id;
                    // && $job->simpan->jobs_id == $job->id;
                    dd($isNotSave);
                    @endphp --}}
                    @php
                    $saves = App\Models\Save::where('users_id', Auth::user()->id)->where('jobs_id',
                    $job->id
                    )->count();
                    @endphp
                    @if ($saves == 0)
                    <form action="{{ route('save', $job->id) }}" method="POST" class="">
                      @csrf
                      <button type="submit" class="btn btn-block btn-outline-success">Save</button>
                    </form>
                    @else
                    <a href="{{ route('save.index') }}" class="btn btn-success btn-block">Saved</a>
                    {{-- <form action="{{ route('save.destroy', $job->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-success btn-block">
                        Saved
                      </button>
                    </form> --}}
                    @endif
                    @else
                    <a href="{{ route('login') }}" class="btn btn-block btn-outline-success">Save</a>
                    @endauth
                  </div>
                  <div class="d-block d-md-none">
                    <a href="{{ route('job-detail', ['company' => $job->company->slug,'slug' => $job->slug]) }}"
                      class="btn btn-block btn-outline-primary">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      <div class="col-10 offset-1">
        <div class="text-center text-secondary" style="font-size: 32px;">Tidak ditemukan</div>
      </div>
      @endforelse
      @if ($jobs->count() < 3) <div style="min-height: 60vh">
    </div>
    @endif
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