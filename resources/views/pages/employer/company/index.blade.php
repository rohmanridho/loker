@extends('layouts.employer')

@section('title', 'Companies - Employer Dashboard')

@section('content')
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Company</h2>
								<p class="dashboard-subtitle">List of Companies</p>
						</div>
						<div class="dashboard-content">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="card-body">
																<a href="{{ route('company-create') }}" class="btn btn-primary mb-3">+ Create New Company</a>
																<div class="row">
																		<div class="col-12 col-md-4">
																				<form action="{{ route('company-dashboard') }}" method="GET" class="mb-2">
																						<input type="search" name="search" class="form-control">
																				</form>
																		</div>
																</div>
																<div class="table-responsive">
																		<table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
																				<thead>
																						<tr>
																								<th>Name</th>
																								<th>Photo</th>
																								<th>Industry</th>
																								<th>Province</th>
																								<th>Action</th>
																						</tr>
																				</thead>
																				<tbody>
																						@forelse ($companies as $company)
																								<tr>
																										<td>
																												{{ $company->name }}
																										</td>
																										<td>
																												<img src="{{ Storage::url($company->photo) }}" style="max-height:80px;" />
																										</td>
																										<td>
																												{{ $company->industry->name }}
																										</td>
																										<td>
																												{{ $company->province->name }}
																										</td>
																										<td>
																												<a href="">Preview</a> | 
																												<a href="{{ route('company-edit', $company->id) }}">Edit</a>
																										</td>
																								</tr>
																						@empty
																								<tr>
																										<td colspan="6">Data Not Found</td>
																								</tr>
																						@endforelse
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
