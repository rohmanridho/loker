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

    <hr style="background-color: #333;">

    {{-- footer --}}
    @include('includes.footer')

    {{-- scripts --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>