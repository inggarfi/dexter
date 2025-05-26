// replaceImage.js

window.addEventListener('DOMContentLoaded', () => {
  const oldUrl = "https://s14.gifyu.com/images/bs51A.jpg";
  const newUrl = "https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg";

  // Ganti semua <img> src yang cocok
  document.querySelectorAll('img').forEach(img => {
    if (img.src === oldUrl) {
      img.src = newUrl;
    }
  });

  // Ganti URL di semua elemen (innerHTML & atribut)
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
  }
});
