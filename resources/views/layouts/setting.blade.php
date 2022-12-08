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

    {{-- modal --}}
    <div class="modal fade" id="change-role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Employer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('role.update') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="fw-semibold">Apakah anda yakin ingin menjadi employer?</div>
                        <p class="">Keuntungan menjadi employer:</p>
                        <ul style="list-style: disc">
                            <li>membuat perusahaan,</li>
                            <li>membuat lowongan pekerjaan.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- scripts --}}
    @include('includes.script')
    @stack('script')
    @if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}", {"iconClass": 'toast-success'});
    </script>
    @endif
</body>

</html>