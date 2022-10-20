@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')

     <div class="header-salaries">
        <div class="container">
            <h2 class="text-white">Find a career you'll love</h2>
            <div class="subtitle text-white">Explore which careers have the highest job satisfaction, best salaries and more.</div>   
        </div>
        <div class="container cari d-flex justify-content-around align-items-center">
                 <div class="col-md-8 col-12 order-2 ">
               <div class="row rounded-4 align-content-center mb-4">
                <div class="col-md-5 col-12">
                    <div class="title-cari">What</div>
                     <input type="text" class="form-control w-full btn-block" placeholder="Jobs Potition">
                </div>
                 <div class="col-md-5 col-12">
                    <div class="title-cari">Where</div>
                     <input type="text" class="form-control w-full btn-block" placeholder="Location">
                </div>
                <div class="col-md-2 col-12">
                    <a href="#" class="btn btn-primary tombol rounded-3 font-weight-bold w-full btn-block">Search</a>
                </div>
               </div>
            </div>
            
        </div>
     </div>
     
     <div class="paying">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
            <h3>Browse top paying jobs by industri</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 col-12">
            <div class="dropdown">
              <button class="btn btn-outline-primary dropdown-toggle rounded-3 w-100 md:w-50" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Choose an Industry
              </button>
            <ul class="dropdown-menu w-100">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
           </div>
          </div>
        </div>
          <div class="row jobs-content">
           <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Warehouse Assoociate</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
            <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Server</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Front Desk Agent</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          </div>
          <div class="row jobs-content">
           <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Crew Member</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Administratif Assistant</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Data Entry Cleck</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          </div>
          <div class="row jobs-content">
           <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">HouseKeeper</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Security Office</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
           </div>
           </div>
              </div>
            </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="row">
              <div class="col">
                <div class="brand">
              <a href="" class="brand-title mb-3">Warehouse Worker</a>
            </div>
            <div class="brand-price d-flex justify-content-between">
              <a href="" class="price-subtitle mb-3">Average Salary $33,054 per year</a>
              <a href="" style="color: black;"><i class="bi bi-chevron-right"></i></a>
            </div>
             <div class="garis mb-3"></div>
           <div class="row">
            <div class="col-md-6">
            <a href="" class="button">Jobs Oppening</a>
           </div>
           <div class="col-md-3">
            <a href="" class="button">Skills</a>
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
          
          <div class="jobs">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h3>Find Your Career</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-12"
                     data-aos="fade-up"
                     data-aos-delay="100">
                  <div class="card rounded-3" style="width: 16rem; height: 23rem;">
                    <img src="/images/registered.webp" class="card-img-top rounded-3" alt="..." style="height: 14rem;">
                    <div class="card-body">
                      <div class="description">
                        <div class="row">
                          <div class="col">
                            <div class="jobs-brand">
                             <a href="" class="jobs-title mb-3">Registered Nurse</a>
                             </div>
                             <div class="jobs-price d-flex justify-content-between">
                             <a href="" class="jobs-subtitle mb-3"> $33,054 per year</a>
                             </div>
                             <div class="job-grow">
                              <a href="" class="grow">18.9% job growth</a>
                             </div>
                             <div class="job-oppening">
                              <a href="" class="oppening">547.198 job oppenings</a>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-12"
                     data-aos="fade-up"
                     data-aos-delay="200">
                  <div class="card rounded-3" style="width: 16rem; height: 23rem;">
                    <img src="/images/warehouse.webp" class="card-img-top rounded-3" alt="..." style="height: 14rem;">
                    <div class="card-body">
                      <div class="description">
                        <div class="row">
                          <div class="col">
                            <div class="jobs-brand">
                             <a href="" class="jobs-title mb-3">Warehouse Worker</a>
                             </div>
                             <div class="jobs-price d-flex justify-content-between">
                             <a href="" class="jobs-subtitle mb-3"> $33,054 per year</a>
                             </div>
                             <div class="job-grow">
                              <a href="" class="grow">18.9% job growth</a>
                             </div>
                             <div class="job-oppening">
                              <a href="" class="oppening">547.198 job oppenings</a>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-12"
                     data-aos="fade-up"
                     data-aos-delay="300">
                  <div class="card rounded-3" style="width: 16rem; height: 23rem;">
                    <img src="/images/driver.webp" class="card-img-top rounded-3" alt="..." style="height: 14rem;">
                    <div class="card-body">
                      <div class="description">
                        <div class="row">
                          <div class="col">
                            <div class="jobs-brand">
                             <a href="" class="jobs-title mb-3">Delivery Driver</a>
                             </div>
                             <div class="jobs-price d-flex justify-content-between">
                             <a href="" class="jobs-subtitle mb-3"> $33,054 per year</a>
                             </div>
                             <div class="job-grow">
                              <a href="" class="grow">18.9% job growth</a>
                             </div>
                             <div class="job-oppening">
                              <a href="" class="oppening">547.198 job oppenings</a>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-12"
                     data-aos="fade-up"
                     data-aos-delay="400">
                  <div class="card rounded-3" style="width: 16rem; height: 23rem;">
                    <img src="/images/store.webp" class="card-img-top rounded-3" alt="..." style="height: 14rem;">
                    <div class="card-body">
                      <div class="description">
                        <div class="row">
                          <div class="col">
                            <div class="jobs-brand">
                             <a href="" class="jobs-title mb-3">Store Shopper</a>
                             </div>
                             <div class="jobs-price d-flex justify-content-between">
                             <a href="" class="jobs-subtitle mb-3"> $33,054 per year</a>
                             </div>
                             <div class="job-grow">
                              <a href="" class="grow">18.9% job growth</a>
                             </div>
                             <div class="job-oppening">
                              <a href="" class="oppening">547.198 job oppenings</a>
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

          <div class="company">
            <div class="container">
              <div class="row">
             <div class="col-md-8 col-12">
            <h3>Browse top paying companies by industry</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 col-12">
             <div class="dropdown">
              <button class="btn btn-outline-primary dropdown-toggle rounded-3 btn-block w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Choose an Industry
              </button>
            <ul class="dropdown-menu w-100">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
           </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/costco.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">Costco Wholesale</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3"
               data-aos="fade-up"
               data-aos-delay="200">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/kopi.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">Starbucks</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3 "
                data-aos="fade-up"
                data-aos-delay="300">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/pepsi.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">PepsiCo</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/mcd.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">McDonald's</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3"
               data-aos="fade-up"
               data-aos-delay="200">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/ugh.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">United Health Group</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3 "
                data-aos="fade-up"
                data-aos-delay="300">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/amz.jfif" style="width: 48px;"  class="rounded-3">
               <a href="" class="company-title p-2">Amazon</a>
            </div>
           <div class="text d-flex justify-content-between">
            <a href="" class="text">Salaries</a>
            <a href="" class="text">Question</a>
            <a href="" class="text">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          
        </div>
            </div>
          </div>

     <div class="popular-search">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div>
                        <h4>Karier yang sering dicari</h4>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <a href="" class="text">Operator Produksi</a><br>
                    <a href="" class="text">Staff Administrasi</a><br>
                    <a href="" class="text">Satpam</a><br>
                    <a href="" class="text">Waiter & Waiters</a><br>
                    <a href="" class="text">Operator Alat Berat</a><br>
                    <a href="" class="text">Cleaning Service</a><br>
                    <a href="" class="text">Sopir</a><br>
                    <a href="" class="text">Staf Security</a><br>
                    <a href="" class="text">Perawat</a><br>
                    <a href="" class="text">Staf Gudang</a><br>
                    <a href="" class="text">Guru</a><br>
                    <a href="" class="text">Staf Sales</a><br>
                    <a href="" class="text">Mekanik Alat Berat</a><br>
                    <a href="" class="text">Customer Service</a><br>
                    <a href="" class="text">Karyawan Toko</a><br>
                               
                </div>
                  <div class="col-md-2 col-12">
                    <a href="" class="text">Operator Produksi</a><br>
                    <a href="" class="text">Staff Administrasi</a><br>
                    <a href="" class="text">Satpam</a><br>
                    <a href="" class="text">Waiter & Waiters</a><br>
                    <a href="" class="text">Operator Alat Berat</a><br>
                    <a href="" class="text">Cleaning Service</a><br>
                    <a href="" class="text">Sopir</a><br>
                    <a href="" class="text">Staf Security</a><br>
                    <a href="" class="text">Perawat</a><br>
                    <a href="" class="text">Staf Gudang</a><br>
                    <a href="" class="text">Guru</a><br>
                    <a href="" class="text">Staf Sales</a><br>
                    <a href="" class="text">Mekanik Alat Berat</a><br>
                    <a href="" class="text">Customer Service</a><br>
                    <a href="" class="text">Karyawan Toko</a><br>
                               
                </div>
                  <div class="col-md-2 col-12">
                    <a href="" class="text">Operator Produksi</a><br>
                    <a href="" class="text">Staff Administrasi</a><br>
                    <a href="" class="text">Satpam</a><br>
                    <a href="" class="text">Waiter & Waiters</a><br>
                    <a href="" class="text">Operator Alat Berat</a><br>
                    <a href="" class="text">Cleaning Service</a><br>
                    <a href="" class="text">Sopir</a><br>
                    <a href="" class="text">Staf Security</a><br>
                    <a href="" class="text">Perawat</a><br>
                    <a href="" class="text">Staf Gudang</a><br>
                    <a href="" class="text">Guru</a><br>
                    <a href="" class="text">Staf Sales</a><br>
                    <a href="" class="text">Mekanik Alat Berat</a><br>
                    <a href="" class="text">Customer Service</a><br>
                    <a href="" class="text">Karyawan Toko</a><br>
                               
                </div>
            </div>
        </div>
     </div>

@endsection
