<!doctype html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/admin/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Reliable Industries - Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/admin/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <!-- Incons fron boxicons.com -->
    <link rel="stylesheet" href="assets/admin/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/admin/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/admin/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/admin/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/admin/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/admin/vendor/js/helpers.js"></script>
    <script src="assets/admin/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="dashboard.php" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bold ms-2 text-primary">Admin</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                            <span class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a>
                    </li>
                    <!-- Company Profile -->
                    <li class="menu-item">
                        <a href="company_profile.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-info-circle"></i>
                            <div class="text-truncate" data-i18n="Company Profile">Company Profile</div>
                        </a>
                    </li>

                    <!-- Enquiry -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div class="text-truncate" data-i18n="Enquiry">Enquiry</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="enquiry_list.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Enquiry List">Enquiry List</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="follow_up.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Follow-Up">Follow-Up</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Product -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div class="text-truncate" data-i18n="Product">Product</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="enquiry_list.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Category Manage">Category Manage</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="follow_up.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Add Product">Add Product</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="follow_up.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Product List">Product List</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Services -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div class="text-truncate" data-i18n="Services">Services</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="enquiry_list.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Add Service">Add Service</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="follow_up.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Service List">Service List</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Support -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Support</span></li>
                    <li class="menu-item">
                        <a href="dashboard.php" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div class="text-truncate" data-i18n="Support">Support</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search bx-md"></i>
                                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="assets/admin/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="assets/admin/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">John Doe</h6>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> <i
                                                class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">