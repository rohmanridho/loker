@extends('layouts.employer')

@section('title', 'Perusahaan - Employer Dashboard | Needed')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Perushaan Saya</h2>
      <p class="dashboard-subtitle">Status: {{ $company->status }}</p>
    </div>
    <div class="dashboard-content mb-4">
      <div class="row">
        <div class="col-md-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{ route('company.update') }}" method="POST" enctype="multipart/form-data">
                {{-- @method('PUT') --}}
                @csrf
                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="fname">Nama Perusahaan</label>
                      <input type="text" id="fname" name="name" class="form-control" value="{{ $company->name }}"
                        required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Logo Perusahaan</label>
                      <input type="file" name="photo" class="form-control mb-1">
                      &nbsp;<a href="{{ Storage::url($company->photo) }}" class="text-decoration-none" target="_blank"
                        style="font-size: 14px;">logo saat ini</a>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat Perusahaan</label>
                      <input type="text" name="address" class="form-control" value="{{ $company->address }}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="findustry">Industri</label>
                      <select name="industries_id" id="findustry" class="form-control">
                        <option value="{{ $company->industries_id }}" selected>{{
                          $company->industry->name }} (Tidak ganti)</option>
                        @foreach ($industries as $industry)
                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="fprovince">Provinsi</label>
                      <select name="provinces_id" id="fprovince" class="form-control">
                        <option value="{{ $company->provinces_id }}" selected>{{
                          $company->province->name }} (Tidak ganti)</option>
                        @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="fdescription">Description</label>
                      <textarea name="description" id="editor">{!! $company->description !!}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="fw-bold">Contact Information</div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Alamat Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $company->email }}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="text" name="phone" class="form-control" value="{{$company->phone }}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Dokumen Perusahaan</label>
                      <input type="file" name="document" class="form-control mb-1">
                      &nbsp;<a href="{{ Storage::url($company->document) }}" class="text-decoration-none" target="_blank"
                        style="font-size: 14px;">dokumen saat ini</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    {{-- <button type="button" class="btn btn-outline-danger px-5"
                      onclick="history.back()">Batal</button> --}}
                    <button type="submit" class="btn btn-primary px-5 mr-2">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
						.create(document.querySelector('#editor'))
						.then(editor => {
								console.log(editor);
						})
						.catch(error => {
								console.error(error);
						});
</script>
@endpush