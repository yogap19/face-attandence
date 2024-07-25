<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | @yield('subtitle')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icons/website.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    {{-- data table --}}
    <link href="../assets/vendor/libs/data-table/dataTables.bootstrap4.min.css" rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/74131ea3dc.js" crossorigin="anonymous"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
        }
    </style>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="blank" class="app-brand-link">
                        <img src="{{ asset('assets/img/icons/website.png') }}" alt="logo.png" width="50"
                            height="50">
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Admin</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1 mb-5">
                    @if (Auth::user()->role_id == 1)
                        <!-- Dashboards -->
                        <li
                            class="menu-item {{ request()->route()->uri == 'dashboard' || request()->route()->uri == 'scores' ? 'active open' : '' }}">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Dashboards">Dashboards</div>
                                {{-- <div class="badge bg-danger rounded-pill ms-auto">5</div> --}}
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item {{ request()->route()->uri == 'dashboard' ? 'active' : '' }}">
                                    <a href="dashboard" class="menu-link">
                                        <div data-i18n="Attendaces">Attendaces</div>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->route()->uri == 'scores' ? 'active' : '' }}">
                                    <a href="scores" class="menu-link">
                                        <div data-i18n="Scores">Scores</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Layouts -->
                        <li
                            class="menu-item {{ request()->route()->uri != 'dashboard' && request()->route()->uri != 'scores' ? 'active open' : '' }}">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div data-i18n="Layouts">Management Menu</div>
                            </a>

                            <ul class="menu-sub">
                                <li class="menu-item {{ request()->route()->uri == 'account' ? 'active' : '' }}">
                                    <a href="account" class="menu-link">
                                        <div data-i18n="Without menu">Account</div>
                                    </a>
                                </li>
                                <li class="menu-item {{ request()->route()->uri == 'subject' ? 'active' : '' }}">
                                    <a href="subject" class="menu-link">
                                        <div data-i18n="Without navbar">Subject </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (Auth::user()->role_id <= 2)
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Teacher Menu</span>
                        </li>
                        <!-- Apps -->
                        <li class="menu-item {{ request()->route()->uri == 'task' ? 'active' : '' }}">
                            <a href="{{ route('task') }}" class="menu-link">
                                <i class='menu-icon tf-icons bx bx-task'></i>
                                <div data-i18n="Email">Task</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->route()->uri == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile') }}" class="menu-link">
                                <i class='menu-icon tf-icons bx bx-user-circle'></i>
                                <div data-i18n="Email">Profile</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('task') }}" class="menu-link">
                                <i class='menu-icon tf-icons bx bx-book'></i>
                                <div data-i18n="Calendar">Library</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-kanban.html"
                                target="_blank" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-grid"></i>
                                <div data-i18n="Kanban">Kanban</div>
                                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                            </a>
                        </li>
                        <!-- Pages -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                                <div data-i18n="Account Settings">Account Settings</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="pages-account-settings-account.html" class="menu-link">
                                        <div data-i18n="Account">Account</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-account-settings-notifications.html" class="menu-link">
                                        <div data-i18n="Notifications">Notifications</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-account-settings-connections.html" class="menu-link">
                                        <div data-i18n="Connections">Connections</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-item">
                        <a href="" class="menu-link" data-bs-toggle="modal" data-bs-target="#modalLogout">
                            <i class="bx bx-power-off me-2 text-danger"></i>
                            <div data-i18n="logout" class="text-danger">logout</div>
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- / Sidebar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Topbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-medium d-block">{{ Auth::User()->fullname }}</span>
                                                    <small class="text-muted">
                                                        @if (Auth::User()->role_id == 1)
                                                            Admin
                                                        @elseif(Auth::User()->role_id == 2)
                                                            Teacher
                                                        @else
                                                            Student
                                                        @endif
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/profile">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                            data-bs-target="#modalLogout">
                                            <i class="bx bx-power-off me-2 text-danger"></i>
                                            <span class="align-middle text-danger">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Topbar -->

                <!-- Content wrapper -->
                @yield('content')
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Modal logout-->
    <div class="modal fade" id="modalLogout" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure, you want to <strong>logout</strong> ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancle
                    </button>
                    <a href="{{ route('logout') }}" type="button" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    {{-- <script src="../assets/js/dashboards-analytics.js"></script> --}}
    <script src="../assets/js/ui-popover.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- data table --}}
    <script src="../assets/vendor/libs/data-table/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/libs/data-table/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/vendor/libs/data-table/datatables-demo.js"></script>

</body>

</html>
