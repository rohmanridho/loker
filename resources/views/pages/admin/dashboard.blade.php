@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Admin Dashboard</h2>
								<p class="dashboard-subtitle">This is an admin dashboard</p>
						</div>
						<div class="dashboard-content">
								<div class="row">
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Users</div>
																<div class="dashboard-card-subtitle">{{ $users }}</div>
														</div>
												</div>
										</div>
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Companies</div>
																<div class="dashboard-card-subtitle">{{ $companies }}</div>
														</div>
												</div>
										</div>
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Jobs</div>
																<div class="dashboard-card-subtitle">{{ $jobs }}</div>
														</div>
												</div>
										</div>
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Industries</div>
																<div class="dashboard-card-subtitle">{{ $industries }}</div>
														</div>
												</div>
										</div>
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Categories</div>
																<div class="dashboard-card-subtitle">{{ $categories }}</div>
														</div>
												</div>
										</div>
										<div class="col-md-4">
												<div class="card mb-4">
														<div class="card-body">
																<div class="dashboard-card-title">Provinces</div>
																<div class="dashboard-card-subtitle">{{ $provinces }}</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection

@push('style')
		<style>
				.card .dashboard-card-title {
						font-size: 16px;
						line-height: 24px;
						color: #c5c5c5;
				}

				.card .dashboard-card-subtitle {
						font-weight: 600;
						font-size: 32px;
						line-height: 48px;
						color: #0c0d36;
				}
		</style>
@endpush
