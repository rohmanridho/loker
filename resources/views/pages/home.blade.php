@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
           <div class="page-content" style="padding-top: 40px;">
          <div class="container"
               data-aos="fade-up">
          <div class="row justify-content-center" >
          <div class="col-md-4 mt-2">
            <input
              type="text"
              class="form-control"
              placeholder="Jabatan, Kata kunci, Atau nama perusahaan"
            />
          </div>
          <div class="col-md-4 mt-2">
            <input
              type="text"
              class="form-control"
              placeholder="Kota atau Provinsi"
            />
          </div>
          <div class="col-md-2 col-12 mt-2">
            <a href="#" type="submit" class="btn btn-primary rounded-3 font-weight-bold d-md-flex w-full btn-block">Find Companies </a>
          </div>
          </div>
            <div class="row text-center">
            <div class="col-md-12 mt-4">
            <span>
              <a href="" class="text-primary">Pasang CV Disini - </a></span
            >
            <span class="text-white">Hanya butuh beberapa detik saja</span>
        </div>
        </div>
              <div class="row ">
              <div class="title text-center">
              <div class="col-md-12 mt-3 mb-5">
                 <span
                ><a href="" class="text-primary"
                  >Untuk Perusahaan Pasang Lowongan Kerja -
                </a></span>
              <span class="text-white">Cari Karyawan Baru Anda Disini</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-3 ">
                    <ul
                      class="nav nav-pills mb-3 justify-content-center align-items-center"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item text-center" role="presentation">
                        
                        <a
                          class="nav-link active align-items-center "
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Find Jobs<span class="badge bg-secondary ml-2">New</span></a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Popular Searches</a
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
                        <div class="container">
                          <div class="row d-flex justify-content-center">
                            
                             <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="200">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/logo.jpg" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">TransTv</h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                          
                           <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="300">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/c.png" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">DigiTiket</h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="400">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/b.jfif" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">Nasa </h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum dolor sit amet consectetur, adipisicing elit..</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                          
                             <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="500">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/nike.png" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">Nike</h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                              <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="600">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/d.png" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">Xiaomi </h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                         
                            <div class="col-md-4 col-12 mt-4" 
                                  data-aos="fade-up"
                                  data-aos-delay="800">
                            <div class="card" style="width: 18rem;">
                              <img src="/images/i.jfif" class="card-img-top" >
                              <div class="card-content">
                                <h3 class="card-title mb-3">Space X </h3>
                                <span class="card-subtitle">Lowongan Kerja</span>
                                <p class="card-desription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <a href="jobs-details.html">Get link</a>
                              </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                       <div class="container mb-5 ">
        <div class="row text-center">
        <div class="col-12 mt-5"
             data-aos="zoom-in">
          <h4>Popular Searches</h4>
        </div>
        </div>
          <div class="row justify-content-center">
          <div class="col-9 mt-3 flex-wrap d-flex justify-content-center">
          
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Admin</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Telemarketing</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Accounting</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Quality Control</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Fresh Graduate</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Driver</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Manager</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Bank</a></span>
             <span><a href="#" class="btn btn-light m-1"><i class="bi bi-search"></i> Writer</a></span>  </div>
        
            </div>
          </div>
              </div>
           </div>
        </div>
     </div>
   </div>
        </div>
      </div>
    <hr/>
          <div class="cv">
          <div class="container mt-5 ">
          <div class="row text-center  ">
          <div class="col-12 mt-4"
               data-aos="zoom-in">
          <h4>Gallery</h4>
        </div>
        @foreach ($galleries as $gallery)
        <div class="col-md-3 col-12"
          data-aos="zoom-in">
          <a href="/" class="card mb-4 mt-3" style="width: 17rem;">
          <img src="{{ Storage::url($gallery->photo ?? '') }}"
              class="card-img-top shadow bg-body rounded rounded-3" style="height: 9rem;">
          </a>
        </div>
        @endforeach
          
          
      </div>
      
    </div>
    </div>
@endsection
