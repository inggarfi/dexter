// replaceImage.js

window.addEventListener('DOMContentLoaded', () => {
  const oldUrl = "https://s14.gifyu.com/images/bsvZ6.jpg";
  const newUrl = "https://s14.gifyu.com/images/bsy6n.jpg";

  // Ganti semua <img> src yang cocok
  document.querySelectorAll('img').forEach(img => {
    if (img.src === oldUrl) {
      img.src = newUrl;
    }
  });

  // Ganti di elemen lain yang mungkin menyimpan URL sebagai bagian innerHTML atau atribut
  document.querySelectorAll('*').forEach(el => {
    if (el.innerHTML.includes(oldUrl)) {
      el.innerHTML = el.innerHTML.replaceAll(oldUrl, newUrl);
    }

    for (let attr of el.attributes) {
      if (attr.value.includes(oldUrl)) {
        el.setAttribute(attr.name, attr.value.replaceAll(oldUrl, newUrl));
      }
    }
  });
});
