@extends('layouts.employer')

@section('title', 'Lowongan Pekerjaan - Employer Dashboard | Needed')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Lowongan Pekerjaan</h2>
            <p class="dashboard-subtitle">Buat Lowongan Perkerjaan Baru</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
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
                            <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="companies_id" value="{{ $company->id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Job</label>
                                            <input type="text" id="fname" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fcategory">Category</label>
                                            <select name="categories_id" id="fcategory" class="form-control">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fsalary">Salary</label>
                                            <input type="number" id="fsalary" name="salary" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ftype">Tipe Pekerjaan</label>
                                            <select name="type" id="ftype" class="form-control">
                                                <option value="Penuh waktu">Penuh Waktu</option>
                                                <option value="Paruh Waktu">Paruh Waktu</option>
                                                <option value="Pekerja Tetap">Pekerja Tetap</option>
                                                <option value="Kontrak">Kontrak</option>
                                                <option value="Remote">Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fschedule">Jadwal</label>
                                            <select name="schedule" id="fschedule" class="form-control">
                                                <option value="Setiap Hari">Setiap Hari</option>
                                                <option value="Senin sampai Jum'at">Senin sampai Jum'at</option>
                                                <option value="Senin sampai Sabtu">Senin sampai Sabtu</option>
                                                <option value="Shift Malam">Shift Malam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fdescription">Deskripsi Pekerjaan</label>
                                            <textarea name="description" id="editor"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="button" class="btn btn-outline-danger px-5 mr-2"
                                            onclick="history.back()">Batal</button>
                                        <button type="submit" class="btn btn-primary px-5">Buat</button>
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