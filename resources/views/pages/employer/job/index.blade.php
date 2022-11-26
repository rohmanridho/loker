@extends('layouts.employer')

@section('title', 'Lowongan Pekerjaan - Employer Dashboard | Needed')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Lowongan Pekerjaan</h2>
            <p class="dashboard-subtitle">Daftar Lowongan Pekerjaan</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('job.create') }}" class="btn btn-primary mb-3">+ Buat Lowongan Pekerjaan Baru</a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lowongan</th>
                                            <th>Perusahaan</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
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
										data: 'company.name',
										name: 'company.name'
								},
								{
										data: 'category.name',
										name: 'category.name'
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

@push('script')
<script>
    const deleteConfirm = (id,name) => {
        console.log(id);
        Swal.fire({
            title: 'Warning',
            text: "Menghapus lowongan kerja "+ name +"",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = '{{ route('job.destroy', ":id") }}'
                url = url.replace(':id', id)
                
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(){
                        Swal.fire(
                            'Deleted!',
                            'Data berhasil dihapus.',
                            'success'
                        )
                    }
                });
            // window.location = "/admin/categories/delete/"+ data +"";
            }
        })
    }

    console.log('menjadi orang sukses');
</script>
@endpush