<nav class="navbar navbar-expand-lg navbar-fixed-top bg-light navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/needed.png') }}" style="height: 60px;">
        </a>

        <div class="d-flex d-lg-none align-items-center">
            <a href="login.html" class="btn btn-primary button-darkblue btn-block fw-semibold"><i
                    class="bi bi-person-fill"></i> &nbsp;Login</a>
            <div style="width: 20px; height: 20px; background-color: transparent"></div>
            <span style="cursor: pointer;" onclick="navbarResponsive()">
                <i class="fas fa-bars bar"></i>
            </span>
        </div>

        <ul class="nav flex-column nav-top" id="navbarNav">
            <li class="nav-item">
                <a href="/" class="nav-link">Find Jobs</a>
            </li>
            <li class="nav-item">
                <a href="companies.html" class="nav-link">Company reviews</a>
            </li>
            <li class="nav-item">
                <a href="salaries.html" class="nav-link">Find salaries</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Employers</a>
            </li>
            <li style="height: 15px; background-color: #eee; border: none;"></li>
            <li class="nav-item">
                <a href="profile.html" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="favorite.html" class="nav-link">Favorite</a>
            </li>
            <li style="height: 15px; background-color: #eee; border: none;"></li>
            <li class="nav-item">
                <a href="account-settings.html" class="nav-link">Account settings</a>
            </li>
            <li class="nav-item">
                <a href="contact-settings.html" class="nav-link">Contact settings</a>
            </li>
            <li class="nav-item">
                <a href="privacy-settings.html" class="nav-link">Privacy settings</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Logout</a>
            </li>
        </ul>

        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Find jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="companies.html">Company reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="salaries.html">Find salaries</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                @guest
                <li class="nav-item">
                    <a class="nav-link fw-bold enter" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a href="{{ route('save') }}" class="nav-link bookmark-icon">
                        <i class="bi bi-bookmarks-fill"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link profile-icon" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><span class="dropdown-item fw-bold py-3">{{ Auth::user()->email }}</span></li>
                        @if (Auth::user()->roles_id == 1)
                            <li><a class="dropdown-item py-2" href="{{ route('admin-dashboard') }}"><i class="bi bi-person-lines-fill"></i>
                                &nbsp;
                                Dashboard</a></li>
                        @endif
                        @if (Auth::user()->roles_id == 2)
                            <li><a class="dropdown-item py-2" href="{{ route('employer-dashboard') }}"><i class="bi bi-person-lines-fill"></i>
                                &nbsp;
                                Dashboard</a></li>
                        @endif
                        <li><a class="dropdown-item py-2" href="profile.html"><i class="bi bi-person-lines-fill"></i>
                                &nbsp;
                                Profile</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('follow') }}"><i class="bi bi-heart-fill"></i> &nbsp;
                                Follow</a></li>
                        <li><a class="dropdown-item py-2" href="account-settings.html"><i class="bi bi-gear-fill"></i>
                                &nbsp;
                                Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="dropdown-item fw-semibold">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="vertical-line" style="height: 25px; width: .25px; background-color: #1e3a9b50;"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Employers / Post Jobs</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>