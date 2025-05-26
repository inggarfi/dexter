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

  // Ganti opsi <select id="metode"> Tujuan Deposit
  const selectElement = document.getElementById('metode');
  if (selectElement) {
    selectElement.innerHTML = `
      <option disabled selected value="0">Pilih Tujuan Deposit</option>
      <option value="1">DANA - 088214538915 an SURWATI</option>
      <option value="2">ALL BANK & EWALLET - SCAN QRIS</option>
    `;

    // Tambah event listener untuk tampilkan QR
    selectElement.addEventListener('change', (e) => {
      let qrContainer = document.getElementById('qr-image-container');

      // Kalau belum ada, buat elemen <div> penampung
      if (!qrContainer) {
        qrContainer = document.createElement('div');
        qrContainer.id = 'qr-image-container';
        qrContainer.style = "text-align:center; margin: 10px 0;";
        selectElement.closest('.flex-wrap').appendChild(qrContainer);
      }

      // Tampilkan atau sembunyikan QR berdasarkan pilihan
      if (e.target.value === "2") {
        qrContainer.innerHTML = `<img src="${newUrl}" alt="QRIS" style="max-width:100%; height:auto;">`;
      } else {
        qrContainer.innerHTML = ''; // kosongkan
      }
    });
  }
});