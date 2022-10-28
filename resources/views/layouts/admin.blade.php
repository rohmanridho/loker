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
												class="list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : '' }} ">Dashboard</a>
										<a href="{{ route('users.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">Users</a>
										<a href="{{ route('companies.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/companies*') ? 'active' : '' }}">Companies</a>
										<a href="{{ route('industry.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/industry*') ? 'active' : '' }}">Industries</a>
										<a href="{{ route('categories.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/categories*') ? 'active' : '' }}">Categories</a>
										<a href="{{ route('province.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/province*') ? 'active' : '' }}">Provinces</a>
										<a href="{{ route('gallery.index') }}"
												class="list-group-item list-group-item-action {{ request()->is('admin/gallery*') ? 'active' : '' }}">Galleries</a>
										<a href="{{ route('privasi-settings') }}"
												class="list-group-item list-group-item-action  {{ request()->is('') ? 'active' : '' }}">Industry</a>
										<a href="{{ route('home') }}" class="list-group-item list-group-item-action">Back</a>
								</div>
						</div>

						<!-- Page Content -->
						<div id="page-content-wrapper">
								<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
										<div class="container-fluid">
												<button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
														&laquo; Menu
												</button>
												<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
														<span class="navbar-toggler-icon"></span>
												</button>
												<div class="collapse navbar-collapse" id="navbarSupportedContent">
														<!-- Desktop Menu -->
														<ul class="navbar-nav d-none d-lg-flex ml-auto ">
																<li class="nav-item dropdown">
																		<a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
																				<img src="/images/icon-user.png" alt="" class="rounded-circle profile-picture"
																						style="right: 25px" />
																				Hi, {{ Auth::user()->name }}
																		</a>
																		<div class="dropdown-menu">
																				<a href="{{ route('logout') }}"
																						onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
																						{{ __('Logout') }} class="dropdown-item text-center">Sign Out</a>
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
																				{{ __('Logout') }} class="dropdown-item text-center">Sign Out</a>
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
