// Function to open the Edit modal
function openEditModal() {
  document.getElementById("myModal").style.display = "block";
}

// Function to close the Edit modal
function closeEditModal() {
  document.getElementById("myModal").style.display = "none";
}

// Function to open the Add Product modal
function openAddModal() {
  document.getElementById("myModalAdd").style.display = "block";
}

// Function to close the Add Product modal
function closeAddModal() {
  document.getElementById("myModalAdd").style.display = "none";
}

// Close modal if user clicks outside the modal content
window.onclick = function (event) {
  const editModal = document.getElementById("myModal");
  const addModal = document.getElementById("myModalAdd");

  if (event.target === editModal) {
    closeEditModal();
  } else if (event.target === addModal) {
    closeAddModal();
  }
};
