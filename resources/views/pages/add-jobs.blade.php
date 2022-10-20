@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
     <div class="jobs-details mt-3">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-4 col-12">
                    <div class="company d-flex align-items-center">
                        <img src="/images/nielsen.jfif" alt="" class="shadow bg-body rounded mb-3">
                        <h4>Nielsen</h4>
                    </div>
                </div>
                 <div class="col-md-3 col-12">
                <div class="button">
                    <button type="button" class="follow btn btn-primary font-weight-bold rounded-3">Follow</button>
                    <button type="button" class="btn btn-outline-primary rounded-3 font-weight-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Review</button>
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make a Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success w-50">Save</button>
      </div>
    </div>
  </div>
</div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="garis" style="border: 0.1px #939393 solid;
        height: 0.1px;
        width: 100%;"></div>

    <div class="jobs-details-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                 <nav aria-label="breadcrumb">
                 <ol class="breadcrumb mt-3" style="background: none;">
                 <li class="breadcrumb-item"><a href="{{ route('company') }}">Back</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Jobs Details</li>
                  </ol>
                   </nav>
                </div>
            </div>
            <div class="jobs-title">
                <h4 class="font-weight-bold mb-3">Nielsen Lowongan dan karier</h4>
            </div>
            <div class="details-jobs">
                 <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="jobs d-flex align-items-center">
                                <img src="/images/nielsen.jfif" alt="" class="shadow bg-body rounded">
                                <div class="jobs-name">ADMIN SALES</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <button
                                        type="button"
                                        class="btn btn-primary rounded-2 font-weight-bold w-full btn-block mt-3 mb-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1"
                                    >
                                        Add Jobs
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal1"
                                        tabindex="-1"
                                        aria-labelledby="exampleModalLabel"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title d-flex justify-content-center"
                                                        id="exampleModalLabel"
                                                    >
                                                        Find Jobs
                                                    </h5>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    ></button>
                                                </div>
                                                <div class="modal-body">
                                                  <form class="row g-3">
  <div class="col-md-6">
    <label for="inputName" class="form-label">Name</label>
    <input type="email" class="form-control" id="inputName">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="password" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputNumber="form-label">Phone Number</label>
    <input type="number" class="form-control" id="inputNumber" placeholder="089539384938">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  
  <div class="col-md-5">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputPhoto" class="form-label ">Your CV</label>
    <input type="file" class="form-control" id="inputPhoto" >
 </div>
</form>
      </div>
          <div class="modal-footer">
             <button
               type="button"
               class="btn btn-success w-100">
               Add
             </button>
            </div>
          </div>
            </div>
              </div>
             </div>
            </div>
                <div class="garis"></div>
                    <div class="description mt-2">
                      <div class="syarat">Persyaratan : </div>
                        <div class="isi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fugit repudiandae hic. Necessitatibus, temporibus. Sed rerum dolorem quam debitis, tempora, temporibus quidem consequuntur labore vero maxime qui. Ea, perspiciatis totam optio aliquam delectus rerum voluptatem perferendis culpa quam dolorem necessitatibus, nemo sunt reprehenderit dolorum rem consequatur ex, magnam aspernatur officia. Labore harum corrupti excepturi fugiat doloremque at quidem consectetur fuga vitae? Quaerat laborum omnis earum ad consectetur iste quae assumenda vitae dignissimos officia. Nemo voluptatem ad, ea tenetur iusto cupiditate aliquid repudiandae id quia consectetur sapiente deserunt voluptates libero velit reprehenderit, vel eius nostrum tempora repellendus laboriosam nisi nam illum!</div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
           
            </div>
        </div>
    </div>
    
@endsection


