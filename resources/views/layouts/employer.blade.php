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
    @include('includes.employer-style')
    @stack('style')
</head>

<body class="overflow-hidden">
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/admin.png" alt="" class="my-4" style="max-width: 100px" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('employer-dashboard') }}"
                        class="list-group-item list-group-item-action {{ request()->is('employer') ? 'active' : '' }} ">Dashboard</a>
                    @php
                    $isHaveCompany = App\Models\Company::where('users_id', Auth::user()->id)->count();
                    @endphp
                    @if ($isHaveCompany == 0)
                    <a href="{{ route('company.create') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/company*') ? 'active' : '' }}">Perusahaan</a>
                    @else
                    <a href="{{ route('company.edit') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/company*') ? 'active' : '' }}">Perusahaan</a>
                    @endif
                    <a href="{{ route('job.index') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/job*') ? 'active' : '' }}">Lowongan
                        Pekerajaan</a>
                    <a href="{{ route('apply-index') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/apply*') ? 'active' : '' }}">Lamaran
                        Pekerjaan</a>
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action">Exit</a>
                </div>
            </div>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto ml-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler mr-2" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto ">
                                <li class="nav-item dropdown">
                                    <span class="nav-link d-flex align-items-center mr-3" id="navbarDropdown"
                                        role="button" data-toggle="dropdown">>
                                        <div class="d-flex rounded-circle mr-2"
                                            style="width: 40px; height: 40px; background: #0000ff10;">
                                            <span class="m-auto" style="font-size: 24px;">
                                                {{ strtoupper(Auth::user()->name)[0] }}
                                            </span>
                                        </div>
                                        <span>{{ Auth::user()->name }}</span>
                                    </span>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item text-center">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>

                            <!-- Mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item py-2 px-2">
                                    <a href="{{ route('profile', Auth::user()->name) }}" class="nav-link">{{
                                        Auth::user()->name }}</a>
                                </li>
                                <li class="nav-item pb-2 px-2">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item text-center">Logout</a>
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