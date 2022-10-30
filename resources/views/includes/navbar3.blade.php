@guest
<nav class="navbar navbar-custom navbar-expand-lg bg-info text-light">
  <div class="container">
    <a class="navbar-brand font-weight-bolder " href="{{ route('home') }}"
      style="font-size: 27px; font-family: poppins, sans-serif; color: rgb(18, 51, 88);">JobStreet</a>
    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-black"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-between " id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item ">
          <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Find Jobs</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="{{ route('reviews') }}">Company Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('salaries') }}">Find Salaries</a>
        </li>

      </ul>
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('profile') }}">Post your resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-primary" href="{{ route('login') }}"
            style="padding: 5px; background-color: white; border-radius: 7px; margin-right: 10px;">Sign In</a>
        </li>

        <div class="garis_verikal d-none d-md-block"></div>
        <li class="nav-item">
          <a class="nav-link text-white" style="font-size: 15px;" href="#">Empeloyer / Post Job</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endguest
@auth
<nav class="navbar navbar-custom navbar-expand-lg bg-info text-light d-block d-md-none">
  <div class="container">
    <a class="navbar-brand font-weight-bolder " href="{{ route('home') }}"
      style="font-size: 27px; font-family: poppins, sans-serif; color: rgb(18, 51, 88);">JobStreet</a>

    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-black"></span>
    </button>

    <div class="collapse navbar-collapse d-md-flex justify-content-md-between " id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item ">
          <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Find Jobs</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="{{ route('reviews') }}">Company Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('salaries') }}">Find Salaries</a>
        </li>

      </ul>
      <div class="garis mb-1 mt-1" style="
        border: 1px #F2F2F2 solid;
        height: 1px;
        width: 100%;
      ">
      </div>
      <ul class="navbar-nav align-items-center">

        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('jobs') }}">My Reviews</a>
        </li>
        <div class="garis mb-1 mt-1" style="
        border: 1px #F2F2F2 solid;
        height: 1px;
        width: 100%;
      "></div>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('employer-dashboard') }}"
            class="dropdown-item">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('jobs') }}">My Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="settings.html">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" style="font-size: 15px;" href="#">Empeloyer / Post Job</a>
        </li>
        <div class="garis_verikal  d-none d-md-block"></div>
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" {{ __('Logout') }}
            class="nav-link text-center font-weight-bold text-primary"
            style="padding: 5px; background-color: white; border-radius: 7px;">Sign Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-custom navbar-expand-lg bg-info text-light d-none d-md-block">
  <div class="container">
    <a class="navbar-brand font-weight-bolder " href="{{ route('home') }}"
      style="font-size: 27px; font-family: poppins, sans-serif; color: rgb(18, 51, 88);">JobStreet</a>

    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-black"></span>
    </button>

    <div class="collapse navbar-collapse d-md-flex justify-content-md-between " id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item ">
          <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Find Jobs</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="{{ route('reviews') }}">Company Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="{{ route('salaries') }}">Find Salaries</a>
        </li>

      </ul>
      <ul class="navbar-nav align-items-center">

        <li class="nav-item pr-3">
          <a class="nav-link" href="{{ route('jobs') }}">
            <i class="bi bi-bookmark-star-fill text-white" style=" font-size: 20px;"></i>
          </a>
        </li>
        <li class="dropdown pr-3">
          <a class=" nav-link  bi bi-person-fill text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="font-size: 23px; ">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item font-weight-bold" href="#">Verify your account</a></li>
            <li><a class="dropdown-item " href="#">{{ Auth::user()->email }}</a></li>
            <li><a class="dropdown-item " href="{{ route('employer-dashboard') }}" class="dropdown-item"><i
                  class="bi bi-grid-1x2-fill" style="padding-right: 10px;"></i> Dashboard</a></li>
            <li><a class="dropdown-item" href="{{ route('profile') }}"> <i class="bi bi-file-earmark-text-fill"
                  style="padding-right: 10px;"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('jobs') }}"><i class="bi bi-heart-fill"
                  style="padding-right: 10px;"></i> My jobs</a></li>
            <li><a class="dropdown-item" href="{{ route('account-settings') }}"><i class="bi bi-gear-fill"
                  style="padding-right: 10px;"></i> Settings</a></li>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" {{ __('Logout') }}
              class="dropdown-item text-center">Sign Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </ul>
        </li>
        <div class="garis_verikal  d-none d-md-block" style="border: 1px white solid;
        height: 22px;
        width: 0px"></div>
        <li class="nav-item">
          <a class="nav-link text-white" style="font-size: 15px;" href="#">Empeloyer / Post Job</a>
        </li>

      </ul>




    </div>
  </div>
</nav>
@endauth
