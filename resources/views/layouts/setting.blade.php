<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')
    <link rel="stylesheet" href="{{ asset('style/page-settings.css') }}" />
    @stack('style')
</head>

<body>
    @include('includes.navbar')

    <section class="page-settings">
        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="settings-sidebar d-none d-md-block" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    Settings
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('account-settings') }}"
                        class="list-group-item {{ request()->is('account-settings') ? 'active' : '' }}"><i
                            class="bi bi-person-fill"></i>
                        &nbsp;Account
                        settings</a>
                    <a href="{{ route('contact-settings') }}"
                        class="list-group-item {{ request()->is('contact-settings') ? 'active' : '' }}"><i
                            class="bi bi-person-lines-fill"></i>
                        &nbsp;Contact
                        information</a>
                    <a href="{{ route('privacy-settings') }}"
                        class="list-group-item {{ request()->is('privacy-settings') ? 'active' : '' }}"><i
                            class="bi bi-shield-lock-fill"></i>
                        &nbsp;Privacy settings</a>
                </div>
            </div>

            <!-- Page content -->
            @yield('content')
        </div>
    </section>

    @include('includes.script')
    @stack('script')
    @if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}", {"iconClass": 'toast-success'});
    </script>
    @endif
</body>

</html>