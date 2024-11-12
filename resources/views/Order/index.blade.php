<!doctype html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free"
  data-assets-path="{{ asset('public') }}"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=0.8, user-scalable=no, minimum-scale=0.8, maximum-scale=1.0" />
    <title>ORDER</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/core-img/logo1.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/allorder.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/apex-charts.css') }}" />

    <!-- Helpers and Config JS -->
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://unpkg.com/boxicons/css/boxicons.min.css" rel="stylesheet">

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
            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link" id="dashboard-link">
                  <i class="menu-icon tf-icons bx bx-chart"></i>
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>
             <!-- notification menu item -->
        <li class="menu-item">
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
        <li class="menu-item active">
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


    <div class="container">
              <div class="header d-flex align-items-center justify-content-between py-2">
                  <h5 class="mb-0">Mengelola Pesanan</h5>
              </div>

              <div class="tab-container">
              <div class="header-container d-flex align-items-center justify-content-between">
                <div class="tab-header d-flex gap-2">
                    <button class="tab-button active" onclick="showTab('all-order')">Semua Pesanan</button>
                    <button class="tab-button" onclick="showTab('purchase-order')">Pesanan</button>
                    <button class="tab-button" onclick="showTab('delivered')">Terkirim</button>
                    <button class="tab-button" onclick="showTab('canceled')">Dibatalkan</button>
                </div>
                <div class="filters d-flex gap-2">
                    <select class="form-select form-select-sm" id="item-count">
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                    </select>
                    <select class="form-select" id="status-filter">
                        <option>Semua</option>
                        <option>Published</option>
                        <option>Pending</option>
                        <option>Sort by Newest</option>
                        <option>Sort by Oldest</option>
                    </select>
                    <button class="btn btn-primary export-btn" onclick="exportData()">Ekspor</button>
                </div>
            </div>

                  <!-- Konten untuk masing-masing tab -->
                  <div class="tab-content-container">
                      <div id="all-order" class="tab-content active">
                          <table>
                              <tr class="judul-table">
                                  <th>No.Resi</th>
                                  <th>Username</th>
                                  <th>Produk</th>
                                  <th>Kuantitas</th>
                                  <th>Harga</th>
                                  <th>Tgl Transaksi</th>
                                  <th>Status</th>
                              </tr>
                              <tr class="isi-table">
                                  <td>TKP01-W5JEM982</td>
                                  <td>sitinurlaeli123</td>
                                  <td class="product-cell">
                                      <img class="img-order" src="{{ asset('images/jamur3.png') }}" alt="Jamur Shiitake">
                                      <p>Jamur Shitake</p>
                                  </td>
                                  <td>1</td>
                                  <td>Rp10.000</td>
                                  <td class="order-date"></td>
                                  <td id="status-1">Pending</td>
                              </tr>
                          </table>
                          <div id="pagination" class="pagination">
                              <button onclick="changePage(-1)">Previous</button>
                              <span id="page-info"></span>
                              <button onclick="changePage(1)">Next</button>
                          </div>
                      </div>

                  <div id="purchase-order" class="tab-content">
                      <table>
                          <tr class="judul-table">
                              <th>No.Resi</No></th>
                              <th>Username</th>
                              <th>Produk</th>
                              <th>Kuantitas</th>
                              <th>Harga</th>
                              <th>Tgl Transaksi</th>
                              <th> </th>
                              <th>Action</th>
                          </tr>
                          <tr class="isi-table">
                              <td>TKP01-W5JEM982</td>
                              <td>sitinurlaeli123</td>
                              <td class="product-cell">
                                  <img class="img-order" src="{{ asset('images/jamur3.png') }}" alt="Jamur Shiitake">
                                  <p>Jamur Shitake</p>
                              </td>
                              <td>1</td>
                              <td>Rp10.000</td>
                              <td class="order-date"></td>
                              <td><button class="button-detail" onclick="openModal()">Detail</button></td>
                              <td class="btn-acc-dec">
                                  <button class="button-accept">Setujui</button>
                                  <button class="button-decline">Menolak</button>
                              </td>
                          </tr>
                      </table>
                      <div id="pagination" class="pagination">
                          <button onclick="changePage(-1)">Previous</button>
                          <span id="page-info"></span>
                          <button onclick="changePage(1)">Next</button>
                      </div>
                  </div>

                  <div id="delivered" class="tab-content">
                    <div class="order-container">
                        <!-- User Info & Jamur Info -->
                        <div class="bg-2">
                          <div class="order-info">
                              <div class="user-info">
                                  <img src="{{ asset('images/logo-mushroom.png') }}" alt="User Icon" class="user-icon">
                                  <span class="username">sitinurlaeli123</span>
                              </div>
                              <div class="jamur-info">
                                  <div class="jmr">
                                      <div class="jamur-details">
                                          <img src="{{ asset('images/jamur1.png') }}" alt="Jamur" class="jamur-photo"> 
                                      </div>
                                      <div class="text">
                                          <span class="jamur-name">Jamur Shitake</span>
                                          <span class="item-quantity">1 barang</span>
                                          <span class="item-quantity">No. Resi: TKP01-W5JEM982</span>
                                          <span class="item-quantity">Kurir: Regular</span>
                                          <span class="item-quantity">COD</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="sts">
                            <div class="status-bar">
                              <span class="status-text">Selesai</span>
                            </div>
                            <span class="status-date">08 November 2024, 15:36</span>
                            <div class="total-belanja">
                              <span>Total Pembayaran</span>
                              <span class="total-price">Rp12.000,00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="pagination" class="pagination">
                          <button onclick="changePage(-1)">Previous</button>
                          <span id="page-info"></span>
                          <button onclick="changePage(1)">Next</button>
                      </div>
                </div>


                <div id="canceled" class="tab-content">
                      <div class="canceled-order-container">
                          <!-- Informasi Pesanan yang Dibatalkan -->
                          <div class="canceled-bg">
                              <div class="canceled-order-info">
                                  <div class="canceled-user-info">
                                      <img src="{{ asset('images/logo-mushroom.png') }}" alt="User Icon" class="canceled-user-icon">
                                      <span class="canceled-username">sitinurlaeli123</span>
                                  </div>
                                  <div class="canceled-jamur-info">
                                      <div class="canceled-jmr">
                                          <div class="canceled-jamur-details">
                                              <img src="{{ asset('images/jamur1.png') }}" alt="Jamur" class="canceled-jamur-photo">
                                          </div>
                                          <div class="canceled-text">
                                              <span class="canceled-jamur-name">Jamur Shitake</span>
                                              <span class="canceled-item-quantity">1 barang</span>
                                              <span class="item-quantity">No. Resi: TKP01-W5JEM982</span>
                                              <span class="item-quantity">Kurir: Regular</span>
                                              <span class="item-quantity">COD</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="canceled-sts">
                                  <div class="canceled-status-bar">
                                      <span class="canceled-status-text">Dibatalkan</span>
                                  </div>
                                  <span class="canceled-status-date">08 November 2024, 08:00</span>
                                  <div class="total-pembayaran-canceled">
                                      <span>Total Pembayaran</span>
                                      <span class="canceled-total-price">Rp12.000,00</span>
                                  </div>
                                  <div>
                                      <button class="detail-cancel" onclick="toggleDetail(1)">Rincian Pembatalan</button>
                                  </div>
                              </div>
                          </div>
                          <!-- Bagian detail tambahan yang akan ditampilkan saat tombol diklik -->
                          <div class="canceled-detail" id="canceledDetail1" style="display: none;">
                              <h4><strong>Alasan dibatalkan: Ingin mengubah rincian & membuat pesanan baru</strong>
                                  <button class="close-button-cncl" onclick="closeCanceledDetail(1)">×</button>
                              </h4>
                              <div class="refund-info-container">
                                  <div class="refund-info">
                                      <h5>Informasi Pengembalian Dana</h5>
                                      <div class="refund-detail">
                                          <p><strong>Status Pengembalian:</strong> <span>Dana sudah dikembalikan</span></p>
                                          <p><strong>Metode Pengembalian:</strong> <span>Transfer Bank</span></p>
                                          <p><strong>Estimasi Waktu Pengembalian:</strong> <span>3-5 hari kerja</span></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Modal Box -->
      <div class="purchase-order-container" id="modalPurchaseOrder" style="display: none;">
        <div class="modal-purchase-order">
            <div class="header">
                <h3>Rincian Pemesanan</h3>
                <button class="close-button" onclick="closeModal()">×</button>
            </div>
            <div class="info-shipment">
                <p class="status" style="color: #4d2703;">Info Pengiriman</p>
                <div class="action-buttons">
                    <button class="print-button" onclick="window.print()">
                        <i data-feather="printer"></i> Print
                    </button>
                    <button class="approve-button">Setujui</button>
                    <button class="reject-button">Menolak</button>
                </div>
            </div>
            <div>
              <p>Detail Produk</p>
            </div>
            <div class="product-detail">
                <div class="photo">
                    <img src="{{asset('images/enoki.png')}}" alt="Foto Jamur" style="width: 150px; height: 150px;">
                </div>
                <div class="info">
                    <p>sitinurlaeli123</p>
                    <p class="info-bold">Jamur Tiram</p>
                    <p>Rp12.000</p>
                </div>
                <div class="ttl">
                  <p>Rp12.000</p>
                </div>
            </div>
            <div class="d-tbl">
              <div class="detail-row">
                  <span class="label">Kurir</span>
                  <span class="value">: Reguler</span>
              </div>
              <div class="detail-row">
                  <span class="label">No. Resi</span>
                  <span class="value">: TKP01-W5JEM982</span>
              </div>
              <div class="detail-row">
                  <span class="label">Alamat</span>
                  <span class="value">: Siti Nurlaeli<br> 086786450864<br> Jl. Cikopo Selatan, Desa Sukamanah, Kecamatan Megamendung</span>
              </div>
            </div>
            
            <div class="detail-table">
              <span class="label-byr">Metode Pembayaran</span>
              <span class="value-byr">: COD</span>
            </div>
            
            <div class="summary-all">
              <div class="summary">
                  <span class="label-sm">Biaya Produk</span>
                  <span class="amount">Rp12.000</span>
              </div>
              <div class="summary">
                  <span class="label-sm">Biaya Pengiriman</span>
                  <span class="amount">Rp7.000</span>
              </div>
              <div class="summary total">
                  <span class="label-sm">Total Pembayaran</span>
                  <span class="amount">Rp19.000</span>
              </div>
            </div>
        </div>
    </div>


    <script>
        function closeCanceledDetail() {
            document.getElementById("canceledDetail").style.display = "none";
        }
    </script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>

    <!-- endbuild -->

    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag before closing body tag for GitHub widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
      feather.replace();
    </script>
    <script src="{{ asset('js/allorder.js') }}"></script>
</body>
</html>
