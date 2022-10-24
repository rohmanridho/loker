@extends('layouts.employer')

@section('title', 'Companies Employer Dashboard')

@section('content')
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Industry</h2>
								<p class="dashboard-subtitle">Edit Industry</p>
						</div>
						<div class="dashboard-content">
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
																<form action="{{ route('company-update', $company->id) }}" method="POST" enctype="multipart/form-data">
																		@csrf
																		<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label for="fname">Company</label>
																								<input type="text" id="fname" name="name" class="form-control"  value="{{ $company->name }}" required>
																						</div>
																				</div>
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>Photo</label>
																								<input type="file" name="photo" class="form-control" required>
																						</div>
																				</div>
																				<div class="col-md-6">
																						<div class="form-group">
																								<label for="findustry">Industry</label>
																								<select name="industries_id" id="findustry" class="form-control">
																									<option value="{{ $company->industries_id }}" selected>{{ $company->industry->name }}</option>
																										@foreach ($industries as $industry)
																												<option value="{{ $industry->id }}">{{ $industry->name }}</option>
																										@endforeach
																								</select>
																						</div>
																				</div>
																				<div class="col-md-6">
																						<div class="form-group">
																								<label for="fprovince">Province</label>
																								<select name="provinces_id" id="fprovince" class="form-control">
																									<option value="{{ $company->provinces_id }}" selected>{{ $company->province->name }}</option>
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
																		</div>
																		<div class="row">
																				<div class="col text-right">
																						<button type="submit" class="btn btn-success px-5">Update</button>
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
