@extends ('layouts.app')

@section('title', 'Followed')

@section('content')
<section class="page-save mt-2 mt-md-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="line-bottom mb-3">
                    <a href="{{ route('save') }}" class="save">Save</a>
                    <a href="{{ route('follow') }}" class="follow active">Follow</a>
                </div>

                <div class="row follow-section">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless">
                            @forelse ($follows as $follow)
                            <tr>
                                <td class="image">
                                    <img src="http://placeimg.com/150/150/people" alt="" class="rounded-circle">
                                </td>
                                <td class="description">
                                    <div class="company-name">{{ $follow->company->name }} - {{
                                        $follow->company->province->name }}</div>
                                    <div class="industries">{{ $follow->company->province->name }}</div>
                                </td>
                                <td class="button">
                                    <form></form>
                                    <form action="{{ route('follow-destroy', $follow->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-block w-100">
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
