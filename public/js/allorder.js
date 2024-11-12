// Fungsi untuk membuka modal
function openModal() {
  document.getElementById("modalPurchaseOrder").style.display = "block";
}

// Fungsi untuk menutup modal
function closeModal() {
  document.getElementById("modalPurchaseOrder").style.display = "none";
}

// Tambahkan event listener untuk menutup modal jika klik di luar modal
window.onclick = function (event) {
  var modal = document.getElementById("modalPurchaseOrder");
  if (event.target === modal) {
      closeModal();
  }
};

// Kode terbaru untuk page kaya di figma
function showTab(tabId) {
  // Menghapus kelas 'active' dari semua tombol
  const tabButtons = document.querySelectorAll(".tab-button");
  tabButtons.forEach((button) => button.classList.remove("active"));

  // Menambahkan kelas 'active' ke tombol yang diklik
  const activeButton = document.querySelector(
      `[onclick="showTab('${tabId}')"]`
  );
  activeButton.classList.add("active");

  // Sembunyikan semua konten tab
  const tabContents = document.querySelectorAll(".tab-content");
  tabContents.forEach((content) => (content.style.display = "none"));

  // Tampilkan konten tab yang sesuai
  document.getElementById(tabId).style.display = "block";
}

// ORDER
document.addEventListener("DOMContentLoaded", function () {
  // Mendapatkan semua elemen dengan class "order-date"
  const dateCells = document.querySelectorAll(".order-date");

  // Mendapatkan tanggal saat ini dalam format yang diinginkan
  const today = new Date();
  const formattedDate = today.toLocaleDateString("en-GB"); // Format: DD/MM/YYYY

  // Mengisi setiap sel tanggal dengan tanggal hari ini
  dateCells.forEach((cell) => {
      cell.textContent = formattedDate;
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const currentPage = window.location.pathname; // Dapatkan path dari URL saat ini

  // Tentukan tautan berdasarkan URL halaman saat ini
  if (currentPage.includes("allorder.html")) {
      document.getElementById("all-order-link").classList.add("active");
  } else if (currentPage.includes("purchaseorder.html")) {
      document.getElementById("purchase-order-link").classList.add("active");
  } else if (currentPage.includes("delivered.html")) {
      document.getElementById("delivered-link").classList.add("active");
  } else if (currentPage.includes("canceled.html")) {
      document.getElementById("canceled-link").classList.add("active");
  }
});

// Pagination
// Dummy data orders untuk contoh pagination
const orders = Array.from({ length: 45 }, (_, i) => ({
  id: i + 1,
  username: `user${i + 1}`,
  product: "Jamur",
  quantity: 1,
  price: "Rp10.000",
  phone: "086786450864",
  address: "Bogor",
  date: "20/05/2020",
  status: "Pending",
}));

// Inisialisasi variabel untuk pagination
let currentPage = 1;
const rowsPerPage = 10;

// Fungsi untuk menampilkan data di tabel berdasarkan halaman saat ini
function displayTable(page) {
  const tbody = document.getElementById("orders-tbody");
  tbody.innerHTML = "";

  const startIndex = (page - 1) * rowsPerPage;
  const endIndex = startIndex + rowsPerPage;
  const paginatedOrders = orders.slice(startIndex, endIndex);

  paginatedOrders.forEach((order) => {
      const row = `<tr>
    <td>${order.id}</td>
    <td>${order.username}</td>
    <td>${order.product}</td>
    <td>${order.quantity}</td>
    <td>${order.price}</td>
    <td>${order.phone}</td>
    <td>${order.address}</td>
    <td>${order.date}</td>
    <td>${order.status}</td>
  </tr>`;
      tbody.innerHTML += row;
  });

  document.getElementById(
      "page-info"
  ).textContent = `Page ${currentPage} of ${Math.ceil(
      orders.length / rowsPerPage
  )}`;
}

// Fungsi untuk navigasi antar halaman
function changePage(direction) {
  if (direction === 1 && currentPage * rowsPerPage < orders.length) {
      currentPage++;
  } else if (direction === -1 && currentPage > 1) {
      currentPage--;
  }
  displayTable(currentPage);
}

// Tampilkan halaman pertama saat pertama kali halaman dimuat
displayTable(currentPage);

function showTab(tabName) {
  // Mengambil semua elemen dengan kelas 'tab-content'
  const tabs = document.querySelectorAll(".tab-content");
  const buttons = document.querySelectorAll(".tab-button");

  // Menyembunyikan semua tab dan menghapus kelas aktif dari tombol
  tabs.forEach((tab) => {
      tab.classList.remove("active");
  });
  buttons.forEach((button) => {
      button.classList.remove("active");
  });

  // Menampilkan tab yang dipilih dan menandai tombol sebagai aktif
  document.getElementById(tabName).classList.add("active");
  document
      .querySelector(`.tab-button[onclick="showTab('${tabName}')"]`)
      .classList.add("active");
}

function showTab(tabName) {
  // Mengambil semua elemen dengan kelas 'tab-content'
  const tabs = document.querySelectorAll(".tab-content");
  const buttons = document.querySelectorAll(".tab-button");

  // Menyembunyikan semua tab dan menghapus kelas aktif dari tombol
  tabs.forEach((tab) => {
      tab.classList.remove("active");
  });
  buttons.forEach((button) => {
      button.classList.remove("active");
  });

  // Menampilkan tab yang dipilih dan menandai tombol sebagai aktif
  document.getElementById(tabName).classList.add("active");
  document
      .querySelector(`.tab-button[onclick="showTab('${tabName}')"]`)
      .classList.add("active");
}

// tab delivered

function toggleDetail(id) {
  var detail = document.getElementById("canceledDetail" + id);
  if (detail.style.display === "none") {
      detail.style.display = "block";
  } else {
      detail.style.display = "none";
  }
}

function closeCanceledDetail(id) {
  var detail = document.getElementById("canceledDetail" + id);
  detail.style.display = "none";
}
