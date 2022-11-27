@extends('layouts.employer')

@section('title', 'Lamaran Pekerjaan - Employer Dashboard | Needed')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Pelamar Pekerjaan</h2>
      <p class="dashboard-subtitle">Daftar Pelamar Pekerjaan</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive mt-4">
                <table class="table table-hover scroll-horizontal-vertical w-100">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Pelamar</th>
                      <th scope="col">Resume</th>
                      <th scope="col">Lowongan</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($applies as $apply)
                    <tr>
                      <th scope="row">
                        {{ $apply->id }}
                      </th>
                      <td>
                        {{ $apply->user->name }}
                      </td>
                      <td>
                        <div class="">
                          <a href="{{ Storage::url($apply->user->resume) }}" target="_blank"
                            rel="noopener noreferrer">Lihat</a>
                        </div>
                      </td>
                      <td>
                        {{ $apply->job->name }}
                      </td>
                      <td>
                        {{ $apply->status }}
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                          data-bs-target="#show-modal-{{ $apply->id}}"
                          data-bs-whatever="@getbootstrap">Contact</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                          data-bs-target="#edit-modal-{{ $apply->id }}" data-bs-whatever="@getbootstrap">Status</button>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6">
                        <p>Tidak ada yang melamar pekerjaan.</p>
                      </td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-end">{{ $applies->links() }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('modal')
@foreach ($applies as $item)
<div class="modal fade" id="edit-modal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tinjau lamaran pekerjaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('apply-update', $item->id) }}" method="POST">
        @csrf
        <div class="modal-body">
          <label for="fstatus">Status</label>
          <select name="status" id="fstatus" class="form-control">
            <option value="Diterima">Terima</option>
            <option value="Ditolak">Tolak</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@foreach ($applies as $item)
<div class="modal fade" id="show-modal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class=""><span class="fw-bold">Nama: </span>{{ $item->user->name }}</div>
        <div class=""><span class="fw-bold">Alamat: </span>{{ $item->user->address }}</div>
        <div class=""><span class="fw-bold">Email: </span>{{ $item->user->email }}</div>
        <div class=""><span class="fw-bold">No Telp: </span>{{ $item->user->phone_number }}</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection