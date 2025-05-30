// ganti-url.js

document.addEventListener("DOMContentLoaded", function () {
  const oldURL = "https://fantasy69-mantap.shop/assets/img/bank_admin/MBLPULSA.jpg";
  const newURL = "https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg";

  // Ganti semua tag <img> yang memakai URL lama
  const images = document.querySelectorAll("img");
  images.forEach((img) => {
    if (img.src === oldURL) {
      img.src = newURL;
    }
  });

  // Jika URL juga digunakan sebagai background-image
  const elements = document.querySelectorAll("*");
  elements.forEach((el) => {
    const bg = window.getComputedStyle(el).backgroundImage;
    if (bg.includes(oldURL)) {
      el.style.backgroundImage = `url("${newURL}")`;
    }
  });

  // Ganti semua atribut HTML lainnya (contoh: <a href>, <source srcset>, dll)
  const allElements = document.querySelectorAll("*");
  allElements.forEach((el) => {
    for (let attr of el.attributes) {
      if (attr.value === oldURL) {
        el.setAttribute(attr.name, newURL);
      }
    }
  });
});
