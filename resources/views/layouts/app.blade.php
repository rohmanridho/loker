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
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- content --}}
    @yield('content')

    <div class="modal fade" id="change-role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Employer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('change-role') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="fw-semibold">Apakah anda yakin?</div>
                        <p class="">Dengan menjadi employer anda dapat melakukan hal-hal berikut ini:</p>
                        <ul style="list-style: initial">
                            <li>membuat perusahaan,</li>
                            <li>membuat lowongan pekerjaan.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr style="background-color: #333;">

    {{-- footer --}}
    @include('includes.footer')

    {{-- scripts --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>