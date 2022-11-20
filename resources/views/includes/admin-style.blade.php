@include('includes.dashboard-style')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Poppins';
    }

    .page-dashboard #page-content-wrapper {
        background: #f5f5fb;
        min-width: 100vw;
    }

    .page-dashboard #sidebar-wrapper {
        margin-top: 60px;
        min-height: 100vh;
        margin-left: -15rem;
        transition: margin 0.25s ease-out;
    }

    .page-dashboard #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    .page-dashboard #sidebar-wrapper .list-group {
        width: 15rem;
    }

    .page-dashboard #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    .page-dashboard .navbar-store {
        margin-top: 0;
        background-color: #f5f5fb;
        box-shadow: 0px 4px 5px #cacad1;
    }

    @media (min-width: 768px) {
        .page-dashboard .navbar-store {
            background-color: transparent;
            box-shadow: none;
        }
    }

    .page-dashboard .list-group-item {
        padding: 0.75rem 1.25rem;
        border: 0;
        font-size: 16px;
        color: #c5c5c5;
    }

    .page-dashboard .list-group-item.active {
        background: linear-gradient(270deg, rgba(0, 0, 255, 0.3) 2%, rgba(255, 255, 255, 0) 100%);
        border-right: 4px solid #2555ff;
        color: #0c0d36;
    }

    @media (min-width: 768px) {
        .page-dashboard #sidebar-wrapper {
            margin-left: 0;
            margin-top: 0px;
        }

        .page-dashboard #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        .page-dashboard #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }

    }

    .profile-picture {
        max-height: 45px;
    }

    .card-badge {
        display: inline-block;
        min-width: 2em;
        padding: 0.3;
        border-radius: 50%;
        font-size: 10px;
        text-align: center;
        background: #29a867;
        color: #fefefe;
        margin-left: -10px;
    }

    .navbar-fixed-top.scrolled {
        background-color: #fff !important;
        transition: background-color 200ms linear;
    }
</style>