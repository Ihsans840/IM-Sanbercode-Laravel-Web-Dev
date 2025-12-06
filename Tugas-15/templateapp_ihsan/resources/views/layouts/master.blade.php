<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Ubah Title --}}
    <title>@yield('title', 'Template')</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/seodashlogo.png') }}" />

    {{-- simplebar css --}}
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}">

    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>
<div class="page-wrapper" id="main-wrapper" 
     data-layout="vertical" data-navbarbg="skin6"
     data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <div>

            {{-- Logo Sidebar --}}
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ url('/home') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logos/logo-light.svg') }}" alt="logo" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>

            {{-- Sidebar Navigation --}}
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">

                    {{-- HOME --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">HOME</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/home') }}">
                            <span><iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    {{-- FORM --}}
                    <li class="nav-small-cap mt-4">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">FORM</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/form') }}">
                            <span>
                                <iconify-icon icon="solar:document-add-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Form Page</span>
                        </a>
                    </li>

                    {{-- CATEGORY --}}
                    <li class="nav-small-cap mt-4">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">CATEGORY</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('category.index') }}">
                            <span>
                                <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Category</span>
                        </a>
                    </li>

                    {{-- PROFILE --}}
                    <li class="nav-small-cap mt-4">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">PROFILE</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('profile.index') }}">
                            <span><iconify-icon icon="solar:user-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">My Profile</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- Sidebar End -->

    <!-- Main Wrapper -->
    <div class="body-wrapper">

        <!-- Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>

                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        {{-- Dropdown Profile --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" 
                                     width="35" height="35" class="rounded-circle">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">

                                    {{-- LINK PROFILE --}}
                                    <a href="{{ route('profile.index') }}"
                                       class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>

                                    {{-- LINK FORM --}}
                                    <a href="{{ url('/form') }}"
                                       class="btn btn-outline-primary mx-3 mt-2 d-block">
                                        Go to Form
                                    </a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header End -->

        <div class="container-fluid">
            {{-- Tempat Konten --}}
            @yield('content')

            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">
                    Design and Developed by
                    <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary">AdminMart</a>
                    Distributed by
                    <a href="https://themewagon.com/" target="_blank" class="pe-1 text-primary">ThemeWagon</a>
                </p>
            </div>
        </div>

    </div>
    <!-- end body-wrapper -->
</div>

{{-- JS --}}
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/app.init.js') }}"></script>
<script src="{{ asset('assets/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@stack('scripts')
</body>
</html>