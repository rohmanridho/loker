@extends('layouts.admin')

@section('title', 'Categories - Admin Dashboard | Needed')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Category</h2>
            <p class="dashboard-subtitle">List of Categories</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                            <p class="alert alert-success" id="message">{{ session('success') }}</p>
                            @endif
                            <button type=" button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#create-modal" data-bs-whatever="@getbootstrap">+ Create New
                                Category</button>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
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

@section('modal')
<div class="modal fade" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fname">Category</label>
                        <input type="text" id="fname" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($categories as $category)
<div class="modal fade" id="edit-modal-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fname">Category</label>
                        <input type="text" id="fname" name="name" class="form-control" value="{{ $category->name }}"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('script')
<script>
    const deleteConfirm = (id,name) => {
        console.log(id);
        Swal.fire({
            title: 'Warning',
            text: "Menghapus kategori "+ name +"",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                let url = '{{ route('categories.destroy', ":id") }}'
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

    // const deleteConfirm = (data) => {
    //     console.log(data);
    //     var categoryId = $(this).data('id');
    //     const categoryName = $('.deleteButton').attr('data-name');
    //     console.log(categoryId);
    //     console.log(categoryName);
    //     swal({
    //         title: "Are you sure?",
    //         text: "Once deleted, you will not be able to recover this imaginary file!",
    //         icon: "warning",
    //         buttons: true,
    //         dangerMode: true,
    //     })
    //     .then((willDelete) => {
    //     if (willDelete) {
    //         let url = '{{ route("categories.destroy", ":id") }}'
    //         url = url.replace(':id', data)

    //         $.ajax({
    //             type: 'POST',
    //             url: url,
    //             data: {
    //                 '_method': 'DELETE',
    //                 '_token': '{{ csrf_token() }}'
    //             },
    //             success: function(){
    //                 swal("Poof! Your imaginary file has been deleted!", {
    //                     icon: "success",
    //                 });
    //             }
    //         })
    //     } else {
    //     swal("Your imaginary file is safe!");
    //     }
    //     });
    // }

    console.log('menjadi orang sukses');
</script>
@endpush

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
