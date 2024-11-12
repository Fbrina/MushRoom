// Mendapatkan elemen modal dan tombol close
const modal = document.getElementById("orderDetailModal");
const closeBtn = document.querySelector(".close-btn");

// Fungsi untuk membuka modal
function openModal() {
  modal.style.display = "flex";
}

// Fungsi untuk menutup modal
function closeModal() {
  modal.style.display = "none";
}

// Menutup modal ketika tombol close diklik
closeBtn.addEventListener("click", closeModal);

// Menutup modal ketika mengklik area di luar modal
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    closeModal();
  }
});
