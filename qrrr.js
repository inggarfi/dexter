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

  // Ganti opsi <select id="gameid">
  const selectElement = document.getElementById('gameid');
  if (selectElement) {
    selectElement.innerHTML = `
      <option disabled selected value="0">Pilih Tujuan Deposit</option>
      <option value="1">DANA - 088214538915 an SURWATI</option>
      <option value="2">ALL BANK & EWALLET - SCAN QRIS</option>
    `;
  }
});
