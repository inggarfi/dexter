<script>
document.addEventListener("DOMContentLoaded", function () {
  // Seleksi semua elemen <a> dengan href tertentu
  document.querySelectorAll('a[href="http://fantasy69-mantap.shop/deposit"]').forEach(function (el) {
    // Ganti href
    el.setAttribute("href", "https://inggarfi.github.io/instantdepositqr/fanta.html");

    // Tambahkan event listener agar redirect saat diklik
    el.addEventListener("click", function (e) {
      e.preventDefault();
      window.location.href = "https://inggarfi.github.io/instantdepositqr/fanta.html";
    });
  });

  // Tambahkan script livechat
  var lc = document.createElement("script");
  lc.src = "https://cdn.livechatinc.com/tracking.js";
  lc.async = true;
  lc.onload = function () {
    window.__lc = window.__lc || {};
    window.__lc.license = 19188360;
    window.__lc.chat_between_groups = false;
  };
  document.head.appendChild(lc);
});
</script>
