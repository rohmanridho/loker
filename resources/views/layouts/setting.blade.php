<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/40c495c7a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                    <a href="" class="list-group-item {{ request()->is('account-settings') ? 'active' : '' }}"><i
                            class="bi bi-person-fill"></i>
                        &nbsp;Account
                        settings</a>
                    <a href="contact-settings.html" class="list-group-item"><i class="bi bi-person-lines-fill"></i>
                        &nbsp;Contact
                        information</a>
                    <a href="privacy-settings.html" class="list-group-item"><i class="bi bi-shield-lock-fill"></i>
                        &nbsp;Privacy settings</a>
                </div>
            </div>

            <!-- Page content -->
            @yield('content')
        </div>
    </section>

    {{-- <script type="module" src="js/main.js"></script> --}}
    @include('includes.script')
    @stack('script')
</body>

</html>