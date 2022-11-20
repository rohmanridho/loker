<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>

    {{-- styles --}}
    @include('includes.admin-style')
    @stack('style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <span class="my-4" style="font-size: 64px">Eve</span>
                    {{-- <img src="/images/admin.png" alt="" class="my-4" style="max-width: 100px" /> --}}
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin-dashboard') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }} ">Dashboard</a>
                    <a href="{{ route('users.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">Users</a>
                    <a href="{{ route('companies.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/companies*') ? 'active' : '' }}">Companies</a>
                    <a href="{{ route('jobs.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/jobs*') ? 'active' : '' }}">Jobs</a>
                    <a href="{{ route('industry.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/industry*') ? 'active' : '' }}">Industries</a>
                    <a href="{{ route('categories.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/categories*') ? 'active' : '' }}">Categories</a>
                    <a href="{{ route('province.index') }}"
                        class="list-group-item list-group-item-action {{ request()->is('admin/province*') ? 'active' : '' }}">Provinces</a>
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action">Home</a>
                </div>
            </div>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <span class="nav-link d-flex align-items-center mr-3" class="nav-link"
                                        id="navbarDropdown" role="button" data-toggle="dropdown">
                                        <div class="d-flex rounded-circle mr-2"
                                            style="width: 40px; height: 40px; background: #0000ff10;"><span
                                                class="m-auto" style="font-size: 24px;">{{
                                                strtoupper(Auth::user()->name)[0] }}</span></div>
                                        <span>Hi, {{ Auth::user()->name }}</span>
                                    </span>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" {{ __('Logout') }}
                                            class="dropdown-item text-center">Sign Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" {{ __('Logout') }}
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

    @yield('modal')

    {{-- scripts --}}
    @include('includes.dashboard-script')
    @stack('script')
</body>

</html>