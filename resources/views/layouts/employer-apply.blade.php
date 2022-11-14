<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @include('includes.dashboard-style')
    @stack('style')
</head>

<body>
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
                    <a href="{{ route('company.index') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/company*') ? 'active' : '' }}">Perusahaan</a>
                    <a href="{{ route('job.index') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/job*') ? 'active' : '' }}">Lowongan
                        Pekerajaan</a>
                    <a href="{{ route('apply-index') }}"
                        class="list-group-item list-group-item-action  {{ request()->is('employer/apply*') ? 'active' : '' }}">Lamaran
                        Pekerjaan</a>
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
                            <ul class="navbar-nav d-none d-lg-flex ml-auto ">
                                <li class="nav-item">
                                    <span class="nav-link d-flex align-items-center mr-3">
                                        <div class="d-flex rounded-circle mr-2"
                                            style="width: 40px; height: 40px; background: #0000ff10;">
                                            <span class="m-auto" style="font-size: 24px;">{{
                                                strtoupper(Auth::user()->name)[0] }}</span>
                                        </div>
                                        <span>Hi, {{ Auth::user()->name }}</span>
                                    </span>
                                    {{-- <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        <img src="/images/icon-user.png" alt="" class="rounded-circle profile-picture"
                                            style="right: 25px" />
                                        Hi, {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" {{ __('Logout') }}
                                            class="dropdown-item text-center">Sign Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div> --}}
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

    @foreach ($applies as $item)
    <div class="modal fade" id="edit-modal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tinjau lamaran pekerjaan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('apply-update', $item->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="fstatus">Status</label>
                        <select name="status" id="fstatus" class="form-control">
                            <option value="diterima">Terima</option>
                            <option value="ditolak">Tolak</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
						e.preventDefault();
						$("#wrapper").toggleClass("toggled");
				});
    </script>
    @stack('script')
</body>

</html>
