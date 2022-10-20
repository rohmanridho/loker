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
                 <li class="breadcrumb-item"><a href="{{ route('reviews') }}">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Jobs Details</li>
                  </ol>
                   </nav>
                </div>
            </div>
            <div class="jobs-title">
                <h4 class="font-weight-bold mb-3">Nielsen Lowongan dan karier</h4>
            </div>
            <div class="row">
              <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="100">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                    <div class="jobs">
                         <div class="jobs-name">ADMIN SALES</div>
                 <div class="jobs-address">Surabaya</div>
                    </div>
                <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
            <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="200">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                    <div class="jobs">
                         <div class="jobs-name">PENGAWAS PRODUKSI</div>
                 <div class="jobs-address">Sidoarjo</div>
                    </div>
                <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
            <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="300">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                    <div class="jobs">
                         <div class="jobs-name">KEPALA REGU PRODUKSI</div>
                 <div class="jobs-address">Sidoarjo</div>
                    </div>
                <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
           <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="400">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                    <div class="jobs">
                         <div class="jobs-name">KEPALA HUMAS</div>
                 <div class="jobs-address">Sidoarjo</div>
                    </div>
                <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
           <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="500">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                    <div class="jobs">
                         <div class="jobs-name">CREATIVE STAFF</div>
                 <div class="jobs-address">Surabaya</div>
                    </div>
                <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
           <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="600">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                 <div class="jobs">
                    <div class="jobs-name">SECURITY</div>
                    <div class="jobs-address">Sidoarjo</div>
                 </div>
                 <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                 </div>
                 </div>
             </a>
          </div>
          <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="700">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                  <div class="jobs">
                     <div class="jobs-name">STAFF IT OPERATIONAL</div>
                     <div class="jobs-address">Sidoarjo</div>
                  </div>
                 <div class="date">
                     <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
           <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="800">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                  <div class="jobs">
                    <div class="jobs-name">KEPALA REGU GUDANG</div>
                    <div class="jobs-address">Sidoarjo</div>
                  </div>
                  <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
           <div class="col-md-4 col-12 mb-3 "
                   data-aos="fade-up"
                   data-aos-delay="900">
             <a href="{{ route('add-jobs') }}" class="card  text-decoration-none rounded-3 kotak">
                <div class="card-body">
                  <div class="jobs">
                    <div class="jobs-name">KEPALA REGU QC</div>
                    <div class="jobs-address">Pasuruan</div>
                  </div>
                  <div class="date">
                    <div class="jobs-date">14 hari yang lalu</div>
                </div>
                </div>
              </a>
          </div>
       </div>
    </div>
        </div>
            </div>
    
@endsection
