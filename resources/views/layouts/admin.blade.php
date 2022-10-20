<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
     <style>
      .page-dashboard #page-content-wrapper {
  background: #f5f5fb;
  min-width: 100vw;
}
.page-dashboard #sidebar-wrapper {
  margin-top: 60px;
  min-height: 100vh;
  margin-left: -15rem;
  transition: margin 0.25s ease-out;
}
.page-dashboard #sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}
.page-dashboard #sidebar-wrapper .list-group {
  width: 15rem;
}
.page-dashboard #wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}
.page-dashboard .navbar-store {
  margin-top: 0;
  background-color: #f5f5fb;
  box-shadow: 0px 4px 5px #cacad1;
}
@media (min-width: 768px) {
  .page-dashboard .navbar-store {
    background-color: transparent;
    box-shadow: none;
  }
}
.page-dashboard .list-group-item {
  border: 0;
  font-size: 16px;
  color: #c5c5c5;
}
.page-dashboard .list-group-item.active {
  background: linear-gradient(270deg, rgba(255, 113, 88, 0.32) 2%, rgba(255, 255, 255, 0) 100%);
  border-right: 4px solid #ff7158;
  color: #0c0d36;
}
@media (min-width: 768px) {
  .page-dashboard #sidebar-wrapper {
    margin-left: 0;
    margin-top: 0px;
  }
  .page-dashboard #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }
  .page-dashboard #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
  
}
.profile-picture {
    max-height: 45px;
  }
  .card-badge {
    display: inline-block;
    min-width: 2em;
    padding: 0.3;
    border-radius: 50%;
    font-size: 10px;
    text-align: center;
    background: #29a867;
    color: #fefefe;
    margin-left: -10px;
  }

.navbar-fixed-top.scrolled {
  background-color: #fff !important;
  transition: background-color 200ms linear;
}

    </style>
     @stack('addon-style')
  </head>

  <body>
    
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/admin.png" alt="" 
                 class="my-4" 
                 style="max-width: 100px"/>
          </div>
         
          <div class="list-group list-group-flush">
            <a
              href="{{ route('admin-dashboard') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }} "
              >Dashboard</a
            >
            <a
              href="{{ route('account-settings') }}"
              class="list-group-item list-group-item-action {{ (request()->is('settings')) ? 'active' : '' }}"
              >Companies</a
            >
            <a
              href="{{ route('gallery.index') }}"
              class="list-group-item list-group-item-action {{ (request()->is('admin/gallery*')) ? 'active' : '' }}"
              >Galleries</a
            >
              <a
              href=""
              class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}"
              >Jobs</a
            >
              <a
              href=""
              class="list-group-item list-group-item-action"
              >Career</a
            >
              <a
              href="{{ route('privasi-settings') }}"
              class="list-group-item list-group-item-action  {{ (request()->is('admin/user*')) ? 'active' : '' }}"
              >Industry</a
            >
           
            <a href="{{ route('home') }}" class="list-group-item list-group-item-action"
              >Back Home</a
            >
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto ">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle profile-picture"
                        style="right: 25px"
                      />
                      Hi, {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu">
                      <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                        {{ __('Logout') }}
                        class="dropdown-item text-center">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                        </form>
                      </div>
                   </li>          
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link"> Hi, {{ Auth::user()->name }} </a>
                  </li>
                   <li class="nav-item">
                    <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                        {{ __('Logout') }}
                        class="dropdown-item text-center">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                        </form>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>

          <!-- Content -->
          @yield('content')
         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
     @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
     @stack('addon-script')

     


  </body>
</html>
