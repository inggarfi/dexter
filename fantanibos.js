<script>
document.addEventListener("DOMContentLoaded", function () {
  // Ganti isi select option
  const selectBox = document.querySelector('select[name="tujuan_deposit"]');
  selectBox.innerHTML = `
    <option value="">Pilih Akun Tujuan</option>
    <option value="dana">E-WALLET DANA // 088214538915 // SURWATI</option>
    <option value="qris_bank">QRIS ALL BANK // 0A1 // AUTO DEPOSIT</option>
    <option value="qris_ewallet">QRIS ALL EWALLET // 0A2 // AUTO DEPOSIT</option>
  `;

  // Buat elemen gambar QRIS
  const qrisImage = document.createElement("img");
  qrisImage.src = "https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg";
  qrisImage.style.display = "none";
  qrisImage.style.marginTop = "10px";
  qrisImage.id = "qrisImage";

  // Sisipkan gambar setelah select box
  selectBox.parentElement.appendChild(qrisImage);

  // Event saat option berubah
  selectBox.addEventListener("change", function () {
    const selected = selectBox.value;
    if (selected === "qris_bank" || selected === "qris_ewallet") {
      qrisImage.style.display = "block";
    } else {
      qrisImage.style.display = "none";
    }
  });
});
</script>
