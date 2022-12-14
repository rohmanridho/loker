@extends ('layouts.app')

@section('title', 'Followed')

@section('content')
<section class="page-save mt-2 mt-md-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="line-bottom mb-3">
                    <a href="{{ route('follow.index') }}" class="follow active">Followed</a>
                    <a href="{{ route('save.index') }}" class="save">Saved</a>
                </div>

                <div class="row follow-section">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless">
                            @forelse ($follows as $follow)
                            <tr>
                                <td class="image">
                                    <img src="{{ Storage::url($follow->company->photo) }}" class="rounded-circle">
                                </td>
                                <td class="description">
                                    <div class="company-name">{{ $follow->company->name }} - {{
                                        $follow->company->province->name }}</div>
                                    <div class="industries">{{ $follow->company->province->name }}</div>
                                </td>
                                <td class="button">
                                    <form></form>
                                    <form action="{{ route('follow.destroy', $follow->id) }}" method="POST">
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
                                        <span class="fw-semibold d-block mb-2">Belum Mengikuti Perusahaan</span>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
                @if ($follows->count() < 3) <div style="min-height: 28vh">
                    @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('addon-style')
<style>
    .page-save .follow-section tr.empty:hover {
        background-color: #ffffff !important;
    }
</style>
@endpush