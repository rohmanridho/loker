@extends ('layouts.app')

@section('title', 'Saving')

@section('content')
<section class="page-save mt-2 mt-md-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="line-bottom mb-3">
                    <a href="{{ route('save') }}" class="save active">Save</a>
                    <a href="{{ route('follow') }}" class="follow">Follow</a>
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
                                    <div class="job-name">{{ $save->job->name }}</div>
                                    <div class="company">{{ $save->job->company->name }} - {{
                                        $save->job->company->province->name }}</div>
                                </td>
                                <td class="button">
<form></form>
                                    <form action="{{ route('save-destroy', $save->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-block w-100">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            tolol
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection