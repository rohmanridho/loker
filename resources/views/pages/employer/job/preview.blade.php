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
    @include('includes.style')
    @stack('style')
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-fixed-top bg-light navbar-custom py-2 py-sm-0">
        <div class="container-fluid px-3 px-sm-0">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="fs-3 fw-bold" style="color: #1e3a9b">Needed</div>
            </a>
        </div>
    </nav>

    {{-- content --}}
    <section class="mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="">
                        <h2 class="fw-bold fs-4">{{ $job->name }}</h2>
                        <div class="text-secondary"><span class="">{{ $job->company->name }}</span> - <span class="">{{
                                $job->company->province->name }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>