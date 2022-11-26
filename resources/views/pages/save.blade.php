@extends ('layouts.app')

@section('title', 'Saved')

@section('content')
<section class="page-save mt-2 mt-md-4">
    <div class="container-fluid container-md">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="line-bottom mb-3">
                    <a href="{{ route('follow') }}" class="follow">Followed</a>
                    <a href="{{ route('save') }}" class="save active">Saved</a>
                </div>

                <div class="row save-section">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless">
                            @forelse ($saves as $save)
                            <tr>
                                <td class="image">
                                    <img src="{{ Storage::url($save->job->company->photo) }}" alt=""
                                        class="rounded-circle">
                                </td>
                                <td class="description">
                                    <a href="{{ route('job-detail', ['company' => $save->job->company->name, 'slug' => $save->job->slug]) }}" class="job-name">{{
                                        $save->job->name }}</a>
                                    <div class="company">{{ $save->job->company->name }} - {{
                                        $save->job->company->province->name }}</div>
                                </td>
                                <td class="button">
                                    <form></form>
                                    <form action="{{ route('save.destroy', $save->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-block w-100">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr class="empty">
                                <td colspan="3">
                                    <div class="h-75 w-100 text-center">
                                        <img src="{{ asset('images/no_data.png') }}" alt="" class="d-block mx-auto"
                                            style="width: 40%;">
                                        <span class="fw-semibold d-block mb-2">Belum Menyimpan Lowongan Pekerjaan</span>
                                        <a href="{{ route('search-job') }}" class="btn btn-primary">Cari Pekerjaan</a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
                @if ($save_count < 3) <div style="min-height: 50vh">
            </div>
            @endif
        </div>
    </div>
    </div>
</section>
@endsection

@push('addon-style')
<style>
    .page-save .save-section tr.empty:hover {
        background-color: #ffffff !important;
    }
</style>
@endpush