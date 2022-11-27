@extends('layouts.app')

@section('title', 'Melamar Pekerjaan')

@section('content')
<section class="page-apply mt-4">
    <div class="container">
        <div class="row justify-content-center">
            @if ($apply_status != 0)
            <h1 class="col-12 col-md-10 fs-5 mb-3">
                <span class="fw-semibold">Lamaran Pekerjaan</span><span class="text-secondary fw-light"> | Sedang
                    Diproses</span>
            </h1>
            @endif
            @foreach ($applies as $apply)
            <div class="col-12 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-md-5 pl-md-5">
                                <div class="d-flex flex-column">
                                    <div class="mb-3">
                                        <div class="text-secondary">Pekerjaan</div>
                                        <div class="">{{ $apply->job->name }}</div>
                                    </div>
                                    <div class="">
                                        <div class="text-secondary">Perusahaan</div>
                                        <div class="">{{ $apply->job->company->name }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="d-flex flex-column">
                                    <div class="mb-3">
                                        <div class="text-secondary">Tanggal</div>
                                        <div class="">{{ $apply->created_at->toDateString() }}</div>
                                    </div>
                                    <div class="">
                                        <div class="text-secondary">Status</div>
                                        <div class="">{{ $apply->status }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-none d-md-flex pr-5 justify-content-center flex-column gap-2">
                                <a href="{{ route('generate-pdf', $apply->id) }}"
                                    class="btn btn-outline-primary btn-block w-100 fw-medium" target="_blank"
                                    style="font-size: 14px;">Cetak
                                    Bukti</a>
                                <form action="{{ route('apply.destroy', $apply->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block w-100"
                                        style="font-size: 14px;">
                                        Batal
                                    </button>
                                </form>
                            </div>
                            <div class="col-12 d-md-none mt-4">
                                <a href="{{ route('generate-pdf', $apply->id) }}"
                                    class="btn btn-outline-primary btn-block w-100 fw-medium mb-2" target="_blank"
                                    style="font-size: 14px;">Cetak
                                    Bukti</a>
                                <form action="{{ route('apply.destroy', $apply->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block w-100"
                                        style="font-size: 14px;">
                                        Batal
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($applies->count() <= 1) <div class="" style="height: 50vh;">
    </div>
    @endif
    </div>
</section>
@endsection

@push('addon-script')
<script>
    const congratulation = () => {
        Swal.fire(
            'Selamat',
            'Silakan datang ke perusahaan untuk interview',
            'success'
        )
    }
    console.log('hello world');
</script>
@endpush