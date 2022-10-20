@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')

     <div
            class="section-content"
            style="margin-top: 20px !important"
        >
            <div class="container">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">My Jobs</h2>
                    <p class="dashboard-subtitle">
                        Big result start from the small one
                    </p>
                </div>
                <div class="dashboard-content align-items-center">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <ul
                                class="nav nav-pills mb-3"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link active"
                                        id="pills-home-tab"
                                        data-toggle="pill"
                                        href="#pills-home"
                                        role="tab"
                                        aria-controls="pills-home"
                                        aria-selected="true"
                                        >My Jobs</a
                                    >
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="pills-home"
                                    role="tabpanel"
                                    aria-labelledby="pills-home-tab"
                                >
                                    <div
                                        href="/dashboard-transactions-details.html"
                                        class="card card-list d-block mb-2"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="row d-flex justify-content-between align-items-center"
                                            >
                                                <div
                                                    class="col-md-9 d-flex align-items-center"
                                                >
                                                    <div class="gambar">
                                                        <img
                                                            src="/images/nielsen.jfif"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="brand align-items-center pl-2"
                                                    >
                                                        <h5 class="company">
                                                            NIELSEN
                                                        </h5>
                                                        <div class="jobs">
                                                            Admin Sales
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <button
                                        type="button"
                                        class="btn btn-warning rounded-2 w-full btn-block mb-2 mt-4"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        <i class="bi bi-brush-fill"></i>
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                        Information Data
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
    <label for="inputPhoto" class="form-label">Your CV</label>
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/company.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                class="delete-gallery" 
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
                 <img src="/images/icon-delete.svg" alt="" />
                </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/foto.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                   class="delete-gallery" 
                   style=" display: block;
                           position: absolute;
                           top: -10px;
                           right: 0;">
                <img src="/images/icon-delete.svg" alt="" />
                 </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
             <div class="gambar">
             <img src="images/gambar.png" alt="" style="width: 130px" class="rounded-2 mb-3 ">
             <a href="" 
                class="delete-gallery"
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
             <img src="/images/icon-delete.svg" alt="" />
           </a>
            </div>
        </div>
    </div>
       <input type="file" class="form-control" id="inputPhoto">
                  </div>
                   </form>
                 </div>
                   <div class="modal-footer">
                    <button
                       type="button"
                       class="btn btn-success w-100" >
                          Add
                       </button>
                           </div>
                              </div>
                                 </div>
                                    </div>
                                 <button
                                     href=""
                                     class="btn btn-danger rounded-2 w-full btn-block" >
                                                        <i
                                                            class="bi bi-trash-fill"
                                                        ></i>
                                                        Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        href="/dashboard-transactions-details.html"
                                        class="card card-list d-block mb-2"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="row d-flex justify-content-between align-items-center"
                                            >
                                                <div
                                                    class="col-md-9 d-flex align-items-center"
                                                >
                                                    <div class="gambar">
                                                        <img
                                                            src="/images/nielsen.jfif"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="brand align-items-center pl-2"
                                                    >
                                                        <h5 class="company">
                                                            NIELSEN
                                                        </h5>
                                                        <div class="jobs">
                                                            Admin Sales
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <button
                                        type="button"
                                        class="btn btn-warning rounded-2 w-full btn-block mb-2 mt-4"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        <i class="bi bi-brush-fill"></i>
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                        Information Data
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
    <label for="inputPhoto" class="form-label">Your CV</label>
     <div class="row">
        <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/company.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                class="delete-gallery" 
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
                 <img src="/images/icon-delete.svg" alt="" />
                </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/foto.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                   class="delete-gallery" 
                   style=" display: block;
                           position: absolute;
                           top: -10px;
                           right: 0;">
                <img src="/images/icon-delete.svg" alt="" />
                 </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
             <div class="gambar">
             <img src="images/gambar.png" alt="" style="width: 130px" class="rounded-2 mb-3 ">
             <a href="" 
                class="delete-gallery"
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
             <img src="/images/icon-delete.svg" alt="" />
           </a>
            </div>
        </div>
    </div>
        <input type="file" class="form-control" id="inputPhoto" > 
             </div>
                 </form>
                    </div>
                   <div class="modal-footer">
                 <button
                    type="button"
                    class="btn btn-success w-50">
                         Add
                 </button>
                       </div>                             
                          </div>
                             </div>
                                </div>
                               <button
                              href=""
                              class="btn btn-danger rounded-2 w-full btn-block">
                              <i class="bi bi-trash-fill"></i>
                                Remove
                               </button>
                              </div>
                                   </div>
                                      </div>
                                    </div>
                                     <div
                                        href="/dashboard-transactions-details.html"
                                        class="card card-list d-block mb-2"
                                    >
                                        <div class="card-body">
                                            <div
                                                class="row d-flex justify-content-between align-items-center"
                                            >
                                                <div
                                                    class="col-md-9 d-flex align-items-center"
                                                >
                                                    <div class="gambar">
                                                        <img
                                                            src="/images/nielsen.jfif"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="brand align-items-center pl-2"
                                                    >
                                                        <h5 class="company">
                                                            NIELSEN
                                                        </h5>
                                                        <div class="jobs">
                                                            Admin Sales
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <button
                                        type="button"
                                        class="btn btn-warning rounded-2 w-full btn-block mb-2 mt-4"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                    >
                                        <i class="bi bi-brush-fill"></i>
                                        Edit
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                        Information Data
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
    <label for="inputPhoto" class="form-label">Your CV</label>
     <div class="row">
        <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/company.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                class="delete-gallery" 
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
                 <img src="/images/icon-delete.svg" alt="" />
                </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
            <div class="gambar">
                <img src="images/foto.jpg" alt="" style="width: 130px" class="rounded-2 mb-3 ">
                <a href="" 
                   class="delete-gallery" 
                   style=" display: block;
                           position: absolute;
                           top: -10px;
                           right: 0;">
                <img src="/images/icon-delete.svg" alt="" />
                 </a>
            </div>
        </div>
         <div class="col-md-4 col-12">
             <div class="gambar">
             <img src="images/gambar.png" alt="" style="width: 130px" class="rounded-2 mb-3 ">
             <a href="" 
                class="delete-gallery"
                style=" display: block;
                        position: absolute;
                        top: -10px;
                        right: 0;">
             <img src="/images/icon-delete.svg" alt="" />
           </a>
            </div>
        </div>
    </div>
    <input type="file" class="form-control" id="inputPhoto" >  
                    </div>
                      </form>
                     </div>
                       <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-success w-50">
                               Add
                           </button>
                          </div>
                         </div>
                        </div>
                      </div>
                     <button
                        href=""
                        class="btn btn-danger rounded-2 w-full btn-block">
                      <i class="bi bi-trash-fill"></i>
                         Remove
                       </button>
                            </div>
                              </div>
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


