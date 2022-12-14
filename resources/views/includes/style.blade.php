<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
{{--
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> --}}
<link href="{{ url('/style/main.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('style/navbar.css') }}" />
<link rel="stylesheet" href="{{ asset('style/page-home.css') }}" />
<link rel="stylesheet" href="{{ asset('style/page-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('style/page-save.css') }}" />

<style>
    .dropdown-menu[data-bs-popper] {
        left: 50%;
        transform: translateX(-50%);
    }
</style>

<style>
    a.list-group-item {
        text-decoration: none;
    }

    #toast-container>.toast-success {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important;
        background-color: #51a351;
    }

    @media (min-width: 768px) {
        #toast-container>.toast-success {
            top: 70px;
        }
    }
</style>