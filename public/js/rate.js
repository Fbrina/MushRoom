// Fungsi untuk menampilkan rating bintang
document.addEventListener("DOMContentLoaded", function () {
  const ratingElements = document.querySelectorAll(".rating-stars");
  ratingElements.forEach((element) => {
    const rating = parseFloat(element.getAttribute("data-rating"));
    let starHtml = "";
    for (let i = 1; i <= 5; i++) {
      if (i <= rating) {
        starHtml += "★";
      } else if (i - rating < 1) {
        starHtml += "☆"; // Separuh bintang, tergantung dari kebutuhan Anda
      } else {
        starHtml += "☆";
      }
    }
    element.innerHTML = starHtml;
  });
});
