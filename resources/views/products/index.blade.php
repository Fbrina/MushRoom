<!doctype html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('public') }}"
  data-template="vertical-menu-template-free"
  data-style="light">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=0.8, user-scalable=no, minimum-scale=0.8, maximum-scale=1.0" />
    <title>PRODUCT</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/core-img/logo1.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/product.css') }}"/>


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
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
           <li class="menu-item active">
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

    
    <div class="container-fluid flex-grow-1 container-p-y">
    <div class="container bg-white p-4 mb-4" style="border-radius: 8px;">
        <div class="product-title-add">
            <div>
                <h3 class="product-title">MY PRODUCT</h3>
            </div>
            <button class="btn-add" onclick="openEditModal()">
                <i data-feather="plus"></i> Add
            </button>
        </div>

        <!-- Display products -->
<!-- Display Products -->
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 mb-3" id="product-{{ $product->id }}">
            <div class="card">
                <img src="{{ asset('storage/' . $product->file_path) }}" alt="{{ $product->product_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">{{ $product->category }}</p>
                    <p class="card-text">{{ $product->stock }}</p>
                    <p class="card-text">Rp.{{ number_format($product->price, 0, ',', '.') }}</p>
                    <button class="btn btn-warning" onclick="openEditForm({{ $product->id }})">Edit</button>
                    <button class="btn btn-danger" onclick="confirmDelete({{ $product->id }})">Delete</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
        </div>
    </div>
</div>

<!-- Modal for Edit Product -->
<div id="editModal" class="modal" style="display: none;">
    <div class="modal-card">
        <div class="modal-title-img">
            <div class="title">
                <h3 class="modal-title">Edit Product</h3>
            </div>
        </div>
        <div class="modal-text">
            <!-- Edit Product Form -->
            <form id="editProductForm" action="{{ route('products.update', ':id') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="edit_product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="edit_product_name" name="product_name" required>
                </div>
                <div class="mb-3">
                    <label for="edit_category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="edit_category" name="category" required>
                </div>
                <div class="mb-3">
                    <label for="edit_price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="edit_price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="edit_stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="edit_stock" name="stock" required>
                </div>
                <div class="mb-3">
                    <label for="edit_description" class="form-label">Description</label>
                    <textarea id="edit_description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="edit_file_path" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="edit_file_path" name="file_path">
                    <img id="edit_image_preview" style="display: none; margin-top: 10px; max-width: 100%;" />
                    <p>Current image:</p>
                    <img id="current_image" src="" style="max-width: 100px; display: block;" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" onclick="closeEditModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal for Add Product -->
<div id="myModal" class="modal" style="display: none;">
    <div class="modal-card">
        <div class="modal-title-img">
            <div class="title">
                <h3 class="modal-title">Add Product</h3>
            </div>
            <!-- <div class="file-input-container">
                <label for="file-upload" class="file-upload-label">
                    <i data-feather="arrow-left"></i> Choose File
                </label>
                <input type="file" id="file-upload" class="file-upload-input" name="file_path" required onchange="previewImage(event)">
                <img id="preview" style="display:none; max-width: 100%; margin-top: 10px;">
                
            </div> -->
        </div>
        <div class="modal-text">
        <form id="addProductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" required>
    </div>
    <div class="mb-3">
        <label for="product_category" class="form-label">Category</label>
        <input type="text" class="form-control" id="product_category" name="category" required>
    </div>
    <div class="mb-3">
        <label for="product_price" class="form-label">Price</label>
        <input type="number" class="form-control" id="product_price" name="price" required>
    </div>
    <div class="mb-3">
        <label for="product_stock" class="form-label">Stock</label>
        <input type="number" class="form-control" id="product_stock" name="stock" required>
    </div>
    <div class="mb-3">
        <label for="product_description" class="form-label">Description</label>
        <textarea id="product_description" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="file_upload" class="form-label">Product Image</label>
        <input type="file" id="file-upload" name="file_path" class="form-control" required>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-secondary" onclick="closeAddModal()">Cancel</button>
    </div>
</form>

        </div>
    </div>
</div>


<!-- Success Modal -->
<div id="successModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Success</h5>
        </div>
        <div class="modal-body">
            <p>Product added successfully!</p>
        </div>
    </div>
</div>


<!-- Error Modal -->
<div id="errorModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Error</h5>
        </div>
        <div class="modal-body">
            @if (session('error'))
                <p>{{ session('error') }}</p>
            @endif
        </div>
    </div>
</div>





<!-- Single Confirmation Modal -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <button class="btn-close" onclick="closeDeleteModal()">×</button>
        <h3>Are you sure you want to delete this product?</h3>
        <div class="modal-footer">
            <button id="confirmDeleteButton" class="btn btn-danger">Yes</button>
            <button class="btn btn-secondary" onclick="closeDeleteModal()">No</button>
        </div>
    </div>
</div>




<script>
// Open edit form and fill it with the selected product's data
function openEditForm(productId) {
    // Fetch product data based on the productId (via AJAX)
    fetch(`/products/${productId}/edit`)
        .then(response => response.json())
        .then(product => {
            // Populate form fields with the product data
            document.getElementById('edit_product_name').value = product.product_name;
            document.getElementById('edit_category').value = product.category;
            document.getElementById('edit_price').value = product.price;
            document.getElementById('edit_stock').value = product.stock;
            document.getElementById('edit_description').value = product.description;

            // Update the form's action URL to include the product's ID
            document.getElementById('editProductForm').action = `/products/${product.id}`;

            // Set current image preview
            const currentImage = document.getElementById('current_image');
            currentImage.src = '/storage/' + product.file_path;

            // Show the modal
            document.getElementById('editModal').style.display = 'block';
        })
        .catch(error => console.error('Error:', error));
}

// Preview the selected image
document.getElementById('edit_file_path').addEventListener('change', function(event) {
    const preview = document.getElementById('edit_image_preview');
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.style.display = 'block';
            preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
});

// Close the edit modal
function closeEditModal() {
    document.getElementById('editModal').style.display = 'none';
}








// add produk

document.addEventListener("DOMContentLoaded", function() {
    // Cek jika ada pesan sukses atau error di session
    var successMessage = @json(session('success'));
    var errorMessage = @json(session('error'));

    // Jika ada pesan sukses, tampilkan modal sukses
    if (successMessage) {
        var successModal = document.getElementById("successModal");
        successModal.style.display = "block";
        
        // Sembunyikan modal setelah 3 detik
        setTimeout(function() {
            successModal.style.display = "none";
        }, 3000);
    }

    // Jika ada pesan error, tampilkan modal error
    if (errorMessage) {
        var errorModal = document.getElementById("errorModal");
        errorModal.style.display = "block";
        
        // Sembunyikan modal setelah 3 detik
        setTimeout(function() {
            errorModal.style.display = "none";
        }, 3000);
    }
});




// image
function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

       // Function to open and close the add product modal
   function openAddModal() {
       document.getElementById('myModal').style.display = 'block';
   }

    function closeAddModal() {
        document.getElementById('myModal').style.display = 'none';
        document.getElementById('addProductForm').reset();
        document.getElementById('preview').style.display = 'none';
    }






//delete
   let productIdToDelete = null;

function confirmDelete(productId) {
    // Set the product ID to delete
    productIdToDelete = productId;
    // Show the delete modal
    document.getElementById('deleteModal').style.display = 'block';
}

function closeDeleteModal() {
    // Close the modal and clear the productIdToDelete
    document.getElementById('deleteModal').style.display = 'none';
    productIdToDelete = null;
}

document.getElementById('confirmDeleteButton').addEventListener('click', function () {
    if (productIdToDelete) {
        deleteProduct(productIdToDelete);
        closeDeleteModal();
    }
});

function deleteProduct(productId) {
    const token = document.querySelector('meta[name="csrf-token"]').content;

    fetch(`/products/${productId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token,
            'Content-Type': 'application/json',
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Target and remove the product element by its unique ID
            const productElement = document.querySelector(`#product-${productId}`);
            if (productElement) {
                productElement.remove();
            }
            closeDeleteModal();
            location.reload();
        } else {
            alert('Error: ' + data.error);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}




</script>






<!-- Modal Product Add -->




 <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- content -->

    <!-- / Layout page -->
    </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <script>
      // Fungsi untuk menampilkan rating bintang
      document.addEventListener('DOMContentLoaded', function() {
            const ratingElements = document.querySelectorAll('.rating-stars');
            ratingElements.forEach(element => {
                const rating = parseFloat(element.getAttribute('data-rating'));
                let starHtml = '';
                for (let i = 1; i <= 5; i++) {
                    if (i <= rating) {
                        starHtml += '★';
                    } else if (i - rating < 1) {
                        starHtml += '☆'; // Separuh bintang, tergantung dari kebutuhan Anda
                    } else {
                        starHtml += '☆';
                    }
                }
                element.innerHTML = starHtml;
            });
        });
    </script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('libs/popper/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>

    <!-- endbuild -->


    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('css/pages/product.css') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>



    <script>
      feather.replace();
    </script>
  </body>
</html>
