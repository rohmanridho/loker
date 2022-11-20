@extends('layouts.app')

@section('title', 'Melamar Pekerjaan')

@section('content')
<section class="page-apply mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 fw-bold fs-3 mb-3">Lamaran Pekerjaan</div>
            <div class="col-12 col-md-10 table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <th>Pekerjaan</th>
                        <th>Perusahaan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @forelse ($applies as $apply)
                    <tr>
                        <td class="">
                            <div class="">{{ $apply->job->name }}</div>
                        </td>
                        <td class="">
                            <div class="">{{ $apply->job->company->name }}</div>
                        </td>
                        <td class="">
                            <div class="">{{ $apply->status }}</div>
                        </td>
                        <td class="button">
                            <form></form>
                            @if ($apply->status == 'ditinjau')
                                <form action="{{ route('apply-destroy', $apply->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-block w-50">
                                        Batal
                                    </button>
                                </form>
                            @elseif ($apply->status == 'diterima')
                                <button class="btn btn-outline-primary" onclick="congratulation()">Pesan</button>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            <div class="h-75 w-100 text-center">
                                <img src="{{ asset('images/no_data.png') }}" alt="" class="d-block mx-auto"
                                    style="width: 40%;">
                                <span class="fw-semibold d-block mb-2">Belum Melamar Pekerjaan</span>
                                <a href="{{ route('search-job') }}" class="btn btn-primary">Cari Pekerjaan</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </table>
            </div>
            {{ $applies->links() }}
        </div>

    </div>
</section>
@endsection

@push('addon-script')
    <script>
    $('.congratulation').on('click', function(){
        const status = $(this).data('id');
        alert(id);
    })

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