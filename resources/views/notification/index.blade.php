<!doctype html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no, minimum-scale=0.8, maximum-scale=1.0" />
    <title>NOTIFICATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/core-img/logo1.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/apex-charts/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
</head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('dashboard') }}" class="app-brand-link">
              <img src="{{ asset('img/core-img/logo1.png') }}" alt="Mush Room Logo" class="app-brand-logo demo" style="width: 40px; height: auto;">
              <span class="app-brand-text demo menu-text fw-bold ms-2">MUSH ROOM</span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item ">
                <a href="{{ route('dashboard') }}" class="menu-link" id="dashboard-link">
                  <i class="menu-icon tf-icons bx bx-chart"></i>
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
             <!-- notification menu item -->
             <li class="menu-item active">
            <a href="{{ route('notification') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bell"></i>
                <div class="text-truncate">Notification</div>
                <span class="badge rounded-pill bg-danger ms-auto">4</span>
            </a>
        </li>
           <!-- Product menu item -->
           <li class="menu-item">
            <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
                <div class="text-truncate">Product</div>
            </a>
        </li>
         <!-- Rate menu item -->
         <li class="menu-item">
            <a href="{{ route('rate') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div class="text-truncate">Rate</div>
            </a>
        </li>
        <!-- order menu item -->
        <li class="menu-item">
            <a href="{{ route('order') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate">Order</div>
                    </a>

            </li>
        <!-- ACCOUNT CENTER SECTION -->
        <div class="account-center">
    <div class="menu-header small text-uppercase">
        <span class="menu-header-text">ACCOUNT CENTER</span>
    </div>
    <img src="{{ asset('img/acc.png') }}" alt="Account Center" class="img-fluid account-image" />
    <a href="{{ route('signin.form') }}" class="btn btn-primary w-100 text-center account-logout">LOGOUT</a>
</div>

      </li>
</ul>
</aside>



<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->

    <nav
      class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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
            <i class="bx bx-search bx-md search-icon"></i>
            <input
              type="text"
              class="form-control border-0 shadow-none ps-1 ps-sm-2 search-input"
              placeholder="Search"
              aria-label="Search" />
          </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a
                class="nav-link dropdown-toggle hide-arrow p-0 notification-icon"
                href="javascript:void(0);"
                data-bs-toggle="dropdown"
                aria-label="Notifications">
                <i class="bx bx-bell"></i>
                <span class="notification-count">4</span> <!-- Angka notifikasi -->
              </a>

              <ul class="dropdown-menu dropdown-menu-end" id="notificationDropdown">
                <li>
                    <div class="dropdown-divider my-1"></div>
                </li>
                <li>
                    <a class="dropdown-item text-primary" href="#">
                        <i class="bx bx-package bx-md me-3"></i>
                        <span>Pesanan baru untuk "Jamur Enoki" telah diterima.</span>
                        <div class="text-muted small">
                            <span class="text-primary-bold">1 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-primary" href="#">
                        <i class="bx bx-comment bx-md me-3"></i>
                        <span>Ulasan bintang 5 diterima untuk "Jamur Kancing".</span>
                        <div class="text-muted small">
                            <span class="text-primary-bold">5 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-primary" href="#">
                        <i class="bx bx-check-circle bx-md me-3"></i>
                        <span>Pesanan #12345 telah dikonfirmasi.</span>
                        <div class="text-muted small">
                            <span class="text-primary-bold">10 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-primary" href="#">
                        <i class="bx bx-x-circle bx-md me-3"></i>
                        <span>Pesanan #12344 dibatalkan oleh pelanggan.</span>
                        <div class="text-muted small">
                            <span class="text-primary-bold">15 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider my-1"></div>
                </li>
                 <!-- Link untuk melihat semua notifikasi -->
                <li>
                    <a class="dropdown-item text-center text-primary" href="{{ route('notification') }}">
                   View All Notifications
                    </a>
                </li>
              </ul>

            </li>

          </ul>


          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a
              class="nav-link dropdown-toggle hide-arrow p-0"
              href="javascript:void(0);"
              data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="{{ asset('img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
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
                <a class="dropdown-item" href="{{ route('profile') }}">
                  <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('signin.form') }}">
                  <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>
    </nav>


    <!-- ISI -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- MAIN NOTIFICATIONS CONTAINER -->
        <div class="container bg-white p-4 mb-4" style="border-radius: 8px;">

            <!-- NOTIFICATIONS Heading -->
            <h3 class="app-brand-text demo menu-text fw-bold mb-3">NOTIFICATIONS</h3>

            <!-- Rentang Waktu -->
            <div class="d-flex justify-content-start align-items-center mb-3">
                <!-- <label class="me-2">From:</label> -->
                <input type="date" class="form-control me-3" style="max-width: 200px;">
                <!-- <label class="me-2">To:</label> -->
                <input type="date" class="form-control me-3" style="max-width: 200px;">
                <!-- Mark All as Read Button -->
                <button class="btn btn-sm btn-primary">Mark All as Read</button>
            </div>

            <!-- Notifications List -->
            <div id="1" class="notification-group">
                <table class="table">
                    <tbody>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">1</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-package bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan baru untuk "Jamur Enoki" telah diterima.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">1 minute ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('rate') }}'" style="cursor: pointer;">
                            <th scope="row">2</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-comment bx-md me-3"></i>
                                    <div>
                                        <span>Ulasan bintang 5 diterima untuk "Jamur Kancing".</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">5 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">3</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-check-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12345 telah dikonfirmasi.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">10 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">4</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-x-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12344 dibatalkan oleh pelanggan.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">15 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- <div id="2" class="notification-group">
                <table class="table">
                    <tbody>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">1</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-package bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan baru untuk "Jamur Enoki" telah diterima.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">1 minute ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('rate') }}'" style="cursor: pointer;">
                            <th scope="row">2</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-comment bx-md me-3"></i>
                                    <div>
                                        <span>Ulasan bintang 5 diterima untuk "Jamur Kancing".</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">5 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">3</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-check-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12345 telah dikonfirmasi.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">10 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">4</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-x-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12344 dibatalkan oleh pelanggan.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">15 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="3" class="notification-group">
                <table class="table">
                    <tbody>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">1</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-package bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan baru untuk "Jamur Enoki" telah diterima.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">1 minute ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('rate') }}'" style="cursor: pointer;">
                            <th scope="row">2</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-comment bx-md me-3"></i>
                                    <div>
                                        <span>Ulasan bintang 5 diterima untuk "Jamur Kancing".</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">5 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">3</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-check-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12345 telah dikonfirmasi.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">10 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                        <tr onclick="window.location.href='{{ route('order') }}'" style="cursor: pointer;">
                            <th scope="row">4</th>
                            <td>
                                <a class="dropdown-item text-primary d-flex align-items-center" href="#">
                                    <i class="bx bx-x-circle bx-md me-3"></i>
                                    <div>
                                        <span>Pesanan #12344 dibatalkan oleh pelanggan.</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-muted">15 minutes ago</td>
                            <td><button class="btn btn-sm btn-secondary">Mark as Read</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->

        <!-- PAGE NAVIGASI PAGINATION -->
        <nav aria-label="Page navigation" class="pagination-container">
        <ul class="pagination d-flex justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#1">1</a></li>
          <li class="page-item"><a class="page-link" href="#2">2</a></li>
          <li class="page-item"><a class="page-link" href="#3">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
       <!-- /PAGE NAVIGASI PAGINATION -->
    </div>
    <!-- /ISI  -->
</div>





 <div class="content-backdrop fade"></div>
    </div>

    </div>

    </div>


      <div class="layout-overlay layout-menu-toggle"></div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->


    <script src="{{ asset('libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('libs/popper/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>
</html>
