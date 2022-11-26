<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @include('includes.style')
    <link rel="stylesheet" href="{{ asset('style/page-settings.css') }}" />
    @stack('style')
    <style>
        a.list-group-item {
            text-decoration: none;
        }

        #toast-container>.toast-success {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important;
            background-color: #51a351;
            top: 70px;
        }
    </style>
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