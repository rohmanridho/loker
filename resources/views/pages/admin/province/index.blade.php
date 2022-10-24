@extends ('layouts.admin')

@section('title', 'Provinces - Admin Dashboard')

@section('content')
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Province</h2>
								<p class="dashboard-subtitle">List of Provinces</p>
						</div>
						<div class="dashboard-content">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="card-body">
																<a href="{{ route('province.create') }}" class="btn btn-primary mb-3">+ Create New Province</a>
																<div class="table-responsive">
																		<table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
																				<thead>
																						<tr>
																								<th>ID</th>
																								<th>Name</th>
																								<th>Photo</th>
																								<th>Slug</th>
																								<th>Action</th>
																						</tr>
																				</thead>
																				<tbody></tbody>
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

@push('script')
		<script>
				var t = $('#crudTable').DataTable({
						processing: true,
						serverSide: true,
						ordering: true,
						ajax: {
								url: '{!! url()->current() !!}',

						},
						columnDefs: [{
								searchable: false,
								orderable: false,
								targets: 0,
						}, ],
						order: [
								[1, 'asc']
						],
						columns: [{
										data: 'id',
										name: 'id'
								},
								{
										data: 'name',
										name: 'name'
								},
								{
										data: 'photo',
										name: 'photo'
								},
								{
										data: 'slug',
										name: 'slug'
								},
								{
										data: 'action',
										name: 'action',
										orderable: false,
										searcable: false,
										width: '15%'

								},
						],
				});
				t.on('order.dt search.dt', function() {
						let i = 1;

						t.cells(null, 0, {
								search: 'applied',
								order: 'applied'
						}).every(function(cell) {
								this.data(i++);
						});
				}).draw();
		</script>
@endpush
