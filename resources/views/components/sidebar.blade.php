<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a class="header-logo" href="index.html">
            <img alt="logo" class="desktop-logo" src="{{ asset("images/brand-logos/logo-white.png") }}">
            <img alt="logo" class="toggle-logo" src="{{ asset("images/brand-logos/icon-white.png") }}">
            <img alt="logo" class="desktop-dark" src="{{ asset("images/brand-logos/logo-dark.png") }}">
            <img alt="logo" class="toggle-dark" src="{{ asset("images/brand-logos/icon-dark.png") }}">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">

                <li class="slide__category"><span class="category-name">Menu Utama</span></li>
                <li class="slide">
                    <a class="side-menu__item {{ request()->routeIs("dashboard") ? "active" : "" }}" href="{{ route("dashboard") }}">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>

                <li class="slide__category"><span class="category-name">Monitoring</span></li>
                <li class="slide has-sub">
                    <a class="side-menu__item" href="javascript:void(0);">
                        <i class="bx bx-money side-menu__icon"></i>
                        <span class="side-menu__label">Manajemen Kas</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a class="side-menu__item" href="#">Saldo Kas</a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" href="#">Tambahan Kas</a>
                        </li>
                    </ul>
                </li>

                <li class="slide__category"><span class="category-name">Management</span></li>
                <li class="slide has-sub">
                    <a class="side-menu__item" href="javascript:void(0);">
                        <i class="bx bx-user side-menu__icon"></i>
                        <span class="side-menu__label">Pengguna</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a class="side-menu__item" href="#">Tambah Pengguna</a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" href="#">Data Pengguna</a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" href="#">Token</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a class="side-menu__item" href="javascript:void(0);">
                        <i class="bx bx-group side-menu__icon"></i>
                        <span class="side-menu__label">Tim On Duty</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a class="side-menu__item" href="#">Pengaturan Tim</a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" href="#">Data Tim</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a class="side-menu__item" href="javascript:void(0);">
                        <i class="bx bx-data side-menu__icon"></i>
                        <span class="side-menu__label">Master Data</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide has-sub">
                            <a class="side-menu__item" href="javascript:void(0);">ATM
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Tambah Data</a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Data ATM</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a class="side-menu__item" href="javascript:void(0);">CRM
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Tambah Data</a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Data CRM</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a class="side-menu__item" href="javascript:void(0);">Cluster
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Tambah Data</a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" href="#">Data Cluster</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right"><svg fill="#7b8191" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
