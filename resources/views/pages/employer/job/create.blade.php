@extends('layouts.employer')

@section('title', 'Jobs Employer Dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Job</h2>
            <p class="dashboard-subtitle">Create New Job</p>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Job</label>
                                            <input type="text" id="fname" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fcompany">Company</label>
                                            <select name="companies_id" id="fcompany" class="form-control">
                                                @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                @endforeach
                                            </select>
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fsalary">Salary</label>
                                            <input type="number" id="fsalary" name="salary" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ftype">Job Type</label>
                                            <select name="type" id="ftype" class="form-control">
                                                <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                                <option value="Contract">Contract</option>
                                                <option value="Remote">Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fschedule">Schedule</label>
                                            <select name="schedule" id="fschedule" class="form-control">
                                                <option value="Monday to Friday">Monday to Friday</option>
                                                <option value="Monday to Saturday">Monday to Saturday</option>
                                                <option value="Day Shift">Day Shift</option>
                                                <option value="Night Shift">Night Shift</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fdescription">Description</label>
                                            <textarea name="description" id="editor"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-primary px-5 mr-2">Create</button>
                                        <button type="button" class="btn btn-outline-danger px-5"
                                            onclick="history.back()">Cancel</button>
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
