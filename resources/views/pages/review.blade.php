@extends('layouts.app')

@section('title')

JobStreet - Let's find your jobs  
@endsection

@section('content')
          <div class="header mb-5"
          data-aos="fade-up">
        <div class="container">
            <div class="row">
                <h1>Find Great Places To Work</h1>
                <div class="riview-subtitle">Get access to millions of company reviews</div>
            </div>
            <div class="row mb-3">
                <div class="search-title">Company Name or Job Title</div>
                <div class="col-md-7 col-12">
                   <input type="text" class="form-control mb-3">
                </div>
                <div class="col-md-3 col-12 submit">
                   <a href="#" type="submit" class="btn btn-primary rounded-3 font-weight-bold w-full btn-block">Find Companies</a>
                </div>
            </div>
            <div class="row">
              <div class="link"><a href="">Do you want to seacrh for salaries?</a></div>
            </div>
        </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12"
               data-aos="fade-up">
            <h2>Popular Companies</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 mb-3" 
                data-aos="fade-up"
                data-aos-delay="100">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/a.svg" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">PT. Bussan Auto Finance</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
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
              <img src="/images/ihg.jfif" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">IHG Hotel & Resorts</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
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
              <img src="/images/nielsen.jfif" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">Nielsen</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-4 col-12 mb-3 "
              data-aos="fade-up"
              data-aos-delay="400">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/a.svg" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">PT. Blue Bird TBK.</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3 "
               data-aos="fade-up"
               data-aos-delay="500">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/ey.jfif" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-3 pt-5">EY</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3 "
               data-aos="fade-up"
              data-aos-delay="600">
            <div class="card ">
           <div class="card-body ">
            <div class="photo-card mb-3">
              <img src="/images/1.jfif" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">Accenture</a>
            </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 mb-3 "
                data-aos="fade-up"
              data-aos-delay="700">
           <div class="card ">
            <div class="card-body ">
             <div class="photo-card mb-3">
               <img src="/images/2.jfif" style="width: 48px;"  class="rounded-3">
               <a href="{{ route('company') }}" class="brand-title p-2">Schneider Electric</a>
             </div>
           <div class="button d-flex justify-content-between">
            <a href="" class="button">Salaries</a>
            <a href="" class="button">Question</a>
            <a href="" class="button">Open Jobs</a>
           </div>
         </div>
        </div>
          </div>
          <div class="col-md-4 col-12 mb-3 "
                data-aos="fade-up"
              data-aos-delay="800">
            <div class="card ">
             <div class="card-body ">
              <div class="photo-card mb-3">
                <img src="/images/a.svg" style="width: 48px;" class="rounded-3">
                <a href="{{ route('company') }}" class="brand-title p-2">PT. Karya Sejati Makmur</a>
              </div>
             <div class="button d-flex justify-content-between">
                <a href="" class="button">Salaries</a>
                <a href="" class="button">Question</a>
                <a href="" class="button">Open Jobs</a>
             </div>
           </div>
         </div>
          </div>
          <div class="col-md-4 col-12 mb-3"
               data-aos="fade-up"
               data-aos-delay="900">
            <div class="card ">
              <div class="card-body ">
                <div class="photo-card mb-3">
                  <img src="/images/3jfif.jfif" style="width: 48px;"  class="rounded-3">
                  <a href="{{ route('company') }}" class="brand-title p-2">PT. Grab</a>
                </div>
             <div class="button d-flex justify-content-between">
               <a href="" class="button">Salaries</a>
               <a href="" class="button">Question</a>
               <a href="" class="button">Open Jobs</a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
    <div class="content">
      <div class="container">
        <div class="row ">
          <div class="col-12 mt-5"
               data-aos="fade-up">
               <h2>Compare At Working</h2>
          </div>
        </div>
        <div class="row justify-content-center">
           <div class="col-md-5 col-12 mb-3 "
                data-aos="fade-up"
                data-aos-delay="100">
         <a href="{{ route('compare') }}" class="card kartu text-decoration-none">
          <div class="card-body">
            <div class="photo-card mb-3 d-flex justify-content-around align-items-center">
              <div class="d-flex align-items-center">
                 <img src="/images/1.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">Accenture</div>
              </div>
               <div class="vs">Vs</div>
               <div class="d-flex align-items-center">
                 <img src="/images/holiday.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">Holiday Inn</div>
               </div>
              
            </div>
          </div>
         </a>
           </div>
          <div class="col-md-5 col-12 mb-3"
              data-aos="fade-up"
              data-aos-delay="200">
            <a href="{{ route('compare') }}" class="card kartu text-decoration-none">
          <div class="card-body">
            <div class="photo-card mb-3 d-flex justify-content-around align-items-center">
              <div class="d-flex align-items-center">
                  <img src="/images/ihg.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">IHG Hotel & Resorts</div>
              </div>
             
               <div class="vs">Vs</div>
               <div class="d-flex align-items-center">
                <img src="/images/3jfif.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">PT. Grab</div>
               </div>
               
            </div>
          </div>
         </a>
      </div>
       </div>
         <div class="row justify-content-center">
            <div class="col-md-5 col-12 mb-3 "
                 data-aos="fade-up"
                 data-aos-delay="300">
             <a href="{{ route('compare') }}" class="card kartu text-decoration-none">
          <div class="card-body">
            <div class="photo-card mb-3 d-flex justify-content-around align-items-center">
              <div class="d-flex align-items-center">
                <img src="/images/ey.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">EY</div>
              </div>
               <div class="vs">Vs</div>
               <div class="d-flex align-items-center">
                <img src="/images/pwc.jfif" style="width: 48px;" class="rounded-3 ">
               <div class="brand-title ml-2">PwC</div>
               </div>
            </div>
          </div>
         </a>
          </div>
       <div class="col-md-5 col-12 mb-5 "
            data-aos="fade-up"
            data-aos-delay="400">
         <a href="{{ route('compare') }}" class="card kartu text-decoration-none">
          <div class="card-body">
            
            <div class="photo-card mb-3 d-flex justify-content-around align-items-center">
              <div class="d-flex align-items-center">
                <img src="/images/nielsen.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">Nielsen</div>
              </div>
               
               <div class="vs">Vs</div>
               <div class="d-flex align-items-center">
                 <img src="/images/dynata.jfif" style="width: 48px;" class="rounded-3">
               <div class="brand-title ml-2">Dynata</div>
               </div>
             
            </div>
          </div>
         </a>
    </div>
     </div>
       </div>
        </div> 
@endsection
