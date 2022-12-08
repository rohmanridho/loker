<nav class="navbar navbar-expand-lg navbar-fixed-top bg-light navbar-custom py-2 py-sm-0">
    <div class="container-fluid px-3 px-sm-0">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="fs-3 fw-bold" style="color: #1e3a9b">Needed</div>
        </a>

        <div class="d-flex d-lg-none align-items-center">
            @guest
            @if (request()->is('login') || request()->is('register'))
            @else
            <a href="{{ route('login') }}" class="btn btn-primary button-darkblue btn-block fw-semibold"><i
                    class="bi bi-person-fill"></i> &nbsp;Login</a>
            <div style="width: 20px; height: 20px; background-color: transparent"></div>
            @endif
            @endguest
            @auth
            <a href="{{ route('save.index') }}" class="nav-link bookmark-icon">
                <i class="bi bi-bookmarks-fill" style="font-size: 22px; color: #1e3a9b;"></i>
            </a>
            <div class="d-none d-md-block" style="width: 20px; height: 20px; background-color: transparent"></div>
            <div class="d-block d-md-none" style="width: 10px; height: 10px; background-color: transparent"></div>
            @endauth
            <span style="cursor: pointer;" onclick="navbarResponsive()">
                <i class="fas fa-bars bar"></i>
            </span>
        </div>

        <ul class="nav flex-column nav-top" id="navbarNav">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('search-job') }}" class="nav-link">Find Jobs</a>
            </li>
            @auth
            <li class="nav-item">
                <a href="{{ route('apply.index') }}" class="nav-link">Apply</a>
            </li>
            <li style="height: 15px; background-color: #eee; border: none;"></li>
            <li class="nav-item">
                <a href="{{ route('profile', Auth::user()->name) }}" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('follow.index') }}" class="nav-link">Followed</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('save.index') }}" class="nav-link">Saved</a>
            </li>
            <li style="height: 15px; background-color: #eee; border: none;"></li>
            <li class="nav-item">
                <a href="{{ route('account-settings') }}" class="nav-link">Account settings</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact-settings') }}" class="nav-link">Contact settings</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('privacy-settings') }}" class="nav-link">Privacy settings</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth
        </ul>

        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('job*') ? 'active' : '' }}"
                        href="{{ route('search-job') }}">Find Jobs</a>
                </li>
                @auth
                @if (App\Models\Apply::where('users_id', Auth::user()->id)->count())
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('apply*') ? 'active' : '' }}" href="{{ route('apply.index') }}">Apply</a>
                    </li>
                @endif
                @endauth
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                @guest
                @if (request()->is('login') || request()->is('register'))
                @else
                <li class="nav-item">
                    <a class="nav-link fw-bold enter" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endif
                @endguest

                @auth
                <li class="nav-item">
                    <a href="{{ route('save.index') }}" class="nav-link bookmark-icon">
                        <i class="bi bi-bookmarks-fill"></i>
                    </a>
                </li>
                <li class="nav-item dropdown-center">
                    <a href="" class="nav-link profile-icon" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <span class="dropdown-item fw-bold py-3">{{ Auth::user()->email }}</span>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="{{ route('profile', Auth::user()->name) }}"><i
                                    class="bi bi-person-lines-fill"></i>
                                &nbsp;
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="{{ route('follow.index') }}"><i
                                    class="bi bi-heart-fill"></i>
                                &nbsp;
                                Follow</a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2" href="{{ route('account-settings') }}"><i
                                    class="bi bi-gear-fill"></i>
                                &nbsp;
                                Settings</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="text-center">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                class="dropdown-item fw-semibold">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="vertical-line" style="height: 25px; width: .25px; background-color: #1e3a9b50;"></div>
                </li>
                <li class="nav-item">
                    <form></form>
                    @if (Auth::user()->roles_id == 3)
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#change-role"
                        data-bs-whatever="@getbootstrap">Pemilik Perushaan</button>
                    @else
                    @if (Auth::user()->roles_id == 2)
                    <a class="nav-link" href="{{ route('job.index') }}">Posting Loker</a>
                    @endif
                    @if (Auth::user()->roles_id == 1)
                    <a class="nav-link" href="{{ route('admin-dashboard') }}">Admin Dashboard</a>
                    @endif
                    @endif
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>